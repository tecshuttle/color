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
		<main class="page-main page-case" id="content" tabindex="-1" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->

			<div class="container">

				<?= $article->content ?>

				

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
						src: 'assets/img/product/case01.jpg',
						title: '这里是标题'
					}, {
						src: 'assets/img/product/case02.jpg',
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