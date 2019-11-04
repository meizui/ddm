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
    Route::get('/user', 'WechatController@userInfo');    
//    Route::get('/', 'IndexController@index');
    Route::get('/index/index', 'IndexController@index');
    Route::get('/user/index', 'UserController@index');			
    Route::get('/shop/index', 'ShopController@index');
    Route::get('/join/index', 'JoinController@index');
});

Route::get('/', 'IndexController@index');
Route::get('/index/activityInfo/{id}', 'IndexController@activityInfo');
Route::get('/join/index', 'JoinController@index');