<?php

namespace Potter\Connection\Remote;

trait RemoteConnectionTrait
{
    private string $host;

    final public function getHost(): string
    {
        return $this->host;
    }

    final public function setHost(string $host): void
    {
        $this->host = $host;
    }
}