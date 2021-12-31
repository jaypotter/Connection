<?php

namespace Potter\Connection\Remote;

use Potter\Connection\AbstractConnection;

abstract class AbstractRemoteConnection extends AbstractConnection implements RemoteConnectionInterface
{
    private const PREFIX = 'remote';

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}