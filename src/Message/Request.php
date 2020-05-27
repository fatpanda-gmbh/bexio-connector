<?php

namespace Fatpanda\BexioConnector\Message;

use Fatpanda\BexioConnector\Container\ContainerInterface;
use Fatpanda\BexioConnector\RequestBody\RequestBodyInterface;
use Fatpanda\BexioConnector\RequestQuery\RequestQueryInterface;
use Fatpanda\BexioConnector\Response\ErrorResponse;
use Fatpanda\BexioConnector\Response\SuccessResponse;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Psr\Log\LoggerInterface;

abstract class Request
{
    const RESPONSE_CONTAINER = '';
    const ROOT_URL = 'https://api.bexio.com';
    const API_VERSION_URL = '/2.0';

    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var string|null
     */
    private $token;

    /**
     * @var LoggerInterface|null
     */
    private $logger;

    /**
     * @var array
     */
    private $pathParameters;

    /**
     * @var RequestBodyInterface|null
     */
    private $body;

    /**
     * @var RequestQueryInterface|null
     */
    private $query;

    /**
     * Constructor
     *
     * @param ClientInterface $client
     * @param string|null $token
     * @param LoggerInterface $logger
     * @param array $pathParameters
     * @param RequestQueryInterface|null $query
     * @param RequestBodyInterface|null $body
     */
    public function __construct(
        ClientInterface $client,
        string $token = null,
        LoggerInterface $logger = null,
        array $pathParameters = [],
        RequestQueryInterface $query = null,
        RequestBodyInterface $body = null
    )
    {
        $this->client = $client;
        $this->token = $token;
        $this->logger = $logger;
        $this->pathParameters = $pathParameters;
        $this->query = $query;
        $this->body = $body;
    }

    /**
     * Get API Token
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Execute request
     *
     * @return Response
     */
    public function execute(): Response
    {
        try {
            $response = $this->client->request(
                $this->getMethod(),
                $this->getUri(),
                $this->getOptions()
            );
        } catch (GuzzleException $e) {
            if ($this->logger) {
                $this->logger->error($e->getMessage());
            }

            return (new ErrorResponse())->setCode($e->getCode())->setMessage($e->getMessage());
        }

        if (!in_array($response->getStatusCode(), [200, 201])) {
            return (new ErrorResponse())
                ->setCode($response->getStatusCode())
                ->setMessage($response->getReasonPhrase())
                ;
        }

        /** @var ContainerInterface $container */
        $container = $this->getSerializer()->deserialize($response->getBody(), static::RESPONSE_CONTAINER, 'json');

        return (new SuccessResponse())->setBody($container);
    }

    /**
     * Get HTTP-method of API request
     *
     * @return string
     *
     */
    protected function getMethod(): string
    {
        return static::API_METHOD;
    }

    /**
     * Get uri of request
     *
     * @return string
     */
    protected function getUri(): string
    {
        $uri = static::ROOT_URL . static::API_VERSION_URL . static::API_PATH;

        foreach ($this->pathParameters as $name => $value) {
            $uri = str_replace("{{$name}}", $value, $uri);
        }

        return $uri;
    }

    /**
     * Get options of request
     *
     * @return array
     */
    protected function getOptions(): array
    {
        return [
            'headers' => $this->getHeaders(),
            'query' => $this->getQuery(),
            'body' => $this->getBodyJson(),
        ];
    }

    /**
     * Get headers of request
     *
     * @return array
     */
    protected function getHeaders(): array
    {
        return [
            'Accept'        => 'application/json',
            'Authorization' => 'Bearer ' . $this->getToken(),
        ];
    }

    /**
     * Returns query parameters as an array
     *
     * @return array
     */
    protected function getQuery(): array
    {
        return $this->query ? $this->query->toArray() : [];
    }

    /**
     * Get content of request
     *
     * @return string
     */
    protected function getBodyJson(): ?string
    {
        return isset($this->body)
            ? $this->getSerializer()->serialize($this->body->getBody(), 'json')
            : null;
    }

    /**
     * Get serializer
     *
     * @return SerializerInterface
     */
    protected function getSerializer(): SerializerInterface
    {
        return SerializerBuilder::create()->build();
    }
}
