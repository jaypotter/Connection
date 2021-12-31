<?php

namespace Potter\Connection\Remote;

use Potter\Connection\AbstractConnection;

abstract class AbstractRemoteConnection extends AbstractConnection implements RemoteConnectionInterface
{
    private const PREFIX = 'remote';

    abstract public function getPass(): string;

    abstract public function getPort(): int;

    public function getPrefix(): string
    {
        return self::PREFIX;
    }

    abstract public function getUser(): string;
    
    abstract public function setHost(string $host): void;

    abstract public function setPass(string $pass): void;

    abstract public function setPort(int $port): void;

    abstract public function setUser(string $user): void;
}