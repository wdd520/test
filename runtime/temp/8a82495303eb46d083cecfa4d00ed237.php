<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\phpstudy\WWW\thinkphp5\public/../application/admin\view\minor\savemin.html";i:1528339792;}*/ ?>
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">



        <input type="hidden" class="input w50" value="<?php echo $data['Id']; ?>" name="Id" data-validate="required:请输入用户名" />

        <div class="form-group">
            <div class="label">
                <label>身份证号：</label>
            </div>
            <div class="field">
                <input type="text" class="input w50" value="<?php echo $data['MinorCardId']; ?>" name="MinorCardId" data-validate="required:请输入身份证号" />
                <div class="tips"></div>
            </div>

         </div>
        <div class="form-group">
            <div class="label">
                <label>姓名：</label>
            </div>
            <div class="field">
                <input type="text" class="input w50" value="<?php echo $data['MnName']; ?>" name="MnName" data-validate="required:请输入姓名" />
                <div class="tips"></div>
            </div>

        </div>
        <div class="form-group">
            <div class="label">
                <label>性别：</label>
            </div>
            <div class="field">
                <input type="text" class="input w50" value="<?php echo $data['Sex']; ?>" name="Sex" data-validate="required:请输入性别" />
                <div class="tips"></div>
            </div>

        </div>
        <div class="form-group">
            <div class="label">
                <label>出生日期：</label>
            </div>
            <div class="field">
                <input type="text" class="input w50" value="<?php echo $data['Birthday']; ?>" name="Birthday" data-validate="required:出生日期" />
                <div class="tips"></div>
            </div>

        </div>
        <div class="form-group">
            <div class="label">
                <label>基本情况分类：</label>
            </div>
            <div class="field">
                <select name="classify" class="input w50">
                    <?php if(is_array($listmii) || $listmii instanceof \think\Collection || $listmii instanceof \think\Paginator): if( count($listmii)==0 ) : echo "" ;else: foreach($listmii as $key=>$va): if($data['classify'] == $va['Cid']): ?>
                    <option value="<?php echo $va['Cid']; ?>"><?php echo $va['Classify']; ?></option>
                    <?php else: ?>
                        <option value="<?php echo $va['Cid']; ?>"><?php echo $va['Classify']; ?></option>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </select>

                <div class="tips"></div>
            </div>

        </div>
        <div class="form-group">
            <div class="label">
                <label>家庭住址：</label>
            </div>
            <div class="field">
                <input type="text" class="input w50" value="<?php echo $data['Address']; ?>" name="Address" data-validate="required:请输入家庭住址" />
                <div class="tips"></div>
            </div>

        </div>
        <div class="form-group">
            <div class="label">
                <label>原照片：</label>
            </div>
            <div class="field">
                <img src="__UPLOADS__/<?php echo $data['MinorPhoto']; ?>"  alt="照片" width="80" height="80"/>
                <div class="tips"></div>
            </div>

        </div>

        <div class="form-group">
            <div class="label">
                <label>修改照片：</label>
            </div>
            <div class="field">
                <input type="file" class="input w50" value="<?php echo $data['MinorPhoto']; ?>" name="MinorPhoto" data-validate="required:请输入照片" />
                <div class="tips"></div>
            </div>

        </div>
        <div class="form-group">
            <div class="label">
                <label>个人基本情况：</label>
            </div>
            <div class="field">
                <input type="text" class="input w50" value="<?php echo $data['MinorStatus']; ?>" name="MinorStatus" data-validate="required:请输入个人基本情况" />
                <div class="tips"></div>
            </div>

        </div>
        <div class="form-group">
            <div class="label">
                <label>监护人姓名：</label>
            </div>
            <div class="field">
                <select name="GuardianCardId" class="input w50">
                    <?php if(is_array($listmi) || $listmi instanceof \think\Collection || $listmi instanceof \think\Paginator): if( count($listmi)==0 ) : echo "" ;else: foreach($listmi as $key=>$v): if($data['GuardianCardId'] == $v['GuardianCardId']): ?>
                            <option value="<?php echo $v['GuardianCardId']; ?>"><?php echo $v['GdName']; ?></option>
                            <?php else: ?>
                            <option value="<?php echo $v['GuardianCardId']; ?>"><?php echo $v['GdName']; ?></option>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </select>

                <div class="tips"></div>
            </div>

        </div>
        <div class="form-group">
            <div class="label">
                <label>信息员姓名：</label>
            </div>
            <div class="field">
                <select name="MessengerPhone" class="input w50">
                    <?php if(is_array($listm) || $listm instanceof \think\Collection || $listm instanceof \think\Paginator): if( count($listm)==0 ) : echo "" ;else: foreach($listm as $key=>$vo): if($data['MessengerPhone'] == $vo['MessengerPhone']): ?>
                    <option value="<?php echo $vo['MessengerPhone']; ?>"><?php echo $vo['MgName']; ?></option>
                            <?php else: ?>
                        <option value="<?php echo $vo['MessengerPhone']; ?>"><?php echo $vo['MgName']; ?></option>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
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