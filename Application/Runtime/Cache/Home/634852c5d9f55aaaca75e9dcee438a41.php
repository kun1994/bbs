<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="php培训常见问题" />
<meta name="description" content="php培训的龙头老大,口碑最好的php培训机构，问天下培训机构谁与争锋? " />
<title>传智播客-php培训常见问题</title>
<link href="/Public/css/css.css" type="text/css" rel="stylesheet" />
<link href="/Public/css/nav_question.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/Public/js/jquery-1.9.1.min.js"></script>
</head>

<body>	

<div id="header">
	<!-- 页面顶部 -->
<div class="top1">
	<p class="fl" style="background:url(/Public/images/hot.png) 107px 10px no-repeat; padding-right:35px;"><span class="blue">专业的IT培训机构！</span></p>
	<p class="fr"><a href="http://www.itcast.cn/channel/job.shtml" target="_blank">就业宣言</a><a href="http://www.itcast.cn/channel/flow.shtml" target="_blank">报名流程</a><a href="http://open.itcast.cn" target="_blank">免费公开课</a><a href="http://dvd.itcast.cn" target="_blank">免费学习光盘</a><a href="http://www.itcast.cn/channel/book.shtml" target="_blank">原创教材</a><a href="http://bbs.itcast.cn/zine.php" target="_blank">传智特刊</a><a target="_blank" href="http://www.itcast.cn/channel/personnel.shtml">人才服务</a><a href="http://bbs.itcast.cn" target="_blank">技术论坛</a></p>
</div>

	<div class="clear"></div>
	<div class="top2">
		<h1 class="fl"><a href="http://www.itcast.cn"><img src="/Public/images/login.gif" alt="传智播客php培训学院" border="0"  class="png"/></a></h1>
		<div class="fl toubu">
	
			 <!-- 校区 -->
<p><a href="http://www.itcast.cn" target="_blank">北京校区</a></p>
<p><a target="_blank" href="http://sh.itcast.cn">上海校区</a></p>
<p><a href="http://gz.itcast.cn" target="_blank">广州校区</a></p><br />
<p><a target="_blank" href="http://wh.itcast.cn">武汉校区</a></p>
<p><a href="http://cd.itcast.cn" target="_blank">成都校区</a></p>
<p><a href="http://zz.itcast.cn" target="_blank">郑州校区</a></p><br />
<p><a href="http://xa.itcast.cn" target="_blank">西安校区</a></p>
<!-- 校区 --> 
		</div>
		<p class="fr"><img src="/Public/images/topword.gif" alt="改变中国教育，我们正在行动..." class="png"/></p>
	</div>
	<div class="clear"></div>
	       <?php if(is_array($data[nav])): foreach($data[nav] as $key=>$it): ?><ul id="nav"> 
        <li style="margin-right: 20px">
            <?php if($it["nav_id"] != 8): ?><a href='/index.php/<?php echo ($it['nav_url']); ?>' id="<?php echo ($it["nav_css_id"]); ?>" ><?php echo ($it["nav_name"]); ?></a>
                <?php else: ?> <a href='http://www.bbs.com/'><?php echo ($it["nav_name"]); ?></a><?php endif; ?>
                </li>
                
        </ul><?php endforeach; endif; ?>
	</div>
		
	<div id="box">
		<div id="left" class="fl">
			<div><img src="/Public/images/lefttop.gif"/></div>
			<div class="left_content">
				<h2 class="title1"><span class="STYLE3">常见</span><span class="STYLE2">问题</span></h2>
				<h3 class="title2">热点问题</h3>
				<ul class="links">
﻿<ul>
    <?php foreach($list as $k=>$v){ if($v['type']==1){ ?>
<li><a href="content?id=<?php echo $v['que_id']; ?>" target="_blank"><?php echo $v['title']; ?></a> <?php echo substr($v['time'],0,10); ?></li>
    <?php } } ?>
</ul>
 
				</ul>
				<h3 class="title2">PHP相关问题</h3>
				<ul class="links">
<ul>
    <?php foreach($list as $k=>$v){ if($v['type']==2){ ?>
<li><a href="content?id=<?php echo $v['que_id']; ?>" target="_blank"><?php echo $v['title']; ?></a> <?php echo substr($v['time'],0,10); ?></li>
    <?php } } ?>
</ul>

			    </ul>
			</div>
			<div><img src="/Public/images/leftbottom.gif"/></div>
		</div>		
		<div id="right" class="fl">
			<h4 class="righttitle1"><span class="fl">PHP视频下载</span><span class="fr"><a href="/php/video.shtml">+MORE</a></span></h4>
			<ul class="rightkuang">
			<ul>
