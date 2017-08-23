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
    public static function wechatUser()
    {
       Route::namespace('Goodwong\LaravelWechat\Http\Controllers')->group(function () {
            Route::resource('wechat-users', 'WechatUserController');
       });
    }
}