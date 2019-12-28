<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"/www/wwwroot/www.luxiaogui.cn/public/../application/index/view/map/index.html";i:1577368596;s:72:"/www/wwwroot/www.luxiaogui.cn/application/index/view/layout/default.html";i:1576651105;s:69:"/www/wwwroot/www.luxiaogui.cn/application/index/view/common/meta.html";i:1574920671;s:71:"/www/wwwroot/www.luxiaogui.cn/application/index/view/common/script.html";i:1572536367;}*/ ?>
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
            <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <script type="text/javascript"
            src="http://api.map.baidu.com/api?key=Zm3ag8nnrp2tLiNvTYGE7llV3OLZEq04&v=1.4"></script>
    <style>
        body {
            margin: 0;
        }

        #map {
            width: 100%;
            height: 100vh;
        }

        .scenery_link {
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .scenery_link img{
            max-width: 100%;
        }

        .scenery_nam {
            font-size: 18px;
            color: #666 !important;
            text-align: center;
        }

        .scenery_des {
            font-size: 14px;
            color: #999;
            text-indent: 2em;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
    </style>
</head>


<body>
<div id="map"></div>
<script>

    //风景图信息
    let scenery = [
        {
            name: '阆中古城',
            lat: '105.978460',
            lng: '31.570978',
            link: 'http://baijiahao.baidu.com/s?id=1639446713625401922&wfr=spider&for=pc',
            cover: 'https://bkimg.cdn.bcebos.com/pic/30adcbef76094b36771ba224adcc7cd98c109d6a@wm_1,g_7,k_d2F0ZXIvYmFpa2UxNTA=,xp_5,yp_5',
            describe: '早在1300多年前，阆中就是著名的旅游胜地，有“阆苑仙境”、“阆州天下胜”之誉。 古城阆中的建筑风格体现了我国古代的居住风水观，由于地理环境的封闭性，古城风貌得到了天然保护，城中街名多有其特殊含义，如状元街、学道街、管星街、三陈街、醋房街等等，每条街都有一段历史'
        },
        {
            name: '朱德故里',
            lat: '106.978460',
            lng: '32.570978',
            link: 'https://baike.baidu.com/item/%E6%9C%B1%E5%BE%B7%E6%95%85%E9%87%8C/3268008?fr=aladdin',
            cover: 'https://gss3.bdstatic.com/7Po3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=2d9e591f13d5ad6eaaf963ecb9f05ee6/b7003af33a87e950caaf91b718385343faf2b4b5.jpg',
            describe: '朱德故里景区：国家AAAAA级旅游景区、全国重点文物保护单位、全国爱国主义教育示范基地、全国廉政教育基地、全国首批“景区带村”旅游扶贫示范景区、全国12个重点红色旅游区、30条红色精品旅游线路之一，2016年十一假日最佳景区。'
        }
    ]

    //南充市中心点及其区县
    let nanChong = {
        lat: '106.105553984',
        lng: '30.8009651682',
        county: [
            {
                name: '四川省南充市阆中',
                color: '#eea9b89e',
            },
        ]

    }

    //创建和初始化地图函数：
    function initMap() {
        createMap();//创建地图
        getBoundary(); //添加覆盖层
        setMapEvent();//设置地图事件
        // addMapControl();//向地图添加控件
    }

    //地图事件设置函数：
    function setMapEvent() {
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl() {
        //向地图中添加缩放控件
        var ctrl_nav = new BMap.NavigationControl({ anchor: BMAP_ANCHOR_TOP_LEFT, type: BMAP_NAVIGATION_CONTROL_LARGE });
        map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
        var ctrl_ove = new BMap.OverviewMapControl({ anchor: BMAP_ANCHOR_BOTTOM_RIGHT, isOpen: 1 });
        map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
        var ctrl_sca = new BMap.ScaleControl({ anchor: BMAP_ANCHOR_BOTTOM_LEFT });
        map.addControl(ctrl_sca);
    }

    //创建地图函数：
    function createMap() {
        //在百度地图容器中创建一个地图
        var map = new BMap.Map("map");
        //以南充市为地图中心点
        var point = new BMap.Point(nanChong.lat, nanChong.lng);
        //设定地图的中心点以及初始地图缩放级别
        map.centerAndZoom(point, 12);
        //将map变量存储在全局
        window.map = map;
        //创建标注图标点
        var myIcon = new BMap.Icon(
            'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAA3CAYAAABKB8k/AAAEAElEQVRogc2aa6hNWxTHfzbqkjwuH4Qcha63rvf7FZfkWYTElRISig8S3/ggwkkUPniT54d7ETneFBLOScSRd/Ioj+N1PA9NjaVlt9fec40597F/dTqdteYYc/zXOnPNMcZaFUrG9MMDrYDuQHOgGVAPaABUFNdfgYfAY+AGcB04K7+dqORg/BcwDhgCtLcYXwtoAwwMHbsIHAC2A7c1QWjuQCdgFjBeM2EE34AtQD5QGMcwEWNsdWA9cMFz8IYKwL/AFWAV8Ietoa2AYcBNYIo+RmtmyjoZYGNgI2Ax8B9QtxyCD8gDjgDzMg3MtIh3yEL9XSwBGgHTo+ZPdwe2/ebgA6YBq6NORgnIz8JCdWEGsNBWwCRgdg4FH7AIGJx8MFmAWagbyzWseOwDqoQtkgXsytHAA8z+sCF8IPwU6g/08jTRC6AYeCCbVEOgKfCnB99j5dF+jSQB+R6cbwZ2SqL2NulcNaAHMEbWmQvLgUGEcqGewGkHjya9mAoUWY5vC6wDOjvM2Ri4E6wBlxRhK9AlRvDIWGOzzWHeycgirigpsYYCYKJDEBOAo0rb4YGATpKrx6U01XNZgfHxQWFniqj6CamkNMwHvngQ8Fl8aehmBLRWGH4E1ngIPmCN+IxLy4Rke3E55OnqB5i7cFhhl2cE1FQYXlbYZOKKwqZOQnklX7rFmpLnCpvaiRQ7pg1VFDaZqKqwKTMC3isMG7jF6s3nWyPgmcKwr8ImGz6fJCRrjEtryUV80UQ2prjcMgKuKoNY5lGA1ldRQrLQMoXxSIccKsxQYITCzvRbTxsBr4Bzysn3W/ZFo+gA/K+0NTXH6yCddqmDTS0wSmE3GjjvMO8mQjWx6Q5/Ujoy6fge6SO1sBjfQsbuDrXf4/JRKr+fJeUHWUgLlA6RPpL5OSh1gnk43JOaOE9a6wM8peBLgxQ83F43u2sJUNnDBNnkk+Rvph75pa1SWk7dZ1emBsEnC0C6CsdzOPiTweINSNVaHCb/SrnGy1T7TioB74A+OSigt8T2C1Hd6ULp1OUKfaJSnnTvB44B/+SAABPDqaiTmV4xFUi/VJMruVImcxek82PzjuyM9I5KLcb6wszVUeZOi+1bykvisDyeTiUyl1XjIM57YtPObgc81ceWEeP776B1bkMcAYY7kj7fz0Lw98X33ThGcQUYHslV0pSiURSLz0dxDTUCkF2xQ9zvGiIoFF+qXpNWgOGNLDaXouS8+HijdeAiAOnqdQVOKGyNTVfXHqurgIB+UsjYclBsnPElAMkU91qM2+upm/EDnwKQQn1rmvNbZIw3fAtA3pmtTXF8rXzU5JVsCEA+j1kZ+ntFuk9mXHD56C8Tc4AaMmhuVmYAvgMvdrjun9enDwAAAABJRU5ErkJggg==', // 百度图片
            new BMap.Size(22, 25), // 视窗大小
            {
                imageSize: new BMap.Size(22, 25), // 引用图片实际大小
                imageOffset: new BMap.Size(0, 0)  // 图片相对视窗的偏移
            }
        );

        // 添加标注点
        for (var i = 0, pointsLen = scenery.length; i < pointsLen; i++) {
            if (typeof (scenery[i]) != 'undefined') {
                //将标注点转化成地图上的点
                var point = new BMap.Point(scenery[i].lat, scenery[i].lng);
                //将点转化成标注点
                var marker = new BMap.Marker(point, { icon: myIcon });
                //图标跳动动画
                marker.setAnimation(BMAP_ANIMATION_BOUNCE);
                //添加标注
                map.addOverlay(marker);
                //循环添加监听事件
                (function () {
                    var thePoint = scenery[i];
                    marker.addEventListener("mouseover",
                        function (e) {
                            //鼠标移入展示信息窗口
                            showInfo(this, thePoint);
                            var q = map.getZoom();
                        });
                })();
            }
        }

        //景点图信息展示窗口
        function showInfo(thisMarker, point) {
            var sContent = '<a class="scenery_link" href="' + point.link + '"><p class="scenery_nam">' + point.name + '</p><p class="scenery_des">' + point.describe + '</p><img src="' + point.cover + '" alt=""></a>';
            //创建信息窗口对象
            var infoWindow = new BMap.InfoWindow(sContent);
            //图片加载完后重绘infoWindow
            thisMarker.openInfoWindow(infoWindow);
        }
    }

    //创建覆盖层
    function getBoundary() {
        var bdary = new BMap.Boundary();
        //添加区县覆盖层
        nanChong.county.map(item => {
            bdary.get(item.name, function (rs) {   //获取行政区域
                var count = rs.boundaries.length; //行政区域的点有多少个
                if (count === 0) {
                    return;
                }
                var pointArray = [];
                for (var i = 0; i < count; i++) {
                    var ply = new BMap.Polygon(rs.boundaries[i], {
                        strokeWeight: 0.5, strokeColor: 0.5, fillColor: 0.5, fillColor: item.color, //设置多边形填充颜色
                    }); //建立多边形覆盖物
                    map.addOverlay(ply);  //添加覆盖物
                    pointArray = pointArray.concat(ply.getPath());
                }
                map.setViewport(pointArray);//调整视野
            });
        })
        bdary.get("四川省南充市阆中市", function (rs) { //获取行政区域
            var count = rs.boundaries.length; //行政区域的点有多少个
            if (count === 0) {
                return;
            }
            const EN_JW = '180, 90;';
            const NW_JW = '-180,  90;';
            const WS_JW = '-180, -90;';
            const SE_JW = '180, -90;';
            const ply1 = new BMap.Polygon(rs.boundaries[0] + SE_JW + SE_JW + WS_JW + NW_JW + EN_JW + SE_JW,
                { strokeColor: 0.5, fillColor: '#f2f2f2cf', fillOpacity: 1, strokeOpacity: 1 });
            map.addOverlay(ply1);
        });
    }

    initMap();

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
