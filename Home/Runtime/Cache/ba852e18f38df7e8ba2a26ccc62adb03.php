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
			<strong>�������</strong>/<small>Add Article</small>
			<!-- �����ļ� -->
		    <script type="text/javascript" src="__PUBLIC__/ueditor-gbk-php/ueditor.config.js"></script>
		    <!-- �༭��Դ���ļ� -->
		    <script type="text/javascript" src="__PUBLIC__/ueditor-gbk-php/ueditor.all.js"></script>
		  
			<script type="text/javascript">
				var ue = UE.getEditor('container'); // <!-- ʵ�����༭�� -->
				ue.ready(function() {
			    ue.setContent('�������������ݣ�');  //���ñ༭��������
			       
			    var txt = ue.getContentTxt();  //��ȡ���ı����ݣ�����: hello
			});

			// <!--�ύ����-->
			$(function(){
				$('.add').click(function(){
					var html = ue.getContent();//��ȡhtml���ݣ�����: <p>hello</p>
					$("form[name='addarticle']").submit();
				});
			})
			</script>
			<a href="javascript:void(0);" class="add">����</a>
		</div>
		<div class="content">
			<form method="post" enctype="multipart/form-data" action="<?php echo U('Dodata/AddArticle');?>" name="addarticle">
				<div class="cont_list"><strong>����/Title</strong><input type="text" name="headline" /></div>
				<div class="cont_list"><strong>����/Author</strong><input type="text" name="author" /></div>
				<div class="cont_list"><strong>��Ŀ/Column</strong>
					<select name="column">
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