<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Car extends Model
{
    //查询城市所对应的汽车信息
    public function CityCar($city)
    {
    	$car = DB::table('car')->where('car_address',"$city")->get();
    	return $car;
    }
}
