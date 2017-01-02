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
		<div class="title">
			<strong>修改文章</strong>/<small>Modify Article</small>
			<!-- 配置文件 -->
		    <script type="text/javascript" src="__PUBLIC__/ueditor-gbk-php/ueditor.config.js"></script>
		    <!-- 编辑器源码文件 -->
		    <script type="text/javascript" src="__PUBLIC__/ueditor-gbk-php/ueditor.all.js"></script>
		  
			<script type="text/javascript">
				var ue = UE.getEditor('container'); // <!-- 实例化编辑器 -->
				ue.ready(function() {
					var text='<?php echo $data['content']; ?>';
			    	ue.setContent(text);  //设置编辑器的内容
			       
			   // var txt = ue.getContentTxt();  获取纯文本内容，返回: hello
			});

			// <!--提交数据-->
			$(function(){
				// var column='<?php echo $data['column']; ?>';
				// if (column=='学院概况') {
				// 	$('option:eq(0)').attr('selected','selected');
				// }else if(column=='学科建设'){
				// 	$('option:eq(1)').attr('selected','selected');
				// }else if (column=='本科教育') {
				// 	$('option:eq(2)').attr('selected','selected');
				// };
				$('.add').click(function(){
					var html = ue.getContent();//获取html内容，返回: <p>hello</p>
					$("form[name='modifyarticle']").submit();
				});
			})
			</script>
			<a href="javascript:void(0);" class="add">保存</a>
		</div>
		<div class="content">
			<form method="post" enctype="multipart/form-data" action="<?php echo U('Dodata/ModifyArt');?>" name="modifyarticle">
			<input type='hidden' name='id' value='<?php echo ($data["id"]); ?>'/>
				<div class="cont_list"><strong>标题/Title</strong><input type="text" name="headline" value="<?php echo ($data["headline"]); ?>" /></div>
				<div class="cont_list"><strong>作者/Author</strong><input type="text" name="author" value="<?php echo ($data["author"]); ?>" /></div>
				<div class="cont_list"><strong>栏目/Column</strong>
					<select name="column">

					<option value="introduce" <?php if(($data["column"]) == "introduce"): ?>selected="selected"<?php endif; ?>>学院概况</option>
					<option value="xue_ke" <?php if(($data["column"]) == "xue_ke"): ?>selected="selected"<?php endif; ?>>学科建设</option>
					<option value="ungraduate" <?php if(($data["column"]) == "ungraduate"): ?>selected="selected"<?php endif; ?>>本科教育</option>
					<option value="graduate" <?php if(($data["column"]) == "graduate"): ?>selected="selected"<?php endif; ?>>研究生教育</option>
					<option value="competition" <?php if(($data["column"]) == "competition"): ?>selected="selected"<?php endif; ?>>学科竞赛</option>
					<option value="teacher_student" <?php if(($data["column"]) == "teacher_student"): ?>selected="selected"<?php endif; ?>>师生天地</option>
					<option value="student_work" <?php if(($data["column"]) == "student_work"): ?>selected="selected"<?php endif; ?>>学生工作</option>
					<option value="zheng_che" <?php if(($data["column"]) == "zheng_che"): ?>selected="selected"<?php endif; ?>>政策法规</option>
					<option value="party_active" <?php if(($data["column"]) == "party_active"): ?>selected="selected"<?php endif; ?>>支部活动</option>
					<option value="zhao_sheng" <?php if(($data["column"]) == "zhao_sheng"): ?>selected="selected"<?php endif; ?>>招生信息</option>
					<option value="jiu_ye" <?php if(($data["column"]) == "jiu_ye"): ?>selected="selected"<?php endif; ?>>就业指导</option>
					</select></div>
				<div style="height:1px; margin-top:-1px;clear: both;overflow:hidden;"></div>
				<div class="editor">
					 <!-- 加载编辑器的容器 -->
				    <script id="container" name="content" type="text/plain">
    				</script> </div>
				
				

			</form>
		</div>
	</div>

</body>
</html>