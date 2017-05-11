<?php

namespace Goodwong\LaravelWechat\Events;

use Goodwong\LaravelWechat\Entities\WechatUser;
use Illuminate\Queue\SerializesModels;

class WechatUserAuthorized
{
    use SerializesModels;

    public $wechatUser;

    /**
     * Create a new event instance.
     *
     * @param  WechatUser  $wechatUser
     * @return void
     */
    public function __construct(WechatUser $wechatUser)
    {
        $this->wechatUser = $wechatUser;
    }
}