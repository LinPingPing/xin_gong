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
			<strong>�޸���Ϣ</strong>/<small>Modify Teacher</small>
						<!-- �����ļ� -->
		    <script type="text/javascript" src="__PUBLIC__/ueditor-gbk-php/ueditor.config.js"></script>
		    <!-- �༭��Դ���ļ� -->
		    <script type="text/javascript" src="__PUBLIC__/ueditor-gbk-php/ueditor.all.js"></script>
			<script type="text/javascript">
				var ue = UE.getEditor('container'); // <!-- ʵ�����༭�� -->
				ue.ready(function() {
				var text='<?php echo $data['experience']; ?>';
			    ue.setContent(text);  //���ñ༭��������
			       
			  //  var txt = ue.getContentTxt();  //��ȡ���ı����ݣ�����: hello
			});

			// <!--�ύ����-->
			$(function(){
				$('.add').click(function(){
					var html = ue.getContent();//��ȡhtml���ݣ�����: <p>hello</p>
					$("form[name='addteacher']").submit();
					
				});
			})
			</script>
			<a href="javascript:void(0);" class="add">�����޸�</a>
		</div>
		<div class="content">
			<form method="post" enctype="multipart/form-data" action="<?php echo U('Dodata/ModifyTea');?>" name="addteacher">
			<input type='hidden' name='id' value='<?php echo ($data["id"]); ?>'/>
				<div class="cont_list"><strong>����/Name</strong><input type="text" value="<?php echo ($data["name"]); ?>" name="name" /></div>
				<div class="cont_pic">
					<div class="person_pic"><img src="__PUBLIC__/Uploads/<?php echo ($data["photo_name"]); ?>" width='110px' height="160px" /></div>
					<div class="person_text">
						<p>��ӱ����ϴ�һ��22mm*32mm����Ƭ</p>
						<input type="file"  name="photo" id="photo" />
					</div>
				</div>
				<div class="cont_list"><strong>ְ��/Position</strong><input type="text" value="<?php echo ($data["position_title"]); ?>" name="position_title" /></div>
				<div class="cont_list"><strong>�����ʼ�/E-mail</strong><input type="text" value="<?php echo ($data["email"]); ?>" name="email" /></div>
				<div class="cont_list"><strong>��ϵ��ʽ/Phone</strong><input type="text" value="<?php echo ($data["contact"]); ?>" name="contact" /></div>
				<div class="cont_list"><strong>����/Other</strong><input type="text" value="<?php echo ($data["other"]); ?>" name="other" /></div>
				<div class="cont_list"><strong>ְ��/Task</strong><input type="text" value="<?php echo ($data["task"]); ?>" name="task" /></div>
				<div class="cont_list"><strong>����/Experience</strong></div>
				<div style="height:1px; margin-top:-1px;clear: both;overflow:hidden;"></div>
				<div class="editor">
					 <!-- ���ر༭�������� -->
				    <script id="container" name="experience" type="text/plain">��д��ʦ��Ҫ����
    				</script> </div>

			</form>
		</div>
	</div>

</body>
</html>