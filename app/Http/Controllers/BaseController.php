<?php

namespace App\Http\Controllers;

use EasyWeChat\Factory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    //  获取微信信息
    public function __construct(Request $request)
    {
        $wechatUser = session('wechat_user');
        if(!isset($wechatUser)) {
            $app = Factory::officialAccount(config('wechat.official_account.default'));
            return  $response = $app->oauth->scopes(['snsapi_userinfo'])->redirect();
        }
    }

}
