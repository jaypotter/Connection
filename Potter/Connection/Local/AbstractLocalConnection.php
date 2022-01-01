<?php

namespace Potter\Connection\Local;

use Potter\Connection\AbstractConnection;

abstract class AbstractLocalConnection extends AbstractConnection implements LocalConnectionInterface
{
    use LocalConnectionTrait;
}