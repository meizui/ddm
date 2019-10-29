<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Factory;
use App\Http\Controllers\Controller;

class WechatController extends Controller
{
    public function userInfo(Request $request)
    {
        file_get_contents('./123.txt',123,FILE_APPEND);
        $app = Factory::officialAccount(config('wechat.official_account.default'));
        $oauth = $app->oauth;
        $user = $oauth->user();
        $request->session()->put('user',$user->toArray());
    }
}





