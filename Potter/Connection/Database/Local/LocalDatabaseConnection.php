<?php

namespace Potter\Connection\Database\Local;

abstract class LocalDatabaseConnection extends AbstractLocalDatabaseConnection
{
    private const PREFIX = 'localdb';

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}