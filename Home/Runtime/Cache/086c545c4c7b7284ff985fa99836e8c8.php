<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>��Ϣ����ѧԺ��̨</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/admin.css" />
	<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.11.3.js"></script>
</head>
<body>
	<div id="header">
		<h3>��Ϣ����ѧԺ��̨����</h3>
		<h5><a href="__APP__/Login/doLogout">��ȫ�˳�</a></h5>
	</div>
	<div id="menu">
		<h2>�˵�</h2>
		<ul>
			<li><a href="__URL__/index">��ʦ��Ϣ</a></li>
			<li><a href="__URL__/article/con">���¹���</a></li>
			<li><a href="__URL__/file">�ļ�����</a></li>
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
			<strong>��ʦ��Ϣ</strong>/<small>Teacher Information</small>
			<a href="__URL__/AddTeacher" class="add">���</a>
		</div>
		<div class="content">
			<table cellspacing="0" cellpadding="1px">
				<tr style="background:#fff">
					<th>ID</th>
					<th>����</th>
					<th>ְ��</th>
					<th>��ϵ��ʽ</th>
					<th>����</th>
					<th>����</th>
				</tr>
				<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr><td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["name"]); ?></td>
					<td><?php echo ($vo["position_title"]); ?></td>
					<td><?php echo ($vo["contact"]); ?></td>
					<td><?php echo ($vo["other"]); ?></td>
					<td><a href="__URL__/ModifyTea/id/<?php echo ($vo["id"]); ?>">�޸�</a><a href="javascript:if(confirm('ȷ��ɾ����?'))window.location='__APP__/Dodata/DelTeacher/id/<?php echo ($vo["id"]); ?>'">ɾ��</a></td>
					</tr><?php endforeach; endif; ?>
				
			</table>
<div class="page"><?php echo ($page); ?></div>
		</div>
	</div>

</body>
</html>