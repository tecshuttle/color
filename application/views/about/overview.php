
<figure id="carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
				<li data-target="#carousel" data-slide-to="3"></li>
				<li data-target="#carousel" data-slide-to="4"></li>
				<li data-target="#carousel" data-slide-to="5"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<?php switch($url){
					case 'overview': echo $overviewBanner->content;break;
					case 'manage_address': echo $manageAddressBanner->content;break;
					case 'framework': echo $frameworkBanner->content;break;
					case 'heretofore': echo $heretoforeBanner->content;break;
					case 'culture': echo $cultureBanner->content;break;
					case 'team': echo $teamBanner->content;break;
				}?>
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

		<!--page-main START-->
		<main class="page-main page-team page-ceo-speech page-introduction page-culture" id="content" tabindex="-1" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->

			<div class="container">

				<?= $article->content ?>
			</div>

			<!--本模版单独引用JS-->
			<!--图片滑过特效-->
			<script src="/assets/js/modernizr.custom.min.js"></script>
			<script src="/assets/js/jquery.hoverdir.js"></script>
			<script>
				//鼠标滑过特效
				$(function() {
					$('.cp-figure-group .item').each(function() {
						$(this).hoverdir();
					});
				});
			</script>

		</main>