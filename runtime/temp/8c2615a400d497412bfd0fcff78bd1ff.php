<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\phpStudy\WWW\Change\public/../application/admin\view\shop\showshop.html";i:1535505252;}*/ ?>
<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎使用校园二手物品交易系统</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/change/public/static/css/font.css">
    <link rel="stylesheet" href="/change/public/static/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/change/public/static/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/change/public/static/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
    <div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="">首页</a>
        <a href="">演示</a>
        <a>
          <cite>导航元素</cite></a>
      </span>
      <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
    </div>

      <xblock>
        <button class="layui-btn" ><a href="<?php echo url('shop/addshop'); ?>">添加</a></button>
        <span class="x-right" style="line-height:40px">共有数据：88 条</span>
      </xblock>
      <table class="layui-table">
        <thead>
          <tr style="background-color: #D9D9D9;">
            <th style="text-align: center">商品ID</th>
            <th style="text-align: center">商品名称</th>
            <th style="text-align: center">商品分类</th>
            <th style="text-align: center">操作</th>
        </thead>
        <tbody>
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <tr>
            <td style="text-align: center"><?php echo $v['Id']; ?></td>
            <td style="text-align: center"><?php echo $v['GoodsName']; ?></td>
              <td style="text-align: center">
              <table align="center" border="1" cellpadding="0" width="100%" style="background-color: #fff9ec;">

                <tr>
                  <td>图片</td>
                  <td>名称</td>
                  <td>价格</td>
                  <td>原价</td>
                  <td>联系方式</td>
                  <td>成色</td>
                  <td>支付方式</td>
                  <td>操作</td>
                </tr>
                <?php if(is_array($goos) || $goos instanceof \think\Collection || $goos instanceof \think\Paginator): $i = 0; $__LIST__ = $goos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(is_array($vo) || $vo instanceof \think\Collection || $vo instanceof \think\Paginator): if( count($vo)==0 ) : echo "" ;else: foreach($vo as $key=>$vv): if($v['Id'] == $vv['Pid']): ?>
                <tr>
                  <td><img src="/change/public/uploads/<?php echo $vv['Img']; ?>"  alt="照片" width="100" height="80"/></td>
                  <td><?php echo $vv['GoodsName']; ?></td>
                  <td><?php echo $vv['GoodsPrice']; ?></td>
                  <td><?php echo $vv['OldPrice']; ?></td>
                  <td><?php echo $vv['TelPhone']; ?></td>
                     <?php if($vv['Quilty'] == 1): ?>
                         <td>全新</td>
                   <?php else: ?>
                         <td>非全新</td>
                    <?php endif; if($vv['PayWay'] == 1): ?>
                         <td>线上支付</td>
                    <?php else: ?>
                         <td>线下支付</td>
                     <?php endif; ?>
                  <td>
                    <a class="button border-red " style="padding:5px 15px;" href = "delshop/id/<?php echo $vv['Id']; ?>"> 删除</a>
                    <a style="padding:5px 15px; margin:0 10px;" class="button border-blue "  href = "upshop/id/<?php echo $vv['Id']; ?>"> 修改</a>
                  </td>
                </tr>
                <?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
              </table>
              </td>

            <td class="td-manage" style="text-align: center">
              <a title="编辑">
                <i class="layui-icon">&#xe642;</i>
              </a>
              <a title="删除">
                <i class="layui-icon">&#xe640;</i>
              </a>
            </td>
          </tr>
               <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>
      <div class="page">
        <div>
          <a class="prev" href="">&lt;&lt;</a>
          <a class="num" href="">1</a>
          <span class="current">2</span>
          <a class="num" href="">3</a>
          <a class="num" href="">489</a>
          <a class="next" href="">&gt;&gt;</a>
        </div>
      </div>

    </div>
    <script>
      layui.use('laydate', function(){
        var laydate = layui.laydate;
        
        //执行一个laydate实例
        laydate.render({
          elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
          elem: '#end' //指定元素
        });
      });

       /*用户-停用*/
      function member_stop(obj,id){
          layer.confirm('确认要停用吗？',function(index){

              if($(obj).attr('title')=='启用'){

                //发异步把用户状态进行更改
                $(obj).attr('title','停用')
                $(obj).find('i').html('&#xe62f;');

                $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('已停用');
                layer.msg('已停用!',{icon: 5,time:1000});

              }else{
                $(obj).attr('title','启用')
                $(obj).find('i').html('&#xe601;');

                $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('已启用');
                layer.msg('已启用!',{icon: 5,time:1000});
              }
              
          });
      }

      /*用户-删除*/
      function member_del(obj,id){
          layer.confirm('确认要删除吗？',function(index){
              //发异步删除数据
              $(obj).parents("tr").remove();
              layer.msg('已删除!',{icon:1,time:1000});
          });
      }



      function delAll (argument) {

        var data = tableCheck.getData();
  
        layer.confirm('确认要删除吗？'+data,function(index){
            //捉到所有被选中的，发异步进行删除
            layer.msg('删除成功', {icon: 1});
            $(".layui-form-checked").not('.header').parents('tr').remove();
        });
      }
    </script>

  </body>

</html>