<?php

namespace Goodwong\Wechat\Events;

use Goodwong\Wechat\Entities\WechatUser;
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
