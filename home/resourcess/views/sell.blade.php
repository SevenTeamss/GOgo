<!DOCTYPE html>
<html><head _tracker="{&quot;pagetype&quot;:&quot;sell&quot;}"><style type="text/css">object {outline:none;}</style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="renderer" content="webkit">
<title>【北京二手车评估网_北京二手车】-北京瓜子二手车直卖网</title>
<meta name="keywords" content="北京二手车评估,北京二手车评估计算器">
<meta name="description" content="北京瓜子二手车直卖网在线二手车评估,专业资深的北京二手车评估师，为您的爱车进行专业的评估检查，同时北京二手车评估计算器可以为您提供简单的二手车价格评估。">

    <meta http-equiv="P3P" content="CP=&quot;CAO PSA OUR&quot;">
    <meta name="baidu-site-verification" content="BPGd9vyB6h">
    <meta name="360-site-verification" content="3c22335c23344347291dbb8273c12f1b">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="sogou_site_verification" content="hJqKUw5CFE">
    <meta name="shenma-site-verification" content="47174ef55ff6318bd3c48a846b608ee8_1446541131">
    <link rel="shortcut icon" type="image/x-icon" href="http://www.guazi.com/favicon.ico" media="screen">
    <link rel="canonical" href="http://www.guazi.com/bj/sell/">
    <script src="{{URL::asset('/templates')}}/js/zoom1.js"></script>
	<script src="{{URL::asset('/templates')}}/js/hm.js"></script>
	<script src="{{URL::asset('/templates')}}/js/base.js"></script>
	<script src="{{URL::asset('/templates')}}/js/sell.js"></script>
    

<body>
    <!-- 引入头部 -->
    @include('header')
<div class="img-0 sell_form" data-domain="bj" data-type="sell" data-st="0">
    <form class="sel-box sell_panel_maskNav">
        <span class="valid-error"></span>
        <p class="sel-tit">10秒提交车辆信息，帮你卖车</p>
        <ul class="sel-lists brandSource sell_select" data-type="sell">
                <li>
                    <label>城<em class="wd-2em"></em>市</label>
                    <div class="comselect citySelect sell_citySelect" data-event="click" data-input-id="city">
                        <input data-role="text" id="cts" readonly="true" class="input-txt" value="北京" placeholder="北京" type="text">
                        <div class="downbox">
                            <ul data-role="list" style="min-width: 208px; max-height: 300px; overflow-y: auto;">
                            @foreach($region as $k=>$v)
                            <li>
                            <a href="javascript:void(0)"; onclick="city('{{$v['city_name']}}')">{{$v['city_name']}}</a></li>
                            @endforeach
                            </ul>                       
                        </div>
                        <input data-role="textVal" id="city" value="bj" type="hidden">
                    </div>
                </li>
            <li>
            <label>品牌车系</label>
                <div data-role="contain" class="select-box long-ipt sel-car-vin">
                    <input id="dp1" data-role="brandText" class="input-txt" placeholder="请选择品牌车系" autocomplete="off" type="text" >
                    <div data-role="selectBrand" class="ucarselecttype hide" id="ucarselecttype" style="display:none;" >
                        <div class="ucarselecttype-pinpai" >
                            <div class="left-list fl" data-role="chars">
                            </div>
                        </div>
                    </div>
                    <div data-role="selectTag" class="ucarselecttype hide" style="display:none">
                        <div class="ucarselecttype-tag ">
                            <div class="ucarselecttype-pinpaibottom ucarselecttype-pinpaibottom-2" data-role="tags">
                            </div>
                        </div>
                    </div>

                    <input data-role="hidden" id="minor" type="hidden">
                    <input data-role="tagHidden2" name="tag" id="tag" type="hidden">
                </div>
            </li>
            <li>
                <label>手机号码</label>
                <input class="input-txt input-phone" id="phone" placeholder="请输入手机号码(必填)" type="text">
            </li>
        </ul>
        <input name="source_type" value="0" type="hidden">
        <button class="submit" data-clue-entry="01">提交</button>

<script src="{{URL::asset('/templates/js/jq.js')}}"></script>
<script>
$(window).load(function(){
    var url='lists';
    var data={};
    $.get(url,data,function(msg){
        $('#ucarselecttype').html(msg);
    });


});

function city(ts)
{ 
    var ct=$('#cts').val();
    $('#cts').val(ts);
}


        
        // var dp1=$('#dp1').val();
        // $('#dp1').val(ts);
 
