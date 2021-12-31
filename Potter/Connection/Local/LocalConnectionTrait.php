<?php

namespace Potter\Connection\Local;

trait LocalConnectionTrait
{
    final public function getHost(): string
    {
        return self::LOCALHOST;
    }
}