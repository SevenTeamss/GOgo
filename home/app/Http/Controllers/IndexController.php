<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Buy;
/**
 * 瓜子网   首页控制器
 * 版权所有 2016-2017 
 * 网站地址: http://www.guazi.com;
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
           //实例化我要买车model
           $CarBrand = new Buy;
           //点击量高的汽车品牌
           $arr['brand'] = $CarBrand->CarBrand();
           //全部品牌
           $arr['AllBrand'] = $CarBrand->AllCarBrand();
           $Brands = array();
           //循环取值将品牌首字母(值)变为下标
           foreach ($arr['AllBrand'] as $key => $v) {
               $name = $v->brand_name;
               $id = $v->brand_id;
               $first = $v->brand_first;
               $Brands[$first][$key]['brand_name']=$name;
               $Brands[$first][$key]['brand_id']=$id;                            
           }
           $arr['Brands'] = $Brands;
           return view('buy',$arr); 
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
