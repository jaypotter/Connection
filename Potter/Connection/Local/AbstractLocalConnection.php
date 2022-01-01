<?php

namespace Potter\Connection\Local;

use Potter\Connection\AbstractConnection;

abstract class AbstractLocalConnection extends AbstractConnection implements LocalConnectionInterface
{
    use LocalConnectionTrait;
    
    private const PREFIX = 'local';

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}