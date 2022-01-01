<?php

namespace Potter\Connection\Local;

trait LocalConnectionTrait
{
    final public function getHost(): string
    {
        return LocalConnectionInterface::LOCALHOST;
    }
}