<?php

namespace Potter\Connection;

interface ConnectionInterface
{
    public function connect(): void;

    public function getHost(): string;

    public function getPrefix(): string;
}