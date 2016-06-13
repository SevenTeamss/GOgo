<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
	public $timestamps = false;
    //查询所有的城市名称
    public function RegionRead()
    {
    	$data = DB::table('region')->get();
    	return $data;
    }
}
