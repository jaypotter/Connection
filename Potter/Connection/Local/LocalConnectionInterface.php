<?php

namespace Potter\Connection\Local;

use Potter\Connection\ConnectionInterface;

interface LocalConnectionInterface extends ConnectionInterface
{
    final public const LOCALHOST = 'localhost';
}