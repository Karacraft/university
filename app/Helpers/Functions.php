<?php

namespace app\Helpers;

use Illuminate\Support\Facades\Route;

class Functions
{
    /**
     * Returns the first part of the route string
     */
    public static function getRouteActionName()
    {
        return substr(Route::currentRouteAction(), strpos(Route::currentRouteAction(), "@") + 1);
    }
}

