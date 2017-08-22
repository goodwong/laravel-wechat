<?php

namespace Goodwong\LaravelWechat\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WechatMenuController extends Controller
{
    /**
     * constuctor
     */
    public function __construct()
    {
        $this->menu = app()->wechat->menu;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->menu->all();
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
        $buttons = $request->input('menu.button');
        $response = $this->menu->add($buttons);
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \Goodwong\LaravelWechat\Entities\WechatUser  $wechatUser
     * @return \Illuminate\Http\Response
     */
    public function show(WechatUser $wechatUser)
    {
        //
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
