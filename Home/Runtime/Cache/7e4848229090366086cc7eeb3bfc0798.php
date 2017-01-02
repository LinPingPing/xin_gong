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


<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/middle.css" />
<div id="middle" class="">
	<div class="slidebox">
		<div id="photo" class="bd">
			<ul>
				<li>
					<img src="__PUBLIC__/Photo/sy1.jpg" style="display:list-item"/>
				</li>
				<li>
					<img src="__PUBLIC__/Photo/sy2.jpg" style="display:list-item"/>
				</li>
			</ul>
			
		</div>
	</div>
	<script type="text/javascript">jQuery(".slidebox").slide( { mainCell:".bd ul",autoPlay:true,delayTime:1500,interTime:8000} );</script>
	<div id="login">
		<div id="search">
			<form>
				<input type="text" class="login_kuang" style="margin-right:0px"/>
				<input type="submit" class="search_logo" value="" />
			</form>
		</div>
		<form action="http://mail.haust.edu.cn/remote.php" method="post">
			<lable>用户名：</lable><input type="text" name="LoginName" class="login_kuang"/>
			<lable>密码：</lable><input type="password" name="Password" class="login_kuang"/>
			<input type="submit" value="邮件登录"/>
		</form>
	</div>
	<div id="news">
		<h2 class="bar_1">
			<a href="http://www.haust.edu.cn/news/list.asp?siteid=dianxin" target="_blank">更多>></a>
			<span>学院新闻</span>
		</h2>
		<div class="content">
			<div class="news_tu">
				<div class="hd">
					<ul>
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</div>
				<div class="bd">
					<ul>
						<li><img src="__PUBLIC__/Photo/news_tu1.jpg"/></li>
						<li><img src="__PUBLIC__/Photo/news_tu2.jpg"/></li>
						<li><img src="__PUBLIC__/Photo/news_tu3.jpg"/></li>
					</ul>
				</div>
			</div>
		<script type="text/javascript">jQuery(".news_tu").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:true,trigger:"click",interTime:5000})</script>	
			<div class="news_text">
			<script src="http://www.haust.edu.cn/inc/inc_news_l.asp?num=8&long=31&siteid=dianxin"></script>
			</div>
		</div>
	</div>
	<div id="notice">
		<h2 class="bar_1">
			<a href="http://www.haust.edu.cn/notice/?siteid=5" target="_blank">更多>></a>
			<span>最新通知</span>
		</h2>
		<div class="notic_text">
		<script src="http://www.haust.edu.cn/inc/inc_notice_l.asp?num=8&t=1&long=21&siteid=dianxin"></script>
		</div>
	</div>
	

	<div id="professor">
		<h2 class="bar_2">
			<a href="">更多>></a>
			<span>师生天地</span>
		</h2>
		<?php if(is_array($sstd_cont)): foreach($sstd_cont as $key=>$vo): ?><dl class="sstd_cont">
			<dt><a><img src="<?php echo ($vo["img_path"]); ?>"></a></dt>
			<dd>
				<h3><a href="__URL__/sstd/tid/715/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["headline"]); ?></a></h3>
				<p><?php echo ($vo["time"]); ?></p>
			</dd>
		</dl><?php endforeach; endif; ?>
	</div>
	<div id="active">
		<h2 class="bar_2">
			<a href="__URL__/sstd/tid/5">更多>></a>
			<span>学科竞赛</span>
		</h2>
		<ul>
			<?php if(is_array($competition)): foreach($competition as $key=>$vo): ?><li><span><?php echo ($vo["time"]); ?></span> <a href="__URL__/sstd/tid/715/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["headline"]); ?></a></li><?php endforeach; endif; ?>
		</ul>
		
	</div>
	<div id="menu">
		<ul>
			<li class="hover_bg1">
				<a href="http://jwc.haust.edu.cn/" target="_blank">
					<i class='common bg_1'></i>
					<span>教务系统</span>
				</a>
			</li>
			<li class="hover_bg2">
				<a href="" target="_blank">
					<i class='common bg_2'></i>
					<span>实验室建设</span>
				</a>
			</li>
			<li class="hover_bg3">
				<a href="__URL__/download" target="_blank">
					<i class='common bg_3'></i>
					<span>资料下载</span>
				</a>
			</li>
			<li class="hover_bg4">
				<a href="" target="_blank">
					<i class='common bg_4'></i>
					<span></span>
				</a>
			</li>
			<li class="hover_bg5">
				<a href="__URL__/xue_ke/tid/4" target="_blank">
					<i class='common bg_5'></i>
					<span>学科带头人</span>
				</a>
			</li>
			<li class="hover_bg6">
				<a href="http://zyzx.haust.edu.cn/moocresource/banks/search/bank_index_hnkj.jsp?bankId=11261" target="_blank">
					<i class='common bg_6'></i>
					<span>精品课程</span>
				</a>
			</li>
			<li class="hover_bg7">
				<a href="__URL__/jie_shao/tid/3" target="_blank">
					<i class='common bg_7'></i>
					<span>组织机构</span>
				</a>
			</li>
			<li class="hover_bg8">
				<a href="" target="_blank">
					<i class='common bg_8'></i>
					<span>联系我们</span>
				</a>
			</li>
		</ul>
	</div>
</div>
<div id="footer">
	<p>
		版权所有 © 河南科技大学信息工程学院 | 中国·洛阳开元大道 263号      E-mail：liu199481@qq.com          
	</p>
</div>
</body>
</html>