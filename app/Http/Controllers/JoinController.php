<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController;

class JoinController extends BaseController
{
    public function index(Request $request)
    {
        return view('client.addActivity');
    }

    public function addJoin(Request $request)
    {

        $data = $request->all();
        $message = [
            'title.required' => '缺少标题信息',
            'start_at.required' => '缺少开始时间',
            'start_at.date' => '开始时间格式不正确',
            'end_at.required' => '缺少结束时间',
            'end_at.date' => '结束时间格式不正确',
            'address.required' => '缺少活动地址',
            'share_num.required' => '缺少分享金额',
            'times.required' => '缺少期望分享次数',
        ];
        $validator = validator::make($data, [
            'title' => 'required',
            'start_at' => 'required|date',
            'end_at' => 'required|date',
            'share_num' => 'required',
            'address' => 'required',
            'times' => 'required',
        ], $message);
        if ($validator->fails()) {
            return $validator->errors()->first();
        }

        $model = new Activity();
        $model->title = $request->input('title');
        $model->start_at = $request->input('start_at');
        $model->end_at = $request->input('end_at');
        $model->content = $request->input('content');
        $model->share_num = $request->input('share_num');
        $model->times = $request->input('times');
        $model->area_id = $request->input('area_id');
        $model->address = $request->input('address');
        $model->img = $request->input('img');
        $model->user_id = session('user_id',1);
        if ($model->save()) {
            $activity = Activity::with(['publishUser','area'])->find($model->id);
            return  view('client.joinPay',['activity'=>$activity]);
        }
        else {
            exit('error');
        }

    }
}
