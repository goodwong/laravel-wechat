<?php

namespace Goodwong\LaravelWechat\Handlers;

use Goodwong\LaravelWechat\Events\WechatUserCreated;
use Goodwong\LaravelWechat\Repositories\WechatUserRepository;

class CreateWechatUserHandler
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
        $info['privilege'] = json_encode($info['privilege']);

        $wechatUser = $this->wechatUserRepository->create($info);

        event(new WechatUserCreated($wechatUser));

        return $wechatUser;
    }
}