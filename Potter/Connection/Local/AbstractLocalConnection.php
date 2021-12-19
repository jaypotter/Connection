<?php

namespace Potter\Connection\Local;

use Potter\Connection\AbstractConnection;

abstract class AbstractLocalConnection extends AbstractConnection implements LocalConnectionInterface
{
    final public function getHost(): string
    {
        return self::LOCALHOST;
    }

    final public function setHost(string $host): void
    {
        if (strcasecmp($host, self::LOCALHOST) == 0) {
            return;
        }
        throw new LocalHostnameException;
    }
}