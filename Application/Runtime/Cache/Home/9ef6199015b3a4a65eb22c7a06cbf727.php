<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="php培训就业" />
<meta name="description" content="php培训的龙头老大,哪家培训机构不吹自己的就业率高?而我们超高的就业率不是自己说出来的，而是学生集体喊出来的，问天下培训机构谁与争锋?" />
<title>传智播客-php就业情况</title>
<link href="/Public/css/css.css" type="text/css" rel="stylesheet" />
<link href="/Public/css/nav_job.css" type="text/css" rel="stylesheet" />
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
		<div class="toubu-font1">PHP学院</div>
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
  <div class="position"><a name="pagetop"/>您现在的位置：<span class="STYLE5"><a href="http://php.itcast.cn">PHP学院</a> &gt;&gt; PHP学院新闻 &gt;&gt; 正文</span></div>
  <div id="left" class="fl" style="margin-top:8px;">
    <div class="infotop"><img src="/Public/images/infotop.gif"/></div>
    <div class="left_content1">
      <div id="printarea">
        <h1 class="infotitle"><?php echo $list['name']; ?>：<?php echo $list['motto']; ?></h1>
        <div class="editer">更新时间:<?php echo $list['time']; ?> 来源:</div>
        <div class="infor">
         <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" height="400" width="600"><param name="quality" value="high" /><param name="movie" value="http://player.youku.com/player.php/sid/XNDY5MDU1MTQ0/v.swf" /><embed height="400" pluginspage="http://www.macromedia.com/go/getflashplayer" quality="high" src="http://player.youku.com/player.php/sid/XNDY5MDU1MTQ0/v.swf" type="application/x-shockwave-flash" width="600"></embed></object>
	<br /><script type="text/javascript" src="http://bbs.itcast.cn/api.php?mod=js&bid=94"></script>
        </div>
      </div>
      <div class="pre">
	               上一篇：<a target="_blank" href="jiuye?id=<?php echo $listb['id']; ?>"><?php echo $listb['name']; echo $listb['motto']; ?></a>
       	  </div>
      <div class="next">
	              下一篇：<a target="_blank" href="jiuye?id=<?php echo $lista['id']; ?>""><?php echo $lista['name']; echo $lista['motto']; ?></a>
      	  </div>

      <div class="clear"></div>
      <div class="share">
	  <!-- Baidu share BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
        <span class="bds_more">分享到：</span>
        <a class="bds_sqq">QQ好友</a>
		<a class="bds_qzone">QQ空间</a>
		<a class="bds_tqq">腾讯微博</a>
		<a class="bds_tsina">新浪微博</a>
		<a class="bds_tieba">百度贴吧</a>
		<a class="shareCount"></a>
    </div>
<!-- Baidu share END 需在页面底部添加baidushare.js -->	  
	  </div>
	  <div class="clear"></div>
      <div class="print"><a href="#" id="printbutton">【打印】</a> <a href="#pagetop">【返回顶部】</a></div>
      	  <!-- 评论区 -->
	    	<script type="text/javascript">
	           $(document).ready(function(){
	              	loadcomment('20121102-10150537498', 1);
               });   
	       </script>
	  <div id="commentcontent"></div>
	  <form name="comment" style="padding:0;margin:0px;" method="post" action="index.php/home/job/comment" >
        <input type="hidden" name="referenceSource" value="20121102-10150537498">
        <input type="hidden" name="type" value="NEWS">
        <textarea cols="85" rows="6" style="width:610px;" name="content"></textarea>
        <div class="clear"></div>
        <div class="fabiao">
	      <span class="fl">请输入验证码：<input name="validatecode" type="text" style="width:80px;" />  <img src="http://manage.itcast.cn:8080/validatecode/comment.jpg" id="kaptchaImage" width="100"/></span><span class="fr"><input type='button' value="提 交" id="savebutton"/></span>
	    </div>
	  </form>
	  <div id="dialog" title="评论保存结果"></div><!-- 对话框内容 -->
      <!-- 评论区 -->
	        <div class="clear"></div>
      <div class="ad">
      <!-- 广告区 -->
      <!--<a href="http://icd.itcast.cn"><img border="0" src="http://www.itcast.cn/images/ad/icdad.gif" width="620" /></a>--> 
      <!-- 广告区 -->
      </div>
    </div>

  </div>
  <div id="right" class="fl">
    <h4 class="righttitle1"><span class="fl">PHP视频下载</span><span class="fr"><a href="/php/video.shtml">+MORE</a></span></h4>
    <ul class="rightkuang">
       <ul>
