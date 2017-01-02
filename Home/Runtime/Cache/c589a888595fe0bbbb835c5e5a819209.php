<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
<title>信息工程学院</title>

<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/header.css" />
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.SuperSlide.2.1.1.source.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/nav.js"></script>

</head>
<body>
<div id="header" class="">
	<span><a href="__APP__/Login/login" target="_blank">后台登陆</a></span>
</div>
<div id="nav" class="">
	<ul id="continer">
		<li class="nav_1"><a href="__URL__/index">首页</a></li>
		<li class="nav_1"><a href="__URL__/jie_shao">学院概况</a>
			<ul>
				<li><a href="__URL__/jie_shao/tid/1">学院简介</a></li>
				<li><a href="__URL__/jie_shao/tid/2">现任领导</a></li>
				<li><a href="__URL__/jie_shao/tid/3">组织机构</a></li>
			</ul>
		</li>
		<li class="nav_1"><a href="__URL__/xue_ke">学科建设</a>
			<ul>
				<li><a href="__URL__/xue_ke/tid/1">重点学科</a></li>
				<li><a href="__URL__/xue_ke/tid/2">学位建设</a></li>
				<li><a href="__URL__/xue_ke/tid/3">学科基地</a></li>
				<li><a href="__URL__/xue_ke/tid/4">学科带头人</a></li>
			</ul>
		</li>
		<li class="nav_1"><a href="__URL__/ungraduate">本科教育</a>
			<ul>
				<li><a href='__URL__/ungraduate'>培养计划</a></li>
				<li><a href='__URL__/ungraduate'>专业介绍</a></li>
			</ul>
		</li>
		<li class="nav_1"><a href="__URL__/graduate">研究生教育</a>
			<ul>
				<li><a href='__URL__/graduate'>研究方向</a></li>
				<li><a href='__URL__/graduate'>培养计划</a></li>
				<li><a href=''>导师介绍</a></li>
			</ul></li>
		<li class="nav_1"><a href="__URL__/student_work/tid/1">学生工作</a>
			<ul>
				<li><a href="__URL__/student_work/tid/1">学工办</a></li>
				<li><a href="__URL__/student_work/tid/2">分团委</a></li>
				<li><a href="__URL__/student_work/tid/3">学生会</a></li>
				<li><a href="__URL__/student_work/tid/4">特色基地</a></li>
			</ul>
		</li>
		<li class="nav_1"><a href="__URL__/party_work/tid/1">党建工作</a>
			<ul>
				<li><a href="__URL__/party_work/tid/1">政策法规</a></li>
				<li><a href="__URL__/party_work/tid/2">支部活动</a></li>
			</ul>
		</li>
		<li class="nav_1"><a href="__URL__/recruit/tid/1">招生就业</a>
			<ul>
				<li><a href="__URL__/recruit/tid/1">本科招生</a></li>
				<li><a href="__URL__/recruit/tid/2">研究生招生</a></li>
				<li><a href="__URL__/recruit/tid/3">就业工作</a></li>
			</ul>
		</li>
		<li class="nav_1"><a href="__URL__/download">资料下载</a></li>
		<li class="nav_1"><a href="__URL__/sstd">师生天地</a>
			<ul>
				<li><a href="__URL__/sstd/tid/1">学科竞赛</a></li>
				<li><a href="__URL__/sstd/tid/2">师生天地</a></li>
			</ul></li>
	</ul>
</div>


<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/base.css" />
<script type="text/javascript">
	$(function(){
		$('#sidebar ul').hide();
		$('#sidebar li a:parent').parent().parent().show();
		$('#sidebar li a:empty').parent().hide();
	})
</script>
<div id="middle">
	<div id="sidebar">
		<div class="menu">
			<h2><?php echo ($base["w"]); ?></h2>
			
			<ul>
				<li><a href="__ACTION__/tid/1"><?php echo ($base["w1"]); ?></a>
					<ul>
						<li><a href="__ACTION__/stu/1"><?php echo ($base["w1_1"]); ?></a></li>
						<li><a href="__ACTION__/stu/2"><?php echo ($base["w1_2"]); ?></a></li>
						<li><a href="__ACTION__/stu/3"><?php echo ($base["w1_3"]); ?></a></li>
						<li><a href="__ACTION__/stu/4"><?php echo ($base["w1_4"]); ?></a></li>
						<li><a href="__ACTION__/stu/5"><?php echo ($base["w1_5"]); ?></a></li>
					</ul>
				</li>
				<li><a href="__ACTION__/tid/2"><?php echo ($base["w2"]); ?></a></li>
				<li><a href="__ACTION__/tid/3"><?php echo ($base["w3"]); ?></a></li>
				<li><a href="__ACTION__/tid/4"><?php echo ($base["w4"]); ?></a></li>
				<li><a href="__ACTION__/tid/5"><?php echo ($base["w5"]); ?></a></li>
			</ul>
		</div>
		<div class="link contact">
			<h2>常用链接</h2>
			<div>
				<div class="sidebar_con">
					<p>
						<a href="">河南省图像处理与智能检测国际联合实验室</a><br>
						<a href="">河南省装备制造智能控制工程实验室</a><br>
						<a href="">河南省智能技术与重点学科开放实验室</a><br>
						<a href="">河南省智能技术院士工作站</a>
					</p>
				</div>
			</div>
		</div>
		<div class="contact">
			<h2>联系我们</h2>
			<div class="sidebar_con">
				<p>
				电话：64231910<br>
				传真：<br>
				邮件：dxbgs@mail.haust.edu.cn<br>
				邮编：471023<br>
				地址：中国·洛阳 开元大道263号<br>
				</p>
			</div>
		</div>
	</div>
	<div class="main">
		
	<div class="sitenav">当前位置：
		<a href="__URL__/index">首页</a>-
		<a href="__URL__/download"><?php echo ($sitenav["1"]); ?></a>-
		<a href="__URL__/download"><?php echo ($sitenav["2"]); ?></a>
	</div>

		
	<div class="about_cont">

		<ul class="list_cont">
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><li><span><?php echo ($vo["time"]); ?></span><a href="__PUBLIC__/Uploads/file/<?php echo ($vo["file_name"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
		</ul>
		
	</div>

	</div>
	<div style="height:1px; margin-top:-1px;clear: both;overflow:hidden;"></div>
</div>
<div id="footer">
	<p>
		版权所有 © 河南科技大学信息工程学院 | 中国·洛阳开元大道 263号      E-mail：liu199481@qq.com          
	</p>
</div>
</body>
</html>