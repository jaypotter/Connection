<?php

namespace Potter\Connection\Remote;

use Potter\Connection\Connection;

abstract class AbstractRemoteConnection extends Connection implements RemoteConnectionInterface
{
    abstract public function getPass(): string;

    abstract public function getPort(): int;

    abstract public function getUser(): string;
    
    abstract public function setHost(string $host): void;

    abstract public function setPass(string $pass): void;

    abstract public function setPort(int $port): void;

    abstract public function setUser(string $user): void;
}