</script>



        <p class="submit-tip">免费咨询电话&nbsp;<span style="color:#22ac38">400-029-6196</span></p>
                    <p class="ass-entra">卖车定价 做到心中有数
                <a href="javascript:void(0)" id="quickEvalu" data-role="navbtn" data-maskname="mask2" data-gzlog="tracking_type=click&amp;eventid=0180000000000065" baidu_alog="pc_sell_gujia&amp;click&amp;pc_sell_GuGejia_c">快速估个价&gt;</a>
            </p>
            </form>
    <div class="sel-suc successPop sell_panel_maskNav" style="display: none" gjalog="100000001144000100000010@source_type=0">
        <div class="ico-suc"></div>
        <p class="txt-suc">提交成功！</p>
        <p class="con-kefu"><span class="successMsg" style="color:#545454;font-family: 'Microsoft Yahei','arial','sans-serif'">瓜子客服将在30分钟内与您联系</span>，<br>为您提供免费卖车服务，请保持电话畅通。</p>
        <!--<p class="con-kefu">瓜子客服将在30分钟内与您联系，<br>为您提供免费卖车服务，请保持电话畅通。</p>-->
        <p class="back">
            <a href="http://www.guazi.com/bj/buy" target="_blank" gjalog="100000001098000100000010">查看其它好车&gt;</a>
            <!--<a href="http://www.ganji.com/vehicle/pinggu.php?domain=--><!--" target="_blank" gjalog="100000001099000100000010">给爱车估个价&gt;</a>-->
                            <a data-role="navbtn" data-maskname="mask2" target="_blank" gjalog="100000001099000100000010">给爱车估个价&gt;</a>
                    </p>
        <p class="qu-in"><a href="http://www.sojump.com/jq/7052540.aspx">调查问卷：为什么选择瓜子二手车？</a></p>
        <p class="kefu-phone">瓜子客服工作时间&nbsp;&nbsp;8:00 ~ 21:00</p>
    </div>
</div>
<ul class="sell-step clearfix">
    <li class="icon icon-1">
        <i></i>
        <p>
            <span>提交信息</span>
            <br>
            填写表单或拨打
            <br>
            400-029-6196预约
        </p>
    </li>
    <li class="next-icon">&gt;</li>
    <li class="icon icon-2">
        <i></i>
        <p>
            <span>上门服务</span>
            <br>
            专业评估团队免
            <br>
            费上门登记验车
        </p>
    </li>
    <li class="next-icon">&gt;</li>
    <li class="icon icon-3">
        <i></i>
        <p>
            <span>买家看车</span>
            <br>
            交易顾问带领买
            <br>
            家上门看车
        </p>
    </li>
    <li class="next-icon">&gt;</li>
    <li class="icon icon-4">
        <i></i>
        <p>
            <span>交易过户</span>
            <br>
            瓜子二手车直卖网帮你
            <br>
            办过户
        </p>
    </li>
</ul>
<div class="img-txt img-txt-1 clearfix">
    <div class="img-1 fl"></div>
    <div class="txt txt-1 fr">
        <span>直面个人买家 好车卖出好价</span><br>
        拒绝黄牛车商，避免重重压价，每车多卖20%
    </div>
</div> 

<div class="img-txt img-txt-2 clearfix">
    <div class="img-2 fr"></div>
    <div class="txt txt-2 fl">
        <span>免费上门服务 一站式解决所有问题</span><br>
        登记车辆，建议售价，找买家，帮过户，瓜子二手车直卖网全部帮你搞定
    </div>
</div>

<div class="img-txt img-txt-3 clearfix">
    <div class="img-3 fl"></div>
    <div class="txt txt-3 fr">
        <span>海量买家 极速成交</span><br>
        每天超过百万人次浏览，平均一周即可成交
    </div>
</div> 

<div class="img-txt img-txt-4 clearfix">
    <div class="img-4 fr"></div>
    <div class="txt txt-4 fl">
        <span>无需寄存 边开边卖</span><br>
        不用寄存车辆，代售期间可以一直开着爱车，直到交易成功
    </div>
</div>
<div class="con-tit">用户怎么说</div>

