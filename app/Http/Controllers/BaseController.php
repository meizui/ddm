<?php

namespace App\Http\Controllers;

use EasyWeChat\Factory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class BaseController extends Controller
{
    //  获取微信信息
    public function __construct(Request $request)
    {

        $user = session('wechat.oauth_user.default');
        dd($user->original);
//        $res = User::firstOrCreate(['openid'=>$user->id],[
//            'openid'=>$user->openid,
//            'nickname'=>$user->openid,
//            'name'=>$user->name,
//            'avatar'=>$user->avatar,
//        ]);
//
//        dd($user);

    }

}
