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
			<?= $article->content;?>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
        </span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true">
        </span>
        <span class="sr-only">Next</span>
    </a>
</figure>

<!--/.slide END-->
<!--page-main START-->
<main class="page-main page-base" id="content" tabindex="-1" role="main">
    <!--main的命名方式为page+主题-->
    <!--main标签在页面中只能出现一次-->
    <div class="container" id="page_container">
        <!--筛选-->
        <header class="cp-select select-horizontal">
            <div class="clearfix inner">
                <div class="pull-left select-item">
                    <select class="form-control selectpicker" id="select_province">
                        <option value="0">请选择</option>
                        <?php foreach ($province_list as $row): ?>
                        <option <?php if ($province_id == $row['region_id']) : ?>selected<?php endif ?> value="<?php echo $row['region_id'] ?>"><?php echo $row['region_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="pull-left select-item">
                    <select class="form-control selectpicker" id="select_city">
                        <option value="0">请选择</option>
                        <?php foreach ($city_list as $row): ?>
                        <option <?php if ($city_id == $row['region_id']) : ?>selected<?php endif ?> value="<?php echo $row['region_id'] ?>"><?php echo $row['region_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
        </header>
        <!--/.cp-select END-->

        <!--基地列表-->
        <div class="base-wrap">
            <?php if ($has_data) : ?>
                <?php foreach ($pagedata as $bases_item): ?>
                <div class="section">
                    <a class="clearfix base-inner" href="<?= '/bases/view/'.$bases_item['id']?>">
                        <div class="base-photo cp-picture-effect">
							<?php echo $bases_item['content']; ?>
                        </div>
                        <div class="base-description">
                            <h3 class="base-heading">
                                <?php echo $bases_item['name']; ?>
                            </h3>
                            <p class="text-justify">
                                <?php echo $bases_item['intro']; ?>
                            </p>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
            <div style="text-align:center; margin:50px auto 100px;">找不到记录</div>
            <?php endif ?>
        </div>
        <!--/.base-wrap END-->

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

        <script>
        var page_url = '/bases/index';
        var region_url = '/bases/region';
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