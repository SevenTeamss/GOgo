﻿<!DOCTYPE html>
<html><head _tracker="{&quot;pagetype&quot;:&quot;list&quot;}"><style type="text/css">object {outline:none;}</style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="renderer" content="webkit">
<title>【北京二手车报价/价格_北京个人二手车】-北京瓜子二手车直卖网</title>
<meta name="keywords" content="北京二手车报价,北京二手车行情,北京二手车出售">
<meta name="description" content="北京瓜子二手车直卖网,提供北京二手车报价、北京二手车行情、北京二手车出售等信息,所有二手车经过259项严苛检测,标准无事故100%个人二手车,14天可退1年质保.">

    <meta http-equiv="P3P" content="CP=&quot;CAO PSA OUR&quot;">
    <meta name="baidu-site-verification" content="BPGd9vyB6h">
    <meta name="360-site-verification" content="3c22335c23344347291dbb8273c12f1b">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="sogou_site_verification" content="hJqKUw5CFE">
    <meta name="shenma-site-verification" content="47174ef55ff6318bd3c48a846b608ee8_1446541131">
    <link rel="shortcut icon" type="image/x-icon" href="http://www.guazi.com/favicon.ico" media="screen">
    <link rel="canonical" href="http://www.guazi.com/bj/buy/">
    <script src="{{URL::asset('/templates')}}/js/hm.js"></script>
    <script src="{{URL::asset('/templates')}}/js/base.js"></script>
    <script src="{{URL::asset('/templates')}}/js/list.js"></script>
    <script src="{{URL::asset('/templates')}}/js/jq.js"></script>
<!-- 加载js/css-->

<body class="sc-list">
        <!-- 引入头部 -->
         @include('header')

<!--买车页导流-->
<div data-gzlog="tracking_type=click&amp;eventid=0130000000000016" class="sale-right" baidu_alog="pc_maicheliebiao_zhuanhua&amp;click&amp;pc_maicheliebiao_fuchuang_mianfeimaiche_c">
    <a href="sell"></a>
</div>

