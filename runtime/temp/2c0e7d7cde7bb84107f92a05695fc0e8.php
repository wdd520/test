<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\phpStudy\WWW\Change\public/../application/home\view\login\register.html";i:1535597525;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>后台管理</title>
    <link href="/change/public/static/css/login.css" rel="stylesheet" type="text/css" />
</head>
<style>
    .login{
        border: 1px solid red;
        height: 470px;
    }
</style>
<body>
<div class="login_box">
    <div class="login_l_img"><img src="/change/public/static/images/login-img.png" /></div>
    <div class="login">
        <div class="login_logo"><a href="#"><img src="/change/public/static/images/login_logo.png" /></a></div>
        <div class="login_name">
            <p>校园交易</p>
        </div>
        <form method="post">
  <input name="UserName" type="text"  value="请输入学号" onfocus="this.value=''" onblur="if(this.value=='')
  {this.value='账号'}">
            <input name="Pwd" type="password"  value="请设置密码" onfocus="this.value=''" onblur="if(this.value=='')
            {this.value='确认密码'}">
            <input name="Ypwd" type="password"  value="请确认密码" onfocus="this.value=''" onblur="if(this.value=='')
  {this.value='确认密码'}">
            <input value="注册" style="width:100%;" type="submit">
        </form>
    </div>
    <div class="copyright">某某有限公司 版权所有©2016-2018 技术支持电话：000-00000000</div>
</div>
</body>
</html>
