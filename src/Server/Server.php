<?php

namespace IspApi\Server;


class Server implements ServerInterface
{
    const SCHEMA_HTTP = 'http';
    const SCHEMA_HTTPS = 'https';

    /**
     * @var string
     */
    private $schema = self::SCHEMA_HTTPS;

    /**
     * @var string
     */
    private $host = '';

    /**
     * @var string
     */
    private $urlPath = '';
    /**
     * @var int
     */
    private $port = 0;

    /**
     * Server constructor.
     * @param string $host
     * @param int $port
     * @param string $schema
     */
    public function __construct(string $host, int $port = 0, $schema = self::SCHEMA_HTTPS, string $urlPath = '/')
    {
        $this->host = $host;
        if ($port) {
            $this->port = $port;
        }
        if ($urlPath[0] != '/') {
            $urlPath = '/' . $urlPath;
        }
        $this->urlPath = $urlPath;
        $this->schema = $schema;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getUrlPath(): string
    {
        return $this->urlPath;
    }

    /**
     * @return string
     */
    public function getSchema(): string
    {
        return $this->schema;
    }
}