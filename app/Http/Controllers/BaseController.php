<?php

namespace App\Http\Controllers;

use EasyWeChat\Factory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class BaseController extends Controller
{
    //  微信信息入库
    public function __construct(Request $request)
    {
        session(['logined'=>false]);
        if (!session('logined')){
            $wechatUser = session('wechat.oauth_user.default');
            if (!$wechatUser) {
                return redirect('/user');
            }
            $user = User::where('openid',$wechatUser->original['openid'])->first();

            if(!$user) {
                $user = new User();
                $user->openid = $wechatUser->original['openid'];
            }
            $user->nickname = $wechatUser->original['nickname'];
            $user->avatar = $wechatUser->original['headimgurl'];
            $user->sex = $wechatUser->original['sex'];
            $user->province = $wechatUser->original['province'];
            $user->city = $wechatUser->original['city'];
            $user->save();
            session(['user_id'=>$user->id]);
            session(['logined'=>true]);
        }
    }

}
