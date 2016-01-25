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
					<?php $i = 0; if ($has_data) : ?>
						<?php 
							foreach ($pagedata as $contact_item):
							if($i == 0){
						?>
						<dl class="description">
							<dt class="h2"><?= $contact_item['name'];?></dt>
							<?= $contact_item['content'];?>
							<h3>试驾基地</h3>
							<p class="list-brand">
							<?php 
								}else{ 
									if($province_id == 0 && $city_id == 0){
							?>
										<a class="center-block" href="javascript:getId('<?= $contact_item['name'];?>')">
											<span class="glyphicon glyphicon-play"></span> <?= $contact_item['name'];?>
										</a>
							<?php break;}else{
							?>
										<a class="center-block" href="javascript:getId('<?= $contact_item['name'];?>')">
											<span class="glyphicon glyphicon-play"></span> <?= $contact_item['name'];?>
										</a>
									<?php }} ?>
							<?php $i++; endforeach;?>
							<?php else: ?>
								<div style="text-align:center; margin:50px auto 100px;">找不到记录</div>
							<?php endif;?>
							</p>
						</dl>
					</div>

					<!--地图-->
					<figure class="pull-right text-center map-picture">
						<img class="img-responsive" src="/assets/img/product/map.png">

						<!--城市绝对定位已排列好顺序-->
						<!--data-name="城市字母"-->
						
						<!--提示层-->
						
						<input type="hidden" id="all_city_bases" value='<?= json_encode($allCityBases)?>' />
											
						<a class="city" data-toolbar="city" name="广州" data-name="guangzhou" tabindex="0" role="button">
							广州
						</a>
						
						<div id="base-guangzhou" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="深圳" data-name="shenzhen" tabindex="0" role="button">
							深圳
						</a>
						<div id="base-shenzhen" class="hidden">
						   <a ></a>
						</div>
						
						<a class="city" data-toolbar="city" name="呼伦贝尔" data-name="hulunbeier" tabindex="0" role="button">
							呼伦
						</a>
						<div id="base-hulunbeier" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="哈尔滨" data-name="haerbin" tabindex="0" role="button">
							哈尔滨
						</a>
						<div id="base-haerbin" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="长春" data-name="changchun" tabindex="0" role="button">
							长春
						</a>
						<div id="base-changchun" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="沈阳" data-name="shenyang" tabindex="0" role="button">
							沈阳
						</a>
						<div id="base-shenyang" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="北京" data-name="beijing" tabindex="0" role="button">
							北京
						</a>
						<div id="base-beijing" class="hidden">
						   <a></a>
						</div>

						<a class="city" data-toolbar="city" name="石家庄" data-name="shijiazhuang" tabindex="0" role="button">
							石家庄
						</a>
						<div id="base-shijiazhuang" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="银川" data-name="yinchuan" tabindex="0" role="button" data-content="暂无试驾基地">
							银川
						</a>
						<div id="base-yinchuan" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="太原" data-name="taiyuan" tabindex="0" role="button">
							太原
						</a>
						<div id="base-taiyuan" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="济南" data-name="jinan" tabindex="0" role="button">
							济南
						</a>
						<div id="base-jinan" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="青岛" data-name="qingdao" tabindex="0" role="button">
							青岛
						</a>
						<div id="base-qingdao" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="西宁" data-name="xining" tabindex="0" role="button">
							西宁
						</a>
						<div id="base-xining" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="兰州" data-name="lanzhou" tabindex="0" role="button">
							兰州
						</a>
						<div id="base-lanzhou" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="西安" data-name="xian" tabindex="0" role="button">
							西安
						</a>
						<div id="base-xian" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="郑州" data-name="zhengzhou" tabindex="0" role="button">
							郑州
						</a>
						<div id="base-zhengzhou" class="hidden">
						   <a></a>
						</div>

						<a class="city" data-toolbar="city" name="南京" data-name="nanjing" tabindex="0" role="button">
							南京
						</a>
						<div id="base-nanjing" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="合肥" data-name="hefei" tabindex="0" role="button">
							合肥
						</a>
						<div id="base-hefei" class="hidden">
						   <a></a>
						</div>

						<a class="city" data-toolbar="city" name="苏州" data-name="suzhou" tabindex="0" role="button">
							苏州
						</a>
						<div id="base-suzhou" class="hidden">
						   <a href="#"></a>
						</div>

						<a class="city" data-toolbar="city" name="上海" data-name="shanghai" tabindex="0" role="button">
							上海
						</a>
						<div id="base-shanghai" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="成都" data-name="chengdu" tabindex="0" role="button">
							成都
						</a>
						<div id="base-chengdu" class="hidden">
						   <a></a>
						</div>

						<a class="city" data-toolbar="city" name="重庆" data-name="chongqing" tabindex="0" role="button">
							重庆
						</a>
						<div id="base-chongqing" class="hidden">
						   <a></a>
						</div>

						<a class="city" data-toolbar="city" name="武汉" data-name="wuhan" tabindex="0" role="button">
							武汉
						</a>
						<div id="base-wuhan" class="hidden">
						   <a ></a>
						</div>

						<a class="city" data-toolbar="city" name="南昌" data-name="nanchang" tabindex="0" role="button">
							南昌
						</a>
						<div id="base-nanchang" class="hidden">
						   <a></a>
						</div>

						<a class="city" data-toolbar="city" name="杭州" data-name="hangzhou" tabindex="0" role="button">
							杭州
						</a>
						<div id="base-hangzhou" class="hidden">
						   <a></a>
						</div>

						<a class="city" data-toolbar="city" name="贵阳" data-name="guiyang" tabindex="0" role="button">
							贵阳
						</a>
						<div id="base-guiyang" class="hidden">
						   <a></a>
						</div>

						<a class="city" data-toolbar="city" name="长沙" data-name="changsha" tabindex="0" role="button">
							长沙
						</a>
						<div id="base-changsha" class="hidden">
						   <a></a>
						</div>

						<a class="city" data-toolbar="city" name="福州" data-name="fuzhou" tabindex="0" role="button">
							福州
						</a>
						<div id="base-fuzhou" class="hidden">
						   <a></a>
						</div>

						<a class="city" data-toolbar="city" name="昆明" data-name="kunming" tabindex="0" role="button">
							昆明
						</a>
						<div id="base-kunming" class="hidden">
						   <a></a>
						</div>

						<a class="city" data-toolbar="city" name="南宁" data-name="nanning" tabindex="0" role="button">
							南宁
						</a>
						<div id="base-nanning" class="hidden">
						   <a></a>
						</div>

						<a class="city" data-toolbar="city" name="厦门" data-name="xiamen" tabindex="0" role="button">
							厦门
						</a>
						<div id="base-xiamen" class="hidden">
						   <a></a>
						</div>
						
						<a class="city" data-toolbar="city" name="东莞" data-name="dongguan" tabindex="0" role="button">
							东莞
						</a>
						<div id="base-dongguan" class="hidden">
						   <a></a>
						</div>

						<a class="city" data-toolbar="city" name="佛山" data-name="foshan" tabindex="0" role="button">
							佛山
						</a>
						<div id="base-foshan" class="hidden">
						   <a></a>
						</div>

						<a class="city" data-toolbar="city" name="海口" data-name="haikou" tabindex="0" role="button">
							海口
						</a>
						
						<div id="base-haikou" class="hidden">
						   <a></a>
						</div>

						<a class="city" data-toolbar="city" name="三亚" data-name="sanya" tabindex="0" role="button">
							三亚
						</a>
						
						<div id="base-sanya" class="hidden">
						   <a></a>
						</div>

					</figure>
					<!--/.map-picture END-->

				</div>
				<!--/.wrap END-->
			
				<script src="/assets/js/jquery.toolbar.min.js"></script>
				<script>
				    var citys = $('a[data-toolbar="city"]');
					var allCityBases = JSON.parse(document.getElementById("all_city_bases").value);
					
					$.each(citys, function(i, obj){
						
						var cityName = $(this).attr("name");
						var isThis = this;
						$.each(allCityBases, function(i, item){
							if(cityName == item.keywords){
								$('#base-' + $(obj).attr('data-name')).find("a").text(item.name);
								
								$(obj).toolbar({
									content: '#base-' + $(obj).attr('data-name'),
									position: 'top'
								});
							}
						});
					});
					
					$('a[data-toolbar="city"]').click(function(){
						name = $(this).attr("name");
						$.post('contact/index',{name:name},function(res){
							$('#page_container').html($(res).find('#page_container').html());
						});
					});
				</script>				
				
				
				<script>
					 var page_url = '/contact/index';
					 var region_url = '/contact/region';
					
					
					
					// $("[data-content]").each(function () {
						// var cityName = $(this).attr("name");
						// var isThis = this;
						// $.each(allCityBases, function(i, item){
							// console.log(item.keywords);
							// if(cityName == item.keywords){
								// $(isThis).attr("data-content", item.name);
							// }
						// });
					// });
					
					// $('[data-toggle="popover"]').popover();
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
			                reload_list(pid, cid);
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
				<script>
					function getId(baseName){
						console.log(baseName);
						
						$.post('/contact/getId', {baseName:baseName}, function(data){

							if(data.status == true){
								location.href = "/bases/view/"+data.id;
							}
							else{
								console.log(data.status);
							}
						}, "json");
					}
				</script>
			</div>

		</main>
		<!--/.page-main END-->		
