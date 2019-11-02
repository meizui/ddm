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
        $res = User::firstOrCreate(
            [
                'openid'=>$user->original['openid']
            ],
            [
            'openid'=>$user->original['openid'],
            'nickname'=>$user->original['nickname'],
            'avatar'=>$user->original['headimgurl'],
            'sex'=>$user->original['sex'],
            'province'=>$user->original['province'],
            'city'=>$user->original['city'],
            ]
        );

        dd($res->save());

    }

}