<li><a href="http://php.itcast.cn/news/caa9b58b/37b1/47f6/98e3/bd3600c98cfc.shtml">PHP入门到精通教程</a></li>
<li><a href="http://php.itcast.cn/news/7acb031c/5958/42d8/be84/47796e2c1243.shtml">zend framework</a></li>
<li><a href="http://php.itcast.cn/news/a632aeea/df9a/46bf/92f1/896679400a37.shtml">smarty模板引擎 </a></li>
<li><a href="http://php.itcast.cn/news/2889f5ee/060a/4014/a6a8/cff645e79925.shtml">Ajax技术 </a></li>
<li><a href="http://php.itcast.cn/news/166b4e78/01b0/4017/96ae/764cd57432a8.shtml">页面静态化</a></li>
<li><a href="http://php.itcast.cn/news/50b67f71/dba5/4302/8749/b62bcc314bd0.shtml">Memcached缓存技术</a></li>
<li><a href="http://php.itcast.cn/news/61ee8515/a34e/477d/9d5d/662dbff5e161.shtml#">Mysql优化</a></li>
<li><a href="http://php.itcast.cn/news/fd551fd3/9db4/4360/9afa/57f438973108.shtml">轻松搞定网页设计</a></li>
<li><a href="http://php.itcast.cn/news/5805c1ea/1b18/41eb/8fcc/6234659d8b40.shtml">PHP数据库陷阱</a></li>
<li><a href="http://php.itcast.cn/news/94c86c32/a7c1/4d2f/b2b4/ded74c6e1113.shtml">PHP网上支付技术</a></li>
<li><a href="http://php.itcast.cn/news/47d47284/bd39/4322/8aa6/fd48cd51f9df.shtml">PHP报表视频教程</a></li>
<li><a href="http://php.itcast.cn/news/42366bc5/fc13/43f1/a69b/bc57132cfdc7.shtml">Linux视频教程</a></li>
<li><a href="http://php.itcast.cn/news/c31baf40/8fa5/4803/ac4d/6e27086d009f.shtml">Oracle视频教程</a></li>
</ul>

    </ul>
   
  </div>
</div>
<div class="clear"></div>

<div id="footer">
  <div class="footer_info">
    <p class="fl mar"><!--<img src="/Public/images/footlogo.jpg" />--></p>
    <p><a href="http://www.itcast.cn/channel/introduction.shtml" target="_blank" style="padding-left:0;">传智简介</a>|<a href="http://weibo.com/itcast" target="_blank">官方微博</a>|<a href="http://bbs.itcast.cn/forum.php?mod=forumdisplay&fid=175&filter=typeid&typeid=180" target="_blank">传智快报</a>|<a href="http://bbs.itcast.cn/forum.php?mod=forumdisplay&fid=184&filter=typeid&typeid=217" target="_blank">校区活动</a>|<a href="http://www.itcast.cn/channel/campus.shtml" target="_blank">校园生活</a>|<a href="http://www.itcast.cn/channel/personnel.shtml" target="_blank">人才服务</a>|<a href="http://www.itcast.cn/channel/flow.shtml" target="_blank">汇款账号</a>|<a href="http://www.itcast.cn/channel/zhaopin.shtml" target="_blank">招贤纳士</a>|<a href="http://www.itcast.cn/channel/contact.shtml" target="_blank">联系我们</a></p>
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

<LINK rel=stylesheet type=text/css href="/Public/css/common.css">
<!--[if lte IE 6]>
<link type="text/css" rel="stylesheet" href="/Public/css/ie.css" mce_href="/Public/css/ie.css" />
<![endif]-->
<SCRIPT type=text/javascript src="/Public/js/jquery.js"></SCRIPT>
<SCRIPT type=text/javascript src="/Public/js/kefu.js"></SCRIPT>
<SCRIPT type=text/javascript>kfguin="800068868";ws="www.itcast.cn"; companyname=""; welcomeword=""; type="1";</SCRIPT>
<SCRIPT src="/Public/js/kf.js" type=text/javascript></SCRIPT>
<link href="/Public/css/init.css" mce_href="/Public/css/init.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/kefu.css" mce_href="/Public/css/kefu.css" rel="stylesheet" type="text/css" />
<div class="fixed">
	<div class="f_left"></div>
	<div class="f_right">
		<div class="fr_c1"></div>
		<div class="fr_c2">
			<ul>
				<li class="fr_c2_li1">QQ在线客服</li>
				<li class="fr_c2_li2">
					<div><script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzgwMDA2ODg2OF8yNjY4M184MDAwNjg4Njhf"></script></div>
				</li>
				<li class="fr_c2_li3" style="padding:6px 0 0 12px; height:30px; width:90px; border-bottom:none;">
					<!-- WPA Button Begin -->
					<a href="http://cnrdn.com/iP66" target="_blank"><img src="/Public/images/wpa_preview_a02.png"/></a>
					<!-- WPA Button End -->
				</li>
			</ul>
		</div>
		<div class="fr_c3">
			<a href="http://cnrdn.com/iP66" target="_blank"><img src="/Public/images/right_float_web.png" width="122" height="50" /></a>
		</div>
		<div class="fr_c4">
			<ul>
				<li class="fr_c4_li1">电话咨询</li>
				<li class="fr_c4_li2"><div id="nobold" style="font-family:Arial;">010-82935150</div></li>
			</ul>
		</div>
		<div class="fr_c6">
			<ul>
				<li><a style="display: block; text-indent: 22px; margin: 0px auto; width: 84px; background: url(&quot;http://www.itcast.cn/images/navicon.gif&quot;) no-repeat scroll 0px -20px transparent;" href="http://www.itcast.cn/forms/index.shtml" target="_blank">预约报名<div></div></a></li>
				<li style="border-bottom:none;"><a style="display: block; text-indent: 22px; margin: 0px auto; width: 84px; background: url(&quot;http://www.itcast.cn/images/navicon.gif&quot;) no-repeat scroll 0px -78px transparent;" href="http://bbs.itcast.cn/" target="_blank">技术交流<div></div></a></li>
			</ul>
		</div>
		<div class="fr_c7"></div>
	</div>
</div>
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