<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\phpstudy\WWW\Change\public/../application/home\view\index\detail.html";i:1535688484;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="/change/public/static/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/change/public/static/css/ShopShow.css"/>
    <title>详情</title>
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
    .menu_bg {
        height: 60px;
    }
    .des_price{
        height: 200px;
        margin-top: -10px;
    }
    .button{
        width: 120px;
        height:50px;
        background: orangered;
        border: none;
        color: #ffffff;
        font-size: 16px;
        text-align: center;
        line-height: 50px;
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
                <a href="<?php echo url('login/register'); ?>" target="_top">免费注册</a>
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
            <div class="car_t">发布商品</div>
        </div>
    </div>
</header>

<!--主体部分-->
<section class="center">
    <!--Begin Menu Begin-->
    <div class="menu_bg">
        <div class="menu">
        
            <!--End 商品分类详情 End-->
            <nav>
                <ul class="menu_r">
                <li><a href="">全部分类</a></li>
                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['Id'] == $dataId['Pid']): ?>
                    <li class="active"><a href=""><?php echo $v['GoodsName']; ?></a></li>
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
            <span class="fl">全部 > <?php echo $pid['GoodsName']; ?> > <?php echo $dataId['GoodsName']; ?></span>
        </div>

        <div class="clear" >
            <div id="tsShopContainer">
                <div id="tsImgS">

                    <a href="" class="MagicZoom">
                        <img src="/change/public/uploads/<?php echo $dataId['Img']; ?>"  alt="照片" width="390" height="390"/>
                    </a>

                </div>
                <div id="tsPicContainer">
                    <div id="tsImgSArrL"></div>
                    <div id="tsImgSCon">
                        <ul>
                            <li><img src="/change/public/uploads/<?php echo $dataId['Img']; ?>" /></li>
                        </ul>
                    </div>
                    <div id="tsImgSArrR"></div>
                </div>
            </div>

            <div class="pro_des">
                <div class="des_name">
                    <p><?php echo $dataId['GoodsName']; ?></p>
                </div>
                <div class="des_price">

                    价格：<b>¥<?php echo $dataId['GoodsPrice']; ?></b><br/>
                    原价：<span>¥<?php echo $dataId['OldPrice']; ?></span><br/>
                    成色：<span>
                     <?php if($dataId['Quilty'] == 1): ?>
                         <td>全新</td>
                     <?php else: ?>
                         <td>非全新</td>
                     <?php endif; ?>
                  </span><br/>
                    联系方式：<span><?php echo $dataId['TelPhone']; ?></span><br/>
                    支付方式：<span>
                    <?php if($dataId['PayWay'] == 1): ?>
                         <td>线上支付</td>
                    <?php else: ?>
                         <td>线下支付</td>
                     <?php endif; ?>
                </span>

                </div>
                <div class="des_share">
                    <div class="d_sh">
                        分享
                        <div class="d_sh_bg">
                            <a href="#"><img src="/change/public/static/images/sh_1.gif"/></a>
                            <a href="#"><img src="/change/public/static/images/sh_2.gif"/></a>
                            <a href="#"><img src="/change/public/static/images/sh_3.gif"/></a>
                            <a href="#"><img src="/change/public/static/images/sh_4.gif"/></a>
                            <a href="#"><img src="/change/public/static/images/sh_5.gif"/></a>
                        </div>
                    </div>
                    <div class="d_care"><a >关注商品</a></div>
                </div>
                <div class="des_join">

                    <span class="fl"><a>
                        <button type="button" class="button">立即购买</button>
                    </a></span>
                    <span class="fl" style="margin-left: 30px;">
                        <?php if(\think\Request::instance()->session('UserName') == null): ?>
                        <a href="<?php echo url('login/login'); ?>"><button type="button" class="button">加入购物车</button></a>
                        <?php elseif($order != null): ?>
                        <a href="<?php echo url('index/index'); ?>"><button type="button" class="button">已加入购物车</button></a>
                        <?php else: ?>
                        <a href="<?php echo url('cart/addcart','id='.$dataId['Id']); ?>"><button type="button" class="button">加入购物车</button></a>
                        <?php endif; ?>
                    </span>
                </div>

            </div>

            <div class="s_brand">
                <div class="s_brand_img"><img src="/change/public/static/images/sbrand.jpg" width="188" height="132"/></div>
                <div class="s_brand_c"><a href="#">进入品牌专区</a></div>
            </div>
        </div>

        <div class="content">
           
            <div class="l_list">
                <!--推荐搭配-->
                <div class="des_border">
                    <div class="des_tit">
                        <ul>
                            <li class="current">推荐搭配</li>
                        </ul>
                    </div>
                    <div class="team_list">
                        <div class="img"><a href="#"><img src="/change/public/static/images/mat_1.jpg" /></a></div>
                        <div class="name"><a href="#">粤通国际珠宝 999足金</a></div>
                        <div class="price">
                            <div class="checkbox">
                                <input type="checkbox" name="zuhe" checked="checked"/>
                            </div>
                           <span>￥76</span>
                        </div>
                    </div>
                    <div class="team_icon"><img src="/change/public/static/images/jia_b.gif"/></div>
                    <div class="team_list">
                        <div class="img"><a href="#"><img src="/change/public/static/images/mat_2.jpg"/></a></div>
                        <div class="name"><a href="#">珠韵 9.5-10.5mm珍珠项链</a></div>
                        <div class="price">
                            <div class="checkbox">
                                <input type="checkbox" name="zuhe"/>
                            </div>
                            <span>￥1890</span>
                        </div>
                    </div>
                    <div class="team_icon"><img src="/change/public/static/images/jia_b.gif"/></div>
                    <div class="team_list">
                        <div class="img"><a href="#"><img src="/change/public/static/images/mat_3.jpg"/></a></div>
                        <div class="name"><a href="#">清新耳环</a></div>
                        <div class="price">
                            <div class="checkbox">
                                <input type="checkbox" name="zuhe" checked/>
                            </div>
                            <span>￥232</span>
                        </div>
                    </div>
                    <div class="team_icon"><img src="/change/public/static/images/equl.gif"/></div>
                    <div class="team_sum">
                        套餐价：￥<span>2000</span><br/>
                        <input type="text" value="1" class="sum_ipt"/><br/>
                        <a href="#"><img src="/change/public/static/images/z_buy.gif"/></a>
                    </div>
                </div>
                <!--商品属性-->
                <div class="des_border">
                    <div class="des_tit">
                        <ul>
                            <li class="current"><a href="#p_attribute">商品属性</a></li>
                            <li><a href="#p_details">商品详情</a></li>
                            <li><a href="#p_comment">商品评论</a></li>
                        </ul>
                    </div>
                    <div class="des_con" id="p_attribute">
                        <table border="0" align="center" style="width:100%; margin:10px auto;"
                               cellspacing="0" cellpadding="0">
                            <tr>
                                <td>商品名称：天然淡水珍珠</td>
                                <td>商品编号：1546211</td>
                                <td>品牌： 珠韵首饰</td>
                                <td>上架时间：2015-09-06 09:19:09</td>
                            </tr>
                            <tr>
                                <td>商品毛重：160.00g</td>
                                <td>商品产地：法国</td>
                                <td>珍珠形状：正圆</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>镶嵌材质：纯银</td>
                                <td>款式：项链</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--商品详情-->
                <div class="des_border" id="p_details">
                    <div class="des_t">商品详情</div>
                    <div class="des_con">

                        <p align="center">
                            <img src="/change/public/static/images/de2.jpg"/><br/><br/>
                            <img src="/change/public/static/images/de3.jpg"/><br/><br/>
                            <img src="/change/public/static/images/de4.jpg"/><br/><br/>
                            <img src="/change/public/static/images/de5.jpg"/><br/><br/>
                            <img src="/change/public/static/images/de6.jpg"/><br/><br/>
                            <img src="/change/public/static/images/de7.jpg"/><br/><br/>
                            <img src="/change/public/static/images/de8.jpg"/><br/><br/>
                        </p>

                    </div>
                </div>
                <!--商品评论-->
                <div class="des_border" id="p_comment">
                    <div class="des_t">商品评论</div>
                    <table border="0" class="jud_tab" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="175" class="jud_per">
                                <p>80.0%</p>好评度
                            </td>
                            <td width="300">
                                <table border="0" style="width:100%;" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td width="90">好评<span color="#999999">（80%）</span></td>
                                        <td><img src="/change/public/static/images/pl.gif" align="absmiddle"/></td>
                                    </tr>
                                    <tr>
                                        <td>中评<span color="#999999">（20%）</span></td>
                                        <td><img src="/change/public/static/images/pl.gif" align="absmiddle"/></td>
                                    </tr>
                                    <tr>
                                        <td>差评<span color="#999999">（0%）</span></td>
                                        <td><img src="/change/public/static/images/pl.gif" align="absmiddle"/></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="185" class="jud_bg">
                                购买过珠韵首饰 天然银扣珍珠项链的顾客，在收到商品才可以对该商品发表评论
                            </td>
                            <td class="jud_bg">您可对已购买商品进行评价<br/><a href="#"><img src="/change/public/static/images/btn_jud.gif"/></a></td>
                        </tr>
                    </table>
                    <table border="0" class="jud_list" style="width:100%; margin-top:30px;" cellspacing="0" cellpadding="0">
                        <tr valign="top">
                            <td width="160"><img src="/change/public/static/images/peo1.jpg" width="20" height="20" align="absmiddle"/>&nbsp;向死而生
                            </td>
                            <td width="180">
                                颜色分类：<font color="#999999">粉色</font> <br/>
                                型号：<font color="#999999">43cm</font>
                            </td>
                            <td>
                                产品很好，香味很喜欢，必须给赞。 <br/>
                                <font color="#999999">2015-09-24</font>
                            </td>
                        </tr>
                        <tr valign="top">
                            <td width="160"><img src="/change/public/static/images/peo2.jpg" width="20" height="20" align="absmiddle"/>&nbsp;就是这么想的
                            </td>
                            <td width="180">
                                颜色分类：<font color="#999999">粉色</font> <br/>
                                型号：<font color="#999999">43cm</font>
                            </td>
                            <td>
                                送朋友，她很喜欢，大爱。 <br/>
                                <font color="#999999">2015-09-24</font>
                            </td>
                        </tr>
                        <tr valign="top">
                            <td width="160"><img src="/change/public/static/images/peo3.jpg" width="20" height="20" align="absmiddle"/>&nbsp;墨镜墨镜
                            </td>
                            <td width="180">
                                颜色分类：<font color="#999999">白色</font> <br/>
                                型号：<font color="#999999">43cm</font>
                            </td>
                            <td>
                                大家都说不错<br/>
                                <font color="#999999">2015-09-24</font>
                            </td>
                        </tr>
                        <tr valign="top">
                            <td width="160"><img src="/change/public/static/images/peo4.jpg" width="20" height="20" align="absmiddle"/>&nbsp;那*****洋
                                <br/><font color="#999999">（匿名用户）</font></td>
                            <td width="180">
                                颜色分类：<font color="#999999">白色</font> <br/>
                                型号：<font color="#999999">43cm</font>
                            </td>
                            <td>
                                下次还会来买，推荐。<br/>
                                <font color="#999999">2015-09-24</font>
                            </td>
                        </tr>
                    </table>
                    <div class="pages">
                        <a href="#" class="p_pre">上一页</a><a href="#" class="cur">1</a><a href="#">2</a><a
                            href="#">3</a>...<a href="#">20</a><a href="#" class="p_pre">下一页</a>
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
