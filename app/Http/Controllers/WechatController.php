<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Factory;
use App\Http\Controllers\Controller;

class WechatController extends Controller
{
    public function getUser(Request $request)
    {
        dd(123);
        $app = Factory::officialAccount(config('wechat.official_account.default'));
        $oauth = $app->oauth;
        $oauth->setRequest($request);
        $user = $oauth->user();
        dd($user);
        $oauth = $app->oauth->scopes(['snsapi_userinfo'])->redirect();
    }
}





