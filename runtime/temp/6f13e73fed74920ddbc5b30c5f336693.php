<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"C:\phpStudy\WWW\Change\public/../application/home\view\index\index.html";i:1535618226;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/common.css" />
    <link type="text/css" rel="stylesheet" href="/change/public/static/css/style.css"/>
    <script type="text/javascript" src="/change/public/static/js/swiper.jquery.js"></script>
    <script type="text/javascript" src="/change/public/static/js/swiper.min.js"></script>
    <link rel="stylesheet" href="/change/public/static/css/swiper.min.css" />
    <title>校园易物</title>
</head>
<style>
    .logo{
        margin-top: 30px;
        margin-left: 10px;
    }
    .logo img{
        width: 150px;
        height: 70px;
    }
    .swiper-slide img{
        width: 700px;
        height: 401px;
    }

</style>
<body>
<!--网页头部-->
<header>
    <div class="soubg">
        <div class="sou fl">
            <div class="s_city_b">
                <span>送货至：河北工程技术学院</span>
            </div>
        </div>
        <div class="fr top_right">
            <?php if(\think\Request::instance()->session('UserName') == null): ?>
            <div class="fl">
                你好! 请<a href="<?php echo url('login/login'); ?>">登录</a>
                <a href="<?php echo url('login/register'); ?>" style="color:#ff4e00;">免费注册</a>&nbsp; | &nbsp;<a href="<?php echo url('cart/cart'); ?>">我的订单</a>&nbsp; |
            </div>
            <?php else: ?>
            <div class="fl">
                你好! <?php echo \think\Request::instance()->session('UserName'); ?>
                <a href="<?php echo url('login/register'); ?>" style="color:#ff4e00;">免费注册</a>&nbsp; | &nbsp;<a href="<?php echo url('cart/cart'); ?>">我的订单</a>&nbsp; |
            </div>
            <?php endif; ?>
            <span class="fl">&nbsp;&nbsp; | &nbsp;关注我们：</span>
                <span class="s_sh">
                    <a href="#" class="sh1">新浪</a>
                    <a href="#" class="sh2">微信</a>
                </span>
                <span class="fr">&nbsp;&nbsp; | &nbsp;
                    <a href="#">手机版&nbsp;
                        <img src="/change/public/static/images/s_tel.png" align="absmiddle"/>
                    </a>
                </span>
        </div>
    </div>

    <div class="top">
        <div class="logo">
            <a href="#">
                <img src="/change/public/static/images/login.jpg"/>
            </a>
        </div>
        <div class="search">
            <form>
                <input type="search" value="" placeholder="请输入关键字" class="s_ipt"/>
                <input type="submit" value="搜索" class="s_btn"/>
            </form>
          
        </div>
        <div class="i_car">
            <div class="car_t">购物车</div>
        </div>
    </div>
