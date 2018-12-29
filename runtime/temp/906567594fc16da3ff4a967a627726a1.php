<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\phpstudy\WWW\Change\public/../application/home\view\index\showlist.html";i:1535790389;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="/change/public/static/css/style.css"/>
    <title>校园交易二</title>
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
    .l_list{
        margin-left: 110px;
    }
    .menu_bg {
        height: 60px;
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
            <div class="fl">
                <?php if(\think\Request::instance()->session('UserName') == null): ?>
                <a href="<?php echo url('login/login'); ?>" target="_top" class="h">亲，请登录</a>
                <?php else: ?>
                <a href="" target="_top" class="h"><?php echo \think\Request::instance()->session('UserName'); ?></a>
                <?php endif; ?>
                <a href="<?php echo url('login/register'); ?>" style="color:#ff4e00;">免费注册</a>&nbsp;|&nbsp;<a href="<?php echo url('cart/cart'); ?>">我的订单</a>&nbsp;|
            </div>
            <span class="fl">|&nbsp;关注我们：</span>
                <span class="s_sh">
                    <a href="#" class="sh1">新浪</a>
                    <a href="#" class="sh2">微信</a>
                </span>
                <span class="fr">|&nbsp;
                    <a href="#">手机版&nbsp;
                        <img src="/change/public/static/images/s_tel.png" align="absmiddle"/>
                    </a>
                </span>
        </div>
    </div>

    <div class="top">
        <div class="logo">
            <a href="#">
            </a>
        </div>
        <div class="search">
            <form method="post" action="<?php echo url('Search/searchlist'); ?>">
                <input name="keywords" type="text" value="" placeholder="请输入关键字" class="s_ipt"/>
                <input type="submit" value="搜索" class="s_btn"/>
            </form>         
        </div>
    </div>
</header>
<!--网页主体内容-->
<section class="center">
    <!--Begin Menu Begin-->
    <div class="menu_bg">
        <div class="menu">
            <!--End 商品分类详情 End-->
            <nav>
                <ul class="menu_r">
                    <li><a href="">全部分类</a></li>
                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['Id'] == $dataId['Id']): ?>
                    <li class="active"><a href="showlist/id/<?php echo $v['Id']; ?>"><?php echo $v['GoodsName']; ?></a></li>
                    <?php else: ?>
                    <li><a href=""><?php echo $v['GoodsName']; ?></a></li>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </nav>
         
        </div>
    </div>
    <!--End Menu End-->
    <div class="i_bg">

        <div class="postion">

            <span class="fl">全部 > <?php echo $dataId['GoodsName']; ?> </span>

        </div>

            <div class="l_list">
                <div class="list_t">

                </div>
                <div class="list_c">

                    <ul class="cate_list">
                        <?php if(is_array($goos) || $goos instanceof \think\Collection || $goos instanceof \think\Paginator): $i = 0; $__LIST__ = $goos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(is_array($vo) || $vo instanceof \think\Collection || $vo instanceof \think\Paginator): if( count($vo)==0 ) : echo "" ;else: foreach($vo as $key=>$vv): if($dataId['Id'] == $vv['Pid']): ?>
                        <li>
                            <div class="img"><a href="<?php echo url('detail','id='.$vv['Id']); ?>"><img src="/change/public/uploads/<?php echo $vv['Img']; ?>"  alt="照片" width="210" height="185"/></a></div>
                            <div class="price">
                                <span>￥<?php echo $vv['GoodsPrice']; ?></span>
                            </div>
                            <div class="name"><a href="#"><?php echo $vv['GoodsName']; ?></a></div>
                            <div class="carbg">
                                <a href="#" class="ss">收藏</a>
                                <?php if(\think\Request::instance()->session('UserName') == null): ?>
                                <a href="<?php echo url('index/index'); ?>" class="j_car">加入购物车</a>
                                <?php else: ?>
                                <a href="<?php echo url('index/addshop','id='.$vv['Id']); ?>" class="j_car">加入购物车</a>
                                <?php endif; ?>
                            </div>
                        </li>
                        <?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>

                    <div class="pages">
                        <a href="#" class="p_pre">上一页</a>
                        <a href="#" class="cur">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <span>...</span>
                        <a href="#">20</a>
                        <a href="#" class="p_pre">下一页</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
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
</body>
</html>
