<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\phpstudy\WWW\Change\public/../application/admin\view\shop\upshop.html";i:1534048942;}*/ ?>
<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/Change/public/static/css/font.css">
    <link rel="stylesheet" href="/Change/public/static/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/Change/public/static/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/Change/public/static/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
    <div class="x-body">
        <form class="layui-form" method="post" enctype="multipart/form-data">
            <input type="hidden" class="input w50" value="<?php echo $data['Id']; ?>" name="Id" data-validate="required:请输入用户名" />
            <div class="layui-form-item">
              <label  class="layui-form-label">
                  <span class="x-red"></span>商品名称
              </label>
              <div class="layui-input-inline">
                  <input type="text" name="GoodsName" value="<?php echo $data['GoodsName']; ?>"
                   class="layui-input">
              </div>
          </div>
          <div class="layui-form-item">
              <label  class="layui-form-label">
                  <span class="x-red"></span>商品价格
              </label>
              <div class="layui-input-inline">
                  <input type="text"  name="GoodsPrice" value="<?php echo $data['GoodsPrice']; ?>"
                   class="layui-input">
              </div>
          </div>
          <div class="layui-form-item">
              <label  class="layui-form-label">
                  <span class="x-red"></span>商品数量
              </label>
              <div class="layui-input-inline">
                  <input type="text"  name="GoodsNum" value="<?php echo $data['GoodsNum']; ?>"
                   class="layui-input">
              </div>
          </div>
          <div class="layui-form-item">
              <label  class="layui-form-label">
                  <span class="x-red"></span>商品颜色
              </label>
              <div class="layui-input-inline">
                  <input type="text"  name="GoodsColor"  value="<?php echo $data['GoodsColor']; ?>"
                   class="layui-input">
              </div>
          </div>
            <div class="layui-form-item">
                <label  class="layui-form-label">
                    <span class="x-red"></span>商品型号
                </label>
                <div class="layui-input-inline">
                    <input type="text"  name="GoodsSize" value="<?php echo $data['GoodsSize']; ?>"
                            class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label  class="layui-form-label">
                    <span class="x-red"></span>商品原图片
                </label>
                <div class="layui-input-inline">
                    <img src="/Change/public/uploads/<?php echo $data['GoodsImages']; ?>"  alt="照片" width="80" height="80"/>

                </div>
            </div>
            <div class="layui-form-item" style="margin-top: 60px;">
                <label  class="layui-form-label">
                    <span class="x-red"></span>修改图片
                </label>
                <div class="layui-input-inline">
                    <input type="file" class="input w50" value="<?php echo $data['GoodsImages']; ?>" name="GoodsImages" data-validate="required:请输入访谈照片" />

                </div>
            </div>
            <div class="layui-form-item">
                <label  class="layui-form-label">
                    <span class="x-red"></span>商品类型
                </label>
                <div class="layui-input-inline">
                    <select  name="Pid" class="valid">
                        <?php if(is_array($dataP) || $dataP instanceof \think\Collection || $dataP instanceof \think\Paginator): if( count($dataP)==0 ) : echo "" ;else: foreach($dataP as $key=>$v): if($data['Pid'] == $v['Id']): ?>
                        <option value="<?php echo $v['Id']; ?>" selected><?php echo $v['GoodsName']; ?></option>
                        <?php else: ?>
                        <option value="<?php echo $v['Id']; ?>"><?php echo $v['GoodsName']; ?></option>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>

                    </select>
                </div>
            </div>
            <div class="layui-form-item">
                <label  class="layui-form-label">
                </label>
                <button  class="layui-btn"  >
                    修改
                </button>
            </div>
      </form>
    </div>
    <script>
        layui.use(['form','layer'], function(){
            $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;
        
          //自定义验证规则
          form.verify({
            nikename: function(value){
              if(value.length < 5){
                return '昵称至少得5个字符啊';
              }
            }
            ,pass: [/(.+){6,12}$/, '密码必须6到12位']
            ,repass: function(value){
                if($('#L_pass').val()!=$('#L_repass').val()){
                    return '两次密码不一致';
                }
            }
          });

          //监听提交
          form.on('submit(add)', function(data){
            console.log(data);
            //发异步，把数据提交给php
            layer.alert("增加成功", {icon: 6},function () {
                // 获得frame索引
                var index = parent.layer.getFrameIndex(window.name);
                //关闭当前frame
                parent.layer.close(index);
            });
            return false;
          });
          
          
        });
    </script>

  </body>

</html>