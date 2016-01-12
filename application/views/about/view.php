	<!--page-main START-->
		<main class="page-main page-detail" id="content" tabindex="-1" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->

			<div class="container">

				<!--detail-article-->
				<article class="detail-article">
					<?php switch($id){
						case 1:
						if($fristView->content == NULL){
							echo '三级页面未录入';
						}else{
							echo $fristView->content;
						};break;
						
						case 2: 
						if($secondView->content == NULL){
							echo '三级页面未录入';
						}else{
							echo $secondView->content;
						};break;
						
						case 3:
						if($thirdView->content == NULL){
							echo '三级页面未录入';
						}else{
							echo $thirdView->content;
						};break;
						
						case 4: 
						if($fourthView->content == NULL){
							echo '三级页面未录入';
						}else{
							echo $fourthView->content;
						};break;
						
						case 5:
						if($fifthView->content == NULL){
							echo '三级页面未录入';
						}else{
							echo $fifthView->content;
						};break;
						
						case 6:
						if($sixthView->content == NULL){
							echo '三级页面未录入';
						}else{
							echo $sixthView->content;
						};break;
						
						case 7: 
						if($seventhView->content == NULL){
							echo '三级页面未录入';
						}else{
							echo $seventhView->content;
						};break;
					}?>
				</article>
				<!--/.detail-article END-->

			</div>
		</main>
		<!--/.page-main END-->