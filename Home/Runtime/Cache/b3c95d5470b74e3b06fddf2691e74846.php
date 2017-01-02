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
			<li><a href="__URL__/article">文章管理</a></li>
			<li><a href="__URL__/file">文件管理</a></li>
		</ul>
	</div>

	
	<div id="main">
		<div class="title">
			<strong>修改信息</strong>/<small>Modify Teacher</small>
						<!-- 配置文件 -->
		    <script type="text/javascript" src="__PUBLIC__/ueditor-gbk-php/ueditor.config.js"></script>
		    <!-- 编辑器源码文件 -->
		    <script type="text/javascript" src="__PUBLIC__/ueditor-gbk-php/ueditor.all.js"></script>
			<script type="text/javascript">
				var ue = UE.getEditor('container'); // <!-- 实例化编辑器 -->
				ue.ready(function() {
				var text='<?php echo $data['experience']; ?>';
			    ue.setContent(text);  //设置编辑器的内容
			       
			  //  var txt = ue.getContentTxt();  //获取纯文本内容，返回: hello
			});

			// <!--提交数据-->
			$(function(){
				$('.add').click(function(){
					var html = ue.getContent();//获取html内容，返回: <p>hello</p>
					$("form[name='addteacher']").submit();
					
				});
			})
			</script>
			<a href="javascript:void(0);" class="add">保存修改</a>
		</div>
		<div class="content">
			<form method="post" enctype="multipart/form-data" action="<?php echo U('Dodata/ModifyTea');?>" name="addteacher">
			<input type='hidden' name='id' value='<?php echo ($data["id"]); ?>'/>
				<div class="cont_list"><strong>姓名/Name</strong><input type="text" value="<?php echo ($data["name"]); ?>" name="name" /></div>
				<div class="cont_pic">
					<div class="person_pic"><img src="__PUBLIC__/Uploads/<?php echo ($data["photo_name"]); ?>" width='110px' height="160px" /></div>
					<div class="person_text">
						<p>请从本地上传一张22mm*32mm的照片</p>
						<input type="file"  name="photo" id="photo" />
					</div>
				</div>
				<div class="cont_list"><strong>职称/Position</strong><input type="text" value="<?php echo ($data["position_title"]); ?>" name="position_title" /></div>
				<div class="cont_list"><strong>电子邮件/E-mail</strong><input type="text" value="<?php echo ($data["email"]); ?>" name="email" /></div>
				<div class="cont_list"><strong>联系方式/Phone</strong><input type="text" value="<?php echo ($data["contact"]); ?>" name="contact" /></div>
				<div class="cont_list"><strong>其他/Other</strong><input type="text" value="<?php echo ($data["other"]); ?>" name="other" /></div>
				<div class="cont_list"><strong>职责/Task</strong><input type="text" value="<?php echo ($data["task"]); ?>" name="task" /></div>
				<div class="cont_list"><strong>经历/Experience</strong></div>
				<div style="height:1px; margin-top:-1px;clear: both;overflow:hidden;"></div>
				<div class="editor">
					 <!-- 加载编辑器的容器 -->
				    <script id="container" name="experience" type="text/plain">填写教师主要经历
    				</script> </div>

			</form>
		</div>
	</div>

</body>
</html>