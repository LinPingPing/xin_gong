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
		<div class="title">
			<strong>�ϴ��ļ�</strong>/<small>Upload File</small>
		  
			<script type="text/javascript">
				
			// <!--�ύ����-->
			$(function(){
				$('.add').click(function(){
					$("form[name='addfile']").submit();
				});
			})
			</script>
			<a href="javascript:void(0);" class="add">����</a>
		</div>
		<div class="content">
			<form method="post" enctype="multipart/form-data" action="<?php echo U('Dodata/AddFile');?>" name="addfile">
				<div class="cont_list"><strong>�ļ���/File Name</strong><input type="text" name="title" /></div>
				<div class="cont_list"><strong>��Ŀ/Column</strong>
					<select name="column">
					<option value="�����ļ�">�����ļ�</option>
					<option value="�о����ļ�">�о����ļ�</option>
					<option value="ѧ������">ѧ������</option>
					<option value="������ҵ">������ҵ</option>
					<option value="���߷���">���߷���</option>
					</select></div>
				<div class="cont_list"><strong>ѡ���ϴ��ļ�</strong><input type='file' name='file'></div>
				

			</form>
		</div>
	</div>

</body>
</html>