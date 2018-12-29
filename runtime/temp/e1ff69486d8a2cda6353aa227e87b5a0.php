<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"E:\phpstudy\WWW\Change\public/../application/home\view\order\showorder.html";i:1535734369;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0 ,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>结算页面</title>

		<link href="/change/public/static/css/amazeui.css" rel="stylesheet" type="text/css" />

		<link href="/change/public/static/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="/change/public/static/css/cartstyle.css" rel="stylesheet" type="text/css" />

		<link href="/change/public/static/css/jsstyle.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			.nav-cont .nav-extra{background: url(/change/public/static/images/extra.png);}
		</style>

		<script type="text/javascript" src="./js/address.js"></script>

	</head>

	<body>

		<!--顶部导航条 -->
		<div class="am-container header">
			<ul class="message-l">
				<div class="topMessage">
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
				<div class="topMessage home">
					<div class="menu-hd"><a href="<?php echo url('index/index'); ?>" target="_top" class="h">商城首页</a></div>
				</div>
				<div class="topMessage my-shangcheng">
					<div class="menu-hd MyShangcheng"><a href="#" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
				</div>
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
					<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
				</form>
			</div>
		</div>

		<div class="clear"></div>
		
		<div class="concent" style="margin-top: 30px;">

				<!--支付方式-->
				<div class="logistics">
					<h3>订单编号</h3>
					<ul class="pay-list">
						<li class="pay card" style="font-size: 16px; color: orange;"><?php echo $orderNum; ?></li>
					</ul>
				</div>
				<div class="clear"></div>

				<!--订单 -->
				<div class="concent" style="margin-top: 20px;">
					<div id="payTable">
						<h3>确认订单信息</h3>
						<div class="cart-table-th">
							<div class="wp">

								<div class="th th-item">
									<div class="td-inner" style="margin-left: 100px;">商品信息</div>
								</div>
								<div class="th th-amount">
									<div class="td-inner">价格</div>
								</div>
							</div>
						</div>
						<div class="clear"></div>

						<tr class="item-list">
							<div class="bundle  bundle-last">

								<div class="bundle-main">
									<?php if(is_array($shop) || $shop instanceof \think\Collection || $shop instanceof \think\Paginator): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
									<ul class="item-content clearfix">
										<div class="pay-phone">
											<li class="td td-item">
												<div class="item-pic">
													<a href="#" class="J_MakePoint">
														<img src="/change/public/uploads/<?php echo $v['Img']; ?>" width="80px;" height="80px;"/></a>
												</div>
												<div class="item-info">
													<div class="item-basic-info" style="margin-left: 175px; margin-top: 50px;">
														<a href="#" class="item-title J_MakePoint" data-point="tbcart.8.11"><?php echo $v['GoodsName']; ?></a>
													</div>
												</div>
											</li>
											<li class="td td-info" style="margin-left: 100px;">
											</li>
											<li class="td td-price">
												<div class="item-price price-promo-promo" style="margin-left: 90px; margin-top: 30px;">
													<div class="price-content">
														<em class="J_Price price-now"><?php echo $v['GoodsPrice']; ?></em>
													</div>
												</div>
											</li>
										</div>
									</ul>
									<?php endforeach; endif; else: echo "" ;endif; ?>
									<div class="clear"></div>

								</div>
							</div>
						</tr>
						<div class="clear"></div>

						<tr id="J_BundleList_s_1911116345_1" class="item-list">
							<div id="J_Bundle_s_1911116345_1_0" class="bundle  bundle-last">
								<div class="bundle-main">
									<div class="clear"></div>

								</div>
						</tr>
					</div>
					<div class="clear"></div>
					<div class="pay-total">
						<!--留言-->
						<div class="order-extra">
							<div class="order-user-info">
								<div id="holyshit257" class="memo">
									<label>买家留言：</label>
									<input type="text" title="选填,对本次交易的说明（建议填写已经和卖家达成一致的说明）" placeholder="选填,建议填写和卖家达成一致的说明" class="memo-input J_MakePoint c2c-text-default memo-close">
									<div class="msg hidden J-msg">
										<p class="error">最多输入500个字符</p>
									</div>
								</div>
							</div>

						</div>
						<div class="clear"></div>
					</div>
					<!--含运费小计 -->
					<div class="buy-point-discharge ">
						<p class="price g_price ">
							合计（含运费） <span>¥</span><em class="pay-sum"><?php echo $total_amount; ?></em>
						</p>
					</div>

					<!--信息 -->
					<div class="order-go clearfix">
						<div class="pay-confirm clearfix">
							<div class="box">
								<div tabindex="0" id="holyshit267" class="realPay"><em class="t">实付款：</em>
									<span class="price g_price ">
                            			<span>¥</span> <em class="style-large-bold-red " id="J_ActualFee"><?php echo $total_amount; ?></em>
									</span>
								</div>

								<div id="holyshit268" class="pay-address">
									<p class="buy-footer-address">
										<span class="buy-line-title">收货人：</span>
										<span class="buy-address-detail">   
                                 			<span class="buy-user"><?php echo $Tel['UserName']; ?></span>
											<span class="buy-phone"><?php echo $Tel['Tel']; ?></span>
										</span>
									</p>
								</div>
							</div>

							<div id="holyshit269" class="submitOrder">
								<div class="go-btn-wrap">
									<a id="J_Go" href="<?php echo url('order/showsucc','id='.$total_amount); ?>" class="btn-go" tabindex="0" title="点击此按钮，提交订单">提交订单</a>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</div>

					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="theme-popover-mask"></div>
		<div class="theme-popover">

			<!--标题 -->
			<div class="am-cf am-padding">
				<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">新增地址</strong> / <small>Add address</small></div>
			</div>
			<hr/>

			<div class="am-u-md-12">
				<form class="am-form am-form-horizontal">

					<div class="am-form-group">
						<label for="user-name" class="am-form-label">收货人</label>
						<div class="am-form-content">
							<input type="text" id="user-name" placeholder="收货人">
						</div>
					</div>

					<div class="am-form-group">
						<label for="user-phone" class="am-form-label">手机号码</label>
						<div class="am-form-content">
							<input id="user-phone" placeholder="手机号必填" type="email">
						</div>
					</div>

					<div class="am-form-group">
						<label for="user-phone" class="am-form-label">所在地</label>
						<div class="am-form-content address">
							<select data-am-selected>
								<option value="a">浙江省</option>
								<option value="b">湖北省</option>
							</select>
							<select data-am-selected>
								<option value="a">温州市</option>
								<option value="b">武汉市</option>
							</select>
							<select data-am-selected>
								<option value="a">瑞安区</option>
								<option value="b">洪山区</option>
							</select>
						</div>
					</div>

					<div class="am-form-group">
						<label for="user-intro" class="am-form-label">详细地址</label>
						<div class="am-form-content">
							<textarea class="" rows="3" id="user-intro" placeholder="输入详细地址"></textarea>
							<small>100字以内写出你的详细地址...</small>
						</div>
					</div>

					<div class="am-form-group theme-poptit">
						<div class="am-u-sm-9 am-u-sm-push-3">
							<div class="am-btn am-btn-danger">保存</div>
							<div class="am-btn am-btn-danger close">取消</div>
						</div>
					</div>
				</form>
			</div>

		</div>

		<div class="clear"></div>
		
		<div class="footer">
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