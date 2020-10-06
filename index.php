<?php $counter1  = intval(file_get_contents("api_qrcode/counter.dat"));?>
<?php $counter2  = intval(file_get_contents("api_sjbz/counter.dat"));?>
<?php $counter3  = intval(file_get_contents("api_qqol/counter.dat"));?>
<?php $counter4  = intval(file_get_contents("api_qqtx/counter.dat"));?>
<?php $counter5  = intval(file_get_contents("api_bing/counter.dat"));?>
<?php $counter6  = intval(file_get_contents("api_wyy/counter.dat"));?>
<?php $counter7  = intval(file_get_contents("api_mail/counter.dat"));?>
<?php $counter8  = intval(file_get_contents("api_yan/counter.dat"));?>
<?php $counter9  = intval(file_get_contents("api_sjtx/counter.dat"));?>
<?php $counter10 = intval(file_get_contents("api_sctp/counter.dat"));?>
<?php $counter11 = intval(file_get_contents("api_ip/counter.dat"));?>
<?php $counter12 = intval(file_get_contents("api_yzm/counter.dat"));?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>CM API</title>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="CM api,随机壁纸api,动漫壁纸api,美女壁纸api,一言api,随机头像api,加群api,动漫头像api,手机壁纸api,电脑壁纸api,自动换壁纸api,代刷网api">
        <meta name="keywords" content="CM api,随机壁纸api,动漫壁纸api,美女壁纸api,一言api,随机头像api,加群api,动漫头像api,手机壁纸api,电脑壁纸api,自动换壁纸api,代刷网api">
        <!-- Web fonts -->

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="./css/oneui.css">

    </head>
    <body style="background:url(https://api.crazymen.cn/api_bing/);">

                <!-- Live Previews -->
                <div style="border-radius:5px">
                    <section class="content content-boxed">
                        <!-- Section Content -->

                        <div class="row">
                            <div class="col-sm-4">
                                <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="api_qrcode/show.php">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter1; ?></div>

                                    <div class="block-content">
                                        <div class="h4 push-5">Qrcode二维码</div>
                                        <p class="text-muted">生成二维码在线API</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="api_sjbz/show.php">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter2; ?></div>

                                    <div class="block-content">
                                        <div class="h4 push-5">随机输出壁纸</div>
                                        <p class="text-muted">每次刷新带给你不同体验</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                               <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="api_qqol/show.php">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter3; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">QQ在线状态查询</div>
                                        <p class="text-muted">查看QQ好友是否电脑在线</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="api_qqtx/show.php">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter4; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">获取QQ昵称和头像</div>
                                        <p class="text-muted">API获取QQ昵称和头像</p>
                                    </div>
                                </a>
                            </div>
                           <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="api_bing/show.php">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter5; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">Bing每日图</div>
                                        <p class="text-muted">获取每日Bing背景图</p>
                                    </div>
                                </a>
                            </div>
                        <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="api_wyy">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter6; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">网易云</div>
                                        <p class="text-muted">强大的网易云音乐api</p>
                                    </div>
                                </a>
                            </div>
                        <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="api_mail/show.php">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter7; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">邮件发送API</div>
                                        <p class="text-muted">免费发送邮件API接口</p>
                                    </div>
                                </a>
                            </div>
                        <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="api_yan/show.php">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter8; ?></div>
                                    <div class="block-content">
                                      <div class="h4 push-5">随机语录</div>
                                        <p class="text-muted">每天定时送上一杯毒鸡汤</p>
                                    </div>
                                </a>
                            </div>
                       <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="api_sjtx/show.php">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter9; ?></div>
                                    <div class="block-content">
                                      <div class="h4 push-5">随机头像</div>
                                        <p class="text-muted">随机输出各类头像</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="api_sctp/show.php">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter10; ?></div>
                                    <div class="block-content">
                                      <div class="h4 push-5">图床</div>
                                        <p class="text-muted">将图片上传到服务器，生成链接</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="api_ip/show.php">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter11; ?></div>
                                    <div class="block-content">
                                      <div class="h4 push-5">获取IP</div>
                                        <p class="text-muted">获取主机IP地址</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="api_yzm/show.php">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter12; ?></div>
                                    <div class="block-content">
                                      <div class="h4 push-5">获取验证码</div>
                                        <p class="text-muted">随机获取验证码图片</p>
                                    </div>
                                </a>
                            </div>
                       <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="#">
                                    <div class="ribbon-box font-w600">调用:0</div>
                                    <div class="block-content">
                                      <div class="h4 push-5">待更新</div>
                                        <p class="text-muted">努力更新中！！！！！！</p>
                                    </div>
                                </a>
                            </div>
                        <div class="col-sm-12">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="#">
                                    <div class="block-content">
                                        <!--<p class="text-center"><a href="https://api.btstu.cn">搏天api</a></p>-->
                                        <p class="text-center">本网站只提供接口服务，造成的一切后果与本网站无关!</p>
                                        <p class="text-center">站长QQ2395353168</p>
                                    </div>
                                </a>
                            </div>
    </body>
<!-- font-awesome 4.2.0 -->
<link href="http://lib.baomitu.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- JQuery 2.2.4 -->
<script src="http://lib.baomitu.com/jquery/2.2.4/jquery.min.js"></script>
<!-- JQuery-mousewheel 3.1.9 -->
<script src="http://lib.baomitu.com/jquery-mousewheel/3.1.9/jquery.mousewheel.min.js"></script>
</html>
