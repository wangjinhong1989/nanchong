<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"/www/wwwroot/www.luxiaogui.cn/public/../application/index/view/index/index.html";i:1574935034;s:72:"/www/wwwroot/www.luxiaogui.cn/application/index/view/layout/default.html";i:1574906612;s:69:"/www/wwwroot/www.luxiaogui.cn/application/index/view/common/meta.html";i:1574920671;s:71:"/www/wwwroot/www.luxiaogui.cn/application/index/view/common/script.html";i:1572536367;}*/ ?>
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
                    <a class="navbar-brand" href="<?php echo url('/'); ?>" style="padding:6px 15px;"><img src="/assets/img/logo.png1" style="height:40px;" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="header-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/" target="_blank"><?php echo __('Home'); ?></a></li>
                        <li><a href="/" target="_blank"><?php echo __('TITLE1'); ?></a></li>
                        <li><a href="/" target="_blank"><?php echo __('TITLE2'); ?> </a></li>
                        <li><a href="/" target="_blank"><?php echo __('TITLE3'); ?> </a></li>

                        <li class="dropdown">
                            <?php if($user): ?>
                            <a href="<?php echo url('user/index'); ?>" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 10px;height: 50px;">
                                <span class="avatar-img"><img src="<?php echo cdnurl($user['avatar']); ?>" alt=""></span>
                            </a>
                            <?php else: ?>
                            <a href="<?php echo url('user/index'); ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('User center'); ?> <b class="caret"></b></a>
                            <?php endif; ?>
                            <ul class="dropdown-menu">
                                <?php if($user): ?>
                                <li><a href="<?php echo url('user/index'); ?>"><i class="fa fa-user-circle fa-fw"></i><?php echo __('User center'); ?></a></li>
                                <li><a href="<?php echo url('user/profile'); ?>"><i class="fa fa-user-o fa-fw"></i><?php echo __('Profile'); ?></a></li>
                                <li><a href="<?php echo url('user/changepwd'); ?>"><i class="fa fa-key fa-fw"></i><?php echo __('Change password'); ?></a></li>
                                <li><a href="<?php echo url('user/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i><?php echo __('Sign out'); ?></a></li>
                                <?php else: ?>
                                <li><a href="<?php echo url('user/login'); ?>"><i class="fa fa-sign-in fa-fw"></i> <?php echo __('Sign in'); ?></a></li>
                                <li><a href="<?php echo url('user/register'); ?>"><i class="fa fa-user-o fa-fw"></i> <?php echo __('Sign up'); ?></a></li>
                                <?php endif; ?>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="content">
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="百度地图,百度地图API，百度地图自定义工具，百度地图所见即所得工具" />
    <meta name="description" content="百度地图API自定义地图，帮助用户在可视化操作下生成百度地图" />
    <title>百度地图API自定义地图</title>
    <!--引用百度地图API-->
    <style type="text/css">
        html,body{margin:0;padding:0;}
        .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
        .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=Zm3ag8nnrp2tLiNvTYGE7llV3OLZEq04&v=1.4"></script>
</head>

