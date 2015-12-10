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
		<title>
			首页
		</title>
		<!--Core css-->
		<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<!--Custom css-->
		<link href="assets/css/style.css" rel="stylesheet">
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
	<body class="index">
		<a href="#content" class="sr-only sr-only-focusable">
			Skip to main content
		</a>
		<!--page-navbar START-->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar">
						</span>
						<span class="icon-bar">
						</span>
						<span class="icon-bar">
						</span>
					</button>
					<a class="navbar-brand cp-text--indent" href="#">
						SUNYATHE|中国·三源色
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="<?php echo base_url('site/index')?>">
								首页 <span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								关于我们&nbsp;
								<i class="fa fa-angle-down">
								</i>
							</a>
							<ul class="dropdown-menu">
								<li class="active-sub">
									<a href="<?php echo base_url('about/overview')?>">
										企业概况
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('about/manage_address')?>">
										总经理致辞
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('about/framework')?>">
										组织架构
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('about/history')?>">
										发展历程
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('about/culture')?>">
										企业文化
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('about/team')?>">
										精英团队
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								产品中心&nbsp;
								<i class="fa fa-angle-down">
								</i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo base_url('bases/index')?>">
										试驾基地
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('product/device')?>">
										越野器械
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('product/down_center')?>">
										下载中心
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('product/question_answer')?>">
										Q&A
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								业务范围&nbsp;
								<i class="fa fa-angle-down">
								</i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo base_url('business/solution')?>">
										一站式试驾解决方案
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('business/affiliates')?>">
										招商加盟
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								成功案例&nbsp;
								<i class="fa fa-angle-down">
								</i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo base_url('cases/activity')?>">
										试驾类活动
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('cases/display')?>">
										静态展示类
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('cases/new_car')?>">
										新车上市类
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('cases/join')?>">
										招商加盟类
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								新闻中心&nbsp;
								<i class="fa fa-angle-down">
								</i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo base_url('news/consultation')?>">
										企业资讯
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('news/trends')?>">
										行业动态
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('news/highlight')?>">
										活动集锦
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								联系我们&nbsp;
								<i class="fa fa-angle-down">
								</i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo base_url('contact/map')?>">
										企业版图
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('contact/recruitment')?>">
										人才招聘
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('contact/message_board')?>">
										留言板
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse END -->
			</div>
			<!-- /.container-fluid END -->
		</nav>
		<!--/.page-navbar END-->
		<!--slide START-->
		<figure id="carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active">
				</li>
				<li data-target="#carousel" data-slide-to="1">
				</li>
				<li data-target="#carousel" data-slide-to="2">
				</li>
				<li data-target="#carousel" data-slide-to="3">
				</li>
				<li data-target="#carousel" data-slide-to="4">
				</li>
				<li data-target="#carousel" data-slide-to="5">
				</li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="assets/img/product/banner1.jpg">
				</div>
				<div class="item">
					<img src="assets/img/product/banner2.jpg">
				</div>
				<div class="item">
					<img src="assets/img/product/banner3.jpg">
				</div>
				<div class="item">
					<img src="assets/img/product/banner4.jpg">
				</div>
				<div class="item">
					<img src="assets/img/product/banner5.jpg">
				</div>
				<div class="item">
					<img src="assets/img/product/banner6.jpg">
				</div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
				</span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true">
				</span>
				<span class="sr-only">Next</span>
			</a>
		</figure>
		<!--/.slide END-->
		<!--page-index START-->
		<main class="page-index" id="content" tabindex="-1" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->
			<section class="section base">
				<div class="container-fluid">
					<header class="clearfix">
						<h1 class="pull-left title">
							<strong>试驾基地</strong>
						</h1>
						<ul class="clearfix list-unstyled pull-right tab" role="tablist">
							<li>
								<a href="#">
									华南地区
								</a>
							</li>
							<li>
								<a href="#">
									华东地区
								</a>
							</li>
							<li>
								<a href="#">
									华中地区
								</a>
							</li>
							<li>
								<a href="#">
									西南地区
								</a>
							</li>
							<li>
								<a href="#">
									华北地区
								</a>
							</li>
							<li>
								<a href="#">
									西北地区
								</a>
							</li>
							<li>
								<a href="#">
									东北地区
								</a>
							</li>
						</ul>
					</header>
					<!--slide START-->
					<figure id="base" class="carousel slide base" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<!--描述-->
								<div class="row caption">
									<a class="col-xs-12 col-sm-12 col-md-12 col-lg-6" href="#">
										<img class="img-responsive" src="assets/img/product/index-base01.jpg">
										<h4>
											<b>沈阳浑南试驾基地</b>
										</h4>
										<p>
											位于沈阳市浑南新区东湖学校附近，即杨官派出所旁；临近沈抚大道，占地总面积8.5万平方米。
										</p>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</a>
									<a class="col-xs-12 col-sm-12 col-md-12 col-lg-6" href="#">
										<img class="img-responsive" src="assets/img/product/index-base02.jpg">
										<h4>
											<b>广州大观路试驾基地</b>
										</h4>
										<p>
											中国首个以汽车培训为主题的汽车基地,广州大观路试驾基地位于广州天河区大观中路，北接广深高速，南接广州中山大道，与广州奥体中心相邻，毗邻航天奇观相邻。试驾基地占地总面积三万多平方米。
										</p>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</a>
								</div>
								<!--/.caption END-->
							</div>
							<div class="item">
								<!--描述-->
								<div class="row caption">
									<a class="col-xs-12 col-sm-12 col-md-12 col-lg-6" href="#">
										<img class="img-responsive" src="assets/img/product/index-base01.jpg">
										<h4>
											<b>沈阳浑南试驾基地</b>
										</h4>
										<p>
											位于沈阳市浑南新区东湖学校附近，即杨官派出所旁；临近沈抚大道，占地总面积8.5万平方米。
										</p>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</a>
									<a class="col-xs-12 col-sm-12 col-md-12 col-lg-6" href="#">
										<img class="img-responsive" src="assets/img/product/index-base02.jpg">
										<h4>
											<b>广州大观路试驾基地</b>
										</h4>
										<p>
											中国首个以汽车培训为主题的汽车基地,广州大观路试驾基地位于广州天河区大观中路，北接广深高速，南接广州中山大道，与广州奥体中心相邻，毗邻航天奇观相邻。试驾基地占地总面积三万多平方米。
										</p>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</a>
								</div>
								<!--/.caption END-->
							</div>
						</div>
						<!-- Controls -->
						<a class="left control" href="#base" role="button" data-slide="prev">
							<i class="fa fa-angle-left">
							</i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right control" href="#base" role="button" data-slide="next">
							<i class="fa fa-angle-right">
							</i>
							<span class="sr-only">Next</span>
						</a>
					</figure>
					<!--/.slide END-->
				</div>
			</section>
			<!--/.section END-->
			<section class="section test-drive">
				<div class="container-fluid">
					<header class="clearfix">
						<h1 class="pull-left title">
							<strong>越野器械</strong>
						</h1>
						<ul class="clearfix list-unstyled pull-right tab" role="tablist">
							<li>
								<a href="#">
									稍难
								</a>
							</li>
							<li>
								<a href="#">
									适中
								</a>
							</li>
							<li>
								<a href="#">
									容易
								</a>
							</li>
						</ul>
					</header>
					<div class="body">
						<div class="row js-match">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 js-match-item">
								<a class="thumbnail" href="#">
									<img src="assets/img/product/index-test01.jpg">
									<div class="caption">
										<h4>
											<b>高空跷跷板</b>
										</h4>
										<p>
											演示爬坡能力、悬挂承受能力及下坡时陡坡缓降系统的作用:跷跷板倾斜度为35°，高度足有9米高！当车辆开到坡顶之后，液压操纵的平台会把车辆从上坡转换到另一边 的下坡状态......
										</p>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</div>
								</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 js-match-item">
								<a class="thumbnail" href="#">
									<img src="assets/img/product/index-test02.jpg">
									<div class="caption">
										<h4>
											<b>驼峰</b>
										</h4>
										<p>
											展示车辆爬坡性能:试乘客户车辆通过时有逼真的翻车感觉，具有很好的试乘效果及观赏效果。
										</p>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</div>
								</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 js-match-item">
								<a class="thumbnail" href="#">
									<img src="assets/img/product/index-test03.jpg">
									<div class="caption">
										<h4>
											<b>侧坡</b>
										</h4>
										<p>
											测试车辆的抓地力，侧向通过能力;车辆通过表现：从车外观察，车辆上下侧坡时，由于弧面影响，一条对角线上的车轮基本离开设备及地面，仅靠另一对角线上的两个车轮提供动力......
										</p>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</div>
								</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 js-match-item">
								<a class="thumbnail" href="#">
									<img src="assets/img/product/index-test04.jpg">
									<div class="caption">
										<h4>
											<b>四轮滚轴跷跷板</b>
										</h4>
										<p>
											示四驱动力、爬坡能力、悬挂承受能力及下坡时陡坡缓降系统的作用:当车辆通过四轮滚轴测试并开到坡顶之后，液压操纵的平台会把车辆从上坡转换到另一边的下坡状态到了下坡的时候......
										</p>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</div>
								</a>
							</div>
						</div>
					</div>
					<!--/.body END-->
				</div>
			</section>
			<!--/.section END-->
			<section class="section case">
				<div class="container-fluid">
					<header class="clearfix">
						<h1 class="pull-left title">
							<strong>案例分享</strong>
						</h1>
						<ul class="clearfix list-unstyled pull-right tab" role="tablist">
							<li>
								<a href="#">
									试驾活动类
								</a>
							</li>
							<li>
								<a href="#">
									静态展示类
								</a>
							</li>
							<li>
								<a href="#">
									新车上市类
								</a>
							</li>
						</ul>
					</header>
					<div class="body">
						<div class="row js-match">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 js-match-item">
								<a class="thumbnail" href="#">
									<img src="assets/img/product/index-case01.jpg">
									<div class="caption">
										<h4>
											<b>【重庆】阿斯顿马丁20140913</b>
										</h4>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</div>
								</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 js-match-item">
								<a class="thumbnail" href="#">
									<img src="assets/img/product/index-case02.jpg">
									<div class="caption">
										<h4>
											<b>【长沙·松雅湖】宝马3行动活动150508-150510</b>
										</h4>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</div>
								</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 js-match-item">
								<a class="thumbnail" href="#">
									<img src="assets/img/product/index-case03.jpg">
									<div class="caption">
										<h4>
											<b>【昆明·巫家坝】奥迪驾控汇150814-150816</b>
										</h4>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</div>
								</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 js-match-item">
								<a class="thumbnail" href="#">
									<img src="assets/img/product/index-case04.jpg">
									<div class="caption">
										<h4>
											<b>【东莞·水濂山】奔驰C级活动150605-150607</b>
										</h4>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</div>
								</a>
							</div>
						</div>
					</div>
					<!--/.body END-->
				</div>
			</section>
			<!--/.section END-->
			<section class="section news">
				<div class="container-fluid">
					<header class="clearfix">
						<h1 class="pull-left title">
							<strong>新闻中心</strong>
						</h1>
						<ul class="clearfix list-unstyled pull-right tab" role="tablist">
							<li>
								<a href="#">
									行业动态
								</a>
							</li>
							<li>
								<a href="#">
									企业资讯
								</a>
							</li>
							<li>
								<a href="#">
									试驾活动
								</a>
							</li>
						</ul>
					</header>
					<div class="body">
						<div class="row js-match">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 js-match-item">
								<a class="thumbnail" href="#">
									<img src="assets/img/product/index-news01.jpg">
									<div class="caption">
										<h4>
											<b>特斯拉牵手联通，打造20城超级充电站</b>
										</h4>
										<p>
											8月29日，特斯拉汽车在成都宣布与中国联通达成战略合作协议，将在全国120个城市依托联通营业厅共同建设......
										</p>
									</div>
								</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 js-match-item">
								<a class="thumbnail" href="#">
									<img src="assets/img/product/index-news02.jpg">
									<div class="caption">
										<h4>
											<b>上海2020年推出无人驾驶汽车</b>
										</h4>
										<p>
											2020年左右，上汽将推出能在高速公路、公园道路、崇明岛环岛公路等结构化道路上行驶的无人驾驶汽车......
										</p>
									</div>
								</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 js-match-item">
								<a class="thumbnail" href="#">
									<img src="assets/img/product/index-news03.jpg">
									<div class="caption">
										<h4>
											<b>保时捷中国携手著名导演张艺谋</b>
										</h4>
										<p>
											保时捷中国2014年8月29日于北京举办新闻发布会，见证其全力推动的企业社会责任项目—“保时捷溢彩心”的五周年纪念......
										</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<!--/.body END-->
				</div>
			</section>
			<!--/.section END-->
			<!--当前模版所需要的JS资源-->
			<script src="//cdn.bootcss.com/jquery.matchHeight/0.6.0/jquery.matchHeight-min.js"></script>
			<script>//等高
