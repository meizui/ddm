<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Factory;
use App\Http\Controllers\Controller;

class WechatController extends Controller
{
    public function getUser(Request $request)
    {
        echo 1;
        $app = Factory::officialAccount(config('wechat.official_account.default'));
        $oauth = $app->oauth;
        $user = $oauth->user();
        var_dump($user);
        $request->session()->put('user',$user);
    }

    public function userInfo(Request $request)
    {
        echo 2;
        $app = Factory::officialAccount(config('wechat.official_account.default'));
        $oauth = $app->oauth;
        $user = $oauth->user();
        var_dump($user);
        $request->session()->put('user',$user);
    }
}





