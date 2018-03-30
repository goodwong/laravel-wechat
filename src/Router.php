<?php

namespace Goodwong\Wechat;

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
       Route::namespace('Goodwong\Wechat\Http\Controllers')->group(function () {
            Route::resource('wechat-users', 'WechatUserController');
       });
    }
}
