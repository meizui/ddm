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

        session('user_info',['id'=>123]);
//        if(!isset($user)) {
//            $app = Factory::officialAccount(config('wechat.official_account.default'));
//            return  $response = $app->oauth->scopes(['snsapi_userinfo'])->redirect();
//        }

    }

}
