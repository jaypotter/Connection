<?php

namespace Potter\Connection\Database\Remote;

use Potter\{
    Connection\Remote\RemoteConnectionInterface,
    Connection\Database\DatabaseConnectionInterface
};

interface RemoteDatabaseConnectionInterface extends DatabaseConnectionInterface, RemoteConnectionInterface
{

}