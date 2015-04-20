<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">

    <link rel="stylesheet" href="__PUBLIC__/Css/login.css">
    <script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
	<title>后台登陆</title>
</head>
<body>
	<div id="login_top">
		<div id="welcome">
			欢迎使用网站管理系统
		</div>
		<div id="back">
			<a href="#">返回首页</a>&nbsp;&nbsp; | &nbsp;&nbsp;
			<a href="#">帮助</a>
		</div>
	</div>
	<div id="login_center">
		<div id="login_area">
			<div id="login_form">
				<form action="__URL__/login" method="post">
					<div id="login_tip">
						用户登录&nbsp;&nbsp;UserLogin
					</div>
					<div><input type="text" name="username"
                                       pattern="[0-9A-Za-z]{2,}\@[0-9A-Za-z]{2,}\.[0-9A-Za-z]{2,}"
                                      class="username" >
                                       </div>
					<div><input type="password" name="password" required  class="pwd"></div>
		  <div id="btn_area">
                   <input type="submit" name="submit" id="sub_btn" value="&nbsp;登&nbsp;&nbsp;录"/>&nbsp;&nbsp;                                   <input type="text" name="verify" class="verify" style="width:70px;"/>
		   <img  id="verifyImg" onclick="fleshVerify()" src='__URL__/verify' alt="" width="80" height="40"/>
		   </div>
				</form>
			</div>
		</div>
	</div>
	<div id="login_bottom">
		版权所有
	</div>

<script language="JavaScript">
 function fleshVerify(){ 
 var time = new Date().getTime();
 document.getElementById('verifyImg').src= '__URL__/verify/'+time;
 }
 </script>

</body>
</html>