$(function() {
	$(".js-match").each(function() {
		$(this).children(".js-match-item").matchHeight();
	});
});</script>
		</main>
		<!--/.page-index END-->
		<!--page-footer START-->
		<footer class="page-footer" role="contentinfo">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-md-12 col-lg-8 footer-left">
						<p class="copyright">
							<b>版权所有：</b> 深圳市三源色文化传播有限公司 2010-2015 All Right Reserved &nbsp;&nbsp;&nbsp; 粤ICP备09121560号
						</p>
						<h5 class="page-links-title">
							<strong>友情链接：</strong>
						</h5>
						<ul class="clearfix list-unstyled page-links">
							<li>
								<a href="#">
									三源色官方微信帐号
								</a>
							</li>
							<li>
								<a href="#">
									中国汽车运动协会
								</a>
							</li>
							<li>
								<a href="#">
									中国汽车工业协会
								</a>
							</li>
							<li>
								<a href="#">
									汽车大世界
								</a>
							</li>
							<li>
								<a href="#">
									太平洋汽车网
								</a>
							</li>
							<li>
								<a href="#">
									12缸汽车网
								</a>
							</li>
							<li>
								<a href="#">
									中国汽车消费网
								</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-12 col-md-12 col-lg-4 footer-right">
						<a class="link-drive" href="#" title="我要试驾">
							<img src="assets/img/web/drive.png" alt="我要试驾">
						</a>
						<span class="qr-code">
							<img src="assets/img/web/qr-code.png" alt="中国·三源色|官方微信公众号">
						</span>
					</div>
				</div>
			</div>
		</footer>
		<!--/.page-footer END-->
		<!--common-->
		<script src="//cdn.bootcss.com/bootstrap-hover-dropdown/2.0.10/bootstrap-hover-dropdown.min.js"></script>
		<script src="//cdn.bootcss.com/scrollup/2.4.0/jquery.scrollUp.min.js"></script>
		<script src="assets/js/bootstrap-select.js"></script>
		<script src="assets/js/defaults-zh_CN.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>