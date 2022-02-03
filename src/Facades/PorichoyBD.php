<?php

namespace Monowarfs\PorichoyBD\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Monowarfs\PorichoyBD\LaravelPorichoyBD
 */
class PorichoyBD extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'porichoybd';
    }
}
