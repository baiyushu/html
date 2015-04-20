<?php if (!defined('THINK_PATH')) exit();?>﻿﻿<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="__PUBLIC__/Css/common1.css">
  <link rel="stylesheet" href="__PUBLIC__/Css/style.css">
  <script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/js/jquery.SuperSlide.js"></script>
  <script type="text/javascript">
  $(function(){
      $(".sideMenu").slide({
         titCell:"h3", 
         targetCell:"ul",
         defaultIndex:5, 
         effect:'slideDown', 
         delayTime:'500' , 
         trigger:'click', 
         triggerTime:'150', 
         defaultPlay:true, 
         returnDefault:false,
         easing:'easeInQuint',
         endFun:function(){
              scrollWW();
         }
       });
      $(window).resize(function() {
          scrollWW();
      });
  });
  function scrollWW(){
    if($(".side").height()<$(".sideMenu").height()){
       $(".scroll").show();
       var pos = $(".sideMenu ul:visible").position().top-38;
       $('.sideMenu').animate({top:-pos});
    }else{
       $(".scroll").hide();
       $('.sideMenu').animate({top:0});
       n=1;
    }
  } 

var n=1;
function menuScroll(num){
  var Scroll = $('.sideMenu');
  var ScrollP = $('.sideMenu').position();
  /*alert(n);
  alert(ScrollP.top);*/
  if(num==1){
     Scroll.animate({top:ScrollP.top-38});
     n = n+1;
  }else{
    if (ScrollP.top > -38 && ScrollP.top != 0) { ScrollP.top = -38; }
    if (ScrollP.top<0) {
      Scroll.animate({top:38+ScrollP.top});
    }else{
      n=1;
    }
    if(n>1){
      n = n-1;
    }
  }
}
  </script>
  <title>后台管理</title>
</head>
<body>
    <div class="top">
      <div id="top_t">
        <div id="logo" class="fl"></div>
        <div id="photo_info" class="fr">
          <div id="photo" class="fl">
            <a href="#"><img src="__PUBLIC__/images/a.png" alt="" width="60" height="60"></a>
          </div>
          <div id="base_info" class="fr">
            <div class="help_info">
              <a href="" id="hp">&nbsp;</a>
              <a href="" id="gy">&nbsp;</a>
              <a href="__APP__/Index/quit">&nbsp;</a>
            </div>
            <div class="info_center">
              admin
              <span id="nt">欢迎使用</span>
            </div>
          </div>
        </div>
      </div>
      <div id="side_here">
        <div id="side_here_l" class="fl"></div>
        
    
<div id="here_area" class="fl">当前位置&nbsp;&gt;&gt;插入新闻&nbsp;</div>
</div>
</div>
<div class="main">
<link href="__PUBLIC__/Css/common.css" rel="stylesheet" type="text/css"/> 
<div class="wrap">
<form id="form1" name="form1" method="post" action="__APP__/News/insert_news" enctype="multipart/form-data">
<div>标题：<input type="text" name="title"/>
&nbsp;&nbsp;类型：
<select name="type">
<option value="0">行内新闻</option>
<option value="1">公司新闻</option>
</select>
</div>

<script type="text/javascript">
function myFunction()
{
$("#add_img").append("<input type='file'  name='file\[\]' />&nbsp;图片位置:&nbsp;"+
"<select name='pos\[\]'>"+
"<option value='1'>1段前</option>"+
"<option value='2'>2段前</option>"+
"<option value='3'>3段前</option>"+
"<option value='4'>4段前</option>"+
"<option value='5'>5段前</option>"+
"<option value='6'>6段前</option>"+
"<option value='7'>7段前</option>"+
"</select>&nbsp;&nbsp;&nbsp;&nbsp;"+
"图片描述:&nbsp;<br/>"+
"<textarea name='news_des\[\]' cols='90' rows='3'></textarea><br/>"
);
}

</script>
<div><textarea name="news_cont" cols="90" rows="30" wrap="physical"></textarea></div>
<div id="add_img"><input type="button" class="b0" id="add" onclick="myFunction()" value="添加图片" /><br/>


</div>
<div><input class="b0" type="submit" name="Submit" value="插入" />
&nbsp;&nbsp;&nbsp;时间：<input type="date" name="date"/>
</div>
</form>
</div>
﻿ </div>

<div class="side">
        <div class="sideMenu" style="margin:0 auto">
          <h3>系统初始</h3>
          <ul>
            <li><a href="__APP__/Main/index">系统初始</a></li>
            <li><a href="">主页浏览</a></li>
          </ul>
          <h3>关于我们</h3>
          <ul>
            <li><a href="__APP__/AboutCompany/index">修改信息</a></li>
            <li><a href="__APP__/AboutCompany/preview/type/1">公司简介</a></li>
            <li><a href="__APP__/AboutCompany/preview/type/2">公司文化</a></li>
            <li><a href="__APP__/AboutCompany/preview/type/3">公司资质</a></li>
          </ul>
          <h3>新闻管理</h3>
          <ul>
            <li><a href="__APP__/News/index">新闻添加</a></li>
            <li><a href="__APP__/News/news_list/type/0">行内新闻</a></li>
            <li><a href="__APP__/News/news_list/type/1">公司信息</a></li>
        </ul>
          <h3>产品中心</h3>
          <ul>
            <li><a href="__APP__/Product/index">添加产品</a></li>
            <li><a href="__APP__/Product/product_list/type1/疫苗产品">疫苗产品</a></li>
            <li><a href="__APP__/Product/product_list/type1/其他产品">其他产品</a></li>
         </ul>
          <h3>技术支持</h3>
          <ul>
            <li><a href="__APP__/Technology/index">技术分享</a></li>
            <li><a href="__APP__/Technology/tech_list/type/0">临床技术</a></li>
            <li><a href="__APP__/Technology/tech_list/type/1">项目检测</a></li>
         </ul>
          <a href="#"><h3>联系我们</h3></a>
          <ul></ul>
           <h3>下载管理</h3>
          <ul>
            <li><a href="__APP__/DownloadData/index">资料上传</a></li>
            <li><a href="__APP__/DownloadData/down_file">资料浏览</a></li>
            </ul>
          <h3>系统管理</h3>
          <ul>
            <li><a href="__APP__/Manager/index">密码修改</a></li>
            <li><a href="__APP__/Manager/add_manager">添加管理员</a></li>
            </ul>

        </div>
 </div>


    <div class="bottom">
      <div id="bottom_bg">版权</div>
    </div>
    <div class="scroll">
          <a href="javascript:;" class="per" title="使用鼠标滚轴滚动侧栏" onclick="menuScroll(1);"></a>
          <a href="javascript:;" class="next" title="使用鼠标滚轴滚动侧栏" onclick="menuScroll(2);"></a>
    </div>
</body>

</html>