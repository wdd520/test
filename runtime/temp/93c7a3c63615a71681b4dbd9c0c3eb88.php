<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\phpstudy\WWW\Change\public/../application/home\view\order\showsucc.html";i:1535734407;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>付款成功页面</title>
  <link rel="stylesheet"  type="text/css" href="/change/public/static/css/amazeui.css"/>
  <link href="/change/public/static/css/admin.css" rel="stylesheet" type="text/css">
  <link href="/change/public/static/css/demo.css" rel="stylesheet" type="text/css" />

  <link href="/change/public/static/css/sustyle.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
      .nav-cont .nav-extra{background: url(/change/public/static/images/extra.png);}
    </style>
  <script type="text/javascript" src="/change/public/static/js/jquery.min.js"></script>

  </head>

  <body>


  <!--顶部导航条 -->
  <div class="am-container header">
    <ul class="message-l">
      <div class="topMessage">
       <div class="menu-hd">
           <div class="menu-hd">
               <?php if(\think\Request::instance()->session('UserName') == null): ?>
               <a href="<?php echo url('login/login'); ?>" target="_top" class="h">亲，请登录</a>
               <?php else: ?>
               <a href="" target="_top" class="h"><?php echo \think\Request::instance()->session('UserName'); ?></a>
               <?php endif; ?>
               <a href="<?php echo url('login/register'); ?>" target="_top">免费注册</a>
           </div>
       </div>
    </ul>
    <ul class="message-r">
      <div class="topMessage home"><div class="menu-hd"><a href="<?php echo url('index/index'); ?>" target="_top" class="h">商城首页</a></div></div>
    </ul>
  </div>
  <!--悬浮搜索框-->
  <div class="nav white" style="margin-top: 20px;">
  	<div class="logo"><img src="/change/public/static/images/login.jpg" /></div>
      <div class="logoBig">
        <li><img src="/change/public/static/images/login.jpg" /></li>
      </div>
      
      <div class="search-bar pr">
          <a name="index_none_header_sysc" href="#"></a>       
          <form>
          <input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
          <input id="ai-topsearch" class="submit" value="搜索" index="1" type="submit"></form>
      </div>     
  </div>

  <div class="clear"></div>



  <div class="take-delivery">
   <div class="status">
     <h2>您已成功付款</h2>
     <div class="successInfo">
       <ul>
         <li>付款金额<em>¥<?php echo $total_amount; ?></em></li>
         <div class="user-info">
           <p>收货人：<?php echo $Tel['UserName']; ?></p>
           <p>联系电话：<?php echo $Tel['Tel']; ?></p>
           <p>收货地址：河北工程技术学院</p>
         </div>
               请认真核对您的收货信息，如有错误请联系客服
                                 
       </ul>
      </div>
    </div>
  </div>


  <div class="footer" >
   <div class="footer-hd">
   <p>
   <a href="#">恒望科技</a>
   <b>|</b>
   <a href="#">商城首页</a>
   <b>|</b>
   <a href="#">支付宝</a>
   <b>|</b>
   <a href="#">物流</a>
   </p>
   </div>
   <div class="footer-bd">
   <p>
   <a href="#">关于恒望</a>
   <a href="#">合作伙伴</a>
   <a href="#">联系我们</a>
   <a href="#">网站地图</a>
   </p>
   </div>
  </div>


  </body>
</html>
