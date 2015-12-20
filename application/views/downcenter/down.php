
<main class="page-main page-download" id="content" tabindex="-1" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->

			<div class="container">
				<div class="download-wrap">
				<?php
					if(isset($_COOKIE['userLogin'])){
						header("Content-Type: application/force-download");
						header("Content-Disposition: attachment; filename=".basename($filename));
						readfile($filename);
					}else{
						?>
							<a href="/login/index">_______页面提示：您还未登录，请点击此处进行登录方可下载文件。</a>
						<?php
					}
				?>
				<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/> 	
				</div>
				<!--/.wrap END-->
			</div>
		</main>