<body style="">
<!--百度地图容器-->
<div style="margin:0 auto;margin-top:50px;width:1000px;height:550px;border:#ccc solid 1px;" id="dituContent"></div>
</body>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件

        getBoundary();
    }

    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(106.134177,30.815006);//定义一个中心点坐标
        map.centerAndZoom(point,12);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局



        var myIcon = new BMap.Icon("/1.gif", new BMap.Size(300,157));
        var marker = new BMap.Marker(point,{icon:myIcon});  // 创建标注


        //var marker = new BMap.Marker(point);//创建标注
        map.addOverlay(marker);

        var sContent =
            "<a href='http://www.baidu.com' target='_blank'>查看详情</a>";
        var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
        marker.addEventListener("click", function(){
            this.openInfoWindow(infoWindow);
            //图片加载完毕重绘infowindow
            document.getElementById('imgDemo').onload = function (){
                infoWindow.redraw();   //防止在网速较慢，图片未加载时，生成的信息框高度比图片的总高度小，导致图片部分被隐藏
            }
        });
    }

    var dataArr = [
        {
            "name":  '安顺市',
            "cp": [105.9082, 25.9882]
        },
        {
            "name": "贵阳市",
            "cp": [106.6992, 26.7682]
        }];
    function getRegion() {
        dataArr.forEach(element => {
            var bdary = new BMap.Boundary();
            bdary.get(element['name'], rs => {
                var count = rs.boundaries.length;
                for (let i = 0; i < count; i++) {
                    var ply = new BMap.Polygon(rs.boundaries[i], {
                        strokeWeight: 0.5, strokeColor: '#fff', fillOpacity: 0.6, fillColor: '#a9dbf7'});
                    this.map.addOverlay(ply);
                }
                citySetLabel(new BMap.Point(element['cp'][0], element['cp'][1]) , element['name']);
            });
        });
    }
    function citySetLabel(cityCenter, cityName) {
        var label = new BMap.Label(cityName, {
            offset: new BMap.Size(-20, -10),
            position: cityCenter
        });
        label.setStyle({
            border: 'none',
            background: 'transparent',
            'font-size': '0.25rem',
            color: '#fff',
        });
        map.addOverlay(label);
    }
    function getBoundary(){
        var bdary = new BMap.Boundary();
        map.clearOverlays();        //清除地图覆盖物

        bdary.get("四川省南充市", function(rs){       //获取行政区域

            var count = rs.boundaries.length; //行政区域的点有多少个
            if (count === 0) {
                alert('未能获取当前输入行政区域');
                return ;
            }
            const EN_JW = '180, 90;';
            const NW_JW = '-180,  90;';
            const WS_JW = '-180, -90;';
            const SE_JW = '180, -90;';
            // 东南西北四个角添加一个覆盖物
            const ply1 = new BMap.Polygon(rs.boundaries[0] + SE_JW + SE_JW + WS_JW + NW_JW + EN_JW + SE_JW,
                { strokeColor: 'none', fillColor: 'transparent', fillOpacity: 1, strokeOpacity: 1 });
            map.addOverlay(ply1);
        });

        bdary.get("四川省南充市顺庆区", function(rs){       //获取行政区域

            var count = rs.boundaries.length; //行政区域的点有多少个
            if (count === 0) {
                alert('未能获取当前输入行政区域');
                return ;
            }
            console.log(rs.boundaries);
            var pointArray = [];
            for (var i = 0; i < count; i++) {
                var ply = new BMap.Polygon(rs.boundaries[i], {strokeWeight: 0.5, strokeColor: 0.5, fillColor:0.5, fillColor: "#00ffff", //设置多边形填充颜色
                    }); //建立多边形覆盖物
                map.addOverlay(ply);  //添加覆盖物
                pointArray = pointArray.concat(ply.getPath());
            }
            map.setViewport(pointArray);    //调整视野
            addlabel();
        });
        var bdary = new BMap.Boundary();
        bdary.get("四川省南充市阆中市", function(rs){       //获取行政区域
         //   map.clearOverlays();        //清除地图覆盖物
            var count = rs.boundaries.length; //行政区域的点有多少个
            if (count === 0) {
                alert('未能获取当前输入行政区域');
                return ;
            }

            var pointArray = [];
            for (var i = 0; i < count; i++) {
                var ply = new BMap.Polygon(rs.boundaries[i], {strokeWeight: 0.5, strokeColor: 0.5, fillColor:0.5, fillColor: "#FF0000", //设置多边形填充颜色
                    }); //建立多边形覆盖物
                map.addOverlay(ply);  //添加覆盖物
                pointArray = pointArray.concat(ply.getPath());
            }
            map.setViewport(pointArray);    //调整视野
            addlabel();
        });

        var bdary = new BMap.Boundary();
        bdary.get("四川省南充市嘉陵区", function(rs){       //获取行政区域
            //   map.clearOverlays();        //清除地图覆盖物
            var count = rs.boundaries.length; //行政区域的点有多少个
            if (count === 0) {
                alert('未能获取当前输入行政区域');
                return ;
            }

            var pointArray = [];
            for (var i = 0; i < count; i++) {
                var ply = new BMap.Polygon(rs.boundaries[i], {strokeWeight: 0.5, strokeColor: 0.5, fillColor:0.5, fillColor: "#00FF00", //设置多边形填充颜色
                }); //建立多边形覆盖物
                map.addOverlay(ply);  //添加覆盖物
                pointArray = pointArray.concat(ply.getPath());
            }
            map.setViewport(pointArray);    //调整视野
            addlabel();
        });

        var bdary = new BMap.Boundary();
        bdary.get("四川省南充市高坪区", function(rs){       //获取行政区域
            //   map.clearOverlays();        //清除地图覆盖物
            var count = rs.boundaries.length; //行政区域的点有多少个
            if (count === 0) {
                alert('未能获取当前输入行政区域');
                return ;
            }

            var pointArray = [];
            for (var i = 0; i < count; i++) {
                var ply = new BMap.Polygon(rs.boundaries[i], {strokeWeight: 0.5, strokeColor: 0.5, fillColor:0.5, fillColor: "#CCFFCC", //设置多边形填充颜色
                }); //建立多边形覆盖物
                map.addOverlay(ply);  //添加覆盖物
                pointArray = pointArray.concat(ply.getPath());
            }
            map.setViewport(pointArray);    //调整视野
            addlabel();
        });
        var bdary = new BMap.Boundary();
        bdary.get("四川省南充市西充县", function(rs){       //获取行政区域
            //   map.clearOverlays();        //清除地图覆盖物
            var count = rs.boundaries.length; //行政区域的点有多少个
            if (count === 0) {
                alert('未能获取当前输入行政区域');
                return ;
            }

            var pointArray = [];
            for (var i = 0; i < count; i++) {
                var ply = new BMap.Polygon(rs.boundaries[i], {strokeWeight: 0.5, strokeColor: 0.5, fillColor:0.5, fillColor: "#00CCCC", //设置多边形填充颜色
                }); //建立多边形覆盖物
                map.addOverlay(ply);  //添加覆盖物
                pointArray = pointArray.concat(ply.getPath());
            }
            map.setViewport(pointArray);    //调整视野
            addlabel();
        });

        var bdary = new BMap.Boundary();
        bdary.get("四川省南充市南部县", function(rs){       //获取行政区域
            //   map.clearOverlays();        //清除地图覆盖物
            var count = rs.boundaries.length; //行政区域的点有多少个
            if (count === 0) {
                alert('未能获取当前输入行政区域');
                return ;
            }

            var pointArray = [];
            for (var i = 0; i < count; i++) {
                var ply = new BMap.Polygon(rs.boundaries[i], {strokeWeight: 0.5, strokeColor: 0.5, fillColor:0.5, fillColor: "#00BB00", //设置多边形填充颜色
                }); //建立多边形覆盖物
                map.addOverlay(ply);  //添加覆盖物
                pointArray = pointArray.concat(ply.getPath());
            }
            map.setViewport(pointArray);    //调整视野
            addlabel();
        });


        var bdary = new BMap.Boundary();
        bdary.get("四川省南充市蓬安县", function(rs){       //获取行政区域
            //   map.clearOverlays();        //清除地图覆盖物
            var count = rs.boundaries.length; //行政区域的点有多少个
            if (count === 0) {
                alert('未能获取当前输入行政区域');
                return ;
            }

            var pointArray = [];
            for (var i = 0; i < count; i++) {
                var ply = new BMap.Polygon(rs.boundaries[i], {strokeWeight: 0.5, strokeColor: 0.5, fillColor:0.5, fillColor: "#0000FF", //设置多边形填充颜色
                }); //建立多边形覆盖物
                map.addOverlay(ply);  //添加覆盖物
                pointArray = pointArray.concat(ply.getPath());
            }
            map.setViewport(pointArray);    //调整视野
            addlabel();
        });

        var bdary = new BMap.Boundary();
        bdary.get("四川省南充市营山县", function(rs){       //获取行政区域
            //   map.clearOverlays();        //清除地图覆盖物
            var count = rs.boundaries.length; //行政区域的点有多少个
            if (count === 0) {
                alert('未能获取当前输入行政区域');
                return ;
            }

            var pointArray = [];
            for (var i = 0; i < count; i++) {
                var ply = new BMap.Polygon(rs.boundaries[i], {strokeWeight: 0.5, strokeColor: 0.5, fillColor:0.5, fillColor: "#F1FF22", //设置多边形填充颜色
                }); //建立多边形覆盖物
                map.addOverlay(ply);  //添加覆盖物
                pointArray = pointArray.concat(ply.getPath());
            }
            map.setViewport(pointArray);    //调整视野
            addlabel();
        });

        var bdary = new BMap.Boundary();
        bdary.get("四川省南充市仪陇县", function(rs){       //获取行政区域
            //   map.clearOverlays();        //清除地图覆盖物
            var count = rs.boundaries.length; //行政区域的点有多少个
            if (count === 0) {
                alert('未能获取当前输入行政区域');
                return ;
            }

            var pointArray = [];
            for (var i = 0; i < count; i++) {
                var ply = new BMap.Polygon(rs.boundaries[i], {strokeWeight: 0.5, strokeColor: 0.5, fillColor:0.5, fillColor: "#BBBBBB", //设置多边形填充颜色
                }); //建立多边形覆盖物
                map.addOverlay(ply);  //添加覆盖物
                pointArray = pointArray.concat(ply.getPath());
            }
            map.setViewport(pointArray);    //调整视野
            addlabel();
        });
    }


    //、、、、
    function addlabel() {
        var pointArray = [
            new BMap.Point(121.716076,23.703799),
            new BMap.Point(112.121885,14.570616),
            new BMap.Point(123.776573,25.695422)];
        var optsArray = [{},{},{}];
        var labelArray = [];
        var contentArray = [
            "台湾是中国的！",
            "南海是中国的！",
            "钓鱼岛是中国的！"];
        for(var i = 0;i < pointArray.length; i++) {
            optsArray[i].position = pointArray[i];
            labelArray[i] = new BMap.Label(contentArray[i],optsArray[i]);
            labelArray[i].setStyle({
                color : "red",
                fontSize : "12px",
                height : "20px",
                lineHeight : "20px",
                fontFamily:"微软雅黑"
            });
            map.addOverlay(labelArray[i]);
        }
    }

    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
        var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
        var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
        map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
        var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        map.addControl(ctrl_sca);
    }


    initMap();//创建和初始化地图
</script>
</html>

        </main>

        <footer class="footer" style="clear:both">
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
