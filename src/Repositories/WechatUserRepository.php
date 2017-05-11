<?php

namespace Goodwong\LaravelWechat\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class WechatUserRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return \Goodwong\LaravelWechat\Entities\WechatUser::class;
    }
}
