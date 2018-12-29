<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\phpstudy\WWW\thinkphp5\public/../application/admin\view\minor\showmin.html";i:1528619353;}*/ ?>
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
<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
		<div class="padding border-bottom">
			<ul class="search" style="padding-left:10px;">
				<li> <a class="button border-main icon-plus-square-o" href="addmin.html"> 添加内容</a> </li>

			</ul>
		</div>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">编号</th>
        <th width="10%">身份证号</th>
        <th>姓名</th>
        <th>性别</th>
        <th>出生日期</th>
        <th>基本情况分类</th>
          <th>家庭住址</th>
          <th>照片</th>
          <th>个人基本情况</th>
		  <th>信息员姓名</th>
		  <th>监护人姓名</th>


        <th width="310">操作</th>
      </tr>
      <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$v): ?>
        <tr>
            <td><?php echo $v['Id']; ?></td>
            <td><?php echo $v['MinorCardId']; ?></td>
            <td><?php echo $v['MnName']; ?></td>
            <td><?php echo $v['Sex']; ?></td>
            <td><?php echo $v['Birthday']; ?></td>
            <td><?php echo $v['Classify']; ?></td>
            <td><?php echo $v['Address']; ?></td>
			<td><img src="/thinkphp5/public/uploads/<?php echo $v['MinorPhoto']; ?>"  alt="照片" width="80" height="80"/> </td>
			<td><?php echo $v['MinorStatus']; ?></td>
            <td><?php echo $v['MnName']; ?></td>
			<td><?php echo $v['GdName']; ?></td>



			<td>
				<a class="button border-red " style="padding:5px 15px;" href = "delmin/id/<?php echo $v['Id']; ?>"> 删除</a>
				<a style="padding:5px 15px; margin:0 10px;" class="button border-blue "  href = "savemin/id/<?php echo $v['Id']; ?>"> 修改</a>
			</td>
      </tr>
          <?php endforeach; endif; else: echo "" ;endif; ?>

      <tr>
        <td colspan="8"><div class="pagelist"></div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

//搜索
function changesearch(){	
		
}

//单个删除
function del(id,mid,iscid){
	if(confirm("您确定要删除吗?")){
		
	}
}

//全选
$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

//批量删除
function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false;		
		$("#listform").submit();		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

//批量排序
function sorts(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		return false;
	}
}


//批量首页显示
function changeishome(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}

//批量推荐
function changeisvouch(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");	
		
		return false;
	}
}

//批量置顶
function changeistop(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}


//批量移动
function changecate(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		
		return false;
	}
}

//批量复制
function changecopy(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		var i = 0;
	    $("input[name='id[]']").each(function(){
	  		if (this.checked==true) {
				i++;
			}		
	    });
		if(i>1){ 
	    	alert("只能选择一条信息!");
			$(o).find("option:first").prop("selected","selected");
		}else{
		
			$("#listform").submit();		
		}	
	}
	else{
		alert("请选择要复制的内容!");
		$(o).find("option:first").prop("selected","selected");
		return false;
	}
}

</script>
</body>
</html>