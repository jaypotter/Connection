<?php

namespace Potter\Connection;

abstract class AbstractConnection implements ConnectionInterface
{
    private const PREFIX = 'conn';

    abstract public function connect(): void;

    abstract public function getHost(): string;

    public function getPrefix(): string
    {
        return self::PREFIX;
    }

    abstract public function send(string $bytes): mixed;

    abstract public function setHost(string $host): void;
}