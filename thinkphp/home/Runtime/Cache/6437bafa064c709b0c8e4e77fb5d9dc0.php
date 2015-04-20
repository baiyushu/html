<?php if (!defined('THINK_PATH')) exit();?>﻿﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo ($title); ?></title>

<link rel="shortcut icon" href="__ROOT__/logo.ico" type="image/vnd.microsoft.icon">
<link rel="icon" href="__ROOT__/logo.ico"  type="image/vnd.microsoft.icon">

<link rel="stylesheet" href="__PUBLIC__/Css/front.css">
<link rel="stylesheet" href="__PUBLIC__/Css/content.css">
<link rel="stylesheet" href="__PUBLIC__/Css/main.css">

<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/default_blue.css"/>
<script type="text/javascript" src="__PUBLIC__/js/js/myfocus-2.0.1.min.js" charset="utf-8"></script><!--引入myFocus库-->
<script type="text/javascript">
myFocus.set({
    id:'boxID',//焦点图盒子ID
    pattern:'mF_fancy',//风格应用的名称
    time:3,//切换时间间隔(秒)
    trigger:'click',//触发切换模式:'click'(点击)/'mouseover'(悬停)
    width:1000,//设置图片区域宽度(像素)
    height:310,//设置图片区域高度(像素)
    txtHeight:'default'//文字层高度设置(像素),'default'为默认高度，0为隐藏
});
</script>

<script type="text/javascript" src="__PUBLIC__/js/js/jquery-1.7.2.min.js"></script>

</head>

<body>
<div class="wrap">
<div class="head">
<img class="logo" src="__PUBLIC__/images/image/common/logo1.png" thumb="" alt="" text="详细描述2" />
</div>
<!--head结束-->
<div class="content1">
<div class="nav">

<ul  class="nav0">
<li><a href="__APP__/">主页</a></li>

<li><a  href="__APP__/AboutCompany/index/type/1">关于我们</a>
<ul  class="nav1">
<li><a  href="__APP__/AboutCompany/index/type/1">公司简介</a></li>
<li><a  href="__APP__/AboutCompany/index/type/2">企业文化</a></li>
<li><a  href="__APP__/AboutCompany/index/type/3">公司资质</a></li>
</ul>
</li>


<li><a  href="__APP__/News/index">新闻中心</a>
<ul  class="nav1">
<li><a  href="__APP__/News/index/type/0">行内新闻</a></li>
<li><a  href="__APP__/News/index/type/1">公司新闻</a></li>
</ul>
</li>


<li ><a  href="__APP__/Product/index/">产品中心</a>
<ul class="nav1" >
<li><a  href="__APP__/Product/index/type1/疫苗产品">疫苗产品</a>
<ul class="nav2" >
<li ><a  href="__APP__/Product/index/type1/疫苗产品/type2/猪用疫苗">猪用疫苗</a></li>
<li ><a  href="__APP__/Product/index/type1/疫苗产品/type2/家禽疫苗">家禽疫苗</a></li>
<li ><a  href="__APP__/Product/index/type1/疫苗产品/type2/家畜疫苗">家畜疫苗</a></li>
<li ><a  href="__APP__/Product/index/type1/疫苗产品/type2/宠物疫苗">宠物疫苗</a></li>
</ul>
</li>


<li><a  href="__APP__/Product/index/type1/其他产品">其他产品</a>
<ul class="nav2" >
<li ><a  href="__APP__/Product/index/type1/其他产品/type2/消毒药">消毒药</a></li>
<li ><a  href="__APP__/Product/index/type1/其他产品/type2/试剂">试剂</a></li>
<li ><a  href="__APP__/Product/index/type1/其他产品/type2/器械">器械</a></li>
<li ><a  href="__APP__/Product/index/type1/其他产品/type2/兽用药品">兽用药品</a></li>
</ul>
</li>

</ul>
</li>


<li><a href="__APP__/Technology/index">技术支持</a>
<ul class="nav1" >
<li ><a  href="__APP__/Technology/index/type/0">临床技术</a></li>
<li ><a  href="__APP__/Technology/index/type/1">项目检测</a></li>
</ul>
</li>



<li><a  href="__APP__/Download/index">资料下载</a></li>

<li><a href="__APP__/Connect/index">联系我们</a></li>
<li><a href="#">合作伙伴</a></li>

<li class="cl"></li>





</ul>



</div>
<!--nav 结束-->


<div class="show_img">
  <div id="boxID"><!--焦点图盒子-->
      <div class="loading"><img src="__PUBLIC__/images/image/common/loading.gif" alt="请稍候..." /></div>
      <!--载入画面(可删除)-->
      <div class="pic"><!--内容列表(li数目可随意增减)-->
        <ul>
          <li><a href="#"><img src="__PUBLIC__/images/focus/1.jpg" thumb="" alt="" text="详细描述2" /></a></li>
          <li><a href="#"><img src="__PUBLIC__/images/focus/2.jpg" thumb="" alt="" text="详细描述3" /></a></li>
          <li><a href="#"><img src="__PUBLIC__/images/focus/3.jpg" thumb="" alt="" text="详细描述4" /></a></li>
          <li><a href="#"><img src="__PUBLIC__/images/focus/4.jpg" thumb="" alt="" text="详细描述5" /></a></li>
        </ul>
      </div> <!--pic结束-->
  </div> <!--boxID结束-->
