<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie8 lte9" lang="zh-cn"><![endif]-->
<!--[if IE 9]>
<html class="ie9 lte9" lang="zh-cn"><![endif]-->
<!--[if !(IE 8) | !(IE 9)]><!-->
<html lang="zh-cn">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta name="force-rendering" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <title>注册</title>

    <!--Core css-->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!--Custom css-->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!--Font css-->
    <link href="//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

    <script>
        // Copyright 2014-2015 Twitter, Inc.
        // Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement('style')
            msViewportStyle.appendChild(
                document.createTextNode(
                    '@-ms-viewport{width:auto!important}'
                )
            )
            document.querySelector('head').appendChild(msViewportStyle)
        }
    </script>

    <!--Core js-->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!--HTML5 shim for IE8 support of HTML5 elements-->
    <!--[if IE 8]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <script src="//cdn.bootcss.com/selectivizr/1.0.2/selectivizr-min.js"></script>
    <![endif]-->

    <!----Kill IE----->
    <!--[if lte IE 7 ]>
    <link rel="stylesheet" href="assets/iealert/iealert.min.css">
    <script src="assets/iealert/iealert.min.js"></script>
    <script>
        $(document).ready(function () {
            $("body").iealert();
        });
    </script>
    <![endif]-->

</head>

<body>

<header class="brand--common">
    <a class="navbar-brand cp-text--indent" href="/">
        SUNYATHE|中国·三源色
    </a>
</header>
<!--/.heading END-->

<!--page-main START-->
<main class="page-main page-login_sign-up" role="main">
    <!--main的命名方式为page+主题-->
    <!--main标签在页面中只能出现一次-->
    <section class="body sign-up">

        <header role="heading">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="<?= ($which === 'email' ? 'active' : '') ?>">
                    <a href="#sign-up__email" aria-controls="sign-up__email" role="tab" data-toggle="tab">邮箱注册</a>
                </li>

                <li role="presentation" class="<?= ($which === 'phone' ? 'active' : '') ?>">
                    <a href="#sign-up__phone" aria-controls="sign-up__phone" role="tab" data-toggle="tab">手机注册</a>
                </li>
            </ul>
        </header>

        <!-- Tab panes -->
        <div class="tab-content">
            <!--邮箱注册-->
            <div role="tabpanel" class="tab-pane fade <?= ($which === 'email' ? 'in active' : '') ?>" id="sign-up__email">
                <form method="post" accept-charset="utf-8" action="/register/index">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">邮&nbsp;箱：</label>

                        <div class="col-xs-9">
                            <input type="email" name="email" class="form-control input-lg cp-placeholder" placeholder="请输入您的邮箱" value="<?php echo set_value('email'); ?>">

                            <p class="form-control-static"><?php echo form_error('email'); ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">用户名：</label>

                        <div class="col-xs-9">
                            <input type="text" name="username" class="form-control input-lg cp-placeholder" placeholder="3-16个汉字或字母或数字" value="<?php echo set_value('username'); ?>">

                            <p class="form-control-static"><?php echo form_error('username'); ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">密&nbsp;码：</label>

                        <div class="col-xs-9">
                            <input type="password" name="password" class="form-control input-lg cp-placeholder" placeholder="6-16个英文字母和数字" value="<?php echo set_value('password'); ?>">

                            <p class="form-control-static"><?php echo form_error('password'); ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">确认密码：</label>

                        <div class="col-xs-9">
                            <input type="password" name="passconf" class="form-control input-lg cp-placeholder" placeholder="请重新输入您的密码" value="<?php echo set_value('passconf'); ?>">

                            <!--验证信息-->
                            <p class="form-control-static"><?php echo form_error('passconf'); ?></p>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <button type="submit" name="which" value="email" class="btn btn-block btn-danger">
                                注&nbsp;册
                            </button>
                        </div>
                        <div class="col-xs-12">
                            <div class="checkbox" data-toggle="buttons">
                                <label class="btn">
                                    <input type="checkbox" name="assent"> 我已阅读并同意
									<?php echo form_error('assent'); ?>
                                </label>

                            </div>
                            
                             <a class="agreement" href="/html/服务条款.html" target="_blank">《服务协议》</a>

                        </div>
                    </div>

                </div>
                <!--/.form-horizontal END-->

            </div>
            <!--/.tab-pane END-->

            <!--手机注册-->
            <div role="tabpanel" class="tab-pane fade <?= ($which === 'phone' ? 'in active' : '') ?>" id="sign-up__phone">

                <div class="form-horizontal">
                    <input type="hidden" id="phoneType" value="true">

                    <div class="form-group">
                        <label class="col-xs-3 control-label">用户名：</label>

                        <div class="col-xs-9">
                            <input type="text" name="phoneuser" class="form-control input-lg cp-placeholder" placeholder="3-16个汉字或字母或数字" value="<?php echo set_value('phoneuser'); ?>">

                            <!--验证信息-->
                            <p class="form-control-static"><?php echo form_error('phoneuser'); ?></p>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">密码：</label>

                        <div class="col-xs-9">
                            <input type="password" name="phonepassword" class="form-control input-lg cp-placeholder" placeholder="6-16个英文字母和数字" value="<?php echo set_value('phonepassword'); ?>">

                            <!--验证信息-->
                            <p class="form-control-static"><?php echo form_error('phonepassword'); ?></p>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">手机号：</label>

                        <div class="col-xs-9">
                            <input type="text" name="tel" class="form-control input-lg cp-placeholder" placeholder="请输入手机号" value="<?php echo set_value('tel'); ?>">

                            <!--验证信息-->
                            <p class="form-control-static"><?php echo form_error('tel'); ?></p>


                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <button type="submit" name="which" value="phone" class="btn btn-block btn-danger">
                                注&nbsp;册
                            </button>
                        </div>
                        <div class="col-xs-12">
                            <div class="checkbox" data-toggle="buttons">
                                <label class="btn">
                                    <input type="checkbox" name="consent"> 我已阅读并同意 
                                    <?php echo form_error('consent'); ?>
                                </label>                             
                            </div>
                            
                            <a class="agreement" href="/html/服务条款.html" target="_blank">《服务协议》</a>

                        </div>
                    </div>

                </div>
                <!--/.form-horizontal END-->
				</form>
            </div>
            <!--/.tab-pane END-->

        </div>
        <!--/.tab-content END-->

    </section>
</main>
<!--/.page-main END-->

<script src="//cdn.bootcss.com/jquery-placeholder/2.1.3/jquery.placeholder.min.js"></script>
<script>
    //jquery.placeholder.min.js
    //占位符
    $(function () {
        $("input, textarea").placeholder();
    });
</script>

</body>
</html>