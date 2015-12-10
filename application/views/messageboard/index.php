		<!--page-main START-->
		<main class="page-main page-message" id="content" tabindex="-1" role="main">
			<!--main的命名方式为page+主题-->
			<!--main标签在页面中只能出现一次-->

			<div class="container">

				<!--wrap-->
				<div class="clearfix message-wrap">


<?php echo form_open('contact/message_board'); ?>
					<form action="add.php" method="post" class="col-xs-8 col-xs-offset-2 form-format">
						<!--添加required提示填写字符|IE浏览器支持到IE10+-->
						<div class="row form-group">
							<div class="col-xs-6">
								<label for="inputName" ><i class="fa fa-user"></i>姓名</label>
								<input type="text" name="name" class="form-control input-lg" id="inputName" value="<?php echo set_value('name'); ?>">
								<?php echo form_error('name'); ?>
							</div>
							<div class="col-xs-6">
								<label for="inputTel" ><i class="fa fa-phone-square"></i>电话</label>
								<input type="text" name="tel" class="form-control input-lg" id="inputTel" value="<?php echo set_value('tel'); ?>">
							    <?php echo form_error('tel'); ?>
							</div>

						</div>
						<div class="col-xs-6">
							<label for="inputTel" >
								<i class="fa fa-phone-square">
								</i>电话</label>
							<input type="text" name="tel" class="form-control input-lg" id="inputTel" value="<?php echo set_value('tel'); ?>">
							<?php echo form_error('tel'); ?>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-xs-6">
							<label for="inputEmail" >
								<i class="fa fa-envelope">
								</i>邮箱</label>
							<input type="email" name="email" class="form-control input-lg" id="inputEmail" value="<?php echo set_value('email'); ?>">
							<?php echo form_error('email'); ?>
						</div>
						<div class="col-xs-6">
							<label for="inputCompany" >
								<i class="fa fa-home">
								</i>公司名称</label>
							<input type="company" name="company" class="form-control input-lg" id="inputCompany" value="<?php echo set_value('company'); ?>">
							<?php echo form_error('company'); ?>
						</div>

					</form>

				</div>
				<!--/.wrap END-->

			</div>
		</div>
		<!--/.wrap END-->
	</div>
</main>
<!--/.page-main END-->