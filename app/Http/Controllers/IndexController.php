<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Article;
use App\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class IndexController extends BaseController
{
    public function index (Request $request)
    {
        $banner     = Banner::where('position_id',1)->get();

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
}