<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::group(['middleware' => ['web']], function () {
//    Route::get('/', 'IndexController@index');
//    Route::get('/index/index', 'IndexController@index');
//    Route::get('/wechat/login', 'WechatController@login');
//
//});
//
//Route::any('/wechat/userInfo', 'WechatController@userInfo');
//Route::any('/wechat', 'WeChatController@serve');

Route::group(['middleware' => ['web', 'wechat.oauth']], function () {
    Route::get('/', 'IndexController@index');
    Route::get('/index/index', 'IndexController@index');
    Route::get('/wechat/login', 'WechatController@login');
    Route::get('/user', function () {

    });
});