<div class="slide slide_sell" data-interval="5000">
    <a href="###" class="next" data-role="next"></a>
    <a href="###" class="prev" data-role="prev"></a>
    <div class="slide-con">
        <ul style="margin-left: 0px;" data-role="list">
            <li style="" data-role="item">
                <div class="user-info clearfix">
                    <div class="user-phone user-5"></div>
                    <div class="user-txt">
                        <p class="p1">唐先生</p>
                        <p class="p2">别克凯越 6万</p>
                    </div>
                </div>
                <div class="detail-txt">
                    成都武侯  5年|8万公里<br>
                    因为急需用钱，但车子刚升级过，不想便宜卖出去，还好有瓜子二手车直卖网，车子上线两天就卖出去了，价格也合适，解了自己燃眉之急。瓜子二手车直卖网，果真靠谱！
                </div>
            </li><li style="" data-role="item">
                <div class="user-info clearfix">
                    <div class="user-phone user-6"></div>
                    <div class="user-txt">
                        <p class="p1">李先生</p>
                        <p class="p2">马自达3(进口) 8万</p>
                    </div>
                </div>
                <div class="detail-txt">
                    北京海淀  4年|5.2万公里<br>
                    自己卖车怕被人坑，被压价，在常去的汽车论坛看到瓜子二手车直卖网之后慕名而来，果然没让我失望。瓜子二手车直卖网的评估师上门评估之后会给出建议售价，不仅不收取任何费用还能全程陪同服务，方便省事，真是太赞了。
                </div>
            </li><li style="" data-role="item">
                <div class="user-info clearfix">
                    <div class="user-phone user-7"></div>
                    <div class="user-txt">
                        <p class="p1">赵先生</p>
                        <p class="p2">本田CR-V 15.4万</p>
                    </div>
                </div>
                <div class="detail-txt">
                    成都龙泉驿   3年|8万公里<br>
                    很讨厌卖车复杂的手续里程，交给瓜子二手车直卖网，所有程序他们来跑，车在售卖期间也可以自己一直开着，省了我不少时间。
                </div>
            </li><li style="" data-role="item">
                <div class="user-info clearfix">
                    <div class="user-phone user-8"></div>
                    <div class="user-txt">
                        <p class="p1">徐女士</p>
                        <p class="p2">宝马320i 30.2万</p>
                    </div>
                </div>
                <div class="detail-txt">
                    长春南关  1年|2.1万公里<br>
                    这辆3系只买了一年，自己也很爱惜，可是考虑到家里添了宝宝，想换个空间大点的suv，只能忍痛割爱了，没想到瓜子二手车直卖网很快带来了合适的买家，谈了之后也放心的把爱车交给她了！
                </div>
            </li><li style="" data-role="item">
                <div class="user-info clearfix">
                    <div class="user-phone user-9"></div>
                    <div class="user-txt">
                        <p class="p1">霍先生</p>
                        <p class="p2">大众捷达 9万</p>
                    </div>
                </div>
                <div class="detail-txt">
                    天津津南  2年3.8万公里<br>
                    很满意这次的卖车体验，要是自己去找4s店卖车要少少卖5千，自己找买家又不知道要等到什么时候，瓜子二手车直卖网很好的解决了我的问题。现在二手车行业太混乱，太需要瓜子二手车直卖网这样的正能量了！
                </div>
            </li><li style="" data-role="item">
                <div class="user-info clearfix">
                    <div class="user-phone user-1"></div>
                    <div class="user-txt">
                        <p class="p1">严先生</p>
                        <p class="p2">丰田凯美瑞 17.0万</p>
                    </div>
                </div>
                <div class="detail-txt">
                    青岛四方  3年|4万公里<br>
                    第一次试着在网上卖车，没想到几天就卖出去了，价格也比去4S店置换合适很多，最后愉快的卖了车，跟买家聊得挺好，还互相加了微信。         
                </div>
            </li><li style="" data-role="item">
                <div class="user-info clearfix">
                    <div class="user-phone user-2"></div>
                    <div class="user-txt">
                        <p class="p1">刘先生</p>
                        <p class="p2">本田锋范 7.2万</p>
                    </div>
                </div>
                <div class="detail-txt">
                    上海奉贤  3年|5万公里<br>
                    瓜子二手车直卖网果然靠谱，不仅没收一分钱，还能上门服务，帮着过户，整个过程都很认真很细致；平时工作很忙，根本没时间来弄这些复杂的卖车手续，瓜子二手车直卖网的全程服务太让人省心了！
                </div>
            </li><li style="" data-role="item">
                <div class="user-info clearfix">
                    <div class="user-phone user-3"></div>
                    <div class="user-txt">
                        <p class="p1">李女士</p>
                        <p class="p2">奔驰CLS300 55万</p>
                    </div>
                </div>
                <div class="detail-txt">
                    北京西城  2年|0.6万公里<br>
                    车子很少用，虽然买来三年了，只跑了一万公里不到。最近想要出手，听朋友介绍了瓜子二手车直卖网，结果很快就有买家看车了，最后成交价格也比4s店给的高出不少。
                </div>
            </li><li style="" data-role="item">
                <div class="user-info clearfix">
                    <div class="user-phone user-4"></div>
                    <div class="user-txt">
                        <p class="p1">王先生</p>
                        <p class="p2">奥迪A5 25.8万</p>
                    </div>
                </div>
                <div class="detail-txt">
                    杭州上城  4年|6万公里<br>
                    车开了4年，一直想换大气点的车，最近又打算自驾去西藏，所以下定决心换车。在瓜子二手车直卖网上卖车很顺利，结果不仅在这里卖了A5还入了一辆普拉多，卖车买车一起办，特别方便，还有优惠！
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="con-tit">我们是谁</div>
<div class="haoche-rec">
      瓜子二手车直卖网是国内专业的互联网个人二手车服务平台，致力于为买卖双方提供优质的个人二手车交易服务，每天有超过百万人通过我们选车。<br>
      瓜子二手车直卖网专注于个人二手车交易，旨在让买卖双方直接交易，免去黄牛二手车商的重重压价，让利买卖双方；我们拥有优秀的二手车评估交易团队，为买卖双方提供评估，交易，过户的一站式优质服务，让用户安心，放心，省心。
</div>
<div class="con-tit">卖车指南</div>

<ul class="sell-guide clearfix">
    <li class="fl">
        <p class="p1">Q1：卖车流程是怎样的？</p>
        <div class="txt-box">
            1、在本页填写卖车信息或拨打400-029-6196联系我们。<br>
            2、接受评估师专业的上门质检，定出售价。<br>
            3、交易专员带领买家上门看车。<br>
            4、达成交易协议，瓜子二手车直卖网帮你办过户。
        </div>
    </li>
    <li class="fr">
        <p class="p1">Q2：卖车需要准备什么？</p>
        <div class="txt-box">
            <table>
                <tbody><tr>
                    <td>身份证</td>
                    <td>环保标</td>
                    <td>购置税本</td>
                </tr>
                <tr>
                    <td>行驶证</td>
                    <td>检字标</td>
                    <td>购置税发票</td>
                </tr>
                <tr>
                    <td>车辆登记证</td>
                    <td>交强险标</td>
                    <td>购车发票/最近一次过户发票</td>
                </tr>
                <tr>
                    <td></td>
                    <td>交强险单</td>
                    <td></td>
                </tr>
            </tbody></table>
        </div>
    </li>
    <li class="fl">
        <p class="p1">Q3：大概多久能成交？</p>
        <div class="txt-box">
            大部分车辆在瓜子二手车直卖网上只需一周就可成交。
        </div>
    </li>
    <li class="fr">
        <p class="p1">Q4：是否收取费用？</p>
        <div class="txt-box">
            瓜子二手车直卖网不会收取卖家任何费用，交易达成才会向买家收取不超过交易金额3%的服务费。
        </div>
    </li>