<div class="w">
            <!-- 倒流banner  s -->
    <div class="guid-img">
        <a data-gzlog="tracking_type=click&amp;eventid=0100000000000015" baidu_alog="pc_sell_banner1&amp;click" href="http://www.guazi.com/bj/sell?clueS=05" class="fl">
        </a>
            <img src="{{URL::asset('/templates')}}/images/img-sale.jpg" alt="">
        <a data-gzlog="tracking_type=click&amp;eventid=0100000000000173" baidu_alog="pc_sell_banner2&amp;click" href="http://www.guazi.com/bj/intro" class="fr">
        </a>
            <img src="{{URL::asset('/templates')}}/images/img-service.jpg" alt="">
    </div>
    <!-- 导流banner  e -->

        <!--筛选-->
    <div class="comfilter-bd">
    <div class="filterBox">
        <dl class="fliter-bd clearfix">
            <dt>品牌：</dt>
            <dd class="clickBrandWidget">
                <a class="on" href="http://www.guazi.com/bj/buy/" id="No" rel="nofollow">不限</a>
                @foreach($brand as $k=> $v)
                <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=dazhong" id="{{$k}}" onclick="BrandOnclick(this)" class="" href="#" title="{{$v->brand_name}}">{{$v->brand_name}}
                </a>
                @endforeach                                    <!--品牌全部-->
                <span class="brand-all z30" id="brandAll">
                    <em data-role="show">全部<i></i></em>
                    <div data-role="otherBrand" class="otherbrand" style="display: none;">
                        <div class="o-b-box"><span class="arrow"><s></s></span>
                            <ul data-role="letterNav" class="o-b-list">
                            @foreach($Brands as $k=>$v)
                                <li class="clearfix">
                                    <span>{{$k}}</span>
                                    <div>

                                    @foreach($v as $vv)
                                     <input type="hidden" id="ids" value="{{$vv['brand_id']}}" >
                                        <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=brand&amp;brand=audi" href="#" id="{{$k}}" onclick="AllBrands(this)" title="奥迪二手车">{{$vv['brand_name']}}</a>
                                    @endforeach
                                    </div>
                                </li>
                            @endforeach     
                             </ul>
                        </div>
                    </div>
                </span>
                <!--品牌全部-->
            </dd>
            <script type="text/javascript">
                //热卖汽车品牌
                function BrandOnclick(obj){
                    var BrandName= $(obj).html();
                    BrandNames = $.trim(BrandName);
                    $('.clickBrandWidget a').attr('class','');
                    $(obj).attr('class','on');
                    $('#No').attr('class','');
                    a = $('#ids').val();
                    alert(a)
                    // var data = {'BrandNames':BrandNames}
                }
                //全部汽车品牌
                function AllBrands(obj){
                   AllBrandName = $(obj).html();

                    
                }
            </script>
        </dl>
        <dl class="fliter-bd clearfix">
            <dt>车系：</dt>
            <dd class="clickTagWidget">
                <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=0" class="on" href="http://www.guazi.com/bj/buy/" rel="nofollow">不限</a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=fute-fukesi" class="" href="http://www.guazi.com/bj/fute-fukesi/" title="二手福克斯">
                            福克斯                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=suteng" class="" href="http://www.guazi.com/bj/suteng/" title="二手速腾">
                            速腾                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=jetta" class="" href="http://www.guazi.com/bj/jetta/" title="二手捷达">
                            捷达                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=maiteng" class="" href="http://www.guazi.com/bj/maiteng/" title="二手迈腾">
                            迈腾                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=baolai" class="" href="http://www.guazi.com/bj/baolai/" title="二手宝来">
                            宝来                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=bmw-5" class="" href="http://www.guazi.com/bj/bmw-5/" title="二手5系">
                            5系                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=h6" class="" href="http://www.guazi.com/bj/h6/" title="二手H6">
                            H6                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=chevrolet-keluzi" class="" href="http://www.guazi.com/bj/chevrolet-keluzi/" title="二手科鲁兹">
                            科鲁兹                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=passat" class="" href="http://www.guazi.com/bj/passat/" title="二手帕萨特">
                            帕萨特                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=benz-c" class="" href="http://www.guazi.com/bj/benz-c/" title="二手C级">
                            C级                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=golf" class="" href="http://www.guazi.com/bj/golf/" title="二手高尔夫">
                            高尔夫                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=xiandai-ix35" class="" href="http://www.guazi.com/bj/xiandai-ix35/" title="二手ix35">
                            ix35                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=langyi" class="" href="http://www.guazi.com/bj/langyi/" title="二手朗逸">
                            朗逸                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=bmw-3" class="" href="http://www.guazi.com/bj/bmw-3/" title="二手3系">
                            3系                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=tag&amp;tag=mazida6" class="" href="http://www.guazi.com/bj/mazida6/" title="二手马自达6">
                            马自达6                        </a>
                                                    
            </dd>
        </dl>
        <dl class="fliter-bd clearfix">
            <dt>价格：</dt>
            <dd>
                <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=0" class="on" href="http://www.guazi.com/bj/buy/" rel="nofollow">不限</a>
                                    <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=3" class="" href="http://www.guazi.com/bj/buy/p3/" title="5万以下二手车">
                        5万以下                    </a>
                                    <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=4" class="" href="http://www.guazi.com/bj/buy/p4/" title="10万以下二手车">
                        5-10万                    </a>
                                    <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=5" class="" href="http://www.guazi.com/bj/buy/p5/" title="15万以下二手车">
                        10-15万                    </a>
                                    <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=6" class="" href="http://www.guazi.com/bj/buy/p6/" title="20万以下二手车">
                        15-20万                    </a>
                                    <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=7" class="" href="http://www.guazi.com/bj/buy/p7/" title="30万以下二手车">
                        20-30万                    </a>
                                    <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=8" class="" href="http://www.guazi.com/bj/buy/p8/" title="40万以下二手车">
                        30-40万                    </a>
                                    <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=9" class="" href="http://www.guazi.com/bj/buy/p9/" title="60万以下二手车">
                        40-60万                    </a>
                                    <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=price_index&amp;price_index=10" class="" href="http://www.guazi.com/bj/buy/p10/" title="60万以上二手车">
                        60万以上                    </a>
                                <span data-url-template="/" class="input-box clearfix rangeFilter">
                <label>
                    <input data-default-value="0" size="4" class="js-begin" maxlength="3" id="my_price_b" name="b" type="text">
                </label>
                <label><i class="input-line">-</i></label>
                <label>
                    <input data-default-value="999" size="4" class="js-end" maxlength="3" id="my_price_e" name="e" type="text">
                </label>
                <label class="input-unit">万</label>
                <label><a gjalog="" href="#" class="input-btn js-btn">筛选</a></label>
                </span>
            </dd>
        </dl>
        <dl class="fliter-bd clearfix">
            <dt>车龄：</dt>
            <dd>
                <a data-role="filterItemAge" data-value="" class="on" href="http://www.guazi.com/bj/buy/" rel="nofollow">不限</a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=cheling&amp;cheling=4" data-role="filterItemAge" data-value="4" class="" href="http://www.guazi.com/bj/buy/l4/" title="5年以上二手车">
                            5年以上                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=cheling&amp;cheling=3" data-role="filterItemAge" data-value="3" class="" href="http://www.guazi.com/bj/buy/l3/" title="5年内二手车">
                            5年内                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=cheling&amp;cheling=2" data-role="filterItemAge" data-value="2" class="" href="http://www.guazi.com/bj/buy/l2/" title="3年内二手车">
                            3年内                        </a>
                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=cheling&amp;cheling=1" data-role="filterItemAge" data-value="1" class="" href="http://www.guazi.com/bj/buy/l1/" title="1年以内二手车">
                            1年以内                        </a>
                                                </dd>
        </dl>
        <dl class="moreitem clearfix">
            <dt>更多：</dt>
            <dd class="hoverWidget" gjalog="100000000641000100000010
            " onmouseover="MouseO(this)" onmouseout="MouseNo(this)">
                <div class="moreitem-btn">
                                        <a href="#">车型</a>
                </div>
                <div class="moreitem-box">
                    <div class="m-i-w1">
                        <div class="moreitem-opts">
                            <a class="one" href="http://www.guazi.com/bj/buy/" rel="nofollow">不限</a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=chexing&amp;chexing=5" class="" href="http://www.guazi.com/bj/buy/h5/" title="二手两厢轿车">
                                    两厢轿车                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=chexing&amp;chexing=6" class="" href="http://www.guazi.com/bj/buy/h6/" title="二手三厢轿车">
                                    三厢轿车                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=chexing&amp;chexing=2" class="" href="http://www.guazi.com/bj/buy/h2/" title="二手SUV">
                                    SUV                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=chexing&amp;chexing=3" class="" href="http://www.guazi.com/bj/buy/h3/" title="二手MPV">
                                    MPV                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=chexing&amp;chexing=4" class="" href="http://www.guazi.com/bj/buy/h4/" title="二手跑车">
                                    跑车                                </a>
                                                </div>
                </div>
            </div></dd>
            <dd class="hoverWidget" gjalog="100000000643000100000010" onmouseover="MouseO(this)" onmouseout="MouseNo(this)">
                <div class="moreitem-btn">
                                        <a href="#">行驶里程</a>
                </div>
                <div class="moreitem-box">
                    <div class="m-i-w1">
                        <div class="moreitem-opts ">
                            <a data-role="filterItemRoadHaul" data-value="" class="one" href="http://www.guazi.com/bj/buy/" rel="nofollow">不限</a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=road_haul&amp;road_haul=1" data-role="filterItemRoadHaul" data-value="1" class="" href="http://www.guazi.com/bj/buy/g1/" title="1万公里内二手车">
                                    1万公里内                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=road_haul&amp;road_haul=2" data-role="filterItemRoadHaul" data-value="2" class="" href="http://www.guazi.com/bj/buy/g2/" title="3万公里内二手车">
                                    3万公里内                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=road_haul&amp;road_haul=3" data-role="filterItemRoadHaul" data-value="3" class="" href="http://www.guazi.com/bj/buy/g3/" title="5万公里内二手车">
                                    5万公里内                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=road_haul&amp;road_haul=4" data-role="filterItemRoadHaul" data-value="4" class="" href="http://www.guazi.com/bj/buy/g4/" title="5万公里以上二手车">
                                    5万公里以上                                </a>
                                                    </div>
                    </div>
                </div>
            </dd>
            <dd class="hoverWidget" gjalog="100000000644000100000010" onmouseover="MouseO(this)" onmouseout="MouseNo(this)">
                <div class="moreitem-btn">
                                        <a href="#">变速箱</a>
                </div>
                <div class="moreitem-box">
                    <div class="m-i-w1">
                        <div class="moreitem-opts">
                            <a class="one" href="http://www.guazi.com/bj/buy/" rel="nofollow">不限</a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=gearbox&amp;gearbox=1" class="" href="http://www.guazi.com/bj/buy/n1/" title="手动档二手车">
                                    手动                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=gearbox&amp;gearbox=2" class="" href="http://www.guazi.com/bj/buy/n2/" title="自动档二手车">
                                    自动                                </a>
                                                    </div>
                    </div>
                </div>
            </dd>
            <dd class="hoverWidget" gjalog="100000000645000100000010" onmouseover="MouseO(this)" onmouseout="MouseNo(this)">
                <div class="moreitem-btn">
                                        <a href="#">排量</a>
                </div>
                <div class="moreitem-box">
                    <div class="m-i-w1">
                        <div class="moreitem-opts">
                            <a class="one" href="http://www.guazi.com/bj/buy/" rel="nofollow">不限</a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=air_displacement&amp;air_displacement=1" class="" href="http://www.guazi.com/bj/buy/j1/" title="1.0L以下二手车">
                                    1.0L以下                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=air_displacement&amp;air_displacement=2" class="" href="http://www.guazi.com/bj/buy/j2/" title="1.0-1.6L二手车">
                                    1.0-1.6L                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=air_displacement&amp;air_displacement=3" class="" href="http://www.guazi.com/bj/buy/j3/" title="1.6-2.0L二手车">
                                    1.6-2.0L                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=air_displacement&amp;air_displacement=4" class="" href="http://www.guazi.com/bj/buy/j4/" title="2.0-3.0L二手车">
                                    2.0-3.0L                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=air_displacement&amp;air_displacement=5" class="" href="http://www.guazi.com/bj/buy/j5/" title="3.0L以上二手车">
                                    3.0L以上                                </a>
                                                    </div>
                    </div>
                </div>
            </dd>
            <dd class="hoverWidget" gjalog="100000000646000100000010" onmouseover="MouseO(this)" onmouseout="MouseNo(this)">
                <div class="moreitem-btn">
                                        <a href="#">排放标准</a>
                </div>
                <div class="moreitem-box">
                    <div class="m-i-w1">
                        <div class="moreitem-opts ">
                            <a data-role="filterItemConfig" data-value="" class="one" href="http://www.guazi.com/bj/buy/" rel="nofollow">不限</a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=vehicle_config&amp;vehicle_config=1" data-role="filterItemConfig" data-value="1" class="" href="http://www.guazi.com/bj/buy/v1/" title="国二及以上二手车">
                                    国二及以上                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=vehicle_config&amp;vehicle_config=2" data-role="filterItemConfig" data-value="2" class="" href="http://www.guazi.com/bj/buy/v2/" title="国三及以上二手车">
                                    国三及以上                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=vehicle_config&amp;vehicle_config=3" data-role="filterItemConfig" data-value="3" class="" href="http://www.guazi.com/bj/buy/v3/" title="国四及以上二手车">
                                    国四及以上                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=vehicle_config&amp;vehicle_config=4" data-role="filterItemConfig" data-value="4" class="" href="http://www.guazi.com/bj/buy/v4/" title="国五二手车">
                                    国五                                </a>
                                                    </div>
                    </div>
                </div>
            </dd>
            <dd class="hoverWidget" gjalog="100000000647000100000010" onmouseover="MouseO(this)" onmouseout="MouseNo(this)">
                <div class="moreitem-btn">
                                        <a href="#">颜色</a>
                </div>
                <div class="moreitem-box">
                    <div class="m-i-w1 moreitem-color">
                        <div class="moreitem-opts">
                            <a class="cur" href="http://www.guazi.com/bj/buy/" rel="nofollow">不限</a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=1" class="" href="http://www.guazi.com/bj/buy/m1/" title="黑色二手车">
                                    <i class="c-lump03"></i>黑色                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=2" class="" href="http://www.guazi.com/bj/buy/m2/" title="白色二手车">
                                    <i class="c-lump04"></i>白色                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=3" class="" href="http://www.guazi.com/bj/buy/m3/" title="银灰色二手车">
                                    <i class="c-lump10"></i>银灰色                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=4" class="" href="http://www.guazi.com/bj/buy/m4/" title="深灰色二手车">
                                    <i class="c-lump15"></i>深灰色                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=6" class="" href="http://www.guazi.com/bj/buy/m6/" title="红色二手车">
                                    <i class="c-lump09"></i>红色                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=10" class="" href="http://www.guazi.com/bj/buy/m10/" title="橙色二手车">
                                    <i class="c-lump11"></i>橙色                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=8" class="" href="http://www.guazi.com/bj/buy/m8/" title="绿色二手车">
                                    <i class="c-lump02"></i>绿色                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=7" class="" href="http://www.guazi.com/bj/buy/m7/" title="蓝色二手车">
                                    <i class="c-lump05"></i>蓝色                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=5" class="" href="http://www.guazi.com/bj/buy/m5/" title="咖啡色二手车">
                                    <i class="c-lump06"></i>咖啡色                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=12" class="" href="http://www.guazi.com/bj/buy/m12/" title="紫色二手车">
                                    <i class="c-lump07"></i>紫色                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=11" class="" href="http://www.guazi.com/bj/buy/m11/" title="香槟色二手车">
                                    <i class="c-lump08"></i>香槟色                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=13" class="" href="http://www.guazi.com/bj/buy/m13/" title="多彩色二手车">
                                    <i class="c-lump12"></i>多彩色                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=9" class="" href="http://www.guazi.com/bj/buy/m9/" title="黄色二手车">
                                    <i class="c-lump13"></i>黄色                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=car_color&amp;car_color=14" class="" href="http://www.guazi.com/bj/buy/m14/" title="其它二手车">
                                    <i class="c-lump14"></i>其它                                </a>
                                                    </div>
                    </div>
                </div>
            </dd>
            <dd class="hoverWidget" gjalog="100000000648000100000010" onmouseover="MouseO(this)" onmouseout="MouseNo(this)">
                <div class="moreitem-btn">
                                        <a href="#">国别</a>
                </div>
                <div class="moreitem-box">
                    <div class="m-i-w1">
                        <div class="moreitem-opts">
                            <a class="one" href="http://www.guazi.com/bj/buy/" rel="nofollow">不限</a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=guobie&amp;guobie=4" class="" href="http://www.guazi.com/bj/buy/u4/" title="德系二手车">
                                    德系                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=guobie&amp;guobie=5" class="" href="http://www.guazi.com/bj/buy/u5/" title="日系二手车">
                                    日系                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=guobie&amp;guobie=2" class="" href="http://www.guazi.com/bj/buy/u2/" title="美系二手车">
                                    美系                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=guobie&amp;guobie=1" class="" href="http://www.guazi.com/bj/buy/u1/" title="法系二手车">
                                    法系                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=guobie&amp;guobie=6" class="" href="http://www.guazi.com/bj/buy/u6/" title="韩系二手车">
                                    韩系                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=guobie&amp;guobie=3" class="" href="http://www.guazi.com/bj/buy/u3/" title="国产二手车">
                                    国产                                </a>
                                                            <a data-gzlog="tracking_type=click&amp;eventid=0070000000000045&amp;filter=guobie&amp;guobie=7" class="" href="http://www.guazi.com/bj/buy/u7/" title="其他二手车">
                                    其他                                </a>
                                                    </div>
                    </div>
                </div>
            </dd>
                        
                    </dl>
    </div>
    
