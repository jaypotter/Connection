<?php

namespace Potter\Connection\Local;

abstract class LocalConnection extends AbstractLocalConnection
{
    use LocalConnectionTrait;

    private const PREFIX = 'local';

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}