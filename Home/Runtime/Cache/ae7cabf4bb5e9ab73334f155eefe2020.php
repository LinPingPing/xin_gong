<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>信息工程学院后台</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/admin.css" />
	<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.11.3.js"></script>
</head>
<body>
	<div id="header">
		<h3>信息工程学院后台管理</h3>
		<h5><a href="__APP__/Login/doLogout">安全退出</a></h5>
	</div>
	<div id="menu">
		<h2>菜单</h2>
		<ul>
			<li><a href="__URL__/index">教师信息</a></li>
			<li><a href="__URL__/article/con">文章管理</a></li>
			<li><a href="__URL__/file">文件管理</a></li>
		</ul>
	</div>

	
	<div id="main">
		<div class="title">
			<strong>上传文件</strong>/<small>Upload File</small>
		  
			<script type="text/javascript">
				
			// <!--提交数据-->
			$(function(){
				$('.add').click(function(){
					$("form[name='addfile']").submit();
				});
			})
			</script>
			<a href="javascript:void(0);" class="add">保存</a>
		</div>
		<div class="content">
			<form method="post" enctype="multipart/form-data" action="<?php echo U('Dodata/AddFile');?>" name="addfile">
				<div class="cont_list"><strong>文件名/File Name</strong><input type="text" name="title" /></div>
				<div class="cont_list"><strong>栏目/Column</strong>
					<select name="column">
					<option value="本科文件">本科文件</option>
					<option value="研究生文件">研究生文件</option>
					<option value="学生工作">学生工作</option>
					<option value="招生就业">招生就业</option>
					<option value="政策法规">政策法规</option>
					</select></div>
				<div class="cont_list"><strong>选择上传文件</strong><input type='file' name='file'></div>
				

			</form>
		</div>
	</div>

</body>
</html>