</div>

    <!--排序-->
    <div class="seqBox clearfix">
    <p class="fr seqtype">共找到<b>2929</b>辆
        </p>
    <ul class="sequen">
        <li class="first"><a rel="nofollow" href="http://www.guazi.com/bj/buy/" data-gzlog="tracking_type=click&amp;eventid=0070000000000056&amp;sort=default">默认排序</a></li>
        <li>
            <a rel="nofollow" href="http://www.guazi.com/bj/buy/i1/" title="" data-gzlog="tracking_type=click&amp;eventid=0070000000000056&amp;sort=price">价格<i class="up"></i>
            </a>
        </li>
        <li>
            <a rel="nofollow" href="http://www.guazi.com/bj/buy/i3/" title="" data-gzlog="tracking_type=click&amp;eventid=0070000000000056&amp;sort=cheling">车龄<i class="up"></i>
            </a>
        </li>
        <li>
            <a rel="nofollow" href="http://www.guazi.com/bj/buy/i5/" title="" data-gzlog="tracking_type=click&amp;eventid=0070000000000056&amp;sort=licheng">里程<i class="up"></i>
            </a>
        </li>
    </ul>
</div>
            <!--列表-->
        <div class="list">
    <ul class="list-bigimg clearfix lazyLoadV2">
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2807480@0" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="丰田卡罗拉 2011款 1.8L 自动 标准GL-i" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000144170x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/fa06321448ffe854b954339549464626.jpg" alt="丰田卡罗拉 2011款 1.8L 自动 标准GL-i" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="丰田卡罗拉 2011款 1.8L 自动 标准GL-i" href="http://www.guazi.com/bj/3000144170x.htm" target="_blank" class="info-title">丰田卡罗拉 2011款 1.8L 自动 标准GL-i</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2012年5月上牌</span>                        <em class="shuxian">|</em>                        行驶4.5万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        8.99万
                    </i>
                  </span>
                                                                    </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2807543@1" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众CC 2012款 CC 2.0TSI 双离合 至尊版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000143848x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/45e13d527dc3fb314fe1cc065d53eefd.jpg" alt="大众CC 2012款 CC 2.0TSI 双离合 至尊版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众CC 2012款 CC 2.0TSI 双离合 至尊版" href="http://www.guazi.com/bj/3000143848x.htm" target="_blank" class="info-title">大众CC 2012款 CC 2.0TSI 双离合 至尊版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2012年9月上牌</span>                        <em class="shuxian">|</em>                        行驶12.6万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        17.20万
                    </i>
                  </span>
                                                                            <s>32.90万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2783422@2" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="马自达6 2008款 6 2.0 自动 时尚版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000143267x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/2b4b6a5e64f9d798672273898b3d4d27.jpg" alt="马自达6 2008款 6 2.0 自动 时尚版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="马自达6 2008款 6 2.0 自动 时尚版" href="http://www.guazi.com/bj/3000143267x.htm" target="_blank" class="info-title">马自达6 2008款 6 2.0 自动 时尚版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2008年12月上牌</span>                        <em class="shuxian">|</em>                        行驶8.3万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        5.50万
                    </i>
                  </span>
                                                                            <s>19.50万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2749793@3" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="雪佛兰赛欧-三厢 2010款 1.2 手动 时尚版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000139378x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/b689e6484cdc4ab8dc2dc0614e12ce57.jpg" alt="雪佛兰赛欧-三厢 2010款 1.2 手动 时尚版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="雪佛兰赛欧-三厢 2010款 1.2 手动 时尚版" href="http://www.guazi.com/bj/3000139378x.htm" target="_blank" class="info-title">雪佛兰赛欧-三厢 2010款 1.2 手动 时尚版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2012年7月上牌</span>                        <em class="shuxian">|</em>                        行驶2.9万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        3.22万
                    </i>
                  </span>
                                                                            <s>6.30万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2782790@4" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="别克君越 2010款 2.4 自动 豪华版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000138721x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/a38bdda36d8318ba0ceccc69d6ae694a.jpg" alt="别克君越 2010款 2.4 自动 豪华版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="别克君越 2010款 2.4 自动 豪华版" href="http://www.guazi.com/bj/3000138721x.htm" target="_blank" class="info-title">别克君越 2010款 2.4 自动 豪华版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2010年9月上牌</span>                        <em class="shuxian">|</em>                        行驶9.7万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        10.90万
                    </i>
                  </span>
                                                                            <s>29.60万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2737100@5" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奔驰C级 2010款 C 200 CGI 1.8T 自动 优雅型" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000133331x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/891773c31a3d09febd857d9c0d565d15.jpg" alt="奔驰C级 2010款 C 200 CGI 1.8T 自动 优雅型" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奔驰C级 2010款 C 200 CGI 1.8T 自动 优雅型" href="http://www.guazi.com/bj/3000133331x.htm" target="_blank" class="info-title">奔驰C级 2010款 C 200 CGI 1.8T 自动 优雅型</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2010年10月上牌</span>                        <em class="shuxian">|</em>                        行驶9.4万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        15.50万
                    </i>
                  </span>
                                                                            <s>37.80万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2574440@6" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奇瑞风云2-两厢 2015款 风云2-两厢 1.5 手动 新锐版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000112816x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/af83dc9635fe4ad1988664cefb2dd5db.jpg" alt="奇瑞风云2-两厢 2015款 风云2-两厢 1.5 手动 新锐版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奇瑞风云2-两厢 2015款 风云2-两厢 1.5 手动 新锐版" href="http://www.guazi.com/bj/3000112816x.htm" target="_blank" class="info-title">奇瑞风云2-两厢 2015款 风云2-两厢 1.5 手动 新锐版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2016年3月上牌</span>                        <em class="shuxian">|</em>                        行驶0.3万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        4.00万
                    </i>
                  </span>
                                                                            <s>4.70万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2826530@7" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="本田思域 2009款 思域 1.8 自动 EXi 舒适版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000145806x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/44ff28abeae0d0cabdd1a3ab0a443e36.jpg" alt="本田思域 2009款 思域 1.8 自动 EXi 舒适版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="本田思域 2009款 思域 1.8 自动 EXi 舒适版" href="http://www.guazi.com/bj/3000145806x.htm" target="_blank" class="info-title">本田思域 2009款 思域 1.8 自动 EXi 舒适版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2009年5月上牌</span>                        <em class="shuxian">|</em>                        行驶6.3万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        6.20万
                    </i>
                  </span>
                                                                            <s>16.30万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2822476@8" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众迈腾 2011款 迈腾 1.4TSI 双离合 精英版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000145761x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/f780667bddf09a8fac2801618fdaa9d8.jpg" alt="大众迈腾 2011款 迈腾 1.4TSI 双离合 精英版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众迈腾 2011款 迈腾 1.4TSI 双离合 精英版" href="http://www.guazi.com/bj/3000145761x.htm" target="_blank" class="info-title">大众迈腾 2011款 迈腾 1.4TSI 双离合 精英版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2011年9月上牌</span>                        <em class="shuxian">|</em>                        行驶5.2万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        11.20万
                    </i>
                  </span>
                                                                            <s>22.10万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2825062@9" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="起亚K2-三厢 2012款 1.4 手动 GL纪念版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000145753x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/18fa05c2525c5b34d0fb294f599c8c67.jpg" alt="起亚K2-三厢 2012款 1.4 手动 GL纪念版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="起亚K2-三厢 2012款 1.4 手动 GL纪念版" href="http://www.guazi.com/bj/3000145753x.htm" target="_blank" class="info-title">起亚K2-三厢 2012款 1.4 手动 GL纪念版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2012年6月上牌</span>                        <em class="shuxian">|</em>                        行驶6.8万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        4.40万
                    </i>
                  </span>
                                                                            <s>7.90万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2773070@10" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="现代伊兰特 悦动 2011款 1.6 自动 舒适型" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000141212x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/d302907aa9c8a1ea69b59bc5acb8f1b7.jpg" alt="现代伊兰特 悦动 2011款 1.6 自动 舒适型" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="现代伊兰特 悦动 2011款 1.6 自动 舒适型" href="http://www.guazi.com/bj/3000141212x.htm" target="_blank" class="info-title">现代伊兰特 悦动 2011款 1.6 自动 舒适型</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2014年6月上牌</span>                        <em class="shuxian">|</em>                        行驶5万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        7.20万
                    </i>
                  </span>
                                                                            <s>11.90万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2770890@11" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奔驰C级 2015款 C 200 L 2.0T 自动" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000137198x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/66a028942e7a5ac5f37b1bfebd83be23.jpg" alt="奔驰C级 2015款 C 200 L 2.0T 自动" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奔驰C级 2015款 C 200 L 2.0T 自动" href="http://www.guazi.com/bj/3000137198x.htm" target="_blank" class="info-title">奔驰C级 2015款 C 200 L 2.0T 自动</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2016年1月上牌</span>                        <em class="shuxian">|</em>                        行驶0.9万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        32.00万
                    </i>
                  </span>
                                                                            <s>40.10万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=1563717@12" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众途观 2010款 途观 2.0TSI 自动 四驱旗舰版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/2121206030x.htm">
                                                    <i class="sup-yellow">
                        <img src="{{URL::asset('/templates')}}/images/e52f497cb1b58fdca24ba0d966753789.jpg" alt="大众途观 2010款 途观 2.0TSI 自动 四驱旗舰版" height="194" width="290">
                                降价<br>急售                            </i>
                                            </a>
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众途观 2010款 途观 2.0TSI 自动 四驱旗舰版" href="http://www.guazi.com/bj/2121206030x.htm" target="_blank" class="info-title">大众途观 2010款 途观 2.0TSI 自动 四驱旗舰版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2010年11月上牌</span>                        <em class="shuxian">|</em>                        行驶9.8万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        15.70万
                    </i>
                  </span>
                                                    <span class="ctag-org"><i>已降价</i>3000元</span>
                                                                            <s>32.00万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2794620@13" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="现代瑞纳-三厢 2010款 1.4 自动 GT 时尚型" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000143640x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/95cb479c474015dca93493ff1c8143d5.jpg" alt="现代瑞纳-三厢 2010款 1.4 自动 GT 时尚型" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="现代瑞纳-三厢 2010款 1.4 自动 GT 时尚型" href="http://www.guazi.com/bj/3000143640x.htm" target="_blank" class="info-title">现代瑞纳-三厢 2010款 1.4 自动 GT 时尚型</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2012年1月上牌</span>                        <em class="shuxian">|</em>                        行驶7.9万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        4.80万
                    </i>
                  </span>
                                                                            <s>9.90万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2805617@14" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="路虎发现4 2015款 发现4 3.0T 自动 V6 SC SE（进口）" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000143690x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/7fb39de14f3a624e38471722e2e69e8e.jpg" alt="路虎发现4 2015款 发现4 3.0T 自动 V6 SC SE（进口）" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="路虎发现4 2015款 发现4 3.0T 自动 V6 SC SE（进口）" href="http://www.guazi.com/bj/3000143690x.htm" target="_blank" class="info-title">路虎发现4 2015款 发现4 3.0T 自动 V6 SC SE（进口）</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2015年8月上牌</span>                        <em class="shuxian">|</em>                        行驶1.4万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        73.00万
                    </i>
                  </span>
                                                                            <s>89.90万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2809846@15" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众宝来 2012款 宝来 1.6 手动 舒适版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000143535x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/e9676964266e700dd28f2d45715cda96.jpg" alt="大众宝来 2012款 宝来 1.6 手动 舒适版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众宝来 2012款 宝来 1.6 手动 舒适版" href="http://www.guazi.com/bj/3000143535x.htm" target="_blank" class="info-title">大众宝来 2012款 宝来 1.6 手动 舒适版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2012年9月上牌</span>                        <em class="shuxian">|</em>                        行驶2.8万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        6.30万
                    </i>
                  </span>
                                                                            <s>12.90万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2755796@16" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="雪佛兰爱唯欧-三厢 2011款 1.4 自动 SE" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000144333x.htm">
                                                    <i class="sup-yellow">
                        <img src="{{URL::asset('/templates')}}/images/1a8f9e6da93e59001526a546279b684a.jpg" alt="雪佛兰爱唯欧-三厢 2011款 1.4 自动 SE" height="194" width="290">
                                降价<br>急售                            </i>
                                            </a>
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="雪佛兰爱唯欧-三厢 2011款 1.4 自动 SE" href="http://www.guazi.com/bj/3000144333x.htm" target="_blank" class="info-title">雪佛兰爱唯欧-三厢 2011款 1.4 自动 SE</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2012年2月上牌</span>                        <em class="shuxian">|</em>                        行驶4.6万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        4.50万
                    </i>
                  </span>
                                                    <span class="ctag-org"><i>已降价</i>1000元</span>
                                                                            <s>11.10万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2819617@17" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奇瑞风云2-两厢 2014款 1.5 手动 新青款 版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000145623x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/b44e1bc227be4cf4e3b6a7d58058e187.jpg" alt="奇瑞风云2-两厢 2014款 1.5 手动 新青款 版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奇瑞风云2-两厢 2014款 1.5 手动 新青款 版" href="http://www.guazi.com/bj/3000145623x.htm" target="_blank" class="info-title">奇瑞风云2-两厢 2014款 1.5 手动 新青款 版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2015年1月上牌</span>                        <em class="shuxian">|</em>                        行驶5万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        3.40万
                    </i>
                  </span>
                                                                            <s>5.70万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2817016@18" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="铃木奥拓 2013款 1.0 手动 豪华版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000144497x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/954e94dee641a80fbeaa02d3ada43df5.jpg" alt="铃木奥拓 2013款 1.0 手动 豪华版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="铃木奥拓 2013款 1.0 手动 豪华版" href="http://www.guazi.com/bj/3000144497x.htm" target="_blank" class="info-title">铃木奥拓 2013款 1.0 手动 豪华版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2013年11月上牌</span>                        <em class="shuxian">|</em>                        行驶2.7万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        2.70万
                    </i>
                  </span>
                                                                            <s>5.50万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2808139@19" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="比亚迪G6 2013款 1.5T 手动 尊贵型" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000143904x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/9e089543ce804957545dad31b94a22fb.jpg" alt="比亚迪G6 2013款 1.5T 手动 尊贵型" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="比亚迪G6 2013款 1.5T 手动 尊贵型" href="http://www.guazi.com/bj/3000143904x.htm" target="_blank" class="info-title">比亚迪G6 2013款 1.5T 手动 尊贵型</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2013年4月上牌</span>                        <em class="shuxian">|</em>                        行驶7.6万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        4.98万
                    </i>
                  </span>
                                                                            <s>10.80万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2754850@20" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="长安CX20 2011款 1.3 手动 运动版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000145716x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/20afdce97bb78eafff2c3922f3d6d817.jpg" alt="长安CX20 2011款 1.3 手动 运动版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="长安CX20 2011款 1.3 手动 运动版" href="http://www.guazi.com/bj/3000145716x.htm" target="_blank" class="info-title">长安CX20 2011款 1.3 手动 运动版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2012年3月上牌</span>                        <em class="shuxian">|</em>                        行驶3.9万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        2.70万
                    </i>
                  </span>
                                                                            <s>6.00万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2824697@21" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="铃木奥拓 2013款 1.0 手动 舒适版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000145551x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/f3755c720a2669cc542bf1fa2af14b60.jpg" alt="铃木奥拓 2013款 1.0 手动 舒适版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="铃木奥拓 2013款 1.0 手动 舒适版" href="http://www.guazi.com/bj/3000145551x.htm" target="_blank" class="info-title">铃木奥拓 2013款 1.0 手动 舒适版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2013年9月上牌</span>                        <em class="shuxian">|</em>                        行驶3.5万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        2.50万
                    </i>
                  </span>
                                                                            <s>5.00万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2710174@22" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="长安致尚XT 2013款 1.6 手动 俊酷型" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000144434x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/b8ca846f1692162d97302155a64edc50.jpg" alt="长安致尚XT 2013款 1.6 手动 俊酷型" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="长安致尚XT 2013款 1.6 手动 俊酷型" href="http://www.guazi.com/bj/3000144434x.htm" target="_blank" class="info-title">长安致尚XT 2013款 1.6 手动 俊酷型</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2013年12月上牌</span>                        <em class="shuxian">|</em>                        行驶2.2万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        5.16万
                    </i>
                  </span>
                                                                            <s>8.90万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2772459@23" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众速腾 2014款 速腾 1.4TSI 手动 豪华型(改款)" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000144381x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/64f90265ccf0aef2243c62324a070331.jpg" alt="大众速腾 2014款 速腾 1.4TSI 手动 豪华型(改款)" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众速腾 2014款 速腾 1.4TSI 手动 豪华型(改款)" href="http://www.guazi.com/bj/3000144381x.htm" target="_blank" class="info-title">大众速腾 2014款 速腾 1.4TSI 手动 豪华型(改款)</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2014年8月上牌</span>                        <em class="shuxian">|</em>                        行驶4万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        10.90万
                    </i>
                  </span>
                                                                            <s>16.70万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2820078@24" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奔驰C级 2011款 C 200 CGI 1.8T 自动 优雅型" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000143880x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/51b5e13e54dbab70a3083263c2f5376c.jpg" alt="奔驰C级 2011款 C 200 CGI 1.8T 自动 优雅型" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奔驰C级 2011款 C 200 CGI 1.8T 自动 优雅型" href="http://www.guazi.com/bj/3000143880x.htm" target="_blank" class="info-title">奔驰C级 2011款 C 200 CGI 1.8T 自动 优雅型</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2013年1月上牌</span>                        <em class="shuxian">|</em>                        行驶5.1万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        19.58万
                    </i>
                  </span>
                                                                            <s>37.80万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2800502@25" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奇瑞QQ3 2012款 1.0 手动 时尚版启航型" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000143802x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/0948f6822d0c408b08e4c142879c12a7.jpg" alt="奇瑞QQ3 2012款 1.0 手动 时尚版启航型" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奇瑞QQ3 2012款 1.0 手动 时尚版启航型" href="http://www.guazi.com/bj/3000143802x.htm" target="_blank" class="info-title">奇瑞QQ3 2012款 1.0 手动 时尚版启航型</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2013年6月上牌</span>                        <em class="shuxian">|</em>                        行驶5.6万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        1.80万
                    </i>
                  </span>
                                                                            <s>3.90万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2778891@26" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="荣威550S 2014款 1.8 双离合 智选版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000145634x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/c1ac9ff394020100d25dde06778b67fe.jpg" alt="荣威550S 2014款 1.8 双离合 智选版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="荣威550S 2014款 1.8 双离合 智选版" href="http://www.guazi.com/bj/3000145634x.htm" target="_blank" class="info-title">荣威550S 2014款 1.8 双离合 智选版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2014年12月上牌</span>                        <em class="shuxian">|</em>                        行驶1.4万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        8.50万
                    </i>
                  </span>
                                                                            <s>14.10万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2760989@27" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="雪铁龙C2 2012款 C2 1.4 手动 运动型" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000145616x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/aa19451e7539a5af01a637d8b9c43a0e.jpg" alt="雪铁龙C2 2012款 C2 1.4 手动 运动型" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="雪铁龙C2 2012款 C2 1.4 手动 运动型" href="http://www.guazi.com/bj/3000145616x.htm" target="_blank" class="info-title">雪铁龙C2 2012款 C2 1.4 手动 运动型</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2012年11月上牌</span>                        <em class="shuxian">|</em>                        行驶7万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        3.50万
                    </i>
                  </span>
                                                                            <s>8.00万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2822837@28" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="本田凌派 2013款 凌派 1.8 自动 豪华版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000145579x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/2d4a69a0ea1af32f5fd2cbe1e9a179be.jpg" alt="本田凌派 2013款 凌派 1.8 自动 豪华版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="本田凌派 2013款 凌派 1.8 自动 豪华版" href="http://www.guazi.com/bj/3000145579x.htm" target="_blank" class="info-title">本田凌派 2013款 凌派 1.8 自动 豪华版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2014年9月上牌</span>                        <em class="shuxian">|</em>                        行驶4.9万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        9.60万
                    </i>
                  </span>
                                                                            <s>14.60万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2808895@29" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众捷达 2015款 捷达 1.6 自动 舒适型" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000145488x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/6bcf1d27c2a968c3471e090b350352b1.jpg" alt="大众捷达 2015款 捷达 1.6 自动 舒适型" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众捷达 2015款 捷达 1.6 自动 舒适型" href="http://www.guazi.com/bj/3000145488x.htm" target="_blank" class="info-title">大众捷达 2015款 捷达 1.6 自动 舒适型</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2014年10月上牌</span>                        <em class="shuxian">|</em>                        行驶1万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        7.20万
                    </i>
                  </span>
                                                                            <s>11.80万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2809694@30" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="现代ix35 2010款 2.0 自动 GLS 四驱尊贵型" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000144667x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/8c48d3d3e278749f1737f5383509e871.jpg" alt="现代ix35 2010款 2.0 自动 GLS 四驱尊贵型" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="现代ix35 2010款 2.0 自动 GLS 四驱尊贵型" href="http://www.guazi.com/bj/3000144667x.htm" target="_blank" class="info-title">现代ix35 2010款 2.0 自动 GLS 四驱尊贵型</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2011年1月上牌</span>                        <em class="shuxian">|</em>                        行驶8.4万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        11.00万
                    </i>
                  </span>
                                                                            <s>23.40万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2788979@31" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奔驰S级 2014款 S 320 L 3.0T 自动 豪华型(进口)" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000144267x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/f3c93e6fa288d082240b81bc2bf4ef57.jpg" alt="奔驰S级 2014款 S 320 L 3.0T 自动 豪华型(进口)" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奔驰S级 2014款 S 320 L 3.0T 自动 豪华型(进口)" href="http://www.guazi.com/bj/3000144267x.htm" target="_blank" class="info-title">奔驰S级 2014款 S 320 L 3.0T 自动 豪华型(进口)</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2015年1月上牌</span>                        <em class="shuxian">|</em>                        行驶5.2万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        85.00万
                    </i>
                  </span>
                                                                            <s>120.30万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2817958@32" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奇瑞E5 2011款 1.5 手动 优悦版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000144184x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/35b98000a3448848a970d44dbac48167.jpg" alt="奇瑞E5 2011款 1.5 手动 优悦版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奇瑞E5 2011款 1.5 手动 优悦版" href="http://www.guazi.com/bj/3000144184x.htm" target="_blank" class="info-title">奇瑞E5 2011款 1.5 手动 优悦版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2013年8月上牌</span>                        <em class="shuxian">|</em>                        行驶6.3万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        3.94万
                    </i>
                  </span>
                                                                            <s>7.00万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2794656@33" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众迈腾 2009款 迈腾 1.8TSI 双离合 舒适版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000144114x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/54e0a91235a035a674ecaff1bd30c180.jpg" alt="大众迈腾 2009款 迈腾 1.8TSI 双离合 舒适版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众迈腾 2009款 迈腾 1.8TSI 双离合 舒适版" href="http://www.guazi.com/bj/3000144114x.htm" target="_blank" class="info-title">大众迈腾 2009款 迈腾 1.8TSI 双离合 舒适版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2009年7月上牌</span>                        <em class="shuxian">|</em>                        行驶9.7万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        8.50万
                    </i>
                  </span>
                                                                            <s>24.60万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2818089@34" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="沃尔沃V40 2014款 2.0T 自动 智雅版(进口)" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000144015x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/e6ddc4a9420f779aa3ce3163ee77779d.jpg" alt="沃尔沃V40 2014款 2.0T 自动 智雅版(进口)" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="沃尔沃V40 2014款 2.0T 自动 智雅版(进口)" href="http://www.guazi.com/bj/3000144015x.htm" target="_blank" class="info-title">沃尔沃V40 2014款 2.0T 自动 智雅版(进口)</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2013年10月上牌</span>                        <em class="shuxian">|</em>                        行驶7.2万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        15.30万
                    </i>
                  </span>
                                                                            <s>30.40万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2816150@35" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奥迪A8L 2013款 3.0TFSI 自动 45TFSI Quattro舒适型(进口)" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000143765x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/4b65b187f7a0f866cd7e6bfab5c2ba08.jpg" alt="奥迪A8L 2013款 3.0TFSI 自动 45TFSI Quattro舒适型(进口)" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="奥迪A8L 2013款 3.0TFSI 自动 45TFSI Quattro舒适型(进口)" href="http://www.guazi.com/bj/3000143765x.htm" target="_blank" class="info-title">奥迪A8L 2013款 3.0TFSI 自动 45TFSI Quattro舒适型(进口)</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2014年5月上牌</span>                        <em class="shuxian">|</em>                        行驶5.8万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        57.68万
                    </i>
                  </span>
                                                                            <s>101.10万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2816899@36" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="宝马5系 2010款 520Li 2.0 自动 豪华型" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000143616x.htm">
                                                    <i class="sup-yellow">
                        <img src="{{URL::asset('/templates')}}/images/966c0c55431ccdcb4c02ea449e3122bd.jpg" alt="宝马5系 2010款 520Li 2.0 自动 豪华型" height="194" width="290">
                                降价<br>急售                            </i>
                                            </a>
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="宝马5系 2010款 520Li 2.0 自动 豪华型" href="http://www.guazi.com/bj/3000143616x.htm" target="_blank" class="info-title">宝马5系 2010款 520Li 2.0 自动 豪华型</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2010年6月上牌</span>                        <em class="shuxian">|</em>                        行驶8.6万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        18.10万
                    </i>
                  </span>
                                                    <span class="ctag-org"><i>已降价</i>10000元</span>
                                                                            <s>46.00万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2806375@37" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众夏朗 2013款 夏朗 1.8TSI 双离合 舒适型(进口)" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000143588x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/a143166fe7e5fcfb446bca7d5bdf23e6.jpg" alt="大众夏朗 2013款 夏朗 1.8TSI 双离合 舒适型(进口)" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="大众夏朗 2013款 夏朗 1.8TSI 双离合 舒适型(进口)" href="http://www.guazi.com/bj/3000143588x.htm" target="_blank" class="info-title">大众夏朗 2013款 夏朗 1.8TSI 双离合 舒适型(进口)</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2014年1月上牌</span>                        <em class="shuxian">|</em>                        行驶3.1万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        21.99万
                    </i>
                  </span>
                                                                            <s>35.50万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2799065@38" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="铃木天语SX4-两厢 2011款 1.6 手动 运动版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000143446x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/b09bb19ee49f4f112230af7902427579.jpg" alt="铃木天语SX4-两厢 2011款 1.6 手动 运动版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="铃木天语SX4-两厢 2011款 1.6 手动 运动版" href="http://www.guazi.com/bj/3000143446x.htm" target="_blank" class="info-title">铃木天语SX4-两厢 2011款 1.6 手动 运动版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2011年9月上牌</span>                        <em class="shuxian">|</em>                        行驶1.4万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        5.30万
                    </i>
                  </span>
                                                                            <s>11.80万</s>
                                            </p>
                </div>
            </li>
                                <li>
                <!-- 车源售卖状态显示 -->
                
                
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&amp;eventid=0120000000000057&amp;carid=2585314@39" baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="长安奔奔mini 2012款 1.0 手动 时尚版" target="_blank" class="imgtype" href="http://www.guazi.com/bj/3000111308x.htm">
                                            </a>
                        <img src="{{URL::asset('/templates')}}/images/bf0486f4457d4f77d8be739803e95303.jpg" alt="长安奔奔mini 2012款 1.0 手动 时尚版" height="194" width="290">
                    <p class="infoBox">
                        <a baidu_alog="pc_list_xiangqingye&amp;click&amp;pc_list_xiangqingye_c" title="长安奔奔mini 2012款 1.0 手动 时尚版" href="http://www.guazi.com/bj/3000111308x.htm" target="_blank" class="info-title">长安奔奔mini 2012款 1.0 手动 时尚版</a>
                    </p>
                    <p class="fc-gray">
                                                <span class="">2013年6月上牌</span>                        <em class="shuxian">|</em>                        行驶6.1万公里                    </p>
                    <p class="priType-s">
                  <span>
                    <i class="fc-org priType">
                        2.10万
                    </i>
                  </span>
                                                                            <s>4.30万</s>
                                            </p>
                </div>
            </li>
                <input class="clue_ids" value="2807480@0_2807543@1_2783422@2_2749793@3_2782790@4_2737100@5_2574440@6_2826530@7_2822476@8_2825062@9_2773070@10_2770890@11_1563717@12_2794620@13_2805617@14_2809846@15_2755796@16_2819617@17_2817016@18_2808139@19_2754850@20_2824697@21_2710174@22_2772459@23_2820078@24_2800502@25_2778891@26_2760989@27_2822837@28_2808895@29_2809694@30_2788979@31_2817958@32_2794656@33_2818089@34_2816150@35_2816899@36_2806375@37_2799065@38_2585314@39" type="hidden">
    </ul>
