<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
/**
     * 瓜子网   首页控制器
     * 版权所有 2016-2017 
     * 网站地址: http://www.guazi.com；
     */
class IndexController extends Controller
{
    /**
     * 首页
     */
    public function Index()
    {
        return view('index');
    }
        //我要买车
        public function Buy()
        {
           return view('buy'); 
        }
        //我要卖车
        public function Sell()
        {
            return view('sell');
        }
        //服务保障
        public function Server()
        {
            return view('server');
        }
        //分期购车
        public function Common()
        {
            return view('common');
        }

}
