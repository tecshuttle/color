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
		<main class="page-main page-performance" id="content" tabindex="-1" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->

			<div class="container">

				<!--筛选
				<header class="cp-select select-horizontal">
					<div class="clearfix inner">
						<div class="pull-left select-item">
							<select class="selectpicker" title='测试性能' id="select_product">
								<option>爬坡性能</option>
								<option>悬挂承受能力</option>
								<option>四驱动力</option>
								<option>侧向通过能力</option>
								<option>抓地力</option>
							</select>
						</div>
					</div>
				</header>-->
				<!--/.cp-select END-->
				<div id="page_container">
				<div class="performance-wrap" >
					<?php foreach($dataList as $row): ?>
					<div class="section">
						<a class="clearfix performance-inner js-open-popup" href="#">

							<div class="performance-photo">
								<?= $row['content']?>
							</div>

							<div class="performance-description">

								<hgroup class="performance-heading">
									<h3><?= $row['road_name']?></h3>
									<h4><?= $row['intro']?></h4>
								</hgroup>

								<p class="level-wrap">
									<!--五个等级-->
									<!--类名：-->
									<!--level1|level2|level3|level4|level5-->
									<span class="glyphicon-group level3">
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									</span>
								</p>

							</div>
							<!--/.description END-->
						</a>
					</div>
					<?php endforeach; ?>
				</div>
				<!--/.wrap END-->

				<?php if ($has_data) : ?>
				<!--分页-->
				<footer class="clearfix cp-pagination">
					<nav class="pull-right">
						<ul class="pager">
							<?= $pagelink ?>
						</ul>
					</nav>
				</footer>
				<!--/.cp-pagination END-->
				<?php endif ?>
				</div>
			</div>

			<!--本模版单独引用JS-->
			<link type="text/css" href="//cdn.bootcss.com/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">
			<script src="//cdn.bootcss.com/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>

			<script>
				$('.js-open-popup').magnificPopup({
					type: 'image',
					tLoading: '图片正在读取中 #%curr%...',
					removalDelay: 300,
					items: [{
						src: 'assets/img/product/performance.jpg',
						title: '这里是标题'
					}, {
						src: 'assets/img/product/performance.jpg',
						title: '这里是标题'
					}],
					gallery: {
						enabled: true
					},
					image: {
						tError: '<a href="%url%">该图片#%curr%</a> 读取失败,请尝试刷新页面.',
					}
				});
			</script>

		</main>
		<!--/.page-main END-->
			<script>
				$('#select_product').on('change', function(){
					var name = $(this).find("option:selected").text();
					
					$.post('/product/device_select',{name: name},function(result, obj){
						if (result.success) {
							$('#page_container').html(result.device_html);	
						} else {
							console.log(result);
						}
					}, 'json');
				});
			</script>

		</main>