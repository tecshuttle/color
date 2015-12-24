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
					<img src="/assets/img/product/business-1.jpg">
				</div>
				<div class="item">
					<img src="/assets/img/product/business-2.jpg">
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
		<main class="page-main page-business" id="content" tabindex="-1" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->

			<div class="container">

				<!--wrap-->
				<div class="business-wrap investment">

					<?= $article->content ?>

						<!--图片显示-->
						<script>
							$('dl').hover(function() {
								$(this).toggleClass('active');
							});
						</script>
		
				</div>
				<!--/.wrap END-->

			</div>
		</main>
		<!--/.page-main END-->