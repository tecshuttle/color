<!--slide START-->
		<figure id="carousel" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
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
		<main class="page-main page-detail" id="content" tabindex="-1" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->

			<div class="container">

				<!--detail-article-->
				<article class="detail-article">
					<header class="text-center">
						<h3><strong><?= $row->road_name?></strong></h3>
						<br/>
					</header>
					<p>
						<?= $row->content?>
					</p>
					
					<p class="text-justify">
						性能：<?= $row->name?>
					</p>
					
					<p class="text-justify">
						介绍：<br/><?= $row->intro?>
					</p>

				</article>
				<!--/.detail-article END-->

			</div>
		</main>
		<!--/.page-main END-->