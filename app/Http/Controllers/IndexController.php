<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Article;
use App\Banner;
use EasyWeChat\Factory;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class IndexController extends BaseController
{
    public function index (Request $request)
    {


        $banner     = Banner::where('position_id',1)->get();

//        dd($banner);
        $article    = Article::where('status',1)
            ->orderBy('id','desc')
            ->paginate(10);

        $activity = Activity::where('status',1)
            ->limit(4)
            ->orderBy('created_at','desc')
            ->get();
        return view('client.index',[
            'article'=>$article,
            'banner'=>$banner,
            'activity'=>$activity
        ]);
    }

    public function activityList (Request $request)
    {
        if ($request->isMethod('post')) {
            $list = Activity::with(['publishUser','area'])
                ->where('status',1)
                ->paginate($request->input('limit'));
            if ($list) {
                return json_encode(['code'=>200,'msg'=>'ok','data'=>$list]);
            }
            return json_encode(['code'=>400,'msg'=>'nok','data'=>[]]);
        }
        return view('client.activityList');
    }

    public function activityInfo(Request $request,$id)
    {
        $activity = Activity::with(['publishUser'])->find($id);
        return view('client.activityInfo',['activity'=>$activity]);
    }
}
