<!--slide START-->
		<figure id="carousel" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<?= $article->content ?>
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

				<article class="base-detail-wrap">

					<header class="text-center">
						<h2><strong><?= $row->name?></strong></h2>
						<br/>
					</header>
					
					<div class="text-center" style="margin-bottom: 15px;">
						<?php if($row->video != NULL):?>
						<iframe class="video_iframe text-center" style=" z-index:1; " 
							src="http://v.qq.com/iframe/player.html?vid=<?= $row->video;?>&amp;width=900&amp;height=600&amp;auto=0" 
							allowfullscreen="" frameborder="0" height="600" width="900">
						</iframe>
						<?php endif;?>
					</div>
						
					<p class="text-center">
						<?= $row->content?>
					</p>
					
					<p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<?= $row->intro ?>
					</p>
				</article>
			</div>
		</main>
		<!--/.page-main END-->