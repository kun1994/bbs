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
			<div id="left" class="fl"  style="margin-top:3px;">

			<div><img src="/Public/images/lefttop.gif"  /></div>
			<div class="jyjb">

 <?php foreach($list as $k=>$v){ ?>
<div class="jyjb-11">
<ul>
<li class="fl jyjb-11-font1" style="height:96px;"><a href="jiuye?id=<?php echo $v['id']; ?>"><img alt="传智播客php培训学院就业学生" src="/Public/images/<?php echo $v['img']; ?>" style="width: 131px; height: 91px;" /></a></li>
<li class="fl jyjb-11-font1" style="height:100px;"><span style="color:#000000;"><b><?php echo $v['name']; ?><br />
<?php echo $v['motto']; ?></b></span><br />
<span class="jyjb-font2"><a href="jiuye?id=<?php echo $v['id']; ?>">[播放]</a></span></li>
</ul>
</div>
<?php } ?>


<br />

			 <div class="clear"></div>
			 <table border="0" cellpadding="0" cellspacing="0" class="jiuye" width="97%">
<tbody>
	<tr>
	<th class="zhanshi" style="color:red;margin-bottom:0;border-bottom:0;font-

size:12px;background-color:#ecf6fd;">
		传智播客所有就业信息皆真实可靠，可联络就业学员验证；应企业和学员要求，企业名称和部分学员信息未呈现。</th>
	</tr>
</tbody>
</table>
<?php foreach($lista as $key=>$val){ ?>
<div class="zhanshi">
<h4><span class="fr" style="font-weight: normal; margin-right: 30px"><a href="#">更多 </a></span><?php echo $val['title']; ?></h4>
<div><img alt="" src="/Public/images/<?php echo $val['photo']; ?>" style="width: 628px; height: 266px;" /></div>
</div>
<table border="0" cellpadding="0" cellspacing="0" class="jiuye" width="97%">
<tbody>

	<tr>
	<th bgcolor="#ecf6fd" width="10%">
		姓名</th>
	<th bgcolor="#ecf6fd" width="25%">
		毕业学校</th>
	<th bgcolor="#ecf6fd" width="15%">
		入职时间</th>
	<th bgcolor="#ecf6fd" width="30%">
		入职公司</th>
	<th bgcolor="#ecf6fd" class="STYLE6" width="20%">
		薪资（￥）</th>
	</tr>
    <?php foreach($listb as $k=>$v){ if($v['class_id']==$val['class_id']){ ?>
        <tr>
	<td  width="10%">
		<?php echo $v['class_name']; ?></td>
	<td  width="25%">
		<?php echo $v['college']; ?></td>
	<td  width="15%">
		<?php echo $v['job_time']; ?></td>
	<td  width="30%">
		<?php echo $v['company']; ?></td>
	<td class="STYLE6" width="20%">
		<?php echo $v['money']; ?></td>
	</tr>
    <?php } } ?>
</tbody>
</table>
<?php } ?>
<br />
<br />

			   </div>
			<div><img src="/Public/images/leftbottom.gif"  /></div>

		</div>
		
		<div id="right" class="fl">	
		<h4 class="righttitle1" style="margin-top:10px;"><span class="fl">PHP培训开班信息</span></h4>
<div class="jyjb-left">

<?php foreach($data[classa] as $k1=>$v1){?>
<ul>
  <li style="color: rgb(81, 81, 81); border-bottom-color: currentColor; border-bottom-width: medium; border-bottom-style: none; float: left;"><a 
  href="http://php.itcast.cn/php/course/base.shtml"><b><FONT style="color: rgb(81, 81, 81);"><?php echo $v1['c_name']?></font></b></a></li>
  <br></ul>
<ul style="clear: both;">
	<?php foreach($data[peixun] as $k=>$val) { if($val['c_id']==$v1['c_id']) { ?> 
  <li><a href="http://php.itcast.cn/php/course/base.shtml" target="_blank">
  <?php if($val['static']==1){?>
  <span 
  class="time jyjb-font1"><b>爆满已开班</b></span>
  <?php } elseif($val['static']==0){?>
  <span 
  class="time jyjb-font2"><b>预约报名</b></span>
  <?php }?>
  <?php echo $val['p_title']?></a></li>
  <?php } }?>
  
 </ul>
 <?php } ?>
