<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"/www/wwwroot/www.luxiaogui.cn/public/../application/index/view/index/index.html";i:1577464391;s:72:"/www/wwwroot/www.luxiaogui.cn/application/index/view/layout/default.html";i:1576651105;s:69:"/www/wwwroot/www.luxiaogui.cn/application/index/view/common/meta.html";i:1574920671;s:71:"/www/wwwroot/www.luxiaogui.cn/application/index/view/common/script.html";i:1572536367;}*/ ?>
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
            <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>map</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script src="/s/jquery-1.11.3.min.js"></script>
    <script src="/s/echarts.js"></script>
    <style>
        .map{
            margin-top: 50px;
        }
        .mapTitle{
            font-size: 30px;
            color: #666;
            text-align: center;
            margin-bottom: 30px;
        }
        #main {
            width: 800px;
            height: 550px;
            margin: 0 auto;
        }
        @media screen and (max-width: 950px) {
            #main {
                width: 100%;
                height: 450px;
                margin: 0 auto;
            }
        }
    </style>
</head>

<body>
<div class="map">
    <div class="mapTitle">南充市全景图数量分布</div>
    <div id="main"></div>
</div>
<script type="text/javascript">
    // 区县全景图数量展示
    var dataList = [
        { name: '顺庆区', value: 234 },
        { name: '高坪区', value: 20 },
        { name: '嘉陵区', value: 99 },
        { name: '南部县', value: 23 },
        { name: '蓬安县', value: 9 },
        { name: '营山县', value: 80 },
        { name: '仪陇县', value: 30 },
        { name: '阆中市', value: 150 },
        { name: '西充县', value: 50 },
    ]

    dataList=JSON.parse('<?php echo $dataList; ?>');
    //展示南充地图
    $.get('/s/nanchong.json', function (nanchongJson) {
        echarts.registerMap('nanchong', nanchongJson);
        var myChart = echarts.init(document.getElementById('main'));
        option = {
            tooltip: {
                formatter: function (params, ticket, callback) {
                    return params.seriesName + '<br />' + params.name + '：' + params.value
                }
            },

            legend: {
                orient: 'vertical',
                left: 'left',
                data:['全景图数量']
            },
            visualMap: {
                min: 0,
                max: 10,
                left: 'left',
                top: 'bottom',
                text: ['高','低'],           // 文本，默认为数值文本
                calculable: true,
                inRange: {
                    color: ['lightskyblue','yellow', 'orangered']
                }
            },
            series: [
                {
                    name: '全景图数量',
                    type: 'map',
                    mapType: 'nanchong',
                    showLegendSymbol : false,
                    data: dataList,
                    roam: false,
                    zoom: 1.23,
                    itemStyle: {
                        normal: {
                            label: {
                                show: true,
                                formatter:function(params){
                                    return params.name+"("+params.value+")";
                                }

                            },

                        },
                        emphasis: {
                            label: {
                                show: true
                            }
                        }
                    }

                }
            ]
        };
        myChart.setOption(option);
        myChart.on('click', function (params) {
            window.location.href="/index/map/index?area="+params.name
        });
    });

</script>
</body>

</html>

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
