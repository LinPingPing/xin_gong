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
			<strong>�޸�����</strong>/<small>Modify Article</small>
			<!-- �����ļ� -->
		    <script type="text/javascript" src="__PUBLIC__/ueditor-gbk-php/ueditor.config.js"></script>
		    <!-- �༭��Դ���ļ� -->
		    <script type="text/javascript" src="__PUBLIC__/ueditor-gbk-php/ueditor.all.js"></script>
		  
			<script type="text/javascript">
				var ue = UE.getEditor('container'); // <!-- ʵ�����༭�� -->
				ue.ready(function() {
					var text='<?php echo $data['content']; ?>';
			    	ue.setContent(text);  //���ñ༭��������
			       
			   // var txt = ue.getContentTxt();  ��ȡ���ı����ݣ�����: hello
			});

			// <!--�ύ����-->
			$(function(){
				// var column='<?php echo $data['column']; ?>';
				// if (column=='ѧԺ�ſ�') {
				// 	$('option:eq(0)').attr('selected','selected');
				// }else if(column=='ѧ�ƽ���'){
				// 	$('option:eq(1)').attr('selected','selected');
				// }else if (column=='���ƽ���') {
				// 	$('option:eq(2)').attr('selected','selected');
				// };
				$('.add').click(function(){
					var html = ue.getContent();//��ȡhtml���ݣ�����: <p>hello</p>
					$("form[name='modifyarticle']").submit();
				});
			})
			</script>
			<a href="javascript:void(0);" class="add">����</a>
		</div>
		<div class="content">
			<form method="post" enctype="multipart/form-data" action="<?php echo U('Dodata/ModifyArt');?>" name="modifyarticle">
			<input type='hidden' name='id' value='<?php echo ($data["id"]); ?>'/>
				<div class="cont_list"><strong>����/Title</strong><input type="text" name="headline" value="<?php echo ($data["headline"]); ?>" /></div>
				<div class="cont_list"><strong>����/Author</strong><input type="text" name="author" value="<?php echo ($data["author"]); ?>" /></div>
				<div class="cont_list"><strong>��Ŀ/Column</strong>
					<select name="column">

					<option value="introduce" <?php if(($data["column"]) == "introduce"): ?>selected="selected"<?php endif; ?>>ѧԺ�ſ�</option>
					<option value="xue_ke" <?php if(($data["column"]) == "xue_ke"): ?>selected="selected"<?php endif; ?>>ѧ�ƽ���</option>
					<option value="ungraduate" <?php if(($data["column"]) == "ungraduate"): ?>selected="selected"<?php endif; ?>>���ƽ���</option>
					<option value="graduate" <?php if(($data["column"]) == "graduate"): ?>selected="selected"<?php endif; ?>>�о�������</option>
					<option value="competition" <?php if(($data["column"]) == "competition"): ?>selected="selected"<?php endif; ?>>ѧ�ƾ���</option>
					<option value="teacher_student" <?php if(($data["column"]) == "teacher_student"): ?>selected="selected"<?php endif; ?>>ʦ�����</option>
					<option value="student_work" <?php if(($data["column"]) == "student_work"): ?>selected="selected"<?php endif; ?>>ѧ������</option>
					<option value="zheng_che" <?php if(($data["column"]) == "zheng_che"): ?>selected="selected"<?php endif; ?>>���߷���</option>
					<option value="party_active" <?php if(($data["column"]) == "party_active"): ?>selected="selected"<?php endif; ?>>֧���</option>
					<option value="zhao_sheng" <?php if(($data["column"]) == "zhao_sheng"): ?>selected="selected"<?php endif; ?>>������Ϣ</option>
					<option value="jiu_ye" <?php if(($data["column"]) == "jiu_ye"): ?>selected="selected"<?php endif; ?>>��ҵָ��</option>
					</select></div>
				<div style="height:1px; margin-top:-1px;clear: both;overflow:hidden;"></div>
				<div class="editor">
					 <!-- ���ر༭�������� -->
				    <script id="container" name="content" type="text/plain">
    				</script> </div>
				
				

			</form>
		</div>
	</div>

</body>
</html>