<?php

namespace Potter\Connection\Local;

use Potter\Connection\ConnectionInterface;

interface LocalConnectionInterface extends ConnectionInterface
{
    public const LOCALHOST = 'localhost';
}