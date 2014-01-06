<?php

namespace Unm\Laravel\Tumblr;

use Illuminate\Support\Facades\Facade;

/**
 * Facade for the Tumblr API service
 */
class TumblrFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tumblr';
    }
}