<li><a href="http://net.itcast.cn/news/00666f00/c4c5/4aad/99e1/45f6673f7a31.shtml" target="_blank">C#编程基础视频教程</a></li>
<li><a href="http://net.itcast.cn/news/770b900e/fcd4/4f10/bb25/bb0e99f0ab92.shtml" target="_blank">C#面向对象基础视频教程 </a></li>
<li><a href="http://net.itcast.cn/news/047a81e7/616f/44fa/b103/2c38e5b51b48.shtml" target="_blank">wpf基础视频教程 </a></li>
<li><a href="http://net.itcast.cn/news/4048960e/9f6f/4d71/8da4/07639e2bef0b.shtml" target="_blank">数据绑定和数据库开发基础 </a></li>
<li><a href="http://net.itcast.cn/news/c804d7df/95b0/4e78/9505/7f6157220e59.shtml" target="_blank">Ado.Net项目开发教程 </a></li>
<li><a href="http://net.itcast.cn/news/509b1bc4/5afc/4fe4/adf4/3757fc78b70c.shtml" target="_blank">HTML教程 </a></li>
<li><a href="http://net.itcast.cn/news/bd4612c7/a940/4585/9153/487bbcc7fcd3.shtml" target="_blank">JavaScript教程</a></li>
<li><a href="http://net.itcast.cn/news/68ac18e3/f435/45e8/999f/db6f32f9aeac.shtml" target="_blank">Dom教程</a></li>
<li><a href="http://net.itcast.cn/subject/tegongnet/index.html" target="_blank">特供ASP.Net视频教程 </a></li>
<li><a href="http://bbs.itcast.cn/thread-11528-1-1.html" target="_blank">Linux下运行ASP.Net网站(Mono)视频教程</a></li>
<li><a href="http://bbs.itcast.cn/thread-11130-1-1.html" target="_blank">写程序自动识别验证码视频教程</a></li>
<li><a href="http://bbs.itcast.cn/thread-14836-1-1.html" target="_blank">大型互联网技术Memcached视频教程</a></li>
<li><a href="http://bbs.itcast.cn/thread-15261-1-1.html" target="_blank">ASP.Net MVC入门视频教程</a></li>
<li><a href="http://bbs.itcast.cn/thread-15273-1-1.html" target="_blank">Unity3D游戏开发入门视频教程</a></li>
<li><a href="http://bbs.itcast.cn/thread-11228-1-1.html" target="_blank">人事管理系统开发视频教程</a></li>
<li><a href="http://bbs.itcast.cn/thread-19987-1-1.html" target="_blank">&quot;工作流&quot;开发视频教程</a></li>
<li><a href="http://net.itcast.cn/subject/arrogant/index.shtml" target="_blank">毕业设计完整源码+文档下载</a></li>
</ul>

			</ul>
			<div class="rightbottom"><img src="/Public/images/rightbottom.jpg"/></div>
	  </div>
	</div>
	<div class="clear"></div>
 <!-- 页面底部 -->
<div id="footer">
  <div class="footer_info">
    <p class="fl mar"><!--<img src="/Public/images/footlogo.jpg" />--></p>
    <p><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253892235'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1253892235' type='text/javascript'%3E%3C/script%3E"));</script>|
	<a href="http://www.itcast.cn/channel/introduction.shtml" target="_blank" style="padding-left:0;">传智简介</a>|<a href="http://weibo.com/itcast" target="_blank">官方微博</a>|<a href="http://bbs.itcast.cn/forum.php?mod=forumdisplay&fid=175&filter=typeid&typeid=180" target="_blank">传智快报</a>|<a href="http://bbs.itcast.cn/forum.php?mod=forumdisplay&fid=184&filter=typeid&typeid=217" target="_blank">校区活动</a>|<a href="http://www.itcast.cn/channel/campus.shtml" target="_blank">校园生活</a>|<a href="http://www.itcast.cn/channel/personnel.shtml" target="_blank">人才服务</a>|<a href="http://www.itcast.cn/channel/flow.shtml" target="_blank">汇款账号</a>|<a href="http://www.itcast.cn/channel/zhaopin.shtml" target="_blank">招贤纳士</a>|<a href="http://www.itcast.cn/channel/contact.shtml" target="_blank">联系我们</a></p>
    <p>传智播客-专业java培训、.net培训、php培训、iOS培训、C++培训、网页设计、平面设计、网络营销培训机构</p>
    <p>版权所有 2006 - 2014 北京传智播客教育科技有限公司</p>
    <p>地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096</p>
    <p>电话：010-82935150/60/70 传真：010-82935100 邮箱: zhanghj+itcast.cn</p>
    <p><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备08001421号</a><a href="http://www.bjgaj.gov.cn/web/" target="_blank">京公网安备110108007702</a></p>
	<p style="padding-top:10px"><a style="overflow:hidden; margin-right:6px; padding:0;" href="http://webscan.360.cn/index/checkwebsite/url/www.itcast.cn" target="_blank"><img width="124" height="47" src="/Public/images/360anquan.png"></a><a style="overflow:hidden; margin-right:6px; padding:0;" href="http://t.knet.cn/index_new.jsp" target="_blank"><img width="124" height="47" src="/Public/images/cx.png"></a><a target="_blank" href="http://www.bj.cyberpolice.cn/index.do" style="padding:0;"><img width="124" height="47" src="/Public/images/jc.png"></a></p>
  </div>
</div>
<!-- 页面底部 -->
<!-- 营销QQ统计 -->
<!-- WPA Button Begin -->
<script type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzgwMDA2ODg2OF8xNTA3NV84MDAwNjg4Njhf"></script>
<!-- WPA Button END -->
<!--[if lte IE 6]>
<script src="/kefu/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('titZx');
    </script>
<![endif]-->
<script language="JavaScript" src="http://code.54kefu.net/kefu/js/94/764894.js" type="text/javascript" charset="utf-8"></script>
<script>
	$(document).ready(function(e) {
		var t=true;
		$('.f_left').click(function(){
			if(t){
				$('.fixed').animate({right:'-131px'},300);
				$(this).css('background-position','-30px -396px');
				t= !t;
			} else{
				$('.fixed').animate({right:'0px'},300);
				$(this).css('background-position','0px -396px');
				t= !t;
			}
		});
	});
</script>

 <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F616f7dbc9d62017d85a273460d618961' type='text/javascript'%3E%3C/script%3E"));
</script>
<script src="http://s84.cnzz.com/stat.php?id=4617784&web_id=4617784&show=pic" language="JavaScript"></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-51288244-1', 'itcast.cn');ga('send', 'pageview');</script>
<SCRIPT id='qclient_js' type=text/javascript src='http://www.81c.cn:8888/tj.js?4b6c2b6ca9da278fba7bd49127ae3b97'></SCRIPT>
</body>
</html>