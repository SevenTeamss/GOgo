<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Car extends Model
{
    //查询城市所对应的汽车信息
    public function CityCar($cityname)
    {
    	$car = DB::table('car')
    	     ->where('car_address',"$cityname")
    	     ->get();
    	return $car;
    }
    //查询所有的汽车信息
    public function AllCar()
    {
    	$car = DB::table('car')
    	     ->get();
    	return $car;
    }
    //查询符合条件的车辆
    public function Car($where,$cityname)
    {
    	$car = DB::table('car')
    	       ->where('car_address',"$cityname")
    	       ->where($where,1)
    	       ->take(12)
    	       ->get();
    	return $car;       
    }
     //查询最新上架的车辆
    public function NewCar($cityname)
    {
    	$car = DB::table('car')
    	       ->where('car_address',"$cityname")
    	       ->orderby('car_id','desc')
    	       ->take(12)
    	       ->get();
    	return $car;       
    }
     //查询准新车的车辆
    public function ZxcCar($cityname)
    {
    	$car = DB::table('car')
    	       ->where('car_address',"$cityname")
    	       ->where('car_time','>',strtotime("last year"))
    	       ->take(12)
    	       ->get();

    	return $car;       
    }
    //查询练手车的车辆
    public function LscCar($cityname)
    {
    	$car = DB::table('car')
    	       ->where('car_owner_price','<','5.00')
    	       ->where('car_address',"$cityname")
    	       ->take(12)
    	       ->get();
    	return $car;       
    }
}
