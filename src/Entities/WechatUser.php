<?php

namespace Goodwong\LaravelWechat\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WechatUser extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'subscribe',
        'openid',
        'nickname',
        'remark',
        'language',
        'subscribe_time',
        'sex',
        'province',
        'city',
        'country',
        'headimgurl',
        'unionid',
        'groupid',
        'tagid_list',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'openid', 'unionid', 
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at',
        'subscribe_time',
    ];
}
