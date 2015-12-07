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
		<title>我要试驾</title>

		<!--Core css-->
		<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

		<!--Custom css-->
		<link href="/assets/css/style.css" rel="stylesheet">

		<!--Font css-->
		<link href="//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

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

	<body style="background-color: white;">

		<!--page-test-drive START-->
		<main class="page-test-drive" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->

			<div class="container">

				<!--wrap-->
				<section class="test-drive-wrap">

					<!--top-->
					<figure class="top">
						<a class="navbar-brand cp-text--indent" href="首页.html">SUNYATHE|中国·三源色</a>
						<img src="/assets/img/product/test-drive.jpg" alt="我要试驾">
						<figcaption class="title">
							<h1><strong>申 请 试 驾</strong></h1>
						</figcaption>
					</figure>
					<!--/.top END-->

					<div class="form-wrap">

						<h2 class="declare">我们承诺，您的信息将只用于三源色市场活动，绝无可能泄露给第三方。请填写您的真实信息，方便我们尽快与您取得联系，安排您的试驾事宜。</h2>

						<!--FORM START-->
						<form class="row form-format">

							<!--标题-->
							<div class="col-xs-12 form-heading">
								<h3>
									<b>填写个人信息</b>
									<small><i class="icon-required">*</i>为必填信息</small>
								</h3>
							</div>

							<!--左侧-->
							<div class="col-xs-6 form-left">

								<div class="form-group">
									<label><i class="icon-required">*</i>姓名</label>
									<input required type="text" class="form-control input-lg">
								</div>

								<div class="form-group">
									<label><i class="icon-required">*</i>称谓</label>

									<div class="row">
										<div class="col-xs-12">
											<div class="btn-group" data-toggle="buttons">
												<label class="btn btn-radio active">
													<input type="radio" name="options" id="option1" autocomplete="off">先生
												</label>
												<label class="btn btn-radio">
													<input type="radio" name="options" id="option2" autocomplete="off">女士
												</label>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label><i class="icon-required">*</i>手机号码</label>
									<input required type="text" class="form-control input-lg">
								</div>

								<div class="form-group">
									<label><i class="icon-required">*</i>电子邮箱</label>
									<input required type="text" class="form-control input-lg">
								</div>

								<div class="form-group">
									<label><i class="icon-required">*</i>您希望的联系方式</label>

									<div class="row">
										<div class="col-xs-12">
											<div class="btn-group" data-toggle="buttons">
												<label class="btn btn-checkbox active">
													<input type="checkbox" autocomplete="off">电话
												</label>
												<label class="btn btn-checkbox">
													<input type="checkbox" autocomplete="off">电子邮件
												</label>
												<label class="btn btn-checkbox">
													<input type="checkbox" autocomplete="off">直邮
												</label>
												<label class="btn btn-checkbox">
													<input type="checkbox" autocomplete="off">短信
												</label>
											</div>

										</div>
									</div>
								</div>

								<div class="form-group">
									<label>您的地址</label>
									<input type="text" class="form-control input-lg">
								</div>

								<div class="form-group">
									<label>您的邮政编码</label>
									<input type="text" class="form-control input-lg">
								</div>

							</div>
							<!--/.form-left END-->

							<!--右侧-->
							<div class="col-xs-6 form-right">

								<div class="form-group">
									<label><i class="icon-required">*</i>您所在城市</label>

									<div class="row">
										<div class="col-xs-6">
											<select class="selectpicker" title='请选择省份'>
												<option>广州</option>
												<option>深圳</option>
												<option>佛山</option>
											</select>
										</div>

										<div class="col-xs-6">
											<select class="selectpicker" title='请选择城市'>
												<option>广州</option>
												<option>深圳</option>
												<option>佛山</option>
											</select>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label><i class="icon-required">*</i>您希望联系的试驾基地</label>

									<div class="row">
										<div class="col-xs-12">
											<select class="selectpicker" title='请选择试驾基地'>
												<option>广州</option>
												<option>深圳</option>
												<option>佛山</option>
											</select>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label><i class="icon-required">*</i>您感兴趣的试驾器械</label>

									<div class="row">
										<div class="col-xs-12">
											<select class="selectpicker" title='请选择试驾器械'>
												<option>广州</option>
												<option>深圳</option>
												<option>佛山</option>
											</select>
										</div>
									</div>
								</div>

								<div class="form-group has-feedback">
									<label><i class="icon-required">*</i>预计试驾时间</label>
									<input id="datetimepicker" type="text" readonly class="form-control input-lg datetimepicker" value="">
									<i class="fa fa-angle-down form-control-feedback" aria-hidden="true"></i>
								</div>

							</div>
							<!--/.form-right END-->

							<!--提交按钮-->
							<div class="col-xs-12">
								<div class="form-group">
									<div class="checkbox">
										<p class="text-justify provision">
											您的以上资讯将被路虎公司及其子公司、联营公司、代理商、经销商用作分析研究，提供您所需要的服务，并向您发出新产品和服务的信息，以及改善我们的服务。您有权查看我们保存的您的信息并且有权更正错误的内容。
										</p>
										<div class="btn-group" data-toggle="buttons">
											<label class="btn btn-checkbox">
												<input type="checkbox" name="assent" autocomplete="off">同意
											</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-submit">提&nbsp;&nbsp;交</button>
								</div>

							</div>

						</form>
						<!--/.form end-->

						<!--取消订阅-->
						<p class="h4 unsubscribe">如若我们的信息打扰到您，敬请拨打三源色贵宾专线：0755-8251-0666 取消订阅。我们承诺对您的个人信息完全保密。再次挚谢您对三源色的关注！</p>

					</div>
				</section>
				<!--/.wrap END-->

			</div>

			<!--------本模版单独引用的js资源------->
			<!--https://github.com/xdan/datetimepicker-->
			<link type="text/css" href="//cdn.bootcss.com/jquery-datetimepicker/2.4.5/jquery.datetimepicker.min.css" rel="stylesheet">
			<script src="//cdn.bootcss.com/jquery-datetimepicker/2.4.5/jquery.datetimepicker.min.js"></script>
			<!--日期选择-->
			<script>
				$(function() {
					$('#datetimepicker').datetimepicker({
						lang: 'ch',
						format: 'Y年m月d日',
						formatDate: 'Y/m/d',
					});
				});
			</script>

		</main>
		<!--/.page-test-drive END-->

		<!--common-->
		<script src="//cdn.bootcss.com/scrollup/2.4.0/jquery.scrollUp.min.js"></script>
		<script src="/assets/js/bootstrap-select.js"></script>
		<script src="/assets/js/defaults-zh_CN.js"></script>
		<script src="/assets/js/main.js"></script>

	</body>