</div>
			<div class="rightbottom"><img src="/Public/images/rightbottom.jpg"  /></div>	
			 <?php if(!empty($data['zhao'])) {?>
			<h4 class="righttitle1 zhaopin"><span class="blue">最新</span>企业招聘</h4>
			<div class="rightkuang1">
			<p class="cent"> <img src="/Public/images/select.jpg"  width="256" height="66" /></p>
                      <table border="0" cellpadding="0" cellspacing="0" class="zhaopinlist" height="124" style="margin-top: 5px" width="98%">
<tbody>
<?php if(is_array($data[zhao])): foreach($data[zhao] as $key=>$it): ?><tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16233788127.shtml" target="_blank"><?php echo ($it["s_name"]); ?></a></td>
	<td width="11%"><?php echo ($it["number"]); ?></td>
	</tr><?php endforeach; endif; ?>
</tbody>
</table>

             <div class="clear"></div>
				
			</div>
			<div class="rightbottom"><img src="/Public/images/bottom1.gif"  /></div>
			 <?php }?>
			 <?php if(!empty($data['que'])) {?>
			<h4 class="righttitle1 zhaopin" style="margin-top:3px;"><span class="blue">常见</span>问题</h4>
		  <div class="rightkuang1" style="padding-top:18px;">
			<ul class="zhaopinlist wenti">
			
              <ul class="zhaopinlist wenti">
		<?php if(is_array($data[que])): foreach($data[que] as $key=>$val): ?><li><a href="http://php.itcast.cn/news/20130723/11245447222.shtml" target="_blank"><?php echo ($val["question"]); ?></a><img height="15" src="/Public/images/new.gif" width="29" /></li><?php endforeach; endif; ?>
</ul>

          </ul> 
			<div class="clear"></div>
				 <p class="text-r"><a href="/php/question.shtml"><img src="/Public/images/jiantoumore.gif"  border="0" /></a></p>
		  </div>
			<div class="rightbottom"><img src="/Public/images/bottom1.gif"  /></div>
			 <?php }?>
			<h4 class="righttitle1 lianxi"><span class="fl"><span class="blue">课程</span>咨询</span></h4>
			
			<div class="rightkuang">
			 <dl>
	<dt style="padding-bottom:20px;">
		宇哥情感专线</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://wpa.qq.com/msgrd?v=1&uin=1151694540&site=qq&menu=yes" target="_blank"><img alt="宇哥情感专线" border="0" height="27" src="/Public/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://wpa.qq.com/msgrd?v=1&uin=1151694540&site=qq&menu=yes" target="_blank"><img alt="宇哥情感专线" border="0" height="27" src="/Public/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqtwo">
	<dt style="padding-bottom:20px;">
		博哥发泄专区</dt>
	<dd style=" width:120px;height:40px;float:left;">
		<a href="http://wpa.qq.com/msgrd?v=1&uin=1343454666&site=qq&menu=yes" target="_blank"><img alt="博哥发泄专区" border="0" height="27" src="/Public/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style=" width:120px;height:40px;float:left;">
		<a href="http://wpa.qq.com/msgrd?v=1&uin=1343454666&site=qq&menu=yes" target="_blank"><img alt="博哥发泄专区" border="0" height="27" src="/Public/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqthree">
	<dt style="padding-bottom:20px;">
		爽妹问题热线</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://wpa.qq.com/msgrd?v=1&uin=992809993&site=qq&menu=yes" target="_blank"><img alt="爽妹问题热线" border="0" height="27" src="/Public/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://wpa.qq.com/msgrd?v=1&uin=992809993&site=qq&menu=yes" target="_blank"><img alt="爽妹问题热线" border="0" height="27" src="/Public/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqfour">
	<dt style="padding-bottom:20px;">
		猪妖二逼专线</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://wpa.qq.com/msgrd?v=1&uin=1072437504&site=qq&menu=yes" target="_blank"><img alt="猪妖二逼专线" border="0" height="27" src="/Public/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://wpa.qq.com/msgrd?v=1&uin=1072437504&site=qq&menu=yes" target="_blank"><img alt="猪妖二逼专线" border="0" height="27" src="/Public/images/qqkczx.jpg" width="99" /></a></dd>
</dl>

			<div class="clear"></div>
			</div>
			<div class="rightbottom"><img src="/Public/images/rightbottom.jpg"  /></div>
	  </div>
	
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
<!-- WPA Button END -->
<!--[if lte IE 6]>
<script src="/kefu/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('titZx');
    </script>
<![endif]-->

<!--[if lte IE 6]>
<link type="text/css" rel="stylesheet" href="/kefu2/ie.css" mce_href="/kefu2/ie.css" />
<![endif]-->
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