<?php

namespace RobertBoes\LaravelLti\Facades;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

/**
 */
class LaravelLti extends IlluminateFacade
{
    /**
     * Return facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-lti';
    }
}
