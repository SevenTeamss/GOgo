<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Buy;
use App\Region;
use App\Brand;
/**
 * 瓜子网   首页控制器
 * 版权所有 2016-2017 
 * 网站地址: http_date()p://www.guazi.com;
 */
class IndexController extends Controller
{
    /**
     * 首页
     */
     public function Index()
        {
            //获取服务器ip地址
            // $server_ip=$_SERVER['SERVER_ADDR'];
            // echo $server_ip;die;
            session_start();
            $cityname = isset($_SESSION['cityname'])?$_SESSION['cityname']:'';
            
            $data['cityname'] = $cityname;
            //查询头部需要的城市信息
            $data['city'] = $this->Header();
            // print_r($data);die;
            //查询所有的车辆品牌信息
            //实例化需要的品牌的model
            $brand = new Brand();
            $brand_arr = $brand->BrandRead();
            foreach ($brand_arr as $key => $value) {
                $brand_first = $value->brand_first;
                $brand1[$brand_first][] = $value;
            }
            $brand1 = json_decode(json_encode($brand1),'ture');
            // $data['brand'] = $brand1;
            $data['brand_right'] = array_slice($brand1, 10);
            $data['brand_left'] = array_slice($brand1, 0, 10);
            // print_r($data);die;

            return view('index',['arr'=>$data]);
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
            $arr = $this->Header();
            return view('sell',['arr'=>$arr]); 
        }
        //服务保障
        public function Server()
        {
            $arr = $this->Header();
            return view('server',['arr'=>$arr]); 
        }
        //分期购车
        public function Common()
        {
            $arr = $this->Header();
            return view('common',['arr'=>$arr]); 
        }
         //头部城市数据
        public function Header()
        {
            // echo 111;
            //实例化需要城市的model
            $region = new Region();
            //全部的城市
            $arr = $region->RegionRead();
            // print_r($arr);
            foreach ($arr as $key => $value) {
                $city_letter = $value->city_letter;
                $v['city_letter'] = $city_letter;
                $a[$city_letter][] = $value;
            }
            $a = json_decode(json_encode($a),'ture');
            // print_r($a);
            return $a;
            // return view('header',$arr);
        }
}
