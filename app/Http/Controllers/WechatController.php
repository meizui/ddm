<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Factory;
use App\Http\Controllers\Controller;

class WechatController extends Controller
{
    public function getUser(Request $request)
    {
        $app = Factory::officialAccount(config('wechat.official_account.default'));
        $oauth = $app->oauth;
        $user = $oauth->user();
        session(['user' => $user]);
        dd($user);
    }

    public function userInfo(Request $request)
    {
        $app = Factory::officialAccount(config('wechat.official_account.default'));
        $oauth = $app->oauth;
        $user = $oauth->user();
        dd($user);
    }
}