</ul>

<p class="write-tip">填写表单，立刻卖车</p>
<a data-gzlog="tracking_type=click&amp;eventid=0170000000000064" href="#" class="backtotop">立即填写</a>
<!-- 估价页面-->

<div class="mask-all" id="mask">
<div style="" class="gz-mask"></div>
    <div class="gz-mask-box maskbox2" style="" data-role="mask" data-name="mask2" data-width="530" data-height="570">
        <div class="mask-con">
            <!--<div class="mask-close" data-role="maskClose"></div>-->
            <div class="mask-main">
                <!-- 评估弹窗第一步 -->
<div class="ass-pop-1" style="">
    <span class="pop-close lpn_close" data-role="maskClose"></span>
<form action="" class="ass-form">
    <ul class="ass-list sell_evaluate">
        <li class="list">
            <p class="fl">城  市</p>
            <div class="comselect" data-role="cityContain" data-max-height="190" data-input-id="city">
                <input data-role="cityText" class="inputype" value="北京" readonly="readonly" type="text" id="cts">
<input name="city_id" value="12" type="hidden">
<input name="domain" value="bj" type="hidden">
                <div class="p-rl" data-role="selectList">
                    <div class="downbox carselectlist-province">
                        <ul style="min-width: 248px; max-height: 210px; overflow-y:auto;" data-role="provinces">
                            @foreach($region as $k=>$v)
                            <li>
                            <a href="javascript:void(0)"; onclick="city('{{$v['city_name']}}')">{{$v['city_name']}}</a></li>
                            @endforeach
                        </ul>                                       
                    </div>
                </div>
                <!-- <div class="p-rl" data-role="selectCity">
                    <div class="downbox carselectlist-city">
                        <ul style="min-width: 248px; max-height: 210px; overflow-y: auto;" data-role="citys">
                        </ul>
                    </div>
                </div> -->
            </div>
        </li>
        <li class="list">
            <p class="fl">车  型</p>
            <div class="comselect" data-role="contain" data-event="hover" data-max-height="190" data-input-id="personCityId">
                <input style="" data-role="brandText" class="inputype brandTextEvalu" placeholder="请选择车型" autocomplete="off" type="text">
                <input data-role="hidden" name="minor" id="minor" type="hidden">
                <input data-role="tagHidden2" name="tag" id="tag" class="tagEvalu" type="hidden">
                <input data-role="carHidden3" name="car" type="hidden">

                <div class="p-rl carselectlist" data-role="selectBrand">
                    <div class="downbox carselectlist-pinpai">
                        <ul style="min-width: 248px; max-height: 210px; overflow-y: auto;" data-role="brands">
                        </ul>
                    </div>
                </div>

                <div class="p-rl carselectlist" data-role="selectTag">
                    <div class="downbox carselectlist-tag">
                        <ul style="min-width: 248px; max-height: 210px; overflow-y: auto;" data-role="tags">
                        </ul>
                    </div>
                </div>

                <div class="p-rl carselectlist" data-role="selectNianKuan">
                    <div class="downbox carselectlist-niankuan">
                        <ul style="min-width: 248px; max-height: 210px; overflow-y: auto;" data-role="niankuans">
                        </ul>
                    </div>
                </div>

                <div class="p-rl carselectlist" data-role="selectCar">
                    <div class="downbox downbox-2 carselectlist-car">
                        <ul style="min-width: 248px; max-height: 210px; overflow-y: auto;" data-role="cars">
                        </ul>
                    </div>
                </div>

            </div>
        </li>

        <li class="list">
            <p class="fl">上牌时间</p>
            <div class="comselect" data-role="lisenseContain" data-event="hover">
                <input data-role="lisenseText" class="inputype" readonly="readonly" type="text">
                <input data-role="yearHidden4" name="lisense_year" type="hidden">
                <input data-role="monthHidden5" name="lisense_month" type="hidden">
                <div class="p-rl" data-role="selectYear">
                    <div class="downbox carselectlist-year">
                        <ul style="min-width: 248px; max-height: 210px; overflow-y: auto;" data-role="years">
                        </ul>
                    </div>
                </div>
                <div class="p-rl" data-role="selectMonth">
                    <div class="downbox carselectlist-month">
                        <ul style="min-width: 248px; max-height: 210px; overflow-y: auto;" data-role="months">
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li class="list">
            <p class="fl">行驶里程</p>
            <input data-role="roadHaul" name="road_haul" class="inputype inputype-2" type="text">
        </li>
    </ul>
    <p class="con-phone">免费咨询电话：<span>400-029-6196</span></p>
    <button type="button" class="submit-2" data-role="startEvalu">开始估价</button>
    <p class="error-tip error-tip2" data-role="errorMsg"></p>
    <p class="car-300"><span></span>提供技术支持</p>
