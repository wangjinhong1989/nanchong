<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:89:"D:\phpstudy_pro\WWW\nanchong.com\nanchong\public/../application/index\view\map\index.html";i:1577631557;s:84:"D:\phpstudy_pro\WWW\nanchong.com\nanchong\application\index\view\layout\default.html";i:1577590760;s:81:"D:\phpstudy_pro\WWW\nanchong.com\nanchong\application\index\view\common\meta.html";i:1577015683;s:83:"D:\phpstudy_pro\WWW\nanchong.com\nanchong\application\index\view\common\script.html";i:1577015683;}*/ ?>
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
            background-color: #0ac;
            opacity: 0.6;
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
                        <li><a href="/"  style="color: #FFFFFF;"><b><?php echo __('Home'); ?></b></a></li>
                        <li><a href="<?php echo url('info/index'); ?>" style="color: #FFFFFF;"><b><?php echo __('信息公开'); ?></b></a></li>
                        <li><a href="<?php echo url('news/index'); ?>" style="color: #FFFFFF;"><b><?php echo __('新闻列表'); ?></b> </a></li>
                        <li><a href="<?php echo url('contact/index'); ?>" style="color: #FFFFFF;" ><b><?php echo __('联系我们'); ?></b> </a></li>
                        <li><a href="<?php echo url('about/index'); ?>" style="color: #FFFFFF;"><b><?php echo __('关于我们'); ?></b> </a></li>

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
        body{
            background-image: url('/assets/img/bg_index.png');
            background-repeat:no-repeat ;
            background-size:100% 100%;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
<div class="map">
    <div class="mapTitle">南充市全景图数量分布</div>
    <div id="main"></div>
</div>
<script type="text/javascript">
    //获取当前区县名称
    function getUrlParamCN(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
        var r = decodeURI(window.location.search).substr(1).match(reg); //匹配目标参数
        if (r != null) return unescape(r[2]); return null; //返回参数值
    }
    var target = getUrlParamCN('area');

    //设置标题
    $('.mapTitle').text(target+'全景图数量分布');

    //数据
    var dataList = [
        {
            regionName: '阆中市',
            name: 'aaa风景区',
            value: [106.00,31.55,40],//[经度,维度,数量]
        },
        {
            regionName: '阆中市',
            name: 'abb风景区',
            value: [106.00,31.65,20],
        },
        {
            regionName: '阆中市',
            name: 'accc风景区',
            value: [106.034,31.50,20],
        }
    ];

    // 获取地图
    $.get('/s/nanchong.json', function (nanchongJson) {
        //只展示当前区县
        nanchongJson.features.map((item,index)=>{
            if(item.properties.name != target){
                delete nanchongJson.features[index]
            }
        });
        echarts.registerMap('nanchong', nanchongJson);
        var myChart = echarts.init(document.getElementById('main'));
        option = {
            tooltip: {
                trigger: 'item',
                formatter: function (params) {
                    return params.name;
                }
            },
            geo: {
                map: 'nanchong',
                label: {
                    emphasis: {
                        show: false
                    }
                },
                itemStyle: {
                    normal: {
                        areaColor: '#56c0d9',
                        borderColor: '#56c0d9'
                    },
                    emphasis: {
                        areaColor: '#56c0d9'
                    }
                }
            },
            series: [
                {
                    type: 'effectScatter',
                    coordinateSystem: 'geo',
                    data: dataList,
                    symbolSize: 12,
                    zoom: 1.9,
                    roam: false,
                    showLegendSymbol : false,
                    label: {
                        normal: {
                            show: false
                        },
                        emphasis: {
                            show: false
                        }
                    },
                    itemStyle: {
                        emphasis: {
                            borderColor: '#fff',
                            borderWidth: 1
                        }
                    }
                }
            ]
        };
        if (option && typeof option === "object") {
            myChart.setOption(option, true);
            myChart.on('click', function (params) {
                //点击时的事件,排除点击标注点之外的区域
                if(params.name!=target){
                    //点击标注操作事件写在这里
                    console.log(params.name,'点击了这里')
                }
            });
        }
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
