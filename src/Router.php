<?php

namespace Goodwong\LaravelWechat;

use Illuminate\Support\Facades\Route;

class Router
{
    /**
     * routes
     * 
     * @return void
     */
    public static function route()
    {
        require __DIR__.'/routes.php';
    }
}