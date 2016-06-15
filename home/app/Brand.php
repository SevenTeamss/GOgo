<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Brand extends Model
{
    //查询所有品牌
    public function BrandRead()
    {
        $arr = DB::table('brand')
             ->orderBy('brand_first')
             ->get();
        return $arr;
    }
    //查询热门品牌
    public function BrandHot()
    {
        $arr = DB::table('brand')
             ->orderBy('brand_click','desc')
             ->take(10)
             ->get();
        return $arr;
    }
    //查想品牌ID
    public function BrandId($brand_name)
    {
    	$arr = DB::table('brand')
    	       ->select('brand_id')
    	       ->where('brand_name',"$brand_name")
    	       ->get();
    }
}
