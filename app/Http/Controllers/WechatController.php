<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Factory;
use App\Http\Controllers\Controller;
use Log;
class WechatController extends Controller
{
    public function userInfo(Request $request)
    {
        $request->url();
        session('wechat.oauth_user.default'); // 拿到授权用户资料
        header('Location: '.$url);;

    }

    public function serve ()
    {
        Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志
        $app = app('wechat.official_account');
        $app->server->push(function($message){
            return "欢迎关注 overtrue！";
        });

        return $app->server->serve();
    }
}





