<?php

namespace Goodwong\LaravelWechat\Handlers;

use Goodwong\LaravelWechat\Events\WechatUserCreated;
use Goodwong\LaravelWechat\Repositories\WechatUserRepository;

class WechatHandler
{
    /**
     * construct
     * 
     * @param  WechatUserRepository  $wechatUserRepository
     * @return void
     */
    public function __construct(WechatUserRepository $wechatUserRepository)
    {
        $this->wechatUserRepository = $wechatUserRepository;
    }

    /**
     * create
     * 
     * @param  array  $info
     * @return WechatUser
     */
    public function create($info)
    {
        if (isset($info['tagid_list']) && is_array($info['tagid_list'])) {
            $info['tagid_list'] = implode(',', $info['tagid_list']);
        }

        $wechatUser = $this->wechatUserRepository->create($info);

        event(new WechatUserCreated($wechatUser));

        return $wechatUser;
    }

    /**
     * fetch by openid
     * 
     * @param  string  $openid
     * @return WechatUser
     */
    public function fetchByOpenid($openid)
    {
        $info = app()->wechat->user->get($openid);

        return $this->create($info->toArray());
    }
}