</div>
        
    <!--page-->
    <div class="pageBox" data-widget="app/ms_v2/common/list_page.js#pagination"><ul class="pageLink clearfix"><li><a class="c linkOn"><span>1</span></a></li><li><a href="http://www.guazi.com/bj/buy/o2/" data-gzlog="tracking_type=click&amp;eventid=0060000000000060&amp;pageno=2"><span>2</span></a></li><li><a href="http://www.guazi.com/bj/buy/o3/" data-gzlog="tracking_type=click&amp;eventid=0060000000000060&amp;pageno=3"><span>3</span></a></li><li><a href="http://www.guazi.com/bj/buy/o4/" data-gzlog="tracking_type=click&amp;eventid=0060000000000060&amp;pageno=4"><span>4</span></a></li><li><a href="http://www.guazi.com/bj/buy/o5/" data-gzlog="tracking_type=click&amp;eventid=0060000000000060&amp;pageno=5"><span>5</span></a></li><li><a href="http://www.guazi.com/bj/buy/o6/" data-gzlog="tracking_type=click&amp;eventid=0060000000000060&amp;pageno=6"><span>6</span></a></li><li><a href="http://www.guazi.com/bj/buy/o7/" data-gzlog="tracking_type=click&amp;eventid=0060000000000060&amp;pageno=7"><span>7</span></a></li><li>...</li><li><a href="http://www.guazi.com/bj/buy/o74/" data-gzlog="tracking_type=click&amp;eventid=0060000000000060&amp;pageno=74"><span>74</span></a></li><li><a href="http://www.guazi.com/bj/buy/o2/" data-gzlog="tracking_type=click&amp;eventid=0060000000000059" class="next"><span>下一页</span></a></li></ul></div></div>