</form>
</div>
            </div>
        </div>
        <div>
            <button id="to1" data-title="二手车估值" data-target="mask1" data-width="680" data-height="500" data-role="changeTo" style="display: none;">changeTo1</button>
        </div>
    </div>

    <div class="gz-mask-box maskbox1" style="" data-role="mask" data-name="mask1" data-width="680" data-height="500">

        <div class="gz-mask-line"></div>

        <div class="mask-con">
            <div class="mask-hd" data-role="title">二手车估值</div>
            <div class="mask-close" data-role="maskClose"></div>
            <div class="mask-main">
                <div class="ue" style="background:#fff">
                    <!-- 评估弹窗第二步 -->
                    <div class="ass-pop-2" style="display:none">
                        <div class="car-ass clearfix">
                            <div class="ass-price-box fr">
                                <em class="ass-tit">估<br>价</em>
                                <p class="ass-price"><span id="evaluate_price">13.45</span><em>万</em></p>
                            </div>
                            <div class="car-con fl">
                                <p class="car-model" title="">奥迪 A4L 2013款奥迪 A4L 40TF SIquattro 运动型</p>
                                <p class="car-d">成都 | 2013年12月上牌 | 3万公里</p>
                            </div>
                        </div>
                        <p class="price-dis">此车价格分布为：</p>
                        <div class="price-area">
                            <div class="price-1"><span id="left_price">132万</span></div>
                            <div class="ave-price-1">
                                <em></em>
                                车商收购均价<br><span id="dealer_price">13.5</span>万
                            </div>
                            <div class="price-green">
                                <div class="price-1 price-2"><span id="dealer_individual_avg">147万</span></div>
                                <div class="price-1 price-3"><span id="right_price">147万</span></div>
                                <div class="ave-price-2">
                                    个人成交均价<br>
                                    <span id="individual_price">13.5万</span>
                                    <em></em>
                                </div>
                            </div>
                        </div>
                        <p class="price-trend">此车未来价格趋势为：</p>
                        <ul class="price-gra">
                            <li>
                                <p class="price-year" id="now">2015年</p>
                                <p class="price-line price-line-1"></p>
                                <p class="price-now" id="nowPrice">13.4万</p>
                            </li>
                            <li>
                                <p class="price-year" id="nextYear">2016年</p>
                                <p class="price-line price-line-2"></p>
                                <p class="price-fu" id="nextPrice">13.4万</p>
                            </li>
                            <li>
                                <p class="price-year" id="afterNextYear">2017年</p>
                                <p class="price-line price-line-3"></p>
                                <p class="price-fu" id="afterPrice">13.4万</p>
                            </li>
                        </ul>
                        <div class="submit-car clearfix" id="sub_form">
                            <p class="fl submit-tip-2">快速卖给个人</p>
                            <input name="phone" class="phone-input-2" placeholder="请输入手机号码" type="text">
                            <input id="source_type" type="hidden">
                            <input id="minor" type="hidden">
                            <input id="tag" type="hidden">
                            <input id="domain" type="hidden">
                            <button class="submit-phone-2" type="button" gjalog="100000001212000100000010" data-clue-entry="02">提交</button>
                            <button data-gzlog="tracking_type=click&amp;eventid=0470050000000169" href="#" class="more-ass" style="font-family: 'Microsoft YaHei'" gjalog="100000001213000100000010">再评估一辆</button>
                            <p class="error-tip phone-error-action"></p>
                        </div>
                        <div class="submit-car clearfix" id="nosub_form" style="display: none;">
                            <button data-gzlog="tracking_type=click&amp;eventid=0470050000000169" href="#" class="more-ass" style="font-family: 'Microsoft YaHei'" gjalog="100000001213000100000010">再评估一辆</button>
                        </div>
                        <div class="submit-car clearfix" id="sub_succ" style="display:none">
                            <p class="submit-suc-2">您的卖车信息已提交成功，<span id="succ_msg">瓜子二手车客服将在30分钟内与您联系</span></p>
                            <button data-gzlog="tracking_type=click&amp;eventid=0470050000000169" class="more-ass" style="font-family: 'Microsoft YaHei'" gjalog="100000001213000100000010">再评估一辆</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button id="to2" data-target="mask2" data-height="570" data-width="530" data-role="changeTo" style="display: none;">changeTo2</button>
        </div>
    </div>
