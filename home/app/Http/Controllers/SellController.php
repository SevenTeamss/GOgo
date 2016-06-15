<?php
namespace App\Http\Controllers;

use App\Region;
use App\Brand;
use DB,Input;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
/**
 * 前台卖车功能
 */
class SellController extends Controller
{
    /**
     * 展示卖车信息视图
     * [index description]
     * @return string 前台视图展示
     */
    public function sell()
    {
        session_start();
        $cityname = isset($_SESSION['cityname'])?$_SESSION['cityname']:'北京';
        $data['cityname'] = $cityname;
        //查询头部需要的城市信息
        $data['city'] = $this->Header();
         //实例化需要的品牌的model
        $brand = new Brand();
        //查询热门的品牌
        $hotbrand = $brand->BrandHot();
        $data['hotbrand'] = json_decode(json_encode($hotbrand),'ture');
        $region = DB::table('region')->get();
        $region =json_decode(json_encode($region), 'ture');
        // print_r($region);die;
    	 //print_r($brand_name);exit;
        return view('sell',['region'=>$region,'arr'=>$data]);
    }

    public function lists()
    {
        foreach (range('a','z') as $k) {
            $brand_name[$k]['brand_first']=$k;
            $brand_name[$k]['brand_name']= DB::table('brand')->having('brand_first', '=',$k)->get(); 
        }   
        $brand_name =json_decode(json_encode($brand_name),'ture'); 
        return view('seList',['brand_name'=>$brand_name]);
    }

    public function search()
    {
        $brand_id=$_GET['brand_id'];
        $val = $_GET['val'];
        // print_r($val);die;
        $row=DB::table('series')->where('brand_id', '=', $brand_id)->get();
        $row =json_decode(json_encode($row),'ture'); 
        // var_dump($row);die;
        return view('seList1',['row'=>$row,'name'=>$val]);
    }


    /**
     * 添加卖主基本信息入库
     * [querycar description]
     * @return int 返回前台ajax响应值
     */
    public function querycar()
    {
    	$city_id=Input::get('city');
    	$area_id=Input::get('area');
    	$brand_id=Input::get('brand_name');
    	$brandtype_id=Input::get('brand_type');
    	$phone=Input::get('phone');
    	if(empty($city_id)||empty($area_id)||empty($brand_id)||empty($brandtype_id)||empty($phone)){
    		return 0;exit;
    	}
    	if(!preg_match('/^\d{11}$/',$phone)){
    		return 1;exit;
    	}
    	$city= DB::table('region')->where('region_id',$city_id)->pluck('region_name');
    	$area= DB::table('region')->where('region_id',$area_id)->pluck('region_name');
    	$brand_name= DB::table('brand')->where('brandid',$brand_id)->pluck('brandname');
    	$brand_type= DB::table('brand')->where('brandid',$brandtype_id)->pluck('brandname');
        $co_address=$city.'-'.$area;
        $co_brand=$brand_name.'-'.$brand_type;
        $res = DB::table('connection')->insert(
    	['co_address' => $co_address,'co_phone'=>$phone,'co_states' => 0,'co_brand'=>$co_brand]
		);
		  if($res){
			   return 2;
		  }else{
			   return 3;
		  }
    }
    /**
     * 卖主车辆所属地省市级联动
     * [citycar description]
     * @return string 通过前台省份id查询所属城市，最后返回前台
     */
    // public function citycar()
    // {
    //    $pid=$_GET['pid'];
    //    $region_city = DB::table('region')->where('parent_id',$pid)->get();
    //    $html="<option value=''>市/区</option>";
    //    foreach ($region_city as $key => $value) {
    //    		$html.="<option value='".$value->region_id."'>".$value->region_name."</option>";
    //    }
    //   return $html;
    // }
    /**
     * 卖主车辆所属车系联动
     * [citybrand description]
     * @return string 通过前台车辆品牌id查询所属城市，最后返回前台
     */
    // public function citybrand()
    // {
    //    $pid=$_GET['pid'];
    //    $brand = DB::table('brand')->where('pid',$pid)->get();
    //    $html="<option value=''>车辆型号</option>";
    //    foreach ($brand as $key => $value){
    //    		$html.="<option value='".$value->brandid."'>".$value->brandname."</option>";
    //    }
    //   return $html;
    // }



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
