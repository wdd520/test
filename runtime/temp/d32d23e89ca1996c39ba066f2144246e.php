<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"E:\phpstudy\WWW\thinkphp5\public/../application/admin\view\interview\addinter.html";i:1528549666;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/thinkphp5/public/static/css/pintuer.css">
<link rel="stylesheet" href="/thinkphp5/public/static/css/admin.css">
<script src="/thinkphp5/public/static/js/jquery.js"></script>
<script src="/thinkphp5/public/static/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">
        <div class="form-group">
            <div class="label">
                <label>访谈时间：</label>
            </div>
            <div class="field">
                <input type="date" class="input w50" value="<?php echo date('Y-m-d',strtotime(date('Y-m-d g:i a',time()))); ?>" name="ChatDate" data-validate="required:请输入密码" />
                <div class="tips"></div>
            </div>

        </div>
        <div class="form-group">
            <div class="label">
                <label>访谈地点：</label>
            </div>
            <div class="field">
                <input type="text" class="input w50" value="" name="ChatAddress" data-validate="required:请输入访谈地点" />
                <div class="tips"></div>
            </div>

        </div>
        <div class="form-group">
            <div class="label">
                <label>访谈内容：</label>
            </div>
            <div class="field">
                <input type="text" class="input w50" value="" name="ChatContent" data-validate="required:请输入访谈内容" />
                <div class="tips"></div>
            </div>

        </div>
        <div class="form-group">
            <div class="label">
                <label>访谈照片：</label>
            </div>
            <div class="field">
                <input type="file" class="input w50" value="" name="photo" data-validate="required:请输入访谈照片" />
                <div class="tips"></div>
            </div>

        </div>
        <div class="form-group">
            <div class="label">
                <label>信息员姓名：</label>
            </div>
            <div class="field">
                <select name="MessengerPhone" class="input w50">
                    <option value="0">未选择</option>
                    <?php if(is_array($listm) || $listm instanceof \think\Collection || $listm instanceof \think\Paginator): if( count($listm)==0 ) : echo "" ;else: foreach($listm as $key=>$vo): ?>
                        <option value="<?php echo $vo['MessengerPhone']; ?>"><?php echo $vo['MgName']; ?></option>
                   <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>

                <div class="tips"></div>
            </div>

        </div>
        <div class="form-group">
            <div class="label">
                <label>未成年人姓名：</label>
            </div>
            <div class="field">
                <select name="MinorCardId" class="input w50">
                    <option value="0">未选择</option>
                    <?php if(is_array($listmi) || $listmi instanceof \think\Collection || $listmi instanceof \think\Paginator): if( count($listmi)==0 ) : echo "" ;else: foreach($listmi as $key=>$v): ?>
                        <option value="<?php echo $v['MinorCardId']; ?>"><?php echo $v['MnName']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>

                <div class="tips"></div>
            </div>

        </div>





      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>


    </form>
  </div>
</div>

</body></html>