<?php

namespace Goodwong\Wechat\Http\Controllers;

use Goodwong\Wechat\Entities\WechatUser;
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
        $per_page = $request->input('per_page', 15);

        $query = WechatUser::getModel();
        // order by
        $query = $query->orderBy('id', 'desc');
        // by user_ids
        if ($user_ids = $request->input('users')) {
            $ids = explode(',', $user_ids);
            return $query->whereIn('user_id', $ids)->paginate($per_page);
        }
        // by search
        if ($keyword = $request->input('search')) {
            return $query->where('nickname', 'like', "%{$keyword}%")->paginate($per_page);
        }
        // get all wechatUsers
        return $query->paginate($per_page);
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
     * @param  \Goodwong\Wechat\Entities\WechatUser  $wechatUser
     * @return \Illuminate\Http\Response
     */
    public function show(WechatUser $wechatUser)
    {
        return $wechatUser;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Goodwong\Wechat\Entities\WechatUser  $wechatUser
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
     * @param  \Goodwong\Wechat\Entities\WechatUser  $wechatUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WechatUser $wechatUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Goodwong\Wechat\Entities\WechatUser  $wechatUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(WechatUser $wechatUser)
    {
        //
    }
}
