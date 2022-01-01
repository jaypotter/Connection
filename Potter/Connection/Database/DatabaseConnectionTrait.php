<?php

namespace Potter\Connection\Database;

use Potter\{
    Connection\ConnectionInterface,
    Database\DatabaseInterface
};

trait DatabaseConnectionTrait
{
    abstract public function createDatabase(DatabaseInterface $database): void;

    final public function createDatabaseIfNotExists(DatabaseInterface $database): void
    {
        if ($this->databaseExists($database->getName())) {
            return;
        }
        $this->createDatabase($database);
    }

    final public function databaseExists(string $database): bool
    {
        return in_array(
            needle: $database,
            haystack: $this->getDatabases()
        );
    }

    abstract public function getDatabases(bool $refresh = false): array;
}