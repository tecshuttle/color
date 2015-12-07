

		<!--slide START-->
		<figure id="carousel" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
				<li data-target="#carousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="/assets/img/product/product-1.jpg">
				</div>
				<div class="item">
					<img src="/assets/img/product/product-2.jpg">
				</div>
				<div class="item">
					<img src="/assets/img/product/product-3.jpg">
				</div>
				<div class="item">
					<img src="/assets/img/product/product-4.jpg">
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</figure>
		<!--/.slide END-->

		<!--page-main START-->
		<main class="page-main page-base" id="content" tabindex="-1" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->

			<div class="container">

				<!--筛选-->
				<!--<header class="cp-select select-horizontal">
					<div class="clearfix inner">
						<div class="pull-left select-item">
							<select class="selectpicker" title='选择省份'>
								<option>广东省</option>
								<option>云南省</option>
								<option>湖南省</option>
							</select>
						</div>
						<div class="pull-left select-item">
							<select class="selectpicker" title='选择城市'>
								<option>全部</option>
								<option>广州</option>
								<option>东莞</option>
								<option>佛山</option>
								<option>海口</option>
								<option>三亚</option>
								<option>南宁</option>
								<option>厦门</option>
								<option>深圳</option>
							</select>
						</div>
					</div>
				</header>
				<!--/.cp-select END-->

				<!--基地列表-->
				<div class="base-wrap">
<?php foreach ($bases as $bases_item): ?>
					<div class="section">
						<a class="clearfix base-inner" href="#">
							<div class="base-photo">
								<img class="img-responsive" src="/assets/img/product/base-01.jpg">
							</div>

							<div class="base-description">
								<h3 class="base-heading"><?php echo $bases_item['title']; ?></h3>
								<p class="text-justify"><?php echo $bases_item['intro']; ?></p>
							</div>

						</a>
					</div>
<?php endforeach; ?>


				</div>
				<!--/.base-wrap END-->

				<!--分页-->
				<footer class="clearfix cp-pagination">
					<nav class="pull-right">
						<ul class="pager">
							<!--当前页属于第一页时，为previous添加disabled禁用类-->
							<li class="previous disabled">
								<a href="#"><i class="fa fa-angle-left"></i></a>
							</li>

							<!--页码-->
							<li class="page-number current">
								<span class="number-wrap">
									<b>1</b>
									<i>6</i>
								</span>
							</li>

							<!--当前页属于最后一页时，为next添加disabled禁用类-->
							<li class="next">
								<a href="#"><i class="fa fa-angle-right"></i></a>
							</li>
						</ul>
					</nav>
				</footer>
				<!--/.cp-pagination END-->

			</div>
		</main>
		<!--/.page-main END-->

	