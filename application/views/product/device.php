<!--slide START-->
		<figure id="carousel" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
				<li data-target="#carousel" data-slide-to="3"></li>
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
		<main class="page-main page-performance" id="content" tabindex="-1" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->

			<div class="container">

				<!--筛选-->
				<header class="cp-select select-horizontal">
					<div class="clearfix inner">
						<div class="pull-left select-item">
							<select class="selectpicker" title='请选择性能' id="select_product">
								<option <?php if($id === '1'){echo 'selected';}?> value='1'>爬坡能力</option>
								<option <?php if($id === '2'){echo 'selected';}?> value='2'>四驱动力</option>
								<option <?php if($id === '3'){echo 'selected';}?> value='3'>抓地力</option>
								<option <?php if($id === '4'){echo 'selected';}?> value='4'>通过能力</option>
								<option <?php if($id === '5'){echo 'selected';}?> value='5'>车身刚性</option>
								<option <?php if($id === '6'){echo 'selected';}?> value='6'>稳定性</option>
								<option <?php if($id === '7'){echo 'selected';}?> value='7'>悬挂系统</option>
								<option <?php if($id === '8'){echo 'selected';}?> value='8'>下坡辅助能力</option>
							</select>
						</div>
					</div>
				</header>
				<!--/.cp-select END-->
				<div id="page_container">
					<div class="performance-wrap" >
						<?php foreach($dataList as $row): ?>
						<div class="section">
							<a class="clearfix performance-inner js-open-popup" href="<?= '/product/view/'. $row['id'];?>">

								<div class="performance-photo">
									<div class="base-photo cp-picture-effect">
										<?= $row['content']?>
									</div>
								</div>

								<div class="performance-description">

									<hgroup class="performance-heading">
										<h3><?= $row['road_name']?></h3>
										<h4><?= $row['intro']?></h4>
									</hgroup>

									<p class="level-wrap">
										<!--五个等级-->
										<!--类名：-->
										<!--level1|level2|level3|level4|level5-->
										<span class="glyphicon-group level3">
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										</span>
									</p>

								</div>
								<!--/.description END-->
							</a>
						</div>
						<?php endforeach; ?>
					</div>
					<!--/.wrap END-->

					<?php if ($has_data) : ?>
					<!--分页-->
					<footer class="clearfix cp-pagination">
						<nav class="pull-right">
							<ul class="pager">
								<?= $pagelink ?>
							</ul>
						</nav>
					</footer>
					<!--/.cp-pagination END-->
					<?php endif ?>
				</div>
			</div>

			<!--本模版单独引用JS-->
			<link type="text/css" href="//cdn.bootcss.com/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">
			<script src="//cdn.bootcss.com/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>

		</main>
		<!--/.page-main END-->
			<script>
			// $('.js-open-popup').magnificPopup({
					// type: 'image',
					// tLoading: '图片正在读取中 #%curr%...',
					// removalDelay: 300,
					// items: [{
						// src: '/assets/img/product/performance.jpg',
						// title: '这里是标题'
					// }, {
						// src: '/assets/img/product/performance.jpg',
						// title: '这里是标题'
					// }],
					// gallery: {
						// enabled: true
					// },
					// image: {
						// tError: '<a href="%url%">该图片#%curr%</a> 读取失败,请尝试刷新页面.',
					// }
				// });
				
				$('#select_product').on('change', function(){
					var name = $(this).find("option:selected").val();

					$.get('/product/device/1/'+ name, function(res){
							$('#page_container').html($(res).find('#page_container').html());
					});
				});
				
				$('.selectpicker').selectpicker('refresh');
			</script>

		</main>