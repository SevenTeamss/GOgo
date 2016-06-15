<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Buy;
use App\Region;
use App\Brand;
use App\Car;  
use Request;
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
            $cityname = isset($_SESSION['cityname'])?$_SESSION['cityname']:'北京';
            $data['cityname'] = $cityname;
            //查询头部需要的城市信息
            $data['city'] = $this->Header();
            // print_r($data);die;
            // 实例化需要的汽车的model
            $car = new Car();
            //最新上架的车辆
            $newcar = $car->NewCar($cityname);
            $data['newcar'] = json_decode(json_encode($newcar),'ture');
            //降价出售的车辆
            $downcar = $car->Car($where='is_down',$cityname);
            $data['downcar'] = json_decode(json_encode($downcar),'ture');
            //准新车
            $zxccar = $car->ZxcCar($cityname);
            $data['zxccar'] = json_decode(json_encode($zxccar),'ture');
            //练手车
            $lsccar = $car->LscCar($cityname);
            $data['lsccar'] = json_decode(json_encode($lsccar),'ture');
            //SUV
            $suvcar = $car->Car($where='is_suv',$cityname);
            $data['suvcar'] = json_decode(json_encode($suvcar),'ture');
            // print_r($data['where']);
            //查询所有的车辆品牌信息
            //实例化需要的品牌的model
            $brand = new Brand();
            $brand_arr = $brand->BrandRead();
            foreach ($brand_arr as $key => $value) {
                $brand_first = $value->brand_first;
                $brand1[$brand_first][] = $value;
            }
            //查询热门的品牌
            $hotbrand = $brand->BrandHot();
            $data['hotbrand'] = json_decode(json_encode($hotbrand),'ture');
            $brand1 = json_decode(json_encode($brand1),'ture');
            // $data['brand'] = $brand1;
            $data['brand_right'] = array_slice($brand1, 10);
            $data['brand_left'] = array_slice($brand1, 0, 10);
            // print_r($data);die;

            return view('index',['arr'=>$data]);
        }
               /**
         * [Index description] 我要买车
         * @access public 
         * @author 刘泽学
         * @param [type] $CarBrand [description] 定义model层变量
         * @param [type] $arr['brand'] [description] 点击量高的汽车品牌
         * @param [type] $name [description] 品牌名
         * @param [type] $va [description] 车系不限id
         * @param [type] $arr['price'] [description] 价格区间
         * @param [type] $arr['age'] [description] 价格区间
         */
        public function Buy()
        {
           //实例化我要买车model
           $CarBrand = new Buy;
           //点击量高的汽车品牌
           $arr['brand'] = $CarBrand->CarBrand();
           //全部品牌
           $arr['AllBrand'] = $CarBrand->AllCarBrand();
           //调用搜索车系方法
           $arr['Services'] = $CarBrand->AllSearch();
           //价格区间
           $arr['price'] = $CarBrand->BrandsPrice();
           //车龄
           $arr['age'] = $CarBrand->CarAge();
           //车型
           $arr['carmodel'] = $CarBrand->CarModel();
           //行驶里程
           $arr['mile'] = $CarBrand->MileAge();
          //变速箱
           $arr['box'] = $CarBrand->Transmission();
           //排量
           $arr['displacement'] = $CarBrand->Displacement();
           //排放标准
           $arr['emissions'] = $CarBrand->Emission();
           //颜色
           $arr['color'] = $CarBrand->Color();
           //国别
           $arr['country'] = $CarBrand->Country();
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
           // print_r($arr);die;
           return view('buy',$arr); 
        }
            /**
             * [Index description]品牌搜索 
             * @access public 
             * @author 刘泽学
             * @param [type] $id [description]品牌id 
             * @param [type] $Service [description]model层变量 
             * @param [type] $Services [description]查询出的车系数组 
             * @param [type] $va [description]点击不限时接受va值 
             */          
              public function BuyBrandSearch()
              {
                //接受品牌Id
                $id = Request::get('id');
                //点击不限时接受va值
                $va = Request::get('va');
                if(!isset($va)){
                    //实例化model层
                    $Service = new buy;
                    //调用搜索车系方法
                    $Services = $Service->BrandSearch($id);
                    //循环取值
                    echo "<a id='Nos' data-gzlog='tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=0' class='on' href='javascript:;' rel='nofollow'>不限</a>";
                    foreach ($Services as $k => $v) {
                    echo "<a  data-gzlog='tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=fute-fukesi' onclick='SeriesClick(this,$v->series_id)' class='' href='javascript:;' title='".$v->series_name."' >".$v->series_name."</a>";
                    }
                }else{
                  //实例化model层
                  $Service = new buy;
                  //调用搜索车系方法
                  $Services = $Service->AllSearch();
                  //循环取值
                   echo "<a id='Nos' data-gzlog='tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=0' class='on' href='javascript:;' rel='nofollow'>不限</a>";
                    foreach ($Services as $k => $v) {
                         echo "<a  data-gzlog='tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=fute-fukesi' class='' onclick='SeriesClick(this,$v->series_id)' href='javascript:;' title='".$v->series_name."' id='".$v->brand_id."'>".$v->series_name."</a>";
                    }
                }

              }
            /**
             * [ManySearch description] 多条件搜索
             * @access public 
             * @author 刘泽学
             * @param [type] $ [description] 
             */              
              public function ManySearch()
              {
                //实例化model层
                $model = new Buy;
                //品牌id
                $Bid = Request::get('id');
                //车系id
                $Xid = Request::get('ids');
                //价格id
                $Prid = Request::get('Prid');
                //车龄id
                $Agid = Request::get('Agid');
                //车型Tyid
                $Tyid = Request::get('Tyid');
                //行驶里程ID
                $TrName = Request::get('TrName');
                //变速箱id
                $TransId = Request::get('TransId');
                //排量id
                $DisId = Request::get('DisId');
                //排放标准id
                $EmsId = Request::get('EmsId');
                //颜色id
                $ColorId = Request::get('ColorId');
                //国别id
                $CountyrId = Request::get('CountyrId');
                //调用多条件搜索方法
                $data['many'] = $model->ManySearches($Bid,$Xid,$Prid,$Agid,$Tyid,$TrName,$TransId,$DisId,$EmsId,$ColorId,$CountyrId);
                // print_r($data);die;
                return view('replace',$data); 
              }
        //我要卖车
        public function Sell()
        {
            session_start();
            $cityname = isset($_SESSION['cityname'])?$_SESSION['cityname']:'北京';
            $data['cityname'] = $cityname;
            $data['city'] = $this->Header();
             //实例化需要的品牌的model
            $brand = new Brand();
            //查询热门的品牌
            $hotbrand = $brand->BrandHot();
            $data['hotbrand'] = json_decode(json_encode($hotbrand),'ture');
            return view('sell',['arr'=>$data]); 
        }
        //服务保障
        public function Server()
        {
            session_start();
            $cityname = isset($_SESSION['cityname'])?$_SESSION['cityname']:'北京';
            $data['cityname'] = $cityname;
            $data['city'] = $this->Header();
            return view('server',['arr'=>$data]); 
        }
        //分期购车
        public function Common()
        {
            session_start();
            $cityname = isset($_SESSION['cityname'])?$_SESSION['cityname']:'北京';
            $data['cityname'] = $cityname;
            $data['city'] = $this->Header();
            return view('common',['arr'=>$data]); 
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
