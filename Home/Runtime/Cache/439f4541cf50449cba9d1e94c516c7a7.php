<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
<title>��Ϣ����ѧԺ</title>

<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/header.css" />
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.SuperSlide.2.1.1.source.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/nav.js"></script>

</head>
<body>
<div id="header" class="">
	<span><a href="__APP__/Login/login" target="_blank">��̨��½</a></span>
</div>
<div id="nav" class="">
	<ul id="continer">
		<li class="nav_1"><a href="__URL__/index">��ҳ</a></li>
		<li class="nav_1"><a href="__URL__/jie_shao">ѧԺ�ſ�</a>
			<ul>
				<li><a href="__URL__/jie_shao/tid/1">ѧԺ���</a></li>
				<li><a href="__URL__/jie_shao/tid/2">�����쵼</a></li>
				<li><a href="__URL__/jie_shao/tid/3">��֯����</a></li>
			</ul>
		</li>
		<li class="nav_1"><a href="__URL__/xue_ke">ѧ�ƽ���</a>
			<ul>
				<li><a href="__URL__/xue_ke/tid/1">�ص�ѧ��</a></li>
				<li><a href="__URL__/xue_ke/tid/2">ѧλ����</a></li>
				<li><a href="__URL__/xue_ke/tid/3">ѧ�ƻ���</a></li>
				<li><a href="__URL__/xue_ke/tid/4">ѧ�ƴ�ͷ��</a></li>
			</ul>
		</li>
		<li class="nav_1"><a href="__URL__/ungraduate">���ƽ���</a>
			<ul>
				<li><a href='__URL__/ungraduate'>�����ƻ�</a></li>
				<li><a href='__URL__/ungraduate'>רҵ����</a></li>
			</ul>
		</li>
		<li class="nav_1"><a href="__URL__/graduate">�о�������</a>
			<ul>
				<li><a href='__URL__/graduate'>�о�����</a></li>
				<li><a href='__URL__/graduate'>�����ƻ�</a></li>
				<li><a href=''>��ʦ����</a></li>
			</ul></li>
		<li class="nav_1"><a href="">ѧ������</a>
			<ul>
				<li><a href="">ѧ����</a></li>
				<li><a href="">����ί</a></li>
				<li><a href="">ѧ����</a></li>
				<li><a href="">��ɫ����</a></li>
			</ul>
		</li>
		<li class="nav_1"><a href="">��������</a>
			<ul>
				<li><a href="">���߷���</a></li>
				<li><a href="">֧���</a></li>
			</ul>
		</li>
		<li class="nav_1"><a href="">������ҵ</a></li>
		<li class="nav_1"><a href="__URL__/download">��������</a></li>
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
			<h2>��������</h2>
			<div>
				<div class="sidebar_con">
					<p>
						<a href="">����ʡͼ���������ܼ���������ʵ����</a><br>
						<a href="">����ʡװ���������ܿ��ƹ���ʵ����</a><br>
						<a href="">����ʡ���ܼ������ص�ѧ�ƿ���ʵ����</a><br>
						<a href="">����ʡ���ܼ���Ժʿ����վ</a>
					</p>
				</div>
			</div>
		</div>
		<div class="contact">
			<h2>��ϵ����</h2>
			<div class="sidebar_con">
				<p>
				�绰��64231910<br>
				���棺<br>
				�ʼ���dxbgs@mail.haust.edu.cn<br>
				�ʱࣺ471023<br>
				��ַ���й������� ��Ԫ���263��<br>
				</p>
			</div>
		</div>
	</div>
	<div class="main">
		
	<div class="sitenav">��ǰλ�ã�
		<a href="__URL__/index">��ҳ</a>-
		<a href="__URL__/xue_ke">ѧ�ƽ���</a>-
		<a href="__URL__/xue_ke">��ʦ��¼</a>
	</div>

		
	<div class="about_cont">
		<div class="teacher_h1"><?php echo ($data["name"]); ?></div>
		<div class="teacher_info">
			<div class="teacher_pic"><img src="__PUBLIC__/Uploads/<?php echo ($data["photo_name"]); ?>"></div>
			<div class="teacher_detal">
				<p><em>������</em><?php echo ($data["name"]); ?></p>
				<p><em>�绰��</em><?php echo ($data["contact"]); ?></p>
				<p><em>ְ�ƣ�</em><?php echo ($data["position_title"]); ?></p>
				<p><em>�ʼ���</em><?php echo ($data["email"]); ?></p>
			</div>
		</div>
		<div class="teacher_exper">
			<?php echo ($data["experience"]); ?>
		</div>
	</div>

	</div>
	<div style="height:1px; margin-top:-1px;clear: both;overflow:hidden;"></div>
</div>
<div id="footer">
	<p>
		��Ȩ���� �0�8 ���ϿƼ���ѧ��Ϣ����ѧԺ | �й���������Ԫ��� 263��      E-mail��liu199481@qq.com          
	</p>
</div>
</body>
</html>