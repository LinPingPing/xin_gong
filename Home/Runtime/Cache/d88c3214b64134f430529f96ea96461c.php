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
			<li><a href="__URL__/article">���¹���</a></li>
			<li><a href="__URL__/file">�ļ�����</a></li>
		</ul>
	</div>

	
	<div id="main">
		<div class="title">
			<strong>������</strong>/<small>Upload File</small>
		  
			<script type="text/javascript">

				
			// <!--�ύ����-->
			$(function(){
				var column='<?php echo $data['column']; ?>';
				if (column=='�����ļ�') {
					$('option:eq(0)').attr('selected','selected');
				}else if(column=='�о����ļ�'){
					$('option:eq(1)').attr('selected','selected');
				}else if (column=='ѧ������') {
					$('option:eq(2)').attr('selected','selected');
				}else if (column=='������ҵ') {
					$('option:eq(3)').attr('selected','selected');
				}else if (column=='���߷���') {
					$('option:eq(4)').attr('selected','selected');
				};
				$('.add').click(function(){
					$("form[name='addfile']").submit();
				});
			})
			</script>
			<a href="javascript:void(0);" class="add">����</a>
		</div>
		<div class="content">
			<form method="post" action="<?php echo U('Dodata/ModifyFile');?>" name="addfile">
			<input type='hidden' name='id' value='<?php echo ($data["id"]); ?>'/>
				<div class="cont_list"><strong>�ļ���/File Name</strong><input type="text" name="title" value="<?php echo ($data["title"]); ?>" /></div>
				<div class="cont_list"><strong>��Ŀ/Column</strong>
					<select name="column">
					<option value="�����ļ�">�����ļ�</option>
					<option value="�о����ļ�">�о����ļ�</option>
					<option value="ѧ������">ѧ������</option>
					<option value="������ҵ">������ҵ</option>
					<option value="���߷���">���߷���</option>
					</select></div>
				

			</form>
		</div>
	</div>

</body>
</html>