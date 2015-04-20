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
<div class="headline"><img src="__PUBLIC__/images/image/image/1.png"/><p>新闻中心</p></div>
<div class="left_nav"><img src="__PUBLIC__/images/image/image/2.png"/><a href="__APP__/News/index/type/1">公司新闻</a><p class="Clear"></p></div>
<div class="left_nav"><img src="__PUBLIC__/images/image/image/2.png"/><a href="__APP__/News/index/type/0">行内新闻</a><p class="Clear"></p></div>

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
<p>新闻中心</p>
</div>
 
<link href="__PUBLIC__/Css/front.css" rel="stylesheet" type="text/css"/>

<link href="__PUBLIC__/Css/front1.css" rel="stylesheet" type="text/css"/>
<div class="right_wrap">
<div class="title">
<?php echo ($list[0]["news_title"]); ?>
</div>
<div class="new_attr">
发布时间:<?php echo ($list[0]["news_date"]); ?>&nbsp;&nbsp;
浏览量:<?php echo ($list[0]["views"]); ?>
</div>
<div class="right_content">
<?php echo ($list[0]["news_content"]); ?>
</div>
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