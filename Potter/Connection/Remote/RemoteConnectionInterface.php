<?php

namespace Potter\Connection\Remote;

use Potter\Connection\ConnectionInterface;

interface RemoteConnectionInterface extends ConnectionInterface
{
    public function getPass(): string;

    public function getUser(): string;

    public function setPass(string $pass): void;

    public function setUser(string $user): void;
}