<!-- 尾部 -->
    @include('footer')
   <!--seo 链接 -->
    <div class="friendly-link">
    <p class="link-tit">热门品牌：</p>
    <span class="open-box"></span>
    <span class="close-box" data-role="is_show_box"></span>
                        <a href="http://www.guazi.com/bj/dazhong/" target="_blank">北京二手大众</a>
                    <a href="http://www.guazi.com/bj/hyundai/" target="_blank">北京二手现代</a>
                    <a href="http://www.guazi.com/bj/bmw/" target="_blank">北京二手宝马</a>
                    <a href="http://www.guazi.com/bj/benz/" target="_blank">北京二手奔驰</a>
                    <a href="http://www.guazi.com/bj/ford/" target="_blank">北京二手福特</a>
                    <a href="http://www.guazi.com/bj/toyota/" target="_blank">北京二手丰田</a>
                    <a href="http://www.guazi.com/bj/audi/" target="_blank">北京二手奥迪</a>
                    <a href="http://www.guazi.com/bj/richan/" target="_blank">北京二手日产</a>
                    <a href="http://www.guazi.com/bj/buick/" target="_blank">北京二手别克</a>
                    <a href="http://www.guazi.com/bj/chevrolet/" target="_blank">北京二手雪佛兰</a>
                    <a href="http://www.guazi.com/bj/honda/" target="_blank">北京二手本田</a>
                    <a href="http://www.guazi.com/bj/suzuki/" target="_blank">北京二手铃木</a>
                    <a href="http://www.guazi.com/bj/kia/" target="_blank">北京二手起亚</a>
                    <a href="http://www.guazi.com/bj/biaozhi/" target="_blank">北京二手标致</a>
                    <a href="http://www.guazi.com/bj/citroen/" target="_blank">北京二手雪铁龙</a>
                    <a href="http://www.guazi.com/bj/mazda/" target="_blank">北京二手马自达</a>
                    <a href="http://www.guazi.com/bj/byd/" target="_blank">北京二手比亚迪</a>
                    <a href="http://www.guazi.com/bj/hafu/" target="_blank">北京二手哈弗</a>
                    <a href="http://www.guazi.com/bj/changan/" target="_blank">北京二手长安</a>
                    <a href="http://www.guazi.com/bj/changcheng/" target="_blank">北京二手长城</a>
                    <a href="http://www.guazi.com/bj/chery/" target="_blank">北京二手奇瑞</a>
                    <a href="http://www.guazi.com/bj/skoda/" target="_blank">北京二手斯柯达</a>
                    <a href="http://www.guazi.com/bj/jili/" target="_blank">北京二手吉利</a>
                    <a href="http://www.guazi.com/bj/jianghuai/" target="_blank">北京二手江淮</a>
                    <a href="http://www.guazi.com/bj/mini/" target="_blank">北京二手MINI</a>
                    <a href="http://www.guazi.com/bj/brand-xiali/" target="_blank">北京二手夏利</a>
                    <a href="http://www.guazi.com/bj/haima/" target="_blank">北京二手海马</a>
                    <a href="http://www.guazi.com/bj/volvo/" target="_blank">北京二手沃尔沃</a>
                    <a href="http://www.guazi.com/bj/porsche/" target="_blank">北京二手保时捷</a>
                    <a href="http://www.guazi.com/bj/fengxing/" target="_blank">北京二手东风风行</a>
                    <a href="http://www.guazi.com/bj/tj-yiqi/" target="_blank">北京二手一汽</a>
                    <a href="http://www.guazi.com/bj/smart/" target="_blank">北京二手Smart</a>
                    <a href="http://www.guazi.com/bj/landrover/" target="_blank">北京二手路虎</a>
                    <a href="http://www.guazi.com/bj/mitsubishi/" target="_blank">北京二手三菱</a>
                    <a href="http://www.guazi.com/bj/jeep/" target="_blank">北京二手Jeep</a>
            </div>