</header>
<!--网页主题部分-->
<section class="center clear">
    <!--商品列表、焦点图-->
    <div class="clear">
        <div class="menu_bg">
            <div class="menu">
                <!--Begin 商品分类详情 Begin-->
                <nav class="nav">
                    <div class="nav_t">全部商品分类</div>
                    <div class="leftNav">
                        <!--左边购物列表导航-->
                        <ul>
                            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <li>
                                <div class="fj">
                                    <span class="n_img"><span></span></span>
                                   <a href= "showlist/id/<?php echo $v['Id']; ?>" style="color: #ffffff;"><span class="fl"><?php echo $v['GoodsName']; ?></span></a>
                                </div>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
        <!--焦点图-->
        <div class="banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="/change/public/static/images/banner01.jpg"></div>
                    <div class="swiper-slide"><img src="/change/public/static/images/bannwe02.jpg"></div>
                    <div class="swiper-slide"><img src="/change/public/static/images/banner03.jpg"></div>
                    <div class="swiper-slide"><img src="/change/public/static/images/banner03.png"></div>
                </div>
            </div>
        </div>
        <!--新闻列表-->
        <div class="inews">
            <div class="news_t">
                <h3 class="fl">快讯</h3>
                <span class="fr"><a href="#">更多 ></a></span>
            </div>
            <ul>
                <li><span>【特惠】</span><a href="#">掬一轮明月 表无尽惦念</a></li>
                <li><span>【公告】</span><a href="#">好奇金装成长裤新品上市</a></li>
                <li><span>【特惠】</span><a href="#">大牌闪购 · 抢！</a></li>
                <li><span>【公告】</span><a href="#">发福利 买车就抢千元油卡</a></li>
                <li><span>【公告】</span><a href="#">家电低至五折</a></li>
            </ul>
            <div class="charge_t">
                <h3>1号钱包</h3>
                <p>收益日结，收益赚High！</p>
                <img src="/change/public/static/images/oneAD.jpg" alt=""/>
            </div>
        </div>
    </div>

    <!--Begin 热门商品 Begin-->
    <div class="content clear ">
        <div class="hot">
            <div class="img">
                <img src="/change/public/static/images/l_img.jpg" width="188" height="188"/>
            </div>
            <div class="pri_bg">
                <span class="price fl">￥53.00</span>
                <span class="fr">16R</span>
            </div>
        </div>
        <div class="hot_pro">
            <div id="feature">
                <ul class="featureUL">
                    <li class="featureBox">
                        <div class="h_icon"><img src="/change/public/static/images/hot.png" width="50" height="50"/></div>
                        <div class="imgbg">
                            <a href="#"><img src="/change/public/static/images/hot1.jpg" width="160" height="136"/></a>
                        </div>
                        <div class="name">
                            <a href="#">
                                <h2>德国进口</h2>
                                德亚全脂纯牛奶200ml*48盒
                            </a>
                        </div>
                        <div class="price">
                            <strong>￥<span>189</span></strong> &nbsp; 26R
                        </div>
                    </li>
                    <li class="featureBox">
                        <div class="h_icon"><img src="/change/public/static/images/hot.png" width="50" height="50"/></div>
                        <div class="imgbg">
                            <a href="#"><img src="/change/public/static/images/hot2.jpg" width="160" height="136"/></a>
                        </div>
                        <div class="name">
                            <a href="#">
                                <h2>iphone 6S</h2>
                                Apple/苹果 iPhone 6s Plus公开版
                            </a>
                        </div>
                        <div class="price">
                            <strong>￥<span>5288</span></strong> &nbsp; 25R
                        </div>
                    </li>
                    <li class="featureBox">
                        <div class="h_icon"><img src="/change/public/static/images/hot.png" width="50" height="50"/></div>
                        <div class="imgbg">
                            <a href="#"><img src="/change/public/static/images/hot3.jpg" width="160" height="136"/></a>
                        </div>
                        <div class="name">
                            <a href="#">
                                <h2>倩碧特惠组合套装</h2>
                                倩碧补水组合套装8折促销
                            </a>
                        </div>
                        <div class="price">
                            <strong>￥<span>368</span></strong> &nbsp; 18R
                        </div>
                    </li>
                    <li class="featureBox">
                        <div class="h_icon"><img src="/change/public/static/images/hot.png" width="50" height="50"/></div>
                        <div class="imgbg">
                            <a href="#"><img src="/change/public/static/images/hot4.jpg" width="160" height="136"/></a>
                        </div>
                        <div class="name">
                            <a href="#">
                                <h2>品利特级橄榄油</h2>
                                750ml*4瓶装组合 西班牙原装进口
                            </a>
                        </div>
                        <div class="price">
                            <strong>￥<span>280</span></strong> &nbsp; 30R
                        </div>
                    </li>
                </ul>
                <a class="h_prev" href="#">Previous</a>
                <a class="h_next" href="#">Next</a>
            </div>
        </div>
    </div>

    <!--广告-->
    <div class="content">
        <img src="/change/public/static/images/mban_2.jpg"/>
    </div>

    <!--Begin 手机 Begin-->
    <section class="content clear">
        <div class="floorTitle ">
            <span class="floor_num">1F</span>
            <span class="fl">手机</span>
        </div>
        <div class="main">
            <div class="fresh_left">
                <div class="fre_ban">
                    <div id="imgPlay1">
                        <ul class="imgs" id="actor1">
                            <li><a href="#"><img src="/change/public/static/images/phone06.jpg" width="211" height="286"/></a></li>
                        </ul>
                        <div class="prevf">上一张</div>
                        <div class="nextf">下一张</div>
                    </div>
                </div>
                <div class="fresh_txt">
                    <div class="fresh_txt_c">
                        <a href="#">国产手机</a><a href="#">进口手机</a><a href="#">vivo</a><a href="#">oppo</a><a href="#">华为</a><a
                            href="#">美图</a><a href="#">苹果</a><a href="#">联想</a><a href="#">三星</a><a href="#">小米</a>
                    </div>
                </div>
            </div>
            <div class="fresh_mid">

                <ul>
                    <?php if(is_array($goos) || $goos instanceof \think\Collection || $goos instanceof \think\Paginator): $i = 0; $__LIST__ = $goos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(is_array($vo) || $vo instanceof \think\Collection || $vo instanceof \think\Paginator): if( count($vo)==0 ) : echo "" ;else: foreach($vo as $key=>$vv): if($vv['Pid'] == 1): ?>
                    <li>
                        <div class="name"><a href="#"><?php echo $vv['GoodsName']; ?></a></div>
                        <div class="price">
                           <span>￥<?php echo $vv['GoodsPrice']; ?></span>
                        </div>
                        <div class="img"><a href="#"><img src="/change/public/uploads/<?php echo $vv['Img']; ?>"  alt="照片" width="185" height="145"/></a></div>
                    </li>
                    <?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>

            </div>
            <div class="fresh_right">
                <ul>
                    <li style="margin-top: 20px;"><a href="#"><img src="/change/public/static/images/phone1.jpg" width="240" height="200"/></a></li>
                    <li><a href="#"><img src="/change/public/static/images/phone2.jpg" width="240" height="200"/></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End 电脑 End-->

    <!--Begin 个人美妆 Begin-->
    <section class="content clear">
        <div class="floorTitle ">
            <span class="floor_num">2F</span>
            <span class="fl">电脑</span>
        </div>
        <div class="main">
            <div class="make_left">
                <div class="make_ban">
                    <div id="imgPlay3">
                        <ul class="imgs" id="actor3">
                            <li><a href="#"><img src="/change/public/static/images/computer03.jpg" width="211" height="286"/></a></li>
                        </ul>
                        <div class="prev_m">上一张</div>
                        <div class="next_m">下一张</div>
                    </div>
                </div>
                <div class="fresh_txt">
                    <div class="fresh_txt_c">
                        <a href="#">华硕</a><a href="#">戴尔</a><a href="#">联想</a><a href="#">三星</a><a href="#">苹果</a><a
                            href="#">小米</a>
                    </div>
                </div>
            </div>
            <div class="fresh_mid">
                <ul>
                    <?php if(is_array($goos) || $goos instanceof \think\Collection || $goos instanceof \think\Paginator): $i = 0; $__LIST__ = $goos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(is_array($vo) || $vo instanceof \think\Collection || $vo instanceof \think\Paginator): if( count($vo)==0 ) : echo "" ;else: foreach($vo as $key=>$vv): if($vv['Pid'] == 2): ?>
                    <li>
                        <div class="name"><a href="#"><?php echo $vv['GoodsName']; ?></a></div>
                        <div class="price">
                           <span>￥<?php echo $vv['GoodsPrice']; ?></span>
                        </div>
                        <div class="img"><a href="#"><img src="/change/public/uploads/<?php echo $vv['Img']; ?>"  alt="照片" width="185" height="145"/></a></div>
                        <?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                    </li>
                </ul>
            </div>
            <div class="fresh_right">
                <ul>
                    <li style="margin-top: 20px;"><a href="#"><img src="/change/public/static/images/computer1.jpg" width="240" height="200"/></a></li>
                    <li><a href="#"><img src="/change/public/static/images/computer2.jpg" width="240" height="200"/></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End 配件 End-->

    <div class="content">
        <img src="/change/public/static/images/mban_2.jpg" width="1200" height="110"/>
    </div>

    <!--Begin 配件 Begin-->
    <section class="content">
        <div class="floorTitle">
            <span class="floor_num">3F</span>
            <span class="fl">配件</span>
        </div>
        <div class="main">
            <div class="baby_left">
                <div class="baby_ban">
                    <div id="imgPlay4">
                        <ul class="imgs" id="actor4">
                            <li><a href="#"><img src="/change/public/static/images/baby_r.jpg" width="211" height="286"/></a></li>
                            <li><a href="#"><img src="/change/public/static/images/baby_r.jpg" width="211" height="286"/></a></li>
                            <li><a href="#"><img src="/change/public/static/images/baby_r.jpg" width="211" height="286"/></a></li>
                        </ul>
                        <div class="prev_b">上一张</div>
                        <div class="next_b">下一张</div>
                    </div>
                </div>
                <div class="fresh_txt">
                    <div class="fresh_txt_c">
                        <a href="#">口红</a><a href="#">手表</a><a href="#">耳机</a><a href="#">面膜</a><a href="#">彩妆</a><a
                            href="#">装饰品</a><a href="#">
                    </div>
                </div>
            </div>
            <div class="fresh_mid">
                <ul>
                    <?php if(is_array($goos) || $goos instanceof \think\Collection || $goos instanceof \think\Paginator): $i = 0; $__LIST__ = $goos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(is_array($vo) || $vo instanceof \think\Collection || $vo instanceof \think\Paginator): if( count($vo)==0 ) : echo "" ;else: foreach($vo as $key=>$vv): if($vv['Pid'] == 3): ?>
                    <li>
                        <div class="name"><a href="#"><?php echo $vv['GoodsName']; ?></a></div>
                        <div class="price">
                            <span>￥<?php echo $vv['GoodsPrice']; ?></span>
                        </div>
                        <div class="img"><a href="#"><img src="/change/public/uploads/<?php echo $vv['Img']; ?>"  alt="照片" width="185" height="145"/></a></div>
                        <?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                    </li>
                </ul>
            </div>
            <div class="fresh_right">
                <ul>
                    <li><a href="#"><img src="/change/public/static/images/baby_b1.jpg" width="260" height="220"/></a></li>
                    <li><a href="#"><img src="/change/public/static/images/baby_b2.jpg" width="260" height="220"/></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End 母婴玩具 End-->


