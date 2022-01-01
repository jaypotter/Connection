<?php

namespace Potter\Connection\Database\Remote;

use Potter\Connection\{
    Database\DatabaseConnectionTrait,
    Remote\RemoteConnection
};
use Potter\Database\DatabaseInterface;

abstract class AbstractRemoteDatabaseConnection extends RemoteConnection implements RemoteDatabaseConnectionInterface
{
    use DatabaseConnectionTrait;

    abstract public function createDatabase(DatabaseInterface $database): void;

    abstract public function createDatabaseIfNotExists(DatabaseInterface $database): void;

    abstract public function databaseExists(string $database): bool;

    abstract public function getDatabase(string $database): DatabaseInterface;

    abstract public function getDatabases(bool $refresh = false): array;

    abstract public function getTables(string $database): array;
}