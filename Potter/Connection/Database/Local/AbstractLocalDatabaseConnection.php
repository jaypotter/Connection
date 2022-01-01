<?php

namespace Potter\Connection\Database\Local;

use Potter\{
    Connection\Local\LocalConnection,
    Database\DatabaseInterface
};

abstract class AbstractLocalDatabaseConnection extends LocalConnection implements LocalDatabaseConnectionInterface
{    
    abstract public function createDatabase(DatabaseInterface $database): void;

    abstract public function createDatabaseIfNotExists(DatabaseInterface $database): void;
    
    abstract public function databaseExists(string $database): bool;

    abstract public function getDatabase(string $database): DatabaseInterface;

    abstract public function getDatabases(bool $refresh = false): array;

    abstract public function getTables(string $database): array;
}