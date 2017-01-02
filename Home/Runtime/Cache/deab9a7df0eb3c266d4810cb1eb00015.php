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
				});
			$("table tr:odd").addClass('huan_she');
			var value=$("select[name='select']").children('option:selected').val();
		});
		function Chang(){
			var s_value=$(name='select').val();
			// alert(s_value);
			 window.location.href='__URL__/article/con/'+s_value;
		}
	</script>
		<div class="title">
			<strong>文章列表</strong>/<small>Article List</small>
			<select name="select" onchange="javascript:Chang()">
                        <option value=" ">==全部文章==</option>
						<option value="introduce">学院概况</option>
						<option value="xue_ke">学科建设</option>
						<option value="zheng_che">政策法规</option>
						<option value="party_active">支部活动</option>
						<option value="ungraduate">本科教育</option>
						<option value="graduate">研究生教育</option>
						<option value="competition">学科竞赛</option>
						<option value="teacher_student">师生天地</option>
						<option value="student_work">学生工作</option>
						<option value="zhao_sheng">招生信息</option>
						<option value="jiu_ye">就业指导</option>
            </select>
			<a href="__URL__/AddArticle" class="add">添加</a>
		</div>
		<div class="content">
			<table cellspacing="0" cellpadding="1px">
				<tr style="background:#fff">
					<th>ID</th>
					<th width='270'>标题</th>
					<th>栏目</th>
					<th>作者</th>
					<th>时间</th>
					<th>操作</th>
				</tr>
				<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
						<td><?php echo ($vo["id"]); ?></td>
						<td width='270'><?php echo ($vo["headline"]); ?></td>
						<td><?php echo ($vo["column"]); ?></td>
						<td><?php echo ($vo["author"]); ?></td>
						<td><?php echo ($vo["time"]); ?></td>
						<td><a href="__URL__/ModifyArt/id/<?php echo ($vo["id"]); ?>">修改</a>
						<a href="javascript:if(confirm('确认删除吗?'))window.location='__APP__/Dodata/DelArt/id/<?php echo ($vo["id"]); ?>'">删除</a></td>
					</tr><?php endforeach; endif; ?>
			</table>
			<div class="page"><?php echo ($page); ?></div>
		</div>
	</div>

</body>
</html>