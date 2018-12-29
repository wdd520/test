<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpstudy\WWW\thinkphp5\public/../application/admin\view\index\index.html";i:1528355792;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="/thinkphp5/public/static/css/pintuer.css">
    <link rel="stylesheet" href="/thinkphp5/public/static/css/admin.css">
    <script src="/thinkphp5/public/static/js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
  
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="/thinkphp5/public/static/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="login.html"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul style="display:block">
    <li><a href="<?php echo url('minor/showlist'); ?>" target="right"><span class="icon-caret-right"></span>未成年人管理</a></li>
    <li><a href="<?php echo url('guardian/showlist'); ?>" target="right"><span class="icon-caret-right"></span>监护人管理</a></li>
    <li><a href="<?php echo url('interview/showlist'); ?>" target="right"><span class="icon-caret-right"></span>访谈信息管理</a></li>
    <li><a href="<?php echo url('messenger/showlist'); ?>" target="right"><span class="icon-caret-right"></span>信息员基本信息管理</a></li>

  </ul>   
  <h2><span class="icon-pencil-square-o"></span>栏目管理</h2>
  <ul>
    <li><a href="<?php echo url('users/showlist'); ?>" target="right"><span class="icon-caret-right"></span>用户管理</a></li>
    <li><a href="<?php echo url('classify/showlist'); ?>" target="right"><span class="icon-caret-right"></span>分类管理</a></li>

  </ul>  
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="#" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="info.html" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
<p>设计：新龙</p>
</div>
</body>
</html>