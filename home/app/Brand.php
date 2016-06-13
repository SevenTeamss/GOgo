<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Brand extends Model
{
    //查询所有品牌
    public function BrandRead()
    {
        $arr = DB::table('brand')->orderBy('brand_first')->get();
        return $arr;
    }
}
