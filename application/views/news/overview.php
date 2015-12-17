		<!--slide START-->
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
				<?= $article->content;?>
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
				<div class="news-wrap">
					<?php foreach($data as $row): ?>
					<div class="section">
						<h3><?= $row['dates'] ?>&nbsp;</h3>
                        <h3>
                            <b><?= $row['name'] ?></b>
						</h3>
						<a class="clearfix news-inner" href="<?= '/cases/view/'.$row['id']?>">
							<div class="news-picture">
								<?= $row['content'] ?>
							</div>

							<div class="news-description">
								<p class="text-justify">
									<?= $row['intro'] ?>
								</p>
							</div>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
				<!--/.wrap END-->
			</div>
		</main>
		<!--/.page-main END-->