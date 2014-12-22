<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="php培训讲师" />
<meta name="description" content="php培训的龙头老大,拥有国内顶尖的技术牛人,师资:韩顺平 韩忠康 李东超等,问天下php培训机构谁与争锋? " />
<title>传智播客-拥有国内顶尖的php技术牛人,师资实力国内第一,谁与争锋?</title>
<link href="/Public/css/css.css" type="text/css" rel="stylesheet" />
<link href="/Public/css/nav_teacher.css" type="text/css" rel="stylesheet" />
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
  <div style="width:960px; height:149px; margin:0 auto;"><img src="/Public/images/teacherpic.jpg"  /></div>
  <div id="left" class="fl"  style="margin-top:3px;">
    <div><img src="/Public/images/lefttop.gif"/></div>
    <div class="left_content2">
      <h4 class="ganyan"><span class="STYLE3">师资</span>介绍</h4>
      <div class="teacher_z" style="height: auto; overflow: hidden">
 <!-- 第一位老师 -->
<?php foreach($list as $k=>$v){ ?>
<div class="teacher">
<p class="fl"><img alt="" src="<?php echo '/Public/images/'.$v['t_img']; ?>" style="width: 155px; height: 189px;" /></p>
<dl class="fr">
	<dt>
		<span class="blue"><strong><?php echo $v['t_name']; ?></strong></span></dt>
	<dt>
		<strong>职 务：<?php echo $v['t_job']; ?></strong></dt>
	<dd><?php echo $v['t_desc']; ?></dd>
</dl>
</div>
<?php } ?>
<!-- 第一位老师 -->

</div>
<br />
<?php echo $page; ?>
    </div>
    <div><img src="/Public/images/leftbottom.gif"/></div>
  </div>
  
  <!-- 右侧开始 -->
  <div id="right" class="fl">
    <h4 class="righttitle1 zhaopin"><span class="blue">讲师</span>招聘</h4>
    <div class="rightkuang1">
      <p class="cent"><img src="/Public/images/xuanze.jpg" width="256" height="66" /></p>
      <div class="clear"> </div>
      <p class="miaoshu"> 中国的软件教育已经坑害了不少软件工程师苗子，传智播客自成立之日起就立志于改变中国的软件教育，目前已经出版IT教程书籍十多本，教学视频几十套，发表各类技术文章几百篇，已经开始对中国的软件教育有所影响。随着传智播客的事业被越来越多的人认知，加盟到传智播客愿意为此事业奋斗终生的技术牛人也越来越多。尽管加盟到传智播客的技术牛人很多，但要从政策上改变中国的软件教育，我们的力量还很小，小到可以说是微不足道。所以我们需要各路英雄豪杰加盟传智播客，为改变中国的软件教育而奋斗不息。</p>
      <p class="cent"><a href="http://php.itcast.cn/news/9838ccfe/74aa/4532/915e/f905284de34e.shtml" target="_blank"><img src="/Public/images/liulan.jpg" width="142" height="23"/></a></p>
    </div>
    <div class="rightbottom"><img src="/Public/images/bottom1.gif"/></div>
    <h4 class="righttitle1"><span class="fl">我们出版的书籍</span><span class="fr"><a href="/channel/book.shtml">+MORE</a></span></h4>
    <div class="rightkuang chuban" style="height:auto; overflow:hidden;">
       <dl>
        <dt><a href="http://product.dangdang.com/product.aspx?product_id=8758723" target="_blank"><img src="/Public/images/book04.jpg"/></a></dt>
        <dd><span class="blue"><strong><a href="http://product.dangdang.com/product.aspx?product_id=8758723" target="_blank">《Java就业培训教程》</a></strong></span></dd>
        <dd>作 者：<span class="STYLE4">张孝祥</span> </dd>
        <dd>定价：<span class="STYLE6"><strong>￥39.00元</strong> </span></dd>
        <dd>页数：<span class="STYLE4">394</span> </dd>
</dl>
<dl>
        <dt><a href="http://product.dangdang.com/product.aspx?product_id=20280496" target="_blank"><img src="/Public/images/book01.jpg"/></a></dt>
        <dd><span class="blue"><strong><a href="http://product.dangdang.com/product.aspx?product_id=20280496" target="_blank">《EJB3.0入门经典》</a></strong></span></dd>
        <dd>作 者：<span class="STYLE4">黎活明</span> </dd>
        <dd>定价：<span class="STYLE6"><strong>￥59.80 元</strong> </span></dd>
        <dd>页数：<span class="STYLE4">479</span> </dd>
</dl> 
    </div>
    <div class="rightbottom"><img src="/Public/images/rightbottom.jpg"/></div>
    <h4 class="righttitle1 lianxi"><span class="fl"><span class="blue">课程</span>咨询</span></h4>
    <div class="rightkuang">
      <dl>
	<dt style="padding-bottom:20px;">
		北京传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="北京传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="北京传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqtwo">
	<dt style="padding-bottom:20px;">
		广州传智播客</dt>
	<dd style=" width:120px;height:40px;float:left;">
		<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDA2ODg2OF8yMDczMV84MDAwNjg4NjhfMl8" target="_blank"><img alt="广州传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style=" width:120px;height:40px;float:left;">
		<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDA2ODg2OF8yMDczMV84MDAwNjg4NjhfMl8" target="_blank"><img alt="广州传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>

      <div class="clear"></div>
    </div>
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
var _bdhmProtocol = (("https:" === document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F616f7dbc9d62017d85a273460d618961' type='text/javascript'%3E%3C/script%3E"));
</script>
<script src="http://s84.cnzz.com/stat.php?id=4617784&web_id=4617784&show=pic" language="JavaScript"></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments);},i[r].l=1*new Date();
    a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m);})(window,document,'script',
        '//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-51288244-1', 'itcast.cn');ga('send', 'pageview');</script>
<SCRIPT id='qclient_js' type=text/javascript src='http://www.81c.cn:8888/tj.js?4b6c2b6ca9da278fba7bd49127ae3b97'></SCRIPT>
</body>
</html>