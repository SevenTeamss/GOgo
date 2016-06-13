<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
/**
 * 瓜子网   我要买车模型层
 * 版权所有 2016-2017 
 * 网站地址: http://www.guazi.com；
 */
class Buy extends Model
{
    /**
     * [CarBrand description]汽车品牌查询展示(点击量最高)
     * @return array 
     */
    public function CarBrand()
    {
    	$brand = DB::table('brand')
    	       ->select('brand_name','brand_id')
    	       ->where('brand_click','>',20)
    		   ->get();
    	return $brand;

    }
    /**
     * [AllCarBrand description]汽车品牌查询展示全部
     * @return array
     */
    public function AllCarBrand()
    {
    	$AllBrand = DB::table('brand')
    	       ->select('brand_name','brand_id','brand_first')
    	       ->orderBy('brand_first','asc')
    		   ->get();
    	return $AllBrand;
    }
}
