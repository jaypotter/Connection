<?php

namespace Potter\Database\Connection;

use Potter\{
    Connection\ConnectionInterface,
    Dimension\Parent\ParentDimensionInterface
};

interface DatabaseConnectionInterface extends ConnectionInterface, ParentDimensionInterface
{

}