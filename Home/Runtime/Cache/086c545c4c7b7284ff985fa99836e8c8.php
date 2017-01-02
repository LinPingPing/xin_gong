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
	<script type="text/javascript">
		$(document).ready(function(){
			$('tr').hover(function(){
				$(this).removeClass('huan_she');
				$(this).addClass('hover');
			},function(){
				$("table tr:odd").addClass('huan_she');
				$(this).removeClass('hover');
			})
			$("table tr:odd").addClass('huan_she');
			});
		
	</script>
		<div class="title">
			<strong>教师信息</strong>/<small>Teacher Information</small>
			<a href="__URL__/AddTeacher" class="add">添加</a>
		</div>
		<div class="content">
			<table cellspacing="0" cellpadding="1px">
				<tr style="background:#fff">
					<th>ID</th>
					<th>姓名</th>
					<th>职称</th>
					<th>联系方式</th>
					<th>其他</th>
					<th>操作</th>
				</tr>
				<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr><td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["name"]); ?></td>
					<td><?php echo ($vo["position_title"]); ?></td>
					<td><?php echo ($vo["contact"]); ?></td>
					<td><?php echo ($vo["other"]); ?></td>
					<td><a href="__URL__/ModifyTea/id/<?php echo ($vo["id"]); ?>">修改</a><a href="javascript:if(confirm('确认删除吗?'))window.location='__APP__/Dodata/DelTeacher/id/<?php echo ($vo["id"]); ?>'">删除</a></td>
					</tr><?php endforeach; endif; ?>
				
			</table>
<div class="page"><?php echo ($page); ?></div>
		</div>
	</div>

</body>
</html>