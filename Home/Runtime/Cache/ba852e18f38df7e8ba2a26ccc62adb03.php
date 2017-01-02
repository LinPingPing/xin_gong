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
			<strong>添加文章</strong>/<small>Add Article</small>
			<!-- 配置文件 -->
		    <script type="text/javascript" src="__PUBLIC__/ueditor-gbk-php/ueditor.config.js"></script>
		    <!-- 编辑器源码文件 -->
		    <script type="text/javascript" src="__PUBLIC__/ueditor-gbk-php/ueditor.all.js"></script>
		  
			<script type="text/javascript">
				var ue = UE.getEditor('container'); // <!-- 实例化编辑器 -->
				ue.ready(function() {
			    ue.setContent('请输入文章内容！');  //设置编辑器的内容
			       
			    var txt = ue.getContentTxt();  //获取纯文本内容，返回: hello
			});

			// <!--提交数据-->
			$(function(){
				$('.add').click(function(){
					var html = ue.getContent();//获取html内容，返回: <p>hello</p>
					$("form[name='addarticle']").submit();
				});
			})
			</script>
			<a href="javascript:void(0);" class="add">保存</a>
		</div>
		<div class="content">
			<form method="post" enctype="multipart/form-data" action="<?php echo U('Dodata/AddArticle');?>" name="addarticle">
				<div class="cont_list"><strong>标题/Title</strong><input type="text" name="headline" /></div>
				<div class="cont_list"><strong>作者/Author</strong><input type="text" name="author" /></div>
				<div class="cont_list"><strong>栏目/Column</strong>
					<select name="column">
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