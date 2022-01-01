<?php

namespace Potter\Connection\Database;

use Potter\{
    Connection\ConnectionInterface,
    Database\DatabaseInterface
};

interface DatabaseConnectionInterface extends ConnectionInterface
{
    public function createDatabase(DatabaseInterface $database): void;

    public function createDatabaseIfNotExists(DatabaseInterface $database): void;

    public function databaseExists(string $database): bool;

    public function getDatabase(string $database): DatabaseInterface;

    public function getDatabases(bool $refresh = false): array;

    public function getTables(string $database): array;
}