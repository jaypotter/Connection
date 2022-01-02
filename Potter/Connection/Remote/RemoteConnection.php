<?php

namespace Potter\Connection\Remote;

abstract class RemoteConnection extends AbstractRemoteConnection
{
    use RemoteConnectionTrait;
    
    private const PREFIX = 'remote';

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}