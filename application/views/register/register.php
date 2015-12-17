﻿<!DOCTYPE html>
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
		<title>注册</title>

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
			<a class="navbar-brand cp-text--indent" href="#">
				SUNYATHE|中国·三源色
			</a>
		</header>
		<!--/.heading END-->

		<!--page-main START-->
		<main class="page-main page-login_sign-up" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->
			<section class="body sign-up">

				<header role="heading">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#sign-up__email" aria-controls="sign-up__email" role="tab" data-toggle="tab">邮箱注册</a>
						</li>

						<li role="presentation">
							<a href="#sign-up__phone" aria-controls="sign-up__phone" role="tab" data-toggle="tab">手机注册</a>
						</li>
					</ul>
				</header>

				<!-- Tab panes -->
				<div class="tab-content">

					<!--邮箱注册-->
					<div role="tabpanel" class="tab-pane fade in active" id="sign-up__email">

						<div class="form-horizontal">
							<div class="form-group">
								<label class="col-xs-3 control-label">邮&nbsp;箱：</label>
								<div class="col-xs-9">
									<input type="email" class="form-control input-lg cp-placeholder" placeholder="请输入您的邮箱">

									<!--验证信息-->
									<p class="form-control-static">这里是验证信息！</p>

								</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">用户名：</label>
								<div class="col-xs-9">
									<input type="text" class="form-control input-lg cp-placeholder" placeholder="3-16个汉字或字母或数字">

									<!--验证信息-->
									<p class="form-control-static">这里是验证信息！</p>

								</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">密&nbsp;码：</label>
								<div class="col-xs-9">
									<input type="password" class="form-control input-lg cp-placeholder" placeholder="6-16个英文字母和数字">

									<!--验证信息-->
									<p class="form-control-static">这里是验证信息！</p>

								</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">确认密码：</label>
								<div class="col-xs-9">
									<input type="password" class="form-control input-lg cp-placeholder" placeholder="请重新输入您的密码">

									<!--验证信息-->
									<p class="form-control-static">这里是验证信息！</p>

								</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">验证码：</label>
								<div class="col-xs-5">
									<input type="password" class="form-control input-lg cp-placeholder" placeholder="请输入验证码">
									<!--验证信息-->
									<p class="form-control-static">这里是验证信息！</p>

								</div>
								<div class="col-xs-4">
									<div class="verification">
										<img src="/assets/img/web/verification.jpg">
										<a class="btn-refresh" href="javascript:void(0)" role="button">
											换一张！
										</a>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-xs-12">
									<button type="submit" class="btn btn-block btn-danger">
										注&nbsp;册
									</button>
								</div>
								<div class="col-xs-12">
									<div class="checkbox" data-toggle="buttons">
										<label class="btn">
											<input type="checkbox"> 我已阅读并同意 <a href="#" target="_blank">《服务协议》</a>
										</label>

									</div>

								</div>
							</div>

						</div>
						<!--/.form-horizontal END-->

					</div>
					<!--/.tab-pane END-->

					<!--手机注册-->
					<div role="tabpanel" class="tab-pane fade" id="sign-up__phone">

						<div class="form-horizontal">
							<div class="form-group">
								<label class="col-xs-3 control-label">用户名：</label>
								<div class="col-xs-9">
									<input type="text" class="form-control input-lg cp-placeholder" placeholder="3-16个汉字或字母或数字">

									<!--验证信息-->
									<p class="form-control-static">这里是验证信息！</p>

								</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">密码：</label>
								<div class="col-xs-9">
									<input type="password" class="form-control input-lg cp-placeholder" placeholder="6-16个英文字母和数字">

									<!--验证信息-->
									<p class="form-control-static">这里是验证信息！</p>

								</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">手机号：</label>
								<div class="col-xs-9">
									<input type="text" class="form-control input-lg cp-placeholder" placeholder="请输入手机号">

									<!--验证信息-->
									<p class="form-control-static">这里是验证信息！</p>

								</div>
							</div>

							<div class="form-group">
								<label class="col-xs-3 control-label">验证码：</label>
								<div class="col-xs-5">
									<input type="password" class="form-control input-lg cp-placeholder" placeholder="请输入验证码">

									<!--验证信息-->
									<p class="form-control-static">这里是验证信息！</p>

								</div>
								<div class="col-xs-4">
									<div class="verification">
										<img src="/assets/img/web/verification.jpg">
										<a class="btn-refresh" href="javascript:void(0)" role="button">
											换一张！
										</a>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-xs-12">
									<button type="submit" class="btn btn-block btn-danger">
										注&nbsp;册
									</button>
								</div>
								<div class="col-xs-12">
									<div class="checkbox" data-toggle="buttons">
										<label class="btn">
											<input type="checkbox"> 我已阅读并同意 <a href="#" target="_blank">《服务协议》</a>
										</label>
									</div>

								</div>
							</div>

						</div>
						<!--/.form-horizontal END-->

					</div>
					<!--/.tab-pane END-->

				</div>
				<!--/.tab-content END-->

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