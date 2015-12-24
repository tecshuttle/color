<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 lte9" lang="zh-cn"><![endif]-->
<!--[if IE 9]><html class="ie9 lte9" lang="zh-cn"><![endif]-->
<!--[if !(IE 8) | !(IE 9)]><!-->
<html lang="zh-cn">
	<!--<![endif]-->

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="renderer" content="webkit">
		<meta name="force-rendering" content="webkit">
		<meta http-equiv="Cache-Control" content="no-siteapp">
		<title>登录</title>

		<!--Core css-->
		<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

		<!--Custom css-->
		<link href="/assets/css/style.css" rel="stylesheet">

		<!--Font css-->
		<link href="//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

		<script>
			// Copyright 2014-2015 Twitter, Inc.
			// Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
			if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
				var msViewportStyle = document.createElement('style')
				msViewportStyle.appendChild(
					document.createTextNode(
						'@-ms-viewport{width:auto!important}'
					)
				)
				document.querySelector('head').appendChild(msViewportStyle)
			}
		</script>

		<!--Core js-->
		<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
		<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<!--HTML5 shim for IE8 support of HTML5 elements-->
		<!--[if IE 8]>
        	<script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        	<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
      		<script src="//cdn.bootcss.com/selectivizr/1.0.2/selectivizr-min.js"></script>
    	<![endif]-->

		<!----Kill IE----->
		<!--[if lte IE 7 ]>
    	<link rel="stylesheet" href="assets/iealert/iealert.min.css">
    	<script src="assets/iealert/iealert.min.js"></script>
    	<script>
        	$(document).ready(function () {
           		 $("body").iealert();
        	});
    	</script>
    	<![endif]-->

	</head>

	<body>

		<header class="brand--common">
			<a class="navbar-brand cp-text--indent" href="/">
				SUNYATHE|中国·三源色
			</a>
		</header>
		<!--/.heading END-->

		<!--page-main START-->
		<main class="page-main page-login_sign-up" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->
			<section class="body login">
				<h1 class="title">登&nbsp;录</h1>
<form method="post" accept-charset="utf-8" action="/login/index">
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-xs-3 control-label">账&nbsp;户：</label>
						<div class="col-xs-9">
							<input type="text" name="username" class="form-control input-lg cp-placeholder"  placeholder="请输入邮箱/用户名/手机号">

							<!--验证信息-->
							<p class="form-control-static"><?php echo form_error('username'); ?></p>
							

						</div>
					</div>

					<div class="form-group">
						<label class="col-xs-3 control-label">密&nbsp;码：</label>
						<div class="col-xs-9">
							<input type="password" name="password" class="form-control input-lg cp-placeholder" placeholder="请输入您的密码">

							<!--验证信息-->
							<p class="form-control-static"><?php echo form_error('password'); ?></p>
							

						</div>
					</div>

					<div class="form-group form-submit">
						<div class="col-xs-12">
                                <label class="btn">
								   <a href="/register/index" target="_blank">未注册?&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								   请点此处注册</a>
                                </label>
						</div>
						<div class="col-xs-12">
							<button type="submit" class="btn btn-block btn-danger">
								登&nbsp;录
							</button>
						</div>
						
					</div>

				</div>
				</form>
				<!--/.form-horizontal END-->

			</section>
		</main>
		<!--/.page-main END-->

		<script src="//cdn.bootcss.com/jquery-placeholder/2.1.3/jquery.placeholder.min.js"></script>
		<script>
			//jquery.placeholder.min.js
			//占位符
			$(function() {
				$("input, textarea").placeholder();
			});
		</script>

	</body>

</html>