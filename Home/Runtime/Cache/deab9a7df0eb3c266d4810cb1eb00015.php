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
			<strong>�����б�</strong>/<small>Article List</small>
			<select name="select" onchange="javascript:Chang()">
                        <option value=" ">==ȫ������==</option>
						<option value="introduce">ѧԺ�ſ�</option>
						<option value="xue_ke">ѧ�ƽ���</option>
						<option value="zheng_che">���߷���</option>
						<option value="party_active">֧���</option>
						<option value="ungraduate">���ƽ���</option>
						<option value="graduate">�о�������</option>
						<option value="competition">ѧ�ƾ���</option>
						<option value="teacher_student">ʦ�����</option>
						<option value="student_work">ѧ������</option>
						<option value="zhao_sheng">������Ϣ</option>
						<option value="jiu_ye">��ҵָ��</option>
            </select>
			<a href="__URL__/AddArticle" class="add">���</a>
		</div>
		<div class="content">
			<table cellspacing="0" cellpadding="1px">
				<tr style="background:#fff">
					<th>ID</th>
					<th width='270'>����</th>
					<th>��Ŀ</th>
					<th>����</th>
					<th>ʱ��</th>
					<th>����</th>
				</tr>
				<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
						<td><?php echo ($vo["id"]); ?></td>
						<td width='270'><?php echo ($vo["headline"]); ?></td>
						<td><?php echo ($vo["column"]); ?></td>
						<td><?php echo ($vo["author"]); ?></td>
						<td><?php echo ($vo["time"]); ?></td>
						<td><a href="__URL__/ModifyArt/id/<?php echo ($vo["id"]); ?>">�޸�</a>
						<a href="javascript:if(confirm('ȷ��ɾ����?'))window.location='__APP__/Dodata/DelArt/id/<?php echo ($vo["id"]); ?>'">ɾ��</a></td>
					</tr><?php endforeach; endif; ?>
			</table>
			<div class="page"><?php echo ($page); ?></div>
		</div>
	</div>

</body>
</html>