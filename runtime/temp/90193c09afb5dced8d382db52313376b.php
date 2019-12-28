<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:81:"/www/wwwroot/www.luxiaogui.cn/public/../application/index/view/contact/index.html";i:1576656542;s:72:"/www/wwwroot/www.luxiaogui.cn/application/index/view/layout/default.html";i:1576651105;s:69:"/www/wwwroot/www.luxiaogui.cn/application/index/view/common/meta.html";i:1574920671;s:70:"/www/wwwroot/www.luxiaogui.cn/application/index/view/common/mynav.html";i:1576657814;s:71:"/www/wwwroot/www.luxiaogui.cn/application/index/view/common/script.html";i:1572536367;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?> – <?php echo __('The fastest framework based on ThinkPHP5 and Bootstrap'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<?php if(isset($keywords)): ?>
<meta name="keywords" content="<?php echo $keywords; ?>">
<?php endif; if(isset($description)): ?>
<meta name="description" content="<?php echo $description; ?>">
<?php endif; ?>
<meta name="author" content="FastAdmin">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />

<link href="/assets/css/frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config: <?php echo json_encode($config); ?>
    };
</script>

        <link href="/assets/css/user.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">
    </head>

    <style>

        .navbar-inverse{
            background-color: #0f4bac;
        }
    </style>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header-navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo url('/'); ?>" style="padding:6px 15px;"><img src="/assets/img/logo.png" style="height:40px;" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="header-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/"  style="color: #FFFFFF;"><?php echo __('Home'); ?></a></li>
                        <li><a href="<?php echo url('info/index'); ?>" style="color: #FFFFFF;"><?php echo __('信息公开'); ?></a></li>
                        <li><a href="<?php echo url('news/index'); ?>" style="color: #FFFFFF;"><?php echo __('新闻列表'); ?> </a></li>
                        <li><a href="<?php echo url('contact/index'); ?>" style="color: #FFFFFF;" ><?php echo __('联系我们'); ?> </a></li>
                        <li><a href="<?php echo url('about/index'); ?>" style="color: #FFFFFF;"><?php echo __('关于我们'); ?> </a></li>

                        <!--<li class="dropdown">-->
                        <!--    <?php if($user): ?>-->
                        <!--    <a href="<?php echo url('user/index'); ?>" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 10px;height: 50px;">-->
                        <!--        <span class="avatar-img"><img src="<?php echo cdnurl($user['avatar']); ?>" alt=""></span>-->
                        <!--    </a>-->
                        <!--    <?php else: ?>-->
                        <!--    <a href="<?php echo url('user/index'); ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('User center'); ?> <b class="caret"></b></a>-->
                        <!--    <?php endif; ?>-->
                        <!--    <ul class="dropdown-menu">-->
                        <!--        <?php if($user): ?>-->
                        <!--        <li><a href="<?php echo url('user/index'); ?>"><i class="fa fa-user-circle fa-fw"></i><?php echo __('User center'); ?></a></li>-->
                        <!--        <li><a href="<?php echo url('user/profile'); ?>"><i class="fa fa-user-o fa-fw"></i><?php echo __('Profile'); ?></a></li>-->
                        <!--        <li><a href="<?php echo url('user/changepwd'); ?>"><i class="fa fa-key fa-fw"></i><?php echo __('Change password'); ?></a></li>-->
                        <!--        <li><a href="<?php echo url('user/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i><?php echo __('Sign out'); ?></a></li>-->
                        <!--        <?php else: ?>-->
                        <!--        <li><a href="<?php echo url('user/login'); ?>"><i class="fa fa-sign-in fa-fw"></i> <?php echo __('Sign in'); ?></a></li>-->
                        <!--        <li><a href="<?php echo url('user/register'); ?>"><i class="fa fa-user-o fa-fw"></i> <?php echo __('Sign up'); ?></a></li>-->
                        <!--        <?php endif; ?>-->

                        <!--    </ul>-->
                        <!--</li>-->
                    </ul>
                </div>
            </div>
        </nav>

        <main class="content">
            <style>
    .basicinfo {
        margin: 15px 0;
    }
    .basicinfo .row > .col-xs-4 {
        padding-right: 0;
    }
    .basicinfo .row > div {
        margin: 5px 0;
    }
    img{max-width: 100%;display: inline;overflow:hidden;
    }
    .user-baseinfo p{max-width: 100%;display: inline;overflow:hidden;
    }
</style>
<div id="content-container" class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="sidenav">

    <ul class="list-group">
        <li class="list-group-heading"><?php echo __('导航栏'); ?></li>
        <!--<li class="list-group-item <?php echo $config['controllername']=='index'?'active':''; ?>"> <a href="<?php echo url('index/index'); ?>"><i class="fa fa-user-circle fa-fw"></i> <?php echo __('首页'); ?></a> </li>-->
        <li class="list-group-item <?php echo $config['controllername']=='info'?'active':''; ?>"> <a href="<?php echo url('info/index'); ?>"><i class="fa fa-info fa-fw"></i> <?php echo __('信息公开'); ?></a> </li>
        <li class="list-group-item <?php echo $config['controllername']=='news'?'active':''; ?>"> <a href="<?php echo url('news/index'); ?>"><i class="fa fa-newspaper-o fa-fw"></i> <?php echo __('新闻列表'); ?></a> </li>
        <li class="list-group-item <?php echo $config['controllername']=='contact'?'active':''; ?>"> <a href="<?php echo url('contact/index'); ?>"><i class="fa fa-phone fa-fw"></i> <?php echo __('联系我们'); ?></a> </li>
        <li class="list-group-item <?php echo $config['controllername']=='about'?'active':''; ?>"> <a href="<?php echo url('about/index'); ?>"><i class="fa fa-id-card fa-fw"></i> <?php echo __('关于我们'); ?></a> </li>
    </ul>
</div>

        </div>
        <div class="col-md-9">
            <div class="panel panel-default ">
                <div class="panel-body">
                    <h2 class="page-header">
                        <?php echo __('联系我们'); ?>
                    </h2>
                    <div class="row user-baseinfo" style="word-break:break-all; word-wrap:break-word ;">
                        <br>
                        <br>
                        <?php echo $data['content']; ?>
                        <br>
                        <br>
                        <span>附件</span>
                        <?php if(is_array($data['files']) || $data['files'] instanceof \think\Collection || $data['files'] instanceof \think\Paginator): $key = 0; $__LIST__ = $data['files'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($key % 2 );++$key;?>
                        <br><a href="<?php echo $value; ?>">附件<?php echo $key; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        </main>

        <footer class="footer" style="clear:both;background-color:#dcdcdc">
            <!-- FastAdmin是开源程序，建议在您的网站底部保留一个FastAdmin的链接 -->

            <p>&copy; 2019 <br><a href="/" target="_blank">王金宏</a>. All Rights Reserved.</p>

            <p>Email:392513170@qq.com</p>


            <p>
                ICP主体备案号<br>
                蜀ICP备19028209号<br>
                主办单位名称<br>
                王金宏<br>
                主办单位负责人<br>
                王金宏<br>

                网站备案号 <br>
                蜀ICP备19028209号-1<br>	网站名称 <br>陆小龟小世界
                域名luxiaogui.cn<br>
                网站负责人<br>王金宏<br>
            </p>
        </footer>

        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>

    </body>

</html>
