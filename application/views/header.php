<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 lte9" lang="zh-cn"><![endif]-->
<!--[if IE 9]><html class="ie9 lte9" lang="zh-cn"><![endif]-->
<!--[if !(IE 8) | !(IE 9)]><!-->
<html lang="zh-cn">
<!--<![endif]-->

 							<ul class="dropdown-menu">
								<li class="active-sub"><a href="/about/overview">企业概况</a></li>
								<li><a href="/about/manage_address">总经理致辞</a></li>
								<li><a href="/about/framework">组织架构</a></li>
								<li><a href="/about/history">发展历程</a></li>
								<li><a href="/about/culture">企业文化</a></li>
								<li><a href="/about/team">精英团队</a></li>
							</ul>
            </li>

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

	<body>
		<a href="#content" class="sr-only sr-only-focusable">Skip to main content</a>

		<!--page-navbar START-->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">

			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
			            <span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
			        </button>
			        <a class="navbar-brand cp-text--indent" href="#">SUNYATHE|中国·三源色</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="navbar-collapse">
			        <ul class="nav navbar-nav">
			            <li class="dropdown">
			                <a href="/">
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
			                    <?php foreach ($about_menu as $menu): ?>
			                        <li>
			                            <a href="/about/<?= $menu->code ?>"> <?= $menu->name ?> </a>
			                        </li>
			                    <?php endforeach; ?>
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
			                        <a href="/bases">
			                            试驾基地
			                        </a>
			                    </li>
			                    <li>
			                        <a href="/product/device">
			                            越野器械
			                        </a>
			                    </li>
			                    <li>
			                        <a href="/product/down_center">
			                            下载中心
			                        </a>
			                    </li>
			                    <li>
			                        <a href="/product/question_answer">
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
			                        <a href="/business/solution">
			                            一站式试驾解决方案
			                        </a>
			                    </li>
			                    <li>
			                        <a href="/business/affiliates">
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
			                        <a href="/cases/activity">
			                            试驾类活动
			                        </a>
			                    </li>
			                    <li>
			                        <a href="/cases/display">
			                            静态展示类
			                        </a>
			                    </li>
			                    <li>
			                        <a href="/cases/new_car">
			                            新车上市类
			                        </a>
			                    </li>
			                    <li>
			                        <a href="/cases/join">
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
			                        <a href="/news/consultation">
			                            企业资讯
			                        </a>
			                    </li>
			                    <li>
			                        <a href="/news/trends">
			                            行业动态
			                        </a>
			                    </li>
			                    <li>
			                        <a href="/news/highlight">
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
			                        <a href="/contact/map">
			                            企业版图
			                        </a>
			                    </li>
			                    <li>
			                        <a href="/contact/recruitment">
			                            人才招聘
			                        </a>
			                    </li>
			                    <li>
			                        <a href="/contact/message_board">
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
