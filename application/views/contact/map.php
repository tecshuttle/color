
		
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
					<img src="/assets/img/product/contact-1.jpg">
				</div>
				<div class="item">
					<img src="/assets/img/product/contact-2.jpg">
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
		<main class="page-main page-map" id="content" tabindex="-1" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->

			<div class="container" id="page_container">
				<!--筛选-->
				
				
				<header class="cp-select select-horizontal">
					<div class="clearfix inner">
						<div class="pull-left select-item">
							<select class="form-control selectpicker" id="select_province">
								<option value="0">请选择省份</option>
								<?php foreach ($province_list as $row): ?>
								<option <?php if ($province_id == $row['region_id']) : ?>selected<?php endif ?> value="<?php echo $row['region_id'] ?>"><?php echo $row['region_name'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="pull-left select-item">
							<select class="form-control selectpicker" id="select_city">
								<option value="0">请选择城市</option>
								<?php foreach ($city_list as $row): ?>
								<option <?php if ($city_id == $row['region_id']) : ?>selected<?php endif ?> value="<?php echo $row['region_id'] ?>"><?php echo $row['region_name'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
				</header>
				<!--/.cp-select END-->

				<!--wrap-->
				<div class="map-wrap">

					<div class="pull-left">
					<?php if ($has_data) : ?>
						<?php foreach ($pagedata as $contact_item):?>
						<dl class="description">
							<dd><i class="fa fa-map-marker"></i><?= $contact_item['name']?></dd>
						</dl>

						<h3>试驾基地</h3>
						<p class="list-brand">
							<span class="center-block">
								<span class="glyphicon glyphicon-play"></span> 三源色 · <?= $contact_item['name']?>
							</span>
						</p>

						<h3>越野器械</h3>
						<p class="list-brand">
							<span class="center-block">
								<span class="glyphicon glyphicon-play"></span>
								<?= $contact_item['name']?>
							</span>

						</p>
						<?php break;endforeach;?>
						<?php else: ?>
						<div style="text-align:center; margin:50px auto 100px;">找不到记录</div>
					<?php endif;?>
					</div>

					<!--地图-->
					<figure class="pull-right text-center map-picture">
						<img class="img-responsive" src="/assets/img/product/map.png">

						<!--城市绝对定位已排列好顺序-->
						<!--data-name="城市字母"-->
						<!--data-content中的html部分务必排成一行-->
						<input type="hidden" id="all_city_bases" value='<?= json_encode($allCityBases)?>' />
						
						<a class="city" name="广州" data-name="guangzhou" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							广州
						</a>

						<a class="city" name="深圳" data-name="shenzhen" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地基</h5>">
							深圳
						</a>
						
						<a class="city" name="呼伦贝尔" data-name="hulunbeier" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							呼伦
						</a>

						<a class="city" name="哈尔滨" data-name="haerbin" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							哈尔滨
						</a>

						<a class="city" name="长春" data-name="changchun" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							长春
						</a>

						<a class="city" name="沈阳" data-name="shenyang" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							沈阳
						</a>

						<a class="city" name="北京" data-name="beijing" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							北京
						</a>

						<a class="city" name="石家庄" data-name="shijiazhuang" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							石家庄
						</a>

						<a class="city" name="银川" data-name="yinchuan" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							银川
						</a>

						<a class="city" name="太原" data-name="taiyuan" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h55>">
							太原
						</a>

						<a class="city" name="济南" data-name="jinan" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							济南
						</a>

						<a class="city" name="青岛" data-name="qingdao" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							青岛
						</a>

						<a class="city" name="西宁" data-name="xining" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							西宁
						</a>

						<a class="city" name="兰州" data-name="lanzhou" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							兰州
						</a>

						<a class="city" name="西安" data-name="xian" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							西安
						</a>

						<a class="city" name="郑州" data-name="zhengzhou" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							郑州
						</a>

						<a class="city" name="南京" data-name="nanjing" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							南京
						</a>

						<a class="city" name="合肥" data-name="hefei" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							合肥
						</a>

						<a class="city" name="苏州" data-name="suzhou" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							苏州
						</a>

						<a class="city" name="上海" data-name="shanghai" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							上海
						</a>

						<a class="city" name="成都" data-name="chengdu" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							成都
						</a>

						<a class="city" name="重庆" data-name="chongqing" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							重庆
						</a>

						<a class="city" name="武汉" data-name="wuhan" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							武汉
						</a>

						<a class="city" name="南昌" data-name="nanchang" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							南昌
						</a>

						<a class="city" name="杭州" data-name="hangzhou" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							杭州
						</a>

						<a class="city" name="贵阳" data-name="guiyang" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							贵阳
						</a>

						<a class="city" name="长沙" data-name="changsha" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							长沙
						</a>

						<a class="city" name="福州" data-name="fuzhou" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							福州
						</a>

						<a class="city" name="昆明" data-name="kunming" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							昆明
						</a>

						<a class="city" name="南宁" data-name="nanning" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							南宁
						</a>

						<a class="city" name="厦门" data-name="xiamen" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							厦门
						</a>
						<a class="city" name="东莞" data-name="dongguan" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							东莞
						</a>

						<a class="city" name="佛山" data-name="foshan" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							佛山
						</a>

						<a class="city" name="海口" data-name="haikou" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							海口
						</a>

						<a class="city" name="三亚" data-name="sanya" tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-html="true" data-content="<h5>该城市暂无试驾基地</h5>">
							三亚
						</a>

					</figure>
					<!--/.map-picture END-->

				</div>
				<!--/.wrap END-->
<script>
		var page_url = '/contact/map';
		var region_url = '/contact/region';
		
		var allCityBases = JSON.parse(document.getElementById("all_city_bases").value);
		
		$("[data-content]").each(function () {
			var cityName = $(this).attr("name");
			var isThis = this;
			$.each(allCityBases, function(i, item){
				console.log(item.keywords);
				if(cityName == item.keywords){
					$(isThis).attr("data-content", item.name);
				}
			});
		});
		
		$('[data-toggle="popover"]').popover();
</script>
<script>
        $(function(){
           // 选择省份
            $('#select_province').on('change', function(){
                var id = $(this).val();
                $.get(region_url + '/' + id, function(res){
                    $('#select_city').html(res);
                    reload_list(id, 0);
                });
            });
            
            // 选择城市
            $('#select_city').on('change', function(){
                var pid = $('#select_province').val();
                var cid = $(this).val();
                reload_list(pid, cid)
            }); 
            
            // 重新加载记录列表
             function reload_list(pid, cid){
                $.get(page_url + '/1/' + pid + '/' + cid + '/sync', function(res){
                    $('#page_container').html($(res).find('#page_container').html());
                });
            } 
			
			$('.selectpicker').selectpicker('refresh');
        });
</script>
			</div>

		</main>
		<!--/.page-main END-->

		
		
