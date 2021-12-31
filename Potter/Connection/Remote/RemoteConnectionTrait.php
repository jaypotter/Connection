<?php

namespace Potter\Connection\Remote;

trait RemoteConnectionTrait
{
    private string $host;
    
    private int $port;

    final public function getHost(): string
    {
        return $this->host;
    }

    final public function getPort(): int
    {
        return $this->port;
    }
    
    final public function setHost(string $host): void
    {
        $this->host = $host;
    }

    final public function setPort(int $port): void
    {
        $this->port = $port;
    }
}