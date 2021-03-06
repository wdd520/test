<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"E:\phpstudy\WWW\Change\public/../application/home\view\cart\cart.html";i:1535721689;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>购物车页面</title>

		<link href="/change/public/static/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/change/public/static/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="/change/public/static/css/cartstyle.css" rel="stylesheet" type="text/css" />
		<link href="/change/public/static/css/optstyle.css" rel="stylesheet" type="text/css" />
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
			</ul>
		</div>

		<!--悬浮搜索框-->

		<div class="nav white" style="margin-top: 30px;">
			<div class="logo"><img src="./images/logo.png" /></div>
			<div class="logoBig">
				<li> <img src="/change/public/static/images/login.jpg"/></li>
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

		<!--购物车 -->
		<div class="concent" style="margin-top: 30px;">
			<div id="cartTable">
				<div class="cart-table-th">
					<div class="wp">
						<div class="th th-chk">
							<div id="J_SelectAll1" class="select-all J_SelectAll">

							</div>
						</div>
						<div class="th th-item">
							<div class="td-inner" style="margin-left: 100px;">商品信息</div>
						</div>
						<div class="th th-price">
							<div class="td-inner">单价</div>
						</div>
						<div class="th th-sum">
							<div class="td-inner">成色</div>
						</div>
						<div class="th th-op">
							<div class="td-inner">操作</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>

				<tr class="item-list">
					<div class="bundle  bundle-last ">
						<div class="bundle-hd">
						</div>
						<div class="clear"></div>
						<div class="bundle-main">

							<?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;if($Id == $vv['Uid']): ?>
							<ul class="item-content clearfix" shops_id="<?php echo $vv['Id']; ?>">
								<li class="td td-chk">
									<div class="cart-checkbox ">
										<input class="check row_check" name="items[]" value="170037950254" type="checkbox">
										<label for="J_CheckBox_170037950254"></label>
									</div>
								</li>
								<li class="td td-item">
									<div class="item-basic-info" >
										<a href="#" target="_blank"  class="J_MakePoint" data-point="tbcart.8.12" style="margin-left: 100px;">
											<img src="/change/public/uploads/<?php echo $vv['Img']; ?>" width="80px;" height="80px;"/></a>
									</div>
									<div class="item-info">
										<div class="item-basic-info">
											<a href="#" target="_blank" title="" class="item-title J_MakePoint" data-point="tbcart.8.11"></a>
										</div>
									</div>
								</li>
								<li class="td td-info">
									<div class="item-props item-props-can">
										<span class="sku-line" style="color: #0C0C0C;"><?php echo $vv['GoodsName']; ?></span>
										<i class="theme-login am-icon-sort-desc"></i>
									</div>
								</li>
								<li class="td td-price">
									<div class="item-price price-promo-promo">
										<div class="price-content">
											<div class="price-line">
												<em class="price-original"><?php echo $vv['OldPrice']; ?></em>
											</div>
											<div class="price-line">
												<em class="J_Price price-now" tabindex="0"><?php echo $vv['GoodsPrice']; ?></em>
											</div>
										</div>
									</div>
								</li>

								<li class="td td-sum">
									<div class="td-inner">
										<?php if($vv['Quilty'] == 1): ?>
										<em tabindex="0" class="J_ItemSum number row_price">全新</em>
										<?php else: ?>
										<em tabindex="0" class="J_ItemSum number row_price">非全新</em>
										<?php endif; ?>
									</div>
								</li>
								<li class="td td-op">
									<div class="td-inner">
										<a href="<?php echo url('cart/delcart','id='.$g['Id']); ?>" data-point-url="#" class="delete"> 删除</a>
									</div>
								</li>
							</ul>
							<?php endif; endforeach; endif; else: echo "" ;endif; ?>

						</div>
					</div>
				</tr>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>

			<div class="float-bar-wrapper">
				<div id="J_SelectAll2" class="select-all J_SelectAll">
					<div class="cart-checkbox">
						<input class="check-all check" name="select-all" value="true" type="checkbox">
						<label for="J_SelectAllCbx2"></label>
					</div>
					<span>全选</span>
				</div>
				<div class="operations">
					<a href="" hidefocus="true" class="deleteAll">删除</a>
				</div>
				<div class="float-bar-right">
					<div class="amount-sum">
						<span class="txt">已选商品</span>
						<em id="J_SelectedItemsCount">0</em><span class="txt">件</span>
						<div class="arrow-box">
							<span class="selected-items-arrow"></span>
							<span class="arrow"></span>
						</div>
					</div>
					<div class="btn-area">
						<a href="javascript:" id="J_Go" class="submit-btn submit-btn-disabled" aria-label="请注意如果没有选择宝贝，将无法结算">
							<span>结&nbsp;算</span></a>
					</div>
				</div>

			</div>
		</div>
		<div class="footer">
		</div>
	</body>

</html>
<script type="text/javascript" src="/change/public/static/js/jquery-3.2.1.min.js" ></script>
<script>
	$(function(){
		$("#J_Go").click(function(){
			var checked = $('.row_check:checked');
			if(checked.length==0){
				alert('请至少选择一个');
				return;
			}
			var cart_ids = '';
			$.each(checked, function(i,v) {
				var cart_id = $(v).closest('ul').attr('shops_id');
				cart_ids += cart_id + ',';
			});
			cart_ids = cart_ids.slice(0,-1);
			console.log(cart_ids);
//			alert(cart_ids);
			location.href = "<?php echo url('order/showorder'); ?>"+'?id='+cart_ids;
		})
		$('.row_check').click(function(){
			var checked = $('.row_check:checked');
			$("#J_SelectedItemsCount").text(checked.length);
			var bor = $(this).closest("ul").find('.price-now').text();
			if(checked.length>1){
				bor = (bor*1)+add(bor);
			}else if(checked.length==0){
				bor=0;
			}
			console.log(bor);
			var bor = bor*1;
			$("#J_Total").text(bor);
		})
		function add($v){
			var num1 = $v;
			return num1*1;
		}
	})
</script>