</div>

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
    <p class="link-tit">热门城市：</p>
    <span class="open-box"></span>
    <span class="close-box" data-role="is_show_box"></span>
                        <a href="http://www.guazi.com/www/sell/">全国二手车</a>
                    <a href="http://www.guazi.com/bj/sell/">北京高价卖车</a>
                    <a href="http://www.guazi.com/sh/sell/">上海高价卖车</a>
                    <a href="http://www.guazi.com/tj/sell/">天津高价卖车</a>
                    <a href="http://www.guazi.com/tangshan/sell/">唐山高价卖车</a>
                    <a href="http://www.guazi.com/cq/sell/">重庆高价卖车</a>
                    <a href="http://www.guazi.com/cd/sell/">成都高价卖车</a>
                    <a href="http://www.guazi.com/hz/sell/">杭州高价卖车</a>
                    <a href="http://www.guazi.com/su/sell/">苏州高价卖车</a>
                    <a href="http://www.guazi.com/nj/sell/">南京高价卖车</a>
                    <a href="http://www.guazi.com/zz/sell/">郑州高价卖车</a>
                    <a href="http://www.guazi.com/jn/sell/">济南高价卖车</a>
                    <a href="http://www.guazi.com/qd/sell/">青岛高价卖车</a>
                    <a href="http://www.guazi.com/sy/sell/">沈阳高价卖车</a>
                    <a href="http://www.guazi.com/cc/sell/">长春高价卖车</a>
                    <a href="http://www.guazi.com/dl/sell/">大连高价卖车</a>
                    <a href="http://www.guazi.com/fushun/sell/">抚顺高价卖车</a>
                    <a href="http://www.guazi.com/ty/sell/">太原高价卖车</a>
                    <a href="http://www.guazi.com/cs/sell/">长沙高价卖车</a>
                    <a href="http://www.guazi.com/hf/sell/">合肥高价卖车</a>
                    <a href="http://www.guazi.com/wh/sell/">武汉高价卖车</a>
                    <a href="http://www.guazi.com/xa/sell/">西安高价卖车</a>
                    <a href="http://www.guazi.com/dazhou/sell/">达州高价卖车</a>
                    <a href="http://www.guazi.com/xm/sell/">厦门高价卖车</a>
                    <a href="http://www.guazi.com/fz/sell/">福州高价卖车</a>
                    <a href="http://www.guazi.com/gz/sell/">广州高价卖车</a>
                    <a href="http://www.guazi.com/foshan/sell/">佛山高价卖车</a>
                    <a href="http://www.guazi.com/weifang/sell/">潍坊高价卖车</a>
                    <a href="http://www.guazi.com/wx/sell/">无锡高价卖车</a>
                    <a href="http://www.guazi.com/xuzhou/sell/">徐州高价卖车</a>
                    <a href="http://www.guazi.com/nc/sell/">南昌高价卖车</a>
                    <a href="http://www.guazi.com/nn/sell/">南宁高价卖车</a>
                    <a href="http://www.guazi.com/yantai/sell/">烟台高价卖车</a>
                    <a href="http://www.guazi.com/km/sell/">昆明高价卖车</a>
                    <a href="http://www.guazi.com/dg/sell/">东莞高价卖车</a>
                    <a href="http://www.guazi.com/hrb/sell/">哈尔滨高价卖车</a>
                    <a href="http://www.guazi.com/sjz/sell/">石家庄高价卖车</a>
                    <a href="http://www.guazi.com/nmg/sell/">呼和浩特高价卖车</a>
                    <a href="http://www.guazi.com/sz/sell/">深圳高价卖车</a>
                    <a href="http://www.guazi.com/quanzhou/sell/">泉州高价卖车</a>
                    <a href="http://www.guazi.com/nantong/sell/">南通高价卖车</a>
                    <a href="http://www.guazi.com/shaoxing/sell/">绍兴高价卖车</a>
                    <a href="http://www.guazi.com/huizhou/sell/">惠州高价卖车</a>
                    <a href="http://www.guazi.com/zhongshan/sell/">中山高价卖车</a>
                    <a href="http://www.guazi.com/zhangzhou/sell/">漳州高价卖车</a>
                    <a href="http://www.guazi.com/anshan/sell/">鞍山高价卖车</a>
                    <a href="http://www.guazi.com/jining/sell/">济宁高价卖车</a>
                    <a href="http://www.guazi.com/luoyang/sell/">洛阳高价卖车</a>
                    <a href="http://www.guazi.com/zhuzhou/sell/">株洲高价卖车</a>
                    <a href="http://www.guazi.com/tieling/sell/">铁岭高价卖车</a>
                    <a href="http://www.guazi.com/linyi/sell/">临沂高价卖车</a>
                    <a href="http://www.guazi.com/mianyang/sell/">绵阳高价卖车</a>
                    <a href="http://www.guazi.com/xiangyang/sell/">襄阳高价卖车</a>
                    <a href="http://www.guazi.com/changzhou/sell/">常州高价卖车</a>
                    <a href="http://www.guazi.com/baoding/sell/">保定高价卖车</a>
                    <a href="http://www.guazi.com/handan/sell/">邯郸高价卖车</a>
                    <a href="http://www.guazi.com/liuzhou/sell/">柳州高价卖车</a>
                    <a href="http://www.guazi.com/yangzhou/sell/">扬州高价卖车</a>
                    <a href="http://www.guazi.com/suqian/sell/">宿迁高价卖车</a>
                    <a href="http://www.guazi.com/yichang/sell/">宜昌高价卖车</a>
                    <a href="http://www.guazi.com/xinxiang/sell/">新乡高价卖车</a>
                    <a href="http://www.guazi.com/luan/sell/">六安高价卖车</a>
                    <a href="http://www.guazi.com/liaoyang/sell/">辽阳高价卖车</a>
                    <a href="http://www.guazi.com/xiangtan/sell/">湘潭高价卖车</a>
                    <a href="http://www.guazi.com/wei/sell/">威海高价卖车</a>
                    <a href="http://www.guazi.com/yiwu/sell/">义乌高价卖车</a>
                    <a href="http://www.guazi.com/jilin/sell/">吉林高价卖车</a>
                    <a href="http://www.guazi.com/gy/sell/">贵阳高价卖车</a>
                    <a href="http://www.guazi.com/daqing/sell/">大庆高价卖车</a>
                    <a href="http://www.guazi.com/songyuan/sell/">松原高价卖车</a>
                    <a href="http://www.guazi.com/jiaxing/sell/">嘉兴高价卖车</a>
                    <a href="http://www.guazi.com/jiamusi/sell/">佳木斯高价卖车</a>
                    <a href="http://www.guazi.com/cangzhou/sell/">沧州高价卖车</a>
                    <a href="http://www.guazi.com/jiujiang/sell/">九江高价卖车</a>
                    <a href="http://www.guazi.com/xuchang/sell/">许昌高价卖车</a>
                    <a href="http://www.guazi.com/kaifeng/sell/">开封高价卖车</a>
                    <a href="http://www.guazi.com/jstaizhou/sell/">泰州高价卖车</a>
                    <a href="http://www.guazi.com/ganzhou/sell/">赣州高价卖车</a>
                    <a href="http://www.guazi.com/zhenjiang/sell/">镇江高价卖车</a>
                    <a href="http://www.guazi.com/wuhu/sell/">芜湖高价卖车</a>
                    <a href="http://www.guazi.com/maanshan/sell/">马鞍山高价卖车</a>
                    <a href="http://www.guazi.com/datong/sell/">大同高价卖车</a>
                    <a href="http://www.guazi.com/yuncheng/sell/">运城高价卖车</a>
                    <a href="http://www.guazi.com/nanyang/sell/">南阳高价卖车</a>
                    <a href="http://www.guazi.com/baotou/sell/">包头高价卖车</a>
                    <a href="http://www.guazi.com/dezhou/sell/">德州高价卖车</a>
                    <a href="http://www.guazi.com/taian/sell/">泰安高价卖车</a>
                    <a href="http://www.guazi.com/guangan/sell/">广安高价卖车</a>
                    <a href="http://www.guazi.com/qujing/sell/">曲靖高价卖车</a>
                    <a href="http://www.guazi.com/chuxiong/sell/">楚雄高价卖车</a>
                    <a href="http://www.guazi.com/zibo/sell/">淄博高价卖车</a>
                    <a href="http://www.guazi.com/zunyi/sell/">遵义高价卖车</a>
                    <a href="http://www.guazi.com/luzhou/sell/">泸州高价卖车</a>
                    <a href="http://www.guazi.com/suining/sell/">遂宁高价卖车</a>
                    <a href="http://www.guazi.com/deyang/sell/">德阳高价卖车</a>
                    <a href="http://www.guazi.com/yibin/sell/">宜宾高价卖车</a>
                    <a href="http://www.guazi.com/nanchong/sell/">南充高价卖车</a>
                    <a href="http://www.guazi.com/meishan/sell/">眉山高价卖车</a>
                    <a href="http://www.guazi.com/jinhua/sell/">金华高价卖车</a>
                    <a href="http://www.guazi.com/liupanshui/sell/">六盘水高价卖车</a>
                    <a href="http://www.guazi.com/yancheng/sell/">盐城高价卖车</a>
                    <a href="http://www.guazi.com/lianyungang/sell/">连云港高价卖车</a>
                    <a href="http://www.guazi.com/jinzhong/sell/">晋中高价卖车</a>
                    <a href="http://www.guazi.com/xinyang/sell/">信阳高价卖车</a>
                    <a href="http://www.guazi.com/shiyan/sell/">十堰高价卖车</a>
                    <a href="http://www.guazi.com/suizhou/sell/">随州高价卖车</a>
                    <a href="http://www.guazi.com/linfen/sell/">临汾高价卖车</a>
                    <a href="http://www.guazi.com/changzhi/sell/">长治高价卖车</a>
                    <a href="http://www.guazi.com/jiangmen/sell/">江门高价卖车</a>
                    <a href="http://www.guazi.com/qinhuangdao/sell/">秦皇岛高价卖车</a>
                    <a href="http://www.guazi.com/nb/sell/">宁波高价卖车</a>
                    <a href="http://www.guazi.com/eerduosi/sell/">鄂尔多斯高价卖车</a>
                    <a href="http://www.guazi.com/gxyulin/sell/">玉林高价卖车</a>
                    <a href="http://www.guazi.com/xingtai/sell/">邢台高价卖车</a>
                    <a href="http://www.guazi.com/qiqihaer/sell/">齐齐哈尔高价卖车</a>
                    <a href="http://www.guazi.com/chengde/sell/">承德高价卖车</a>
                    <a href="http://www.guazi.com/lz/sell/">兰州高价卖车</a>
                    <a href="http://www.guazi.com/jingmen/sell/">荆门高价卖车</a>
                    <a href="http://www.guazi.com/jian/sell/">吉安高价卖车</a>
                    <a href="http://www.guazi.com/enshi/sell/">恩施高价卖车</a>
                    <a href="http://www.guazi.com/jingzhou/sell/">荆州高价卖车</a>
                    <a href="http://www.guazi.com/sanming/sell/">三明高价卖车</a>
                    <a href="http://www.guazi.com/huaian/sell/">淮安高价卖车</a>
                    <a href="http://www.guazi.com/huangshi/sell/">黄石高价卖车</a>
                    <a href="http://www.guazi.com/xiaogan/sell/">孝感高价卖车</a>
                    <a href="http://www.guazi.com/jiaozuo/sell/">焦作高价卖车</a>
                    <a href="http://www.guazi.com/beihai/sell/">北海高价卖车</a>
                    <a href="http://www.guazi.com/yingkou/sell/">营口高价卖车</a>
                    <a href="http://www.guazi.com/tongliao/sell/">通辽高价卖车</a>
                    <a href="http://www.guazi.com/bazhong/sell/">巴中高价卖车</a>
                    <a href="http://www.guazi.com/hengshui/sell/">衡水高价卖车</a>
                    <a href="http://www.guazi.com/zaozhuang/sell/">枣庄高价卖车</a>
                    <a href="http://www.guazi.com/heze/sell/">菏泽高价卖车</a>
                    <a href="http://www.guazi.com/anyang/sell/">安阳高价卖车</a>
                    <a href="http://www.guazi.com/baise/sell/">百色高价卖车</a>
                    <a href="http://www.guazi.com/jxyichun/sell/">宜春高价卖车</a>
                    <a href="http://www.guazi.com/anqing/sell/">安庆高价卖车</a>
                    <a href="http://www.guazi.com/longyan/sell/">龙岩高价卖车</a>
                    <a href="http://www.guazi.com/panzhihua/sell/">攀枝花高价卖车</a>
                    <a href="http://www.guazi.com/yaan/sell/">雅安高价卖车</a>
                    <a href="http://www.guazi.com/zjtaizhou/sell/">台州高价卖车</a>
                    <a href="http://www.guazi.com/huzhou/sell/">湖州高价卖车</a>
                    <a href="http://www.guazi.com/wenzhou/sell/">温州高价卖车</a>
                    <a href="http://www.guazi.com/jinzhou/sell/">锦州高价卖车</a>
                    <a href="http://www.guazi.com/qinzhou/sell/">钦州高价卖车</a>
                    <a href="http://www.guazi.com/langfang/sell/">廊坊高价卖车</a>
                    <a href="http://www.guazi.com/yanbian/sell/">延边高价卖车</a>
                    <a href="http://www.guazi.com/putian/sell/">莆田高价卖车</a>
                    <a href="http://www.guazi.com/rizhao/sell/">日照高价卖车</a>
                    <a href="http://www.guazi.com/neijiang/sell/">内江高价卖车</a>
                    <a href="http://www.guazi.com/fuyang/sell/">阜阳高价卖车</a>
                    <a href="http://www.guazi.com/jxfuzhou/sell/">抚州高价卖车</a>
                    <a href="http://www.guazi.com/ziyang/sell/">资阳高价卖车</a>
                    <a href="http://www.guazi.com/changde/sell/">常德高价卖车</a>
                    <a href="http://www.guazi.com/zhaoqing/sell/">肇庆高价卖车</a>
                    <a href="http://www.guazi.com/zhuhai/sell/">珠海高价卖车</a>
                    <a href="http://www.guazi.com/shantou/sell/">汕头高价卖车</a>
                    <a href="http://www.guazi.com/dali/sell/">大理高价卖车</a>
                    <a href="http://www.guazi.com/leshan/sell/">乐山高价卖车</a>
                    <a href="http://www.guazi.com/zigong/sell/">自贡高价卖车</a>
                    <a href="http://www.guazi.com/gl/sell/">桂林高价卖车</a>
                    <a href="http://www.guazi.com/shangrao/sell/">上饶高价卖车</a>
                    <a href="http://www.guazi.com/jingdezhen/sell/">景德镇高价卖车</a>
                    <a href="http://www.guazi.com/pingdingshan/sell/">平顶山高价卖车</a>
                    <a href="http://www.guazi.com/yiyang/sell/">益阳高价卖车</a>
                    <a href="http://www.guazi.com/yueyang/sell/">岳阳高价卖车</a>
                    <a href="http://www.guazi.com/ningde/sell/">宁德高价卖车</a>
                    <a href="http://www.guazi.com/chifeng/sell/">赤峰高价卖车</a>
                    <a href="http://www.guazi.com/baoji/sell/">宝鸡高价卖车</a>
                    <a href="http://www.guazi.com/siping/sell/">四平高价卖车</a>
                    <a href="http://www.guazi.com/dongying/sell/">东营高价卖车</a>
                    <a href="http://www.guazi.com/binzhou/sell/">滨州高价卖车</a>
                    <a href="http://www.guazi.com/luohe/sell/">漯河高价卖车</a>
                    <a href="http://www.guazi.com/zhumadian/sell/">驻马店高价卖车</a>
                    <a href="http://www.guazi.com/shangqiu/sell/">商丘高价卖车</a>
                    <a href="http://www.guazi.com/zhangjiakou/sell/">张家口高价卖车</a>
                    <a href="http://www.guazi.com/mudanjiang/sell/">牡丹江高价卖车</a>
                    <a href="http://www.guazi.com/guangyuan/sell/">广元高价卖车</a>
                    <a href="http://www.guazi.com/qiannan/sell/">黔南高价卖车</a>
                    <a href="http://www.guazi.com/liaocheng/sell/">聊城高价卖车</a>
                    <a href="http://www.guazi.com/yangquan/sell/">阳泉高价卖车</a>
                    <a href="http://www.guazi.com/">二手车</a>
            </div>



        <!--公司信息-->
    <p style="text-align:center;line-height:20px;font-size:12px;color:#666; padding-top:20px;">
    车好多旧机动车经纪（北京）有限公司   
    北京市丰台区南四环中路260号北京新发地汽车交易市场旧车经营区B区178号   
    010-57317000
</p></div>

    

<input class="hide_gich" value="&amp; &amp;pagetype=sell&amp;city=bj&amp;currentUrl=http%3A%2F%2Fwww.guazi.com%2Fbj%2Fsell%2F%3FclueS%3D01&amp;puid=&amp;line=c2c&amp;tag=" type="hidden">
<input data-role="dataSource" class="dataSourceButton" data-source="[]" type="hidden">


</body></html>