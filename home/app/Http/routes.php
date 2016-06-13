<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//首页
Route::get('/','IndexController@Index');
Route::get('index','IndexController@Index');
	//我要买车
	Route::get('buy','IndexController@Buy');
	//我要卖车
	Route::get('sell','IndexController@Sell');
	//服务保障
	Route::get('server','IndexController@Server');
	//分期购车
	Route::get('common','IndexController@Common');
	//首页搜索城市车辆信息
	Route::get('buyCitySearch','SearchController@CitySearch');