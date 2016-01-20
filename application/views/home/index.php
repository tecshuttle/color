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
							<a href="/index.php">
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
									<a href="<?php echo base_url('about/heretofore')?>">
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
									<a href="<?php echo base_url('bases')?>">
										试驾基地
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('product/device')?>">
										越野器械
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('downcenter')?>">
										下载中心
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('questionanswer')?>">
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
									<a href="<?php echo base_url('cases/newcar')?>">
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
									<a href="<?php echo base_url('contact')?>">
										企业版图
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('recruitment')?>">
										人才招聘
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('messageboard')?>">
										留言板
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse END -->
																
				<div class="login-wrap">
					<a class="login" href="/login/index">
						<i class="fa fa-angle-right"></i>登录
					</a>
					<a class="sign-up" href="/register/index">
						<i class="fa fa-angle-right"></i>注册
					</a>
				</div>
				<!-- /.login-wrap END -->
				
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
				<?= $article->content?>
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
		<main class="page-index" id="content" tabindex="-1" role="main" >
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
								<a href="/index.php?area=华南#content">
									华南地区
								</a>
							</li>
							<li>
								<a href="/index.php?area=华东#content">
									华东地区
								</a>
							</li>
							<li>
								<a href="/index.php?area=华中#content">
									华中地区
								</a>
							</li>
							<li>
								<a href="/index.php?area=西南#content">
									西南地区
								</a>
							</li>
							<li>
								<a href="/index.php?area=华北#content">
									华北地区
								</a>
							</li>
							<li>
								<a href="/index.php?area=华南#content">
									西北地区
								</a>
							</li>
							<li>
								<a href="/index.php?area=东北#content">
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
									<?php
										$i=0;
										foreach($bases_menu as $row):
										if($i == 2){
											break;
										};
									?>
									<a class="col-xs-12 col-sm-12 col-md-12 col-lg-6" href="<?= '/bases/view/'. $row['id']?>">
										<span class="center-block cp-picture-effect">
											<?= $row['content']?>
										</span>

										<h4>
											<b><?= $row['name']?></b>
										</h4>
										<p>
											<?= $row['intro']?>
										</p>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</a>
									<?php

										$i++;
										endforeach;
									?>
									<?php
									if($bases_menu == NULL){
										?>
											<a class="col-xs-12 col-sm-12 col-md-12 col-lg-6" href="#">
												<span>
													<i class="fa fa-angle-double-right" style="" >
													</i>暂无记录
												</span>
											</a>
											<?php
										}else{

										}?>
								</div>
								<!--/.caption END-->
							</div>
							<div class="item">
								<!--描述-->
								<div class="row caption">
									<?php
										$i=0;
										foreach($bases_menu as $row):
										if($i == 4){
											break;
										}

										if($i > 1){
									?>
									<a class="col-xs-12 col-sm-12 col-md-12 col-lg-6" href="<?= '/bases/view/'. $row['id']?>">
										<span class="center-block cp-picture-effect">
											<?= $row['content']?>
										</span>

										<h4>
											<b><?= $row['name']?></b>
										</h4>
										<p>
											<?= $row['intro']?>
										</p>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</a>
									<?php
										};
										$i++;
										endforeach;
									if($bases_menu === NULL){
									if($bases_menu[1] === NULL){

										}else{
											?>
											<a class="col-xs-12 col-sm-12 col-md-12 col-lg-6" href="#">
												<span>
													<i class="fa fa-angle-double-right" style="">
													</i>暂无记录
												</span>
											</a>
											<?php
										}
									}
									?>

								</div>
						</div>
						<!-- Controls -->
						<a class="left control" href="#base" role="button" data-slide="prev" >
							<i class="fa fa-angle-left">
							</i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right control" href="#base" role="button" data-slide="next" >
							<i class="fa fa-angle-right">
							</i>
							<span class="sr-only">Next</span>
						</a>
						</div>
					</figure>
					<!--/.slide END-->
				</div>
			</section>
			
			<!--/.section END-->
			
			<section class="section test-drive" id="device">
				<div class="container-fluid" >
					<header class="clearfix">
						<h1 class="pull-left title">
							<strong>越野器械</strong>
						</h1>
						<ul class="clearfix list-unstyled pull-right tab" role="tablist">
							<li>
								<a href="/index.php?nodus=稍难#device">
									稍难
								</a>
							</li>
							<li>
								<a href="/index.php?nodus=适中#device">
									适中
								</a>
							</li>
							<li>
								<a href="/index.php?nodus=容易#device">
									容易
								</a>
							</li>
						</ul>
					</header>
					<div class="body">
						<div class="row js-match" >
						<?php if($product_menu !== NULL):?>
							<?php
								$i=0;
								foreach($product_menu as $row):
								if($i == 4){
									break;
								}
							?>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 js-match-item" >
								<a class="thumbnail" href="<?= '/product/view/'. $row['id']?>">
									<?= $row['content']?>
									<div class="caption">
										<h4>
											<b><?= $row['road_name']?></b>
										</h4>
										<p>
											<?= $row['intro']?>
										</p>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</div>
								</a>
							</div>
							<?php $i++;endforeach;?>
							<?php else:?>
								<a class="thumbnail" href="#">
									<div class="caption">
										<span>
											<i class="fa fa-angle-double-right">
											</i>暂无记录
										</span>
									</div>
								</a>
						<?php endif;?>
						</div>
					</div>
					<!--/.body END-->
				</div>
			</section>
			<!--/.section END-->
			<section class="section case" >
				<div class="container-fluid" id="case">
					<header class="clearfix">
						<h1 class="pull-left title">
							<strong>案例分享</strong>
						</h1>
						<ul class="clearfix list-unstyled pull-right tab" role="tablist">
							<li>
								<a href="/index.php?type=activity#case">
									试驾活动类
								</a>
							</li>
							<li>
								<a href="/index.php?type=display#case">
									静态展示类
								</a>
							</li>
							<li>
								<a href="/index.php?type=newcar#case">
									新车上市类
								</a>
							</li>
						</ul>
					</header>
					<div class="body">
						<div class="row js-match">
							<?php if($cases_menu !== NULL):?>
							<?php
								$i=0;
								foreach($cases_menu as $row):
								if($i == 4){
									break;
								}
							?>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 js-match-item">
								<a class="thumbnail" href="<?= '/cases/view/'. $row['id']?>">
									<?= $row['content']; ?>
									<div class="caption">
										<h4>
											<b><?= $row['name'] ?></b>
										</h4>
										<span>
											<i class="fa fa-angle-double-right">
											</i>了解更多信息
										</span>
									</div>
								</a>
							</div>
							<?php $i++;endforeach;?>
							<?php else:?>
								<a class="thumbnail" href="#">
									<div class="caption">
										<span>
											<i class="fa fa-angle-double-right">
											</i>暂无记录
										</span>
									</div>
								</a>
						<?php endif;?>
						</div>
					</div>
					<!--/.body END-->
				</div>
			</section>
			<!--/.section END-->
			<section class="section news">
				<div class="container-fluid" id="news">
					<header class="clearfix">
						<h1 class="pull-left title">
							<strong>新闻中心</strong>
						</h1>
						<ul class="clearfix list-unstyled pull-right tab" role="tablist">
							<li>
								<a href="/index.php?newType=consultation#news">
									行业动态
								</a>
							</li>
							<li>
								<a href="/index.php?newType=trends#news">
									企业资讯
								</a>
							</li>
							<li>
								<a href="/index.php?newType=highlight#news">
									试驾活动
								</a>
							</li>
						</ul>
					</header>
					<div class="body">
						<div class="row js-match">
						<div class="row js-match">
							<?php if($news_menu !== NULL):?>
							<?php
								$i=0;
								foreach($news_menu as $row):
								if($i == 3){
									break;
								}
							?>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 js-match-item">
								<a class="thumbnail" href="<?= '/news/view/'. $row['id']?>">
									<?= $row['content'] ?>
									<div class="caption">
										<h4>
											<b><?= $row['name'] ?></b>
										</h4>
										<p>
											<?php 
												if(mb_strlen($row['intro'], 'utf-8') <= 60)
													echo mb_substr($row['intro'], 0, 60, 'utf-8'); 
												else
													echo mb_substr($row['intro'], 0, 60, 'utf-8').'....'; 
											?>
										</p>
									</div>
								</a>
							</div>
							<?php $i++;endforeach;?>
							<?php else:?>
								<a class="thumbnail" href="#">
									<div class="caption">
										<span>
											<i class="fa fa-angle-double-right">
											</i>暂无记录
										</span>
									</div>
								</a>
						<?php endif;?>
						</div>
					</div>
					<!--/.body END-->
				</div>
				</div>
			</section>
			<!--/.section END-->
			<!--当前模版所需要的JS资源-->
			<script src="//cdn.bootcss.com/jquery.matchHeight/0.6.0/jquery.matchHeight-min.js"></script>
			<script>
			//等高
			$(function() {
				$(".js-match").each(function() {
					$(this).children(".js-match-item").matchHeight();
				});
			});
			</script>
		</main>
		<!--/.page-index END-->

		<!--侧边栏-->
		<aside class="aside-contact">

			<!--电话-->
			<dl class="contact-item phone">
				<dt>
					<a href="#" title="服务您的热线">
						<i class="fa fa-phone"></i>
					</a>
				</dt>
				<dd>
					<b>400-058-6882</b>
				</dd>
			</dl>

			<!--微信-->
			<dl class="contact-item weixin">
				<dt>
					<a href="#" title="微信服务号">
						<i class="fa fa-weixin"></i>
					</a>
				</dt>
				<dd>
					<span class="center-block QR-code">
						<img src="assets/img/product/P20-2.jpg" alt="微信服务号">
					</span>
				</dd>
			</dl>

			<!--QQ-->
			<dl class="contact-item qq">
				<dt>
					<a href="tencent://message/?uin=2371483950&Site=test315.nesky.cn&Menu=yes" title="QQ客服">
						<i class="fa fa-qq"></i>
					</a>
				</dt>
				<dd>
					<b>2371483950</b>
				</dd>
			</dl>

			<!--微博-->
			<dl class="contact-item weibo">
				<dt>
					<a href="http://weibo.com/sunyathe" title="官网微博">
						<i class="fa fa-weibo"></i>
					</a>
				</dt>
				<dd>
					<b>@三源色文化传播</b>
				</dd>
			</dl>

		</aside>
		<!--/.aside-contact END-->


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
						<a class="link-drive" href="device/index" title="我要试驾">
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