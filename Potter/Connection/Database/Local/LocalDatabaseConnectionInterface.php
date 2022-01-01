<?php

namespace Potter\Connection\Database\Local;

use Potter\{
    Connection\Local\LocalConnectionInterface,
    Connection\Database\DatabaseConnectionInterface
};

interface LocalDatabaseConnectionInterface extends DatabaseConnectionInterface, LocalConnectionInterface
{

}