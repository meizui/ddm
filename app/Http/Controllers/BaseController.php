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
        $user = $request->session()->get('user',null);
        $user = $request->session()->get('id',123);
        if(!isset($user)) {
            echo 'isset user';
            $app = Factory::officialAccount(config('wechat.official_account.default'));
            return  $response = $app->oauth->scopes(['snsapi_userinfo'])->redirect();
        }
    }

}
