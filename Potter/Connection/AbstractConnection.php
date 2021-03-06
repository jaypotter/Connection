<?php

namespace Potter\Connection;

abstract class AbstractConnection implements ConnectionInterface
{
    abstract public function connect(): void;

    abstract public function getHost(): string;

    abstract public function getPrefix(): string;    
}