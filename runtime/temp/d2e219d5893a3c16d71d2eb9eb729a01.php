<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"E:\phpstudy\WWW\Change\public/../application/home\view\login\login.html";i:1535597506;}*/ ?>
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
<body>
<div class="login_box">
      <div class="login_l_img"><img src="/change/public/static/images/login-img.png" /></div>
      <div class="login">
          <div class="login_logo"><a href="#"><img src="/change/public/static/images/login_logo.png" /></a></div>
          <div class="login_name">
               <p>校园交易</p>
          </div>
          <form method="post">
              <input name="UserName" type="text"  value="用户名" onfocus="this.value=''" onblur="if(this.value==''){this.value='用户名'}">
              <span id="password_text" onclick="this.style.display='none';document.getElementById('password').style.display='block';document.getElementById('password').focus().select();" >密码</span>
              <input name="Pwd" type="password" id="password" style="display:none;" onblur="if(this.value==''){document.getElementById('password_text').style.display='block';this.style.display='none'};"/>
              <input value="登录" style="width:100%;" type="submit">
              <p style="margin-top: 10px;"><a href="<?php echo url('login/register'); ?>">立即注册</a></p>
          </form>
      </div>
      <div class="copyright">某某有限公司 版权所有©2016-2018 技术支持电话：000-00000000</div>
</div>
</body>
</html>
