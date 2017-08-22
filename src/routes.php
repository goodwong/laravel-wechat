<?php

Route::group([
    'namespace' => 'Goodwong\LaravelWechat\Http\Controllers',
], function () {
    Route::resource('wechat-users', 'WechatUserController');
    Route::resource('wechat-menus', 'WechatMenuController');
});
