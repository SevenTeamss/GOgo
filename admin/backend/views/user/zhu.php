<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>注册页面</title>
<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- basic styles -->

<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

<!--[if IE 7]>
<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
<![endif]-->

<!-- page specific plugin styles -->

<!-- fonts -->

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

<!-- ace styles -->

<link rel="stylesheet" href="assets/css/ace.min.css" />
<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

<!--[if lte IE 8]>
<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
<![endif]-->

<!-- inline styles related to this page -->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body class="login-layout" style="background:url('zhuo.jpg')  no-repeat center fixed;">
<div class="main-container">
<div class="main-content">
<div class="row">
<div class="col-sm-10 col-sm-offset-1">
<div class="login-container">
<div class="center">
<h1>
<i class="icon-leaf green"></i>
<span class="white">瓜子网二手车直卖网</span>
</h1>
<h4 class="blue">&copy; Guaziweb</h4>
</div>

<div class="space-6"></div>

<div class="position-relative">

<div id="forgot-box" class="forgot-box  no-border">
<div class="widget-body">
<div class="widget-main">
<h4 class="header green lighter bigger">
<i class="icon-group blue"></i>
New User Registration
</h4>

<div class="space-6"></div>
<p> Enter your details to begin: </p>

<form action="index.php?r=user/zhu" method="post" onsubmit="return sub();">
<fieldset>
	<label class="block clearfix">
		<span class="block input-icon input-icon-right">
			<input type="email" name="email" id='email' class="form-control" placeholder="Email" id='email' onblur="email1();" />
			<i class="icon-envelope"></i>
			<span id='s1'></span>
		</span>
	</label>
	<label class="block clearfix">
		<span class="block input-icon input-icon-right">
			<input type="text" class="form-control" placeholder="User_name" name="user_name"  onblur="uname(this)" />
			<i class="icon-user"></i>
			<span id="s2"></span>
		</span>
	</label>

	<label class="block clearfix">
		<span class="block input-icon input-icon-right">
			<input type="password" class="form-control" placeholder="Password" name="user_pwd" id="pwd" onblur="pwd1()"/>
			<i class="icon-lock"></i>
			<span id="s3"></span>
		</span>
	</label>

	<label class="block clearfix">
		<span class="block input-icon input-icon-right">
			<input type="password" class="form-control" placeholder="Repeat password" name="user_pass" id="pass" onblur="pass1()" />
			<i class="icon-retweet"></i>
			<span id="s4"></span>
		</span>
	</label>
	
	<label class="block clearfix">
		<span class="block input-icon input-icon-right">
			<input type="text" class="form-control" placeholder="User_job" name="user_job"  onblur="job1(this)" />
			<span id="s5"></span>
		</span>
	</label>
	
	<label class="block clearfix">
		<span class="block input-icon input-icon-right">
			<input type="text" class="form-control" placeholder="User_phone" name="user_phone" onblur="phone(this)" />
			<span id="s6"></span>
		</span>
	</label>
	<div class="space-24"></div>
	<div class="clearfix">
		<button type="reset" class="width-30 pull-left btn btn-sm">
			<i class="icon-refresh"></i>
			Reset
		</button>

		<input type="submit" class="width-35 pull-right btn btn-sm btn-primary" value="Register">

	</div>
</fieldset>
</form>
</div>

<div class="toolbar center">
<a href="index.php?r=user/login" class="back-to-login-link">
<i class="icon-arrow-left"></i>
Back to login
</a>
</div>
</div> <!-- /widget-body -->
</div> <!-- /forgot-box-->

<div id="signup-box" class="signup-box widget-box no-border">
<div class="widget-body">



<div class="toolbar center">
<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
<i class="icon-arrow-left"></i>
Back to login
</a>
</div>
</div><!-- /widget-body -->
</div><!-- /signup-box -->
</div><!-- /position-relative -->
</div>
</div><!-- /.col -->
</div><!-- /.row -->
</div>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->

<script src='jquery.js'></script>
<script>
	function email1()
	{
		var email=document.getElementById('email').value;
		if(email=='')
		{
			document.getElementById('s1').innerHTML="邮箱不能为空";
			document.getElementById('s1').style.color="red";
			return false;
		}
		var reg=/^\d{1,11}@qq\.com$/;
		if(!reg.test(email))
		{
			document.getElementById('s1').innerHTML="邮箱格式不正确";
			document.getElementById('s1').style.color="red";
			return false;
		}
		else
		{
			document.getElementById('s1').innerHTML="√";
			document.getElementById('s1').style.color="green";
			return true;
		}
	}
	function uname(ts)
	{
		if(ts.value=='')
		{
			document.getElementById('s2').innerHTML="用户名不能为空";
			document.getElementById('s2').style.color="red";
			return false;
		}
	}
	
	/**
	 * 密码验证
	 * @return {[type]} [description]
	 */
	function pwd1()
   	{
		var pwd=document.getElementById('pwd').value;
		if(pwd=='')
		{
		   document.getElementById('s3').innerHTML="密码不能为空";
		   document.getElementById('s3').style.color="red";
		   return false;
		}
		//密码必须在6 位以上
		if(pwd.length<6)
		{
		   document.getElementById('s3').innerHTML="密码必须在6位以上";
		   document.getElementById('s3').style.color="red";
		   return false;
		}
		else
		{
		   document.getElementById('s3').innerHTML="√";
		   document.getElementById('s3').style.color="green";
		   return true;
		}
	}

	/**
	 * 确认密码
	 */
	function pass1()
	{
		var pwd=document.getElementById('pwd').value;
		var pass=document.getElementById('pass').value;
		if(pass=='')
		{
		   document.getElementById('s4').innerHTML="确认密码不能为空";
		   document.getElementById('s4').style.color="red";
		   return false;
		}
		//4)确认密码必须与密码一致
		var rpwd=document.getElementById('pwd').value;
		if(pass!=pwd)
		{
		   document.getElementById('s4').innerHTML="确认密码与密码不一致";
		   document.getElementById('s4').style.color="red";
		   return false;
		}
		else
		{
		   document.getElementById('s4').innerHTML="√";
		   document.getElementById('s4').style.color="green";
		   return true;
		}
	}


	function job1(ts)
	{
		if(ts.value=='')
		{
			document.getElementById('s5').innerHTML="工作不能为空";
			document.getElementById('s5').style.color="red";
			return false;
		}
	}
	function phone(ts)
	{
		if(ts.value=='')
		{
			document.getElementById('s6').innerHTML="电话号不能为空";
			document.getElementById('s6').style.color="red";
			return false;
		}
	}


function sub()
   {
	   if(uname()&&pwd()&&pass()&&job1()&&email1()&&phone())
	   {
		   return true;
	   }
	   else
	   {
           return false;
	   }
   }
	
</script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>



<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