<div class="friendly-link">
    <p class="link-tit">热门车系：</p>
    <span class="open-box"></span>
    <span class="close-box" data-role="is_show_box"></span>
                        <a href="http://www.guazi.com/bj/fute-fukesi/" target="_blank">北京二手福特福克斯</a>
                    <a href="http://www.guazi.com/bj/suteng/" target="_blank">北京二手大众速腾</a>
                    <a href="http://www.guazi.com/bj/jetta/" target="_blank">北京二手大众捷达</a>
                    <a href="http://www.guazi.com/bj/maiteng/" target="_blank">北京二手大众迈腾</a>
                    <a href="http://www.guazi.com/bj/baolai/" target="_blank">北京二手大众宝来</a>
                    <a href="http://www.guazi.com/bj/bmw-5/" target="_blank">北京二手宝马5系</a>
                    <a href="http://www.guazi.com/bj/h6/" target="_blank">北京二手哈弗H6</a>
                    <a href="http://www.guazi.com/bj/chevrolet-keluzi/" target="_blank">北京二手雪佛兰科鲁兹</a>
                    <a href="http://www.guazi.com/bj/passat/" target="_blank">北京二手大众帕萨特</a>
                    <a href="http://www.guazi.com/bj/benz-c/" target="_blank">北京二手奔驰C级</a>
                    <a href="http://www.guazi.com/bj/golf/" target="_blank">北京二手大众高尔夫</a>
                    <a href="http://www.guazi.com/bj/xiandai-ix35/" target="_blank">北京二手现代ix35</a>
                    <a href="http://www.guazi.com/bj/langyi/" target="_blank">北京二手大众朗逸</a>
                    <a href="http://www.guazi.com/bj/bmw-3/" target="_blank">北京二手宝马3系</a>
                    <a href="http://www.guazi.com/bj/mazida6/" target="_blank">北京二手马自达马自达...</a>
                    <a href="http://www.guazi.com/bj/audi-a6l/" target="_blank">北京二手奥迪A6L</a>
                    <a href="http://www.guazi.com/bj/sunata/" target="_blank">北京二手现代索纳塔</a>
                    <a href="http://www.guazi.com/bj/dazhong-polo/" target="_blank">北京二手大众Polo</a>
                    <a href="http://www.guazi.com/bj/mondeo/" target="_blank">北京二手福特蒙迪欧</a>
                    <a href="http://www.guazi.com/bj/audi-a4l/" target="_blank">北京二手奥迪A4L</a>
                    <a href="http://www.guazi.com/bj/tuguan/" target="_blank">北京二手大众途观</a>
                    <a href="http://www.guazi.com/bj/yilante-yuedong/" target="_blank">北京二手现代伊兰特 ...</a>
                    <a href="http://www.guazi.com/bj/i-honda-crv/" target="_blank">北京二手本田CR-V</a>
                    <a href="http://www.guazi.com/bj/tianlai/" target="_blank">北京二手日产天籁</a>
                    <a href="http://www.guazi.com/bj/shijia/" target="_blank">北京二手雪铁龙世嘉</a>
                    <a href="http://www.guazi.com/bj/kaluola/" target="_blank">北京二手丰田卡罗拉</a>
                    <a href="http://www.guazi.com/bj/benz-e/" target="_blank">北京二手奔驰E级</a>
                    <a href="http://www.guazi.com/bj/buick-junwei/" target="_blank">北京二手别克君威</a>
                    <a href="http://www.guazi.com/bj/mingruihaiwai/" target="_blank">北京二手斯柯达明锐</a>
                    <a href="http://www.guazi.com/bj/i-yage/" target="_blank">北京二手本田雅阁</a>
                    <a href="http://www.guazi.com/bj/qida/" target="_blank">北京二手日产骐达</a>
                    <a href="http://www.guazi.com/bj/c5-jinkou/" target="_blank">北京二手雪铁龙C5</a>
                    <a href="http://www.guazi.com/bj/yinglangxt/" target="_blank">北京二手别克英朗</a>
                    <a href="http://www.guazi.com/bj/buick-junyue/" target="_blank">北京二手别克君越</a>
                    <a href="http://www.guazi.com/bj/santana/" target="_blank">北京二手大众桑塔纳</a>
            </div>
