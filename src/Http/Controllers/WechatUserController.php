<?php

namespace Goodwong\LaravelWechat\Http\Controllers;

use Goodwong\LaravelWechat\Entities\WechatUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WechatUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = WechatUser::getModel();
        // order by
        $query = $query->orderBy('id', 'desc');
        // get all wechatUsers
        if (!$request->has('users')) {
            return $query->paginate();
        }
        // where
        $ids = explode(',', $request->input('users'));
        $query = $query->whereIn('user_id', $ids);
        return $query->paginate();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Goodwong\LaravelWechat\Entities\WechatUser  $wechatUser
     * @return \Illuminate\Http\Response
     */
    public function show(WechatUser $wechatUser)
    {
        return $wechatUser;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Goodwong\LaravelWechat\Entities\WechatUser  $wechatUser
     * @return \Illuminate\Http\Response
     */
    public function edit(WechatUser $wechatUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Goodwong\LaravelWechat\Entities\WechatUser  $wechatUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WechatUser $wechatUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Goodwong\LaravelWechat\Entities\WechatUser  $wechatUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(WechatUser $wechatUser)
    {
        //
    }
}
