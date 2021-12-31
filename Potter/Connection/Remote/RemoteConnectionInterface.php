<?php

namespace Potter\Connection\Remote;

use Potter\Connection\ConnectionInterface;

interface RemoteConnectionInterface extends ConnectionInterface
{
    public function getPass(): string;
    
    public function getPort(): int;

    public function getUser(): string;

    public function setHost(string $host): void;

    public function setPass(string $pass): void;

    public function setPort(int $port): void;

    public function setUser(string $user): void;
}