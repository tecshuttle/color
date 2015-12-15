<figure id="carousel" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="/assets/img/product/device-1.jpg">
				</div>
				<div class="item">
					<img src="/assets/img/product/device-2.jpg">
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
		<main class="page-main page-news" id="content" tabindex="-1" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->

			<div class="container">

				<!--wrap-->
					<?= $article->content;?>
				<!--/.wrap END-->

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