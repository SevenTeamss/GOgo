<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Car;
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


}
