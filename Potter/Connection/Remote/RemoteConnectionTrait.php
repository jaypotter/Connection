<?php

namespace Potter\Connection\Remote;

trait RemoteConnectionTrait
{
    private string $host;

    private string $pass;
    
    private string $user;

    final public function getHost(): string
    {
        return $this->host;
    }

    final public function getPass(): string
    {
        return $this->pass;
    }

    final public function getUser(): string
    {
        return $this->user;
    }

    final public function setHost(string $host): void
    {
        $this->host = $host;
    }

    final public function setPass(string $pass): void
    {
        $this->pass = $pass;
    }

    final public function setUser(string $user): void
    {
        $this->user = $user;
    }
}