</div>	<!--show_img结束-->

</div><!--  content1 结束-->



﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jquery在线qq客服插件 - 站长素材</title> 
<!--需要其它风格，可导入“style/”目录下的其它样式表文件-->

<link rel="stylesheet" type="text/css" href="__PUBLIC__/QQ/style/default_blue.css"/>
<script language="javascript" src="__PUBLIC__/QQ/js/jquery-1.7.2.min.js"></script>
<script language="javascript" src="__PUBLIC__/QQ/js/jquery.Sonline.js"></script>

<script type="text/javascript">
$(function(){
	$("body").Sonline({
		Position:"right",//left或right
		Top:50,//顶部距离，默认200px
		Effect:true, //滚动或者固定两种方式，布尔值：true或false
		DefaultsOpen:true, //默认展开：true,默认收缩：false
		Qqlist:"<?php
$i=1; for(;$i<count($QQ);$i++){ echo $QQ[$i-1]["value"]."|客服0$i ,"; } echo $QQ[$i-1]["value"]."|客服0$i"; ?> " 

	});
})	
</script>
</head>

</html>

﻿<div class="content2">

<div class="left">

<div class="left_1">
<div class="headline"><img src="__PUBLIC__/images/image/image/1.png"/><p>联系我们</p></div>
<div class="left_nav"><img src="__PUBLIC__/images/image/image/2.png"/><a href="#">联系我们</a><p class="Clear"></p></div>

</div>


<div class="left_2">
<div class="headline"><img src="__PUBLIC__/images/image/image/1.png"/><p>联系我们</p></div>
<h4 class="left2_item">广州市丰牧动物药业有限公司</h4>
<p class="left2_item">地址:&nbsp;
<?php  for($i=0;$i<count($inf);$i++){ if($inf[$i]["type"]=="公司地址") { echo $inf[$i]["value"]; } } ?>
</p>
<p class="left2_item">邮编:&nbsp;
<?php  for($i=0;$i<count($inf);$i++){ if($inf[$i]["type"]=="邮编") { echo $inf[$i]["value"]; } } ?></p>
<p class="left2_item">联系人:&nbsp;
<?php  for($i=0;$i<count($inf);$i++){ if($inf[$i]["type"]=="联系人") { echo $inf[$i]["value"]; } } ?></p>
<p class="left2_item">手机:&nbsp;
<?php  for($i=0;$i<count($inf);$i++){ if($inf[$i]["type"]=="手机") { echo $inf[$i]["value"]; } } ?></p>
<p class="left2_item">电话:&nbsp;
<?php  for($i=0;$i<count($inf);$i++){ if($inf[$i]["type"]=="电话") { echo $inf[$i]["value"]; } } ?></p>
<p class="left2_item">邮箱:&nbsp;
<?php  for($i=0;$i<count($inf);$i++){ if($inf[$i]["type"]=="邮箱") { echo $inf[$i]["value"]; } } ?></p>
<p class="left2_item"> <img class="QQ" src="__PUBLIC__/images/image/common/QQ.png"/>:
<?php echo $QQ[0]["value"]; ?>
</p>
<img class="weixin1" src="__PUBLIC__/images/image/common/weixin.png"/>
<img class="weixin2" src="__PUBLIC__/images/weixin/weixin.png"/>
</div>
</div>


<div class="right">
<div class="headline">
<img src="__PUBLIC__/images/image/image/1.png"/>
<p>公司地图</p>
</div>

<link rel="stylesheet" href="__PUBLIC__/Css/front.css">
<link rel="stylesheet" href="__PUBLIC__/Css/front1.css">
 
<div>
<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>


  <!--百度地图容器-->
  <div style="width:774px;height:478px;border:#ccc solid 1px;" id="dituContent"></div>

<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(113.236325,23.290353);//定义一个中心点坐标
        map.centerAndZoom(point,15);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
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
    
    //标注点数组
    var markerArr = [{title:"广州市丰牧有限公司",content:"",point:"113.236325|23.290353",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
var iw = createInfoWindow(i);
var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });

(function(){
var index = i;
var _iw = createInfoWindow(i);
var _marker = marker;
_marker.addEventListener("click",function(){
    this.openInfoWindow(_iw);
    });
    _iw.addEventListener("open",function(){
    _marker.getLabel().hide();
    })
    _iw.addEventListener("close",function(){
    _marker.getLabel().show();
    })
label.addEventListener("click",function(){
    _marker.openInfoWindow(_iw);
    })
if(!!json.isOpen){
label.hide();
_marker.openInfoWindow(_iw);
}
})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://map.baidu.com/image/us_cursor.gif/1", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>

</div>

﻿</div>
<div class="Clear"></div>
</div><!--  content2 结束-->





<div class="footer">
<ul>
<li><a href="__APP__/Index">主页</a></li>
<li>|</li>
<li><a href="__APP__/AboutCompany/index">关于我们</a></li>
<li>|</li>
<li><a href="__APP__/News/index">新闻中心</a></li>
<li>|</li>
<li><a href="__APP__/Product/index/">产品中心</a></li>
<li>|</li>
<li><a href="__APP__/Technology/index">技术服务</a></li>
<li>|</li>
<li><a href="__APP__/Connect/index">联系我们</a></li>
</ul>
</div><!--footer 结束-->



</div><!--wrap 结束-->



</body>
</html>