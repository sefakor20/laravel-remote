<?php

namespace RCodes\Remote\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RCodes\Remote\Remote
 */
class Remote extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-remote';
    }
}
