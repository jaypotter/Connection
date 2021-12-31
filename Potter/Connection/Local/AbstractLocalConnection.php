<?php

namespace Potter\Connection\Local;

use Potter\Connection\AbstractConnection;

abstract class AbstractLocalConnection extends AbstractConnection implements LocalConnectionInterface
{
    private const PREFIX = 'local';

    final public function getHost(): string
    {
        return self::LOCALHOST;
    }

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}