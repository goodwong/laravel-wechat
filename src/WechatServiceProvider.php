<?php

namespace Goodwong\Wechat;

use Illuminate\Support\ServiceProvider;

class WechatServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->publishes([
        //     __DIR__.'/config/wechat.php' => config_path('goodwong-wechat.php'),
        // ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->mergeConfigFrom(
        //     __DIR__.'/../config/wechat.php', 'goodwong-wechat'
        // );
    }
}
