<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:91:"D:\phpstudy_pro\WWW\nanchong.com\nanchong\public/../application/index\view\index\index.html";i:1577629838;s:84:"D:\phpstudy_pro\WWW\nanchong.com\nanchong\application\index\view\layout\default.html";i:1577590760;s:81:"D:\phpstudy_pro\WWW\nanchong.com\nanchong\application\index\view\common\meta.html";i:1577015683;s:83:"D:\phpstudy_pro\WWW\nanchong.com\nanchong\application\index\view\common\script.html";i:1577015683;}*/ ?>
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
    </style>
</head>

<body style="background-image: url('/assets/img/bg_index.png');background-repeat:no-repeat ;

background-size:100% 100%;

background-attachment: fixed;">
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


<div id="content-container" class="container">
    <div class="row" style="color: #FFFFFF">
        <div class="col-md-12">
            <h1>南充</h1>
        </div>
        <div class="col-md-12">
            南充市处在四川省东北部、嘉陵江中游，由于处在充国南部得名。南充历史悠久，源自汉高祖公元前202年设立的安汉，至今建成2200多年，是三国文化和春节文化的发祥地，民风淳朴，民俗优雅，三国文化、丝绸文化、红色文化和嘉陵江文化交融生辉。南充素有“水果之乡”、“丝绸之都”的美誉。
        </div>
    </div>

    <div class="row" style="color: #FFFFFF">
        <div class="col-md-12">
            <h1>基本信息</h1>
        </div>
        <div class="col-md-12">
            <div class="basicInfo w"><div class="tit pos1 posTitle">基本信息</div><div class="basicCon c">
                <table width="687" cellspacing="0"><tbody><tr style="height:19px" class="firstRow">
                    <td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="165" valign="center"><p>中文名称</p></td><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="522" valign="center"><p>南充</p></td></tr><tr style="height:19px"><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="165" valign="center"><p>面积</p></td><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="522" valign="center"><p>1.25万平方公里</p></td></tr><tr style="height:19px"><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="165" valign="center"><p>外文名称</p></td><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="522" valign="center"><p>Nan Chong</p></td></tr><tr style="height:19px"><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="165" valign="center"><p>人口</p></td><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="522" valign="center"><p>742.33万（2015年）</p></td></tr><tr style="height:19px"><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="165" valign="center"><p>别名</p></td><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="522" valign="center"><p>绸都，果城</p></td></tr><tr style="height:19px"><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="165" valign="center"><p>方言</p></td><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="522" valign="center"><p>西南官话（南充话，西充话）</p></td></tr><tr style="height:19px"><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="165" valign="center"><p>行政区类别</p></td><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="522" valign="center"><p>地级市</p></td></tr><tr style="height:19px"><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="165" valign="center"><p>气候条件</p></td><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="522" valign="center"><p>中亚热带湿润季风气候区</p></td></tr><tr style="height:19px"><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="165" valign="center"><p>所属地区</p></td><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="522" valign="center"><p>中国西南四川省</p></td></tr><tr style="height:19px"><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="165" valign="center"><p>著名景点</p></td><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="522" valign="center"><p>阆中滕王阁、万卷楼、汉桓侯祠、凌云山、清泉寺、西山风景区、阆中古城等</p></td></tr><tr style="height:19px"><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="165" valign="center"><p>下辖地区</p></td><td style="padding: 1px; border-color: currentcolor; border-style: none; border-width: medium;" width="522" valign="center"><p>顺庆区、高坪区、嘉陵区、阆中市、西充县、南部县、蓬安县、营山县、仪陇县</p></td></tr></tbody></table></div></div>
        </div>
    </div>

    <div class="row" style="color: #FFFFFF">
        <div class="col-md-12">
            <h1>嘉陵江文化</h1>
        </div>
        <div class="col-md-12">
            南充市以嘉陵江为依托，有顺庆区、嘉陵区、高坪区三区和南部、蓬安、仪陇等六县，在2000多年的历史中，南充各县市因为嘉陵江的孕育，形成了以嘉陵江为主线的文化旅游带。
        </div>
    </div>


    <div class="row" style="color: #FFFFFF">
        <div class="col-md-12">
            <h1>红色文化</h1>
        </div>
        <div class="col-md-12">
            南充市以嘉陵江为依托，有顺庆区、嘉陵区、高坪区三区和南部、蓬安、仪陇等六县，在2000多年的历史中，南充各县市因为嘉陵江的孕育，形成了以嘉陵江为主线的文化旅游带。
        </div>
    </div>
    <div class="row" style="color: #FFFFFF">
        <div class="col-md-12">
            <h1>丝绸文化</h1>
        </div>
        <div class="col-md-12">
            南充，国内外闻名遐迩的丝绸城。“天上取样人间织，满城皆闻机杼声”，这脍灸人口的诗句，是对著名“蚕桑之乡”、”丝绸之城”南充的形象写照。
        </div>
    </div>
    <div class="row" style="color: #FFFFFF">
        <div class="col-md-12">
            <h1>三国文化</h1>
        </div>
        <div class="col-md-12">
            南充是“三国文化”的发祥地，世称“并迁双固”的陈寿著文史兼美的不朽名著《三国志》。南充被联合国定为世界三国文化研讨会永久会址。
        </div>
    </div>

    <div class="row" style="color: #FFFFFF">
        <div class="col-md-12">
            <h1>名优特产</h1>
        </div>
        <div class="col-md-12">
            “张飞牛肉”“保宁醋”“冬菜”是南充三大名优特产，称为“南充三绝”。
        </div>
    </div>

    <div class="row" style="color: #FFFFFF">
        <div class="col-md-12">
            <h1>旅游资源</h1>
        </div>
        <div class="col-md-12">
            南充风景旅游资源丰富，有国家历史文化名城——阆中古城和省级历史文化名城——南充和蓬安，有以三国文化为主线的陈寿万卷楼、汉桓侯祠（张飞庙） 等，有省级风景名胜区锦屏山、西山、白云寨、升钟湖等，还有张澜故居、罗瑞卿故居等，集历史文化名城、三国文化、朱德故居为一体。
        </div>
    </div>

    <div class="row" style="color: #FFFFFF">
        <div class="col-md-12">
            <h1>著名人物</h1>
        </div>
        <div class="col-md-12">
            <div class="tempCon c">
                <table width="588" cellspacing="0" align="left">
                    <tbody>
                <tr style="height:19px" class="firstRow">
                    <td>人物</td>
                    <td>事迹</td>
                </tr>
                <tr>
                <td>
                    落下闳</td>
                <td>
                    中国西汉民间天文学家</td>
                </tr>
                <tr>
                <td>
                    司马相如</td>
                <td>
                    赋圣，汉代著名辞赋家，文学家</td>
                </tr>
                <tr>
                <td>
                    陈尧叟</td>
                <td>
                    广南路转运使、广南安抚使</td>
                </tr>
                <tr>
                <td>
                    陈尧佐</td>
                <td>
                    水利专家，治水功劳卓著</td>
                </tr>
                <tr>
                <td>
                    陈尧咨</td>
                <td>
                    永兴军节度使、安国军节度使、武信军节度使</td>
                </tr>
                <tr>
                <td>
                    朱德</td>

                <td>
                    中华人民共和国元帅</td>
                </tr>
                <tr>
                <td>
                    邓锡侯</td>
                <td>
                    民国四川省主席</td>
                <tr>
                <td>
                    张澜</td>
                <td>
                    民盟中央执行委员会主席</td>
                </tr>
                <tr>
                <td>
                    何其宗</td>
                <td>
                    中国人民解放军副总参谋长</td>
                </tr>
                <tr>
                <td>
                    杨伯恺</td>

                <td>
                    成都十二桥革命烈士</td>
                </tr>
                <tr>
                <td>
                    罗瑞卿</td>
                <td>
                    中国人民解放军十大将军之一</td>
                <tr>
                <td>
                    常玉</td>
                <td>
                    世界级的绘画大家</td>
                </tr>
                <tr>

                <td>
                    李正义</td>

                <td>
                    革命烈士</td>
                </tr>
                <tr>
                <td>
                    柴意新</td>
                <td>
                    抗日英烈</td>
                </tr>
                <tr>
                <td>
                    张梅颖</td>
                <td>
                    十一届全国政协副主席，民盟中央第一副主席，中华全国妇女联合会副主席</td>
                </tr>
                <tr>
                <td>
                    王定国</td>
                <td>
                    无产阶级革命家、谢觉哉同志夫人</td>
                </tr>
                </tbody>
                </table>

        </div>
    </div>
    </div>
</div>

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
