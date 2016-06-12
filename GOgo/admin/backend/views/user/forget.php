<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>忘记密码</title>
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
<h4 class="header red lighter bigger">
<i class="icon-key"></i>
Retrieve Password
</h4>


<p>
Enter your email and to receive instructions
</p>

<form action="index.php?r=user/forget" method="post">
<fieldset>
	<label class="block clearfix">
		<span class="block input-icon input-icon-right">
			<input type="email" name="email" class="form-control" placeholder="Email" />
			<i class="icon-envelope"></i>
		</span>
	</label>
	<div class="clearfix">
		<input type="submit" class="width-35 pull-right btn btn-sm btn-primary" value="Send me">
	</div>
</fieldset>
</form>
</div>

<div class="toolbar center">
<a href="index.php?r=user/login"  class="back-to-login-link">
Back to login
<i class="icon-arrow-right"></i>
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<!-- <![endif]-->

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