<div class="friendly-link">
    <p class="link-tit">友情链接：</p>
    <span class="open-box"></span>
    <span class="close-box" data-role="is_show_box"></span>
                        <a href="http://jiaxiao.jxedt.com/bj/">北京驾校</a>
            </div>

<div class="friendly-link">
    <p class="link-tit">热门城市：</p>
    <span class="open-box"></span>
    <span class="close-box" data-role="is_show_box"></span>
                        <a href="http://www.guazi.com/www/">全国二手车</a>
                    <a href="http://www.guazi.com/bj/">北京二手车</a>
                    <a href="http://www.guazi.com/sh/">上海二手车</a>
                    <a href="http://www.guazi.com/tj/">天津二手车</a>
                    <a href="http://www.guazi.com/tangshan/">唐山二手车</a>
                    <a href="http://www.guazi.com/cq/">重庆二手车</a>
                    <a href="http://www.guazi.com/cd/">成都二手车</a>
                    <a href="http://www.guazi.com/hz/">杭州二手车</a>
                    <a href="http://www.guazi.com/su/">苏州二手车</a>
                    <a href="http://www.guazi.com/nj/">南京二手车</a>
                    <a href="http://www.guazi.com/zz/">郑州二手车</a>
                    <a href="http://www.guazi.com/jn/">济南二手车</a>
                    <a href="http://www.guazi.com/qd/">青岛二手车</a>
                    <a href="http://www.guazi.com/sy/">沈阳二手车</a>
                    <a href="http://www.guazi.com/cc/">长春二手车</a>
                    <a href="http://www.guazi.com/dl/">大连二手车</a>
                    <a href="http://www.guazi.com/fushun/">抚顺二手车</a>
                    <a href="http://www.guazi.com/ty/">太原二手车</a>
                    <a href="http://www.guazi.com/cs/">长沙二手车</a>
                    <a href="http://www.guazi.com/hf/">合肥二手车</a>
                    <a href="http://www.guazi.com/wh/">武汉二手车</a>
                    <a href="http://www.guazi.com/xa/">西安二手车</a>
                    <a href="http://www.guazi.com/dazhou/">达州二手车</a>
                    <a href="http://www.guazi.com/xm/">厦门二手车</a>
                    <a href="http://www.guazi.com/fz/">福州二手车</a>
                    <a href="http://www.guazi.com/gz/">广州二手车</a>
                    <a href="http://www.guazi.com/foshan/">佛山二手车</a>
                    <a href="http://www.guazi.com/weifang/">潍坊二手车</a>
                    <a href="http://www.guazi.com/wx/">无锡二手车</a>
                    <a href="http://www.guazi.com/xuzhou/">徐州二手车</a>
                    <a href="http://www.guazi.com/nc/">南昌二手车</a>
                    <a href="http://www.guazi.com/nn/">南宁二手车</a>
                    <a href="http://www.guazi.com/yantai/">烟台二手车</a>
                    <a href="http://www.guazi.com/km/">昆明二手车</a>
                    <a href="http://www.guazi.com/dg/">东莞二手车</a>
                    <a href="http://www.guazi.com/hrb/">哈尔滨二手车</a>
                    <a href="http://www.guazi.com/sjz/">石家庄二手车</a>
                    <a href="http://www.guazi.com/nmg/">呼和浩特二手车</a>
                    <a href="http://www.guazi.com/sz/">深圳二手车</a>
                    <a href="http://www.guazi.com/quanzhou/">泉州二手车</a>
                    <a href="http://www.guazi.com/nantong/">南通二手车</a>
                    <a href="http://www.guazi.com/shaoxing/">绍兴二手车</a>
                    <a href="http://www.guazi.com/huizhou/">惠州二手车</a>
                    <a href="http://www.guazi.com/zhongshan/">中山二手车</a>
                    <a href="http://www.guazi.com/zhangzhou/">漳州二手车</a>
                    <a href="http://www.guazi.com/anshan/">鞍山二手车</a>
                    <a href="http://www.guazi.com/jining/">济宁二手车</a>
                    <a href="http://www.guazi.com/luoyang/">洛阳二手车</a>
                    <a href="http://www.guazi.com/zhuzhou/">株洲二手车</a>
                    <a href="http://www.guazi.com/tieling/">铁岭二手车</a>
                    <a href="http://www.guazi.com/linyi/">临沂二手车</a>
                    <a href="http://www.guazi.com/mianyang/">绵阳二手车</a>
                    <a href="http://www.guazi.com/xiangyang/">襄阳二手车</a>
                    <a href="http://www.guazi.com/changzhou/">常州二手车</a>
                    <a href="http://www.guazi.com/baoding/">保定二手车</a>
                    <a href="http://www.guazi.com/handan/">邯郸二手车</a>
                    <a href="http://www.guazi.com/liuzhou/">柳州二手车</a>
                    <a href="http://www.guazi.com/yangzhou/">扬州二手车</a>
                    <a href="http://www.guazi.com/suqian/">宿迁二手车</a>
                    <a href="http://www.guazi.com/yichang/">宜昌二手车</a>
                    <a href="http://www.guazi.com/xinxiang/">新乡二手车</a>
                    <a href="http://www.guazi.com/luan/">六安二手车</a>
                    <a href="http://www.guazi.com/liaoyang/">辽阳二手车</a>
                    <a href="http://www.guazi.com/xiangtan/">湘潭二手车</a>
                    <a href="http://www.guazi.com/wei/">威海二手车</a>
                    <a href="http://www.guazi.com/yiwu/">义乌二手车</a>
                    <a href="http://www.guazi.com/jilin/">吉林二手车</a>
                    <a href="http://www.guazi.com/gy/">贵阳二手车</a>
                    <a href="http://www.guazi.com/daqing/">大庆二手车</a>
                    <a href="http://www.guazi.com/songyuan/">松原二手车</a>
                    <a href="http://www.guazi.com/jiaxing/">嘉兴二手车</a>
                    <a href="http://www.guazi.com/jiamusi/">佳木斯二手车</a>
                    <a href="http://www.guazi.com/cangzhou/">沧州二手车</a>
                    <a href="http://www.guazi.com/jiujiang/">九江二手车</a>
                    <a href="http://www.guazi.com/xuchang/">许昌二手车</a>
                    <a href="http://www.guazi.com/kaifeng/">开封二手车</a>
                    <a href="http://www.guazi.com/jstaizhou/">泰州二手车</a>
                    <a href="http://www.guazi.com/ganzhou/">赣州二手车</a>
                    <a href="http://www.guazi.com/zhenjiang/">镇江二手车</a>
                    <a href="http://www.guazi.com/wuhu/">芜湖二手车</a>
                    <a href="http://www.guazi.com/maanshan/">马鞍山二手车</a>
                    <a href="http://www.guazi.com/datong/">大同二手车</a>
                    <a href="http://www.guazi.com/yuncheng/">运城二手车</a>
                    <a href="http://www.guazi.com/nanyang/">南阳二手车</a>
                    <a href="http://www.guazi.com/baotou/">包头二手车</a>
                    <a href="http://www.guazi.com/dezhou/">德州二手车</a>
                    <a href="http://www.guazi.com/taian/">泰安二手车</a>
                    <a href="http://www.guazi.com/guangan/">广安二手车</a>
                    <a href="http://www.guazi.com/qujing/">曲靖二手车</a>
                    <a href="http://www.guazi.com/chuxiong/">楚雄二手车</a>
                    <a href="http://www.guazi.com/zibo/">淄博二手车</a>
                    <a href="http://www.guazi.com/zunyi/">遵义二手车</a>
                    <a href="http://www.guazi.com/luzhou/">泸州二手车</a>
                    <a href="http://www.guazi.com/suining/">遂宁二手车</a>
                    <a href="http://www.guazi.com/deyang/">德阳二手车</a>
                    <a href="http://www.guazi.com/yibin/">宜宾二手车</a>
                    <a href="http://www.guazi.com/nanchong/">南充二手车</a>
                    <a href="http://www.guazi.com/meishan/">眉山二手车</a>
                    <a href="http://www.guazi.com/jinhua/">金华二手车</a>
                    <a href="http://www.guazi.com/liupanshui/">六盘水二手车</a>
                    <a href="http://www.guazi.com/yancheng/">盐城二手车</a>
                    <a href="http://www.guazi.com/lianyungang/">连云港二手车</a>
                    <a href="http://www.guazi.com/jinzhong/">晋中二手车</a>
                    <a href="http://www.guazi.com/xinyang/">信阳二手车</a>
                    <a href="http://www.guazi.com/shiyan/">十堰二手车</a>
                    <a href="http://www.guazi.com/suizhou/">随州二手车</a>
                    <a href="http://www.guazi.com/linfen/">临汾二手车</a>
                    <a href="http://www.guazi.com/changzhi/">长治二手车</a>
                    <a href="http://www.guazi.com/jiangmen/">江门二手车</a>
                    <a href="http://www.guazi.com/qinhuangdao/">秦皇岛二手车</a>
                    <a href="http://www.guazi.com/nb/">宁波二手车</a>
                    <a href="http://www.guazi.com/eerduosi/">鄂尔多斯二手车</a>
                    <a href="http://www.guazi.com/gxyulin/">玉林二手车</a>
                    <a href="http://www.guazi.com/xingtai/">邢台二手车</a>
                    <a href="http://www.guazi.com/qiqihaer/">齐齐哈尔二手车</a>
                    <a href="http://www.guazi.com/chengde/">承德二手车</a>
                    <a href="http://www.guazi.com/lz/">兰州二手车</a>
                    <a href="http://www.guazi.com/jingmen/">荆门二手车</a>
                    <a href="http://www.guazi.com/jian/">吉安二手车</a>
                    <a href="http://www.guazi.com/enshi/">恩施二手车</a>
                    <a href="http://www.guazi.com/jingzhou/">荆州二手车</a>
                    <a href="http://www.guazi.com/sanming/">三明二手车</a>
                    <a href="http://www.guazi.com/huaian/">淮安二手车</a>
                    <a href="http://www.guazi.com/huangshi/">黄石二手车</a>
                    <a href="http://www.guazi.com/xiaogan/">孝感二手车</a>
                    <a href="http://www.guazi.com/jiaozuo/">焦作二手车</a>
                    <a href="http://www.guazi.com/beihai/">北海二手车</a>
                    <a href="http://www.guazi.com/yingkou/">营口二手车</a>
                    <a href="http://www.guazi.com/tongliao/">通辽二手车</a>
                    <a href="http://www.guazi.com/bazhong/">巴中二手车</a>
                    <a href="http://www.guazi.com/hengshui/">衡水二手车</a>
                    <a href="http://www.guazi.com/zaozhuang/">枣庄二手车</a>
                    <a href="http://www.guazi.com/heze/">菏泽二手车</a>
                    <a href="http://www.guazi.com/anyang/">安阳二手车</a>
                    <a href="http://www.guazi.com/baise/">百色二手车</a>
                    <a href="http://www.guazi.com/jxyichun/">宜春二手车</a>
                    <a href="http://www.guazi.com/anqing/">安庆二手车</a>
                    <a href="http://www.guazi.com/longyan/">龙岩二手车</a>
                    <a href="http://www.guazi.com/panzhihua/">攀枝花二手车</a>
                    <a href="http://www.guazi.com/yaan/">雅安二手车</a>
                    <a href="http://www.guazi.com/zjtaizhou/">台州二手车</a>
                    <a href="http://www.guazi.com/huzhou/">湖州二手车</a>
                    <a href="http://www.guazi.com/wenzhou/">温州二手车</a>
                    <a href="http://www.guazi.com/jinzhou/">锦州二手车</a>
                    <a href="http://www.guazi.com/qinzhou/">钦州二手车</a>
                    <a href="http://www.guazi.com/langfang/">廊坊二手车</a>
                    <a href="http://www.guazi.com/yanbian/">延边二手车</a>
                    <a href="http://www.guazi.com/putian/">莆田二手车</a>
                    <a href="http://www.guazi.com/rizhao/">日照二手车</a>
                    <a href="http://www.guazi.com/neijiang/">内江二手车</a>
                    <a href="http://www.guazi.com/fuyang/">阜阳二手车</a>
                    <a href="http://www.guazi.com/jxfuzhou/">抚州二手车</a>
                    <a href="http://www.guazi.com/ziyang/">资阳二手车</a>
                    <a href="http://www.guazi.com/changde/">常德二手车</a>
                    <a href="http://www.guazi.com/zhaoqing/">肇庆二手车</a>
                    <a href="http://www.guazi.com/zhuhai/">珠海二手车</a>
                    <a href="http://www.guazi.com/shantou/">汕头二手车</a>
                    <a href="http://www.guazi.com/dali/">大理二手车</a>
                    <a href="http://www.guazi.com/leshan/">乐山二手车</a>
                    <a href="http://www.guazi.com/zigong/">自贡二手车</a>
                    <a href="http://www.guazi.com/gl/">桂林二手车</a>
                    <a href="http://www.guazi.com/shangrao/">上饶二手车</a>
                    <a href="http://www.guazi.com/jingdezhen/">景德镇二手车</a>
                    <a href="http://www.guazi.com/pingdingshan/">平顶山二手车</a>
                    <a href="http://www.guazi.com/yiyang/">益阳二手车</a>
                    <a href="http://www.guazi.com/yueyang/">岳阳二手车</a>
                    <a href="http://www.guazi.com/ningde/">宁德二手车</a>
                    <a href="http://www.guazi.com/chifeng/">赤峰二手车</a>
                    <a href="http://www.guazi.com/baoji/">宝鸡二手车</a>
                    <a href="http://www.guazi.com/siping/">四平二手车</a>
                    <a href="http://www.guazi.com/dongying/">东营二手车</a>
                    <a href="http://www.guazi.com/binzhou/">滨州二手车</a>
                    <a href="http://www.guazi.com/luohe/">漯河二手车</a>
                    <a href="http://www.guazi.com/zhumadian/">驻马店二手车</a>
                    <a href="http://www.guazi.com/shangqiu/">商丘二手车</a>
                    <a href="http://www.guazi.com/zhangjiakou/">张家口二手车</a>
                    <a href="http://www.guazi.com/mudanjiang/">牡丹江二手车</a>
                    <a href="http://www.guazi.com/guangyuan/">广元二手车</a>
                    <a href="http://www.guazi.com/qiannan/">黔南二手车</a>
                    <a href="http://www.guazi.com/liaocheng/">聊城二手车</a>
                    <a href="http://www.guazi.com/yangquan/">阳泉二手车</a>
                    <a href="http://www.guazi.com/">二手车</a>
            </div>



        <!--公司信息-->
    <p style="text-align:center;line-height:20px;font-size:12px;color:#666; padding-top:20px;">
    车好多旧机动车经纪（北京）有限公司   
    北京市丰台区南四环中路260号北京新发地汽车交易市场旧车经营区B区178号   
    010-57317000
</p></div>

    

<input class="hide_gich" value="&amp; &amp;pagetype=list&amp;city=bj&amp;currentUrl=http%3A%2F%2Fwww.guazi.com%2Fbj%2Fbuy%2F&amp;puid=&amp;line=c2c&amp;tag=" type="hidden">
<input data-role="dataSource" class="dataSourceButton" data-source="[]" type="hidden">


</body></html>
<script type="text/javascript">
    $('#brandAll').mouseover(function(){
        $('.otherbrand').attr('style','display:block');
    })
    $('#brandAll').mouseout(function(){
        $('.otherbrand').attr('style','display:none');
    })
    // $('.moreitem-btn').mouseover(function(){
    function MouseO(obj){
        $(obj).attr('class','hoverWidget active');
    }
    function MouseNo(obj){
         $(obj).attr('class','hoverWidget');
    }
</script>