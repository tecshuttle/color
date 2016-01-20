<!--slide START-->
		<figure id="carousel" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<?= $article->content;?>

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

				<article class="base-detail-wrap">

					<header class="text-center">
						<h2><strong><?= $row->name?></strong></h2>
						<br/>
					</header>
					<!--场地成功案例--><section class="map">

						<div class="pull-left map-modify">
							<?= $row->content;?>
						</div>

						<div class="pull-left map-control">
							<!--地图控件-->
							<iframe 
								width="394" height="465" frameborder="0" 
								scrolling="no" marginheight="0" marginwidth="0" src="<?= $row->map?>">
							</iframe>
						</div>

					</section>
					<!--/.map END-->
					<?= $row->viewcontent?>
				</article>
			</div>
		</main>
		<!--/.page-main END-->