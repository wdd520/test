<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"E:\phpstudy\WWW\Change\public/../application/admin\view\admin\addadmin.html";i:1534248912;}*/ ?>
<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
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
    <div class="x-body">
        <form class="layui-form" method="post"  enctype="multipart/form-data">
          <div class="layui-form-item">
              <label  class="layui-form-label">
                  <span class="x-red"></span>用户姓名
              </label>
              <div class="layui-input-inline">
                  <input type="text" name="Name"
                   class="layui-input">
              </div>
          </div>
          <div class="layui-form-item">
              <label  class="layui-form-label">
                  <span class="x-red"></span>密码
              </label>
              <div class="layui-input-inline">
                  <input type="text"  name="PassWord"
                   class="layui-input">
              </div>
          </div>
          <div class="layui-form-item">
              <label  class="layui-form-label">
                  <span class="x-red"></span>学号
              </label>
              <div class="layui-input-inline">
                  <input type="text"  name="StudentId"
                   class="layui-input">
              </div>
          </div>
          <div class="layui-form-item">
              <label  class="layui-form-label">
                  <span class="x-red"></span>学院
              </label>
              <div class="layui-input-inline">
                  <input type="text"  name="College"
                   class="layui-input">
              </div>
          </div>
            <div class="layui-form-item">
                <label  class="layui-form-label">
                    <span class="x-red"></span>专业
                </label>
                <div class="layui-input-inline">
                    <input type="text"  name="Professional"
                            class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label  class="layui-form-label">
                    <span class="x-red"></span>班级
                </label>
                <div class="layui-input-inline">
                    <input type="text"  name="class"
                           class="layui-input">
                </div>

                </div>
       <div class="layui-form-item">
        <label  class="layui-form-label">
            <span class="x-red"></span>头像
        </label>
        <div class="layui-input-inline">
            <input type="file" class="layui-input" value="" name="Img" data-validate="required:请输入照片" />
        </div>

            </div>
        </div>
    <div class="layui-form-item">
                <label  class="layui-form-label">
                </label>
                <button  class="layui-btn"  >
                    增加
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