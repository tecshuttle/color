<!--slide START-->

		<figure id="carousel" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<?= $banner->content;?>
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
			<!--main鐨勫懡鍚嶆柟寮忎负page+涓婚-->
			<!--main鏍囩鍦ㄩ〉闈腑鍙兘鍑虹幇涓€娆?->

			<div class="container">
				<?= $article->content ?>
			</div>
		</main>
		<!--/.page-main END-->