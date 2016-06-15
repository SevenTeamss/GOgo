<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Car;
use App\Brand;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CitySearch()
    {
        // 接收传递的城市名称
        $city = Request::get('city');
        // echo $city; 
        //实例化车辆表的model
        session_start();
        $_SESSION['cityname'] = $city;
        if ($_SESSION['cityname']) {
                echo 1;
        }
    }
    //查询品牌对应的ID
    public function selbrandid()
    {
        // 接收传递的城市名称
        $brand_name = Request::get('brand_id');
        // echo $brand_name;die; 
        //实例化车辆表的model
        $brand = new Brand();
        $arr = $brand->BrandId($brand_name);
        print_r($arr);
        
    }

}
