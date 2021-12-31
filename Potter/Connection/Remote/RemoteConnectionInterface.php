<?php

namespace Potter\Connection\Remote;

use Potter\Connection\ConnectionInterface;

interface RemoteConnectionInterface extends ConnectionInterface
{
    public function getPort(): int;
    
    public function setHost(string $host): void;

    public function setPort(int $port): void;
}