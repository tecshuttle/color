

		<!--slide START-->
		<figure id="carousel" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
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
		<main class="page-main page-download" id="content" tabindex="-1" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->

			<div class="container">
				<div class="download-wrap">
				<?php if($countData):?>
				<?php foreach($data as $row):?>
					<div class="section">
						<a class="clearfix download-inner" href="<?= $row['url'];?>">
							<div class="download-picture cp-picture-effect">
								<?= $row['content'];?>
							</div>

							<div class="download-description">
								<h3 class="download-heading"><?= $row['name'];?></h3>
								<span class="btn btn-default">
									<i class="fa fa-angle-right"></i>立即下载
								</span>
							</div>

						</a>
					</div>
				<?php endforeach;?>
				<?php else:?>
					<div class="section">
						暂无下载内容
					</div>
				<?php endif;?>
				</div>
				<!--/.wrap END-->


				<!--分页-->
				<footer class="clearfix cp-pagination">
					 <nav class="pull-right">
						<ul class="pager">
							<?= $pagelink ?>
						</ul>
					</nav>
				</footer>
				<!--/.cp-pagination END-->

			</div>
		</main>
		<!--/.page-main END-->