</section>
<!--网页底部-->
<footer class="center">
    <!-- Footer -->
    <div class="b_btm_bg b_btm_c">
        <ul class="b_btm">
            <li>
                <a><img src="/change/public/static/images/b1.png" width="62" height="62"/></a>
                <div><h2>正品保障</h2>正品行货 放心购买</div>
            </li>
            <li >
                <a><img src="/change/public/static/images/b2.png" width="62" height="62"/></a>
                <div><h2>满38包邮</h2>满38包邮 免运费</div>
            </li>
            <li>
                <a><img src="/change/public/static/images/b3.png" width="62" height="62"/></a>
                <div><h2>天天低价</h2>天天低价 畅选无忧</div>
            </li>
            <li>
                <a><img src="/change/public/static/images/b4.png" width="62" height="62"/></a>
                <div><h2>准时送达</h2>收货时间由你做主</div>
            </li>
        </ul>
    </div>
    <div class="b_nav">
        <dl>
            <dt><a href="#">新手上路</a></dt>
            <dd><a href="#">售后流程</a></dd>
            <dd><a href="#">购物流程</a></dd>
            <dd><a href="#">订购方式</a></dd>
            <dd><a href="#">隐私声明</a></dd>
            <dd><a href="#">推荐分享说明</a></dd>
        </dl>
        <dl>
            <dt><a href="#">配送与支付</a></dt>
            <dd><a href="#">货到付款区域</a></dd>
            <dd><a href="#">配送支付查询</a></dd>
            <dd><a href="#">支付方式说明</a></dd>
        </dl>
        <dl>
            <dt><a href="#">会员中心</a></dt>
            <dd><a href="#">资金管理</a></dd>
            <dd><a href="#">我的收藏</a></dd>
            <dd><a href="#">我的订单</a></dd>
        </dl>
        <dl>
            <dt><a href="#">服务保证</a></dt>
            <dd><a href="#">退换货原则</a></dd>
            <dd><a href="#">售后服务保证</a></dd>
            <dd><a href="#">产品质量保证</a></dd>
        </dl>
        <dl>
            <dt><a href="#">联系我们</a></dt>
            <dd><a href="#">网站故障报告</a></dd>
            <dd><a href="#">购物咨询</a></dd>
            <dd><a href="#">投诉与建议</a></dd>
        </dl>
        <div class="b_tel_bg">
            <a href="#" class="b_sh1">新浪微博</a>
            <a href="#" class="b_sh2">腾讯微博</a>

            <p>
                服务热线：<br/>
                <span>400-123-4567</span>
            </p>
        </div>
        <div class="b_er">
            <div class="b_er_c"><img src="/change/public/static/images/er.gif" /></div>
            <img src="/change/public/static/images/ss.png"/>
        </div>
    </div>
    <div class="btmbg">
        <div class="btm">
            备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com Copyright© 1号店网上超市 2007-2016，All Rights Reserved. 复制必究 ,
            Technical Support: Dgg Group <br/>
            <img src="/change/public/static/images/b_1.gif"/>
            <img src="/change/public/static/images/b_2.gif"/>
            <img src="/change/public/static/images/b_3.gif"/>
            <img src="/change/public/static/images/b_4.gif"/>
            <img src="/change/public/static/images/b_5.gif"/>
            <img src="/change/public/static/images/b_6.gif"/>
        </div>
    </div>
    <!--Footer -->
</footer>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        speed: 2000,
        loop: true,
        observer:true,
        observeParents:true,
        autoplayDisableOnInteraction : false,
        autoplay:1500
    });
</script>

</body>
</html>
