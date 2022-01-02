<?php

namespace Potter\Connection;

abstract class Connection extends AbstractConnection
{
    private const PREFIX = 'conn';
    
    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}