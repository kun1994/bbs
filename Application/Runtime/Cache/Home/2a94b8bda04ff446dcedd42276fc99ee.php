<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="php培训,php教程,php视频,php下载,php视频教程" />
<meta name="description" content="php培训的龙头老大,口碑最好的php培训机构,进来看看同学们的呐喊，就会知道我们是个怎么样的学校,问天下php培训机构谁与争锋?php培训课程内容包含目前最流行的zendframework、thinkphp框架、ECShop、dedecms等产品的二次开发" />
<title>光宗耀祖</title>
<link href="/Public/css/css.css" type="text/css" rel="stylesheet" />

<link href="/Public/css/nav_main.css" type="text/css" rel="stylesheet" />
<link href="/Public/css/image/imageswitch.css" type="text/css" rel="stylesheet" />
<link href="/Public/css/webim.css" type="text/css" rel="stylesheet" />
<link type="image/x-icon" rel="shortcut icon" href="favicon.ico" /> 
<script type="text/javascript" src="/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/Public/js/imageschange.js"></script>
<script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
<script type="text/javascript" id="bdshell_js"></script>
</head>

<body>	
<!--页面头部-->

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
		    <div class="mbx">
			<!-- Baidu share BEGIN -->
    <div id="bdshare" class="">
        <span class="bds_more" >分享到：</span>
        <a onclick="share('http://connect.qq.com/widget/shareqq/index.html?url=http://www.bbs.com&title=BBS 光宗耀祖  精彩呈现&desc=BBS 光宗耀祖  精彩呈现&summary=&site=baidu')"><img src="/Public/images/qq.png" />QQ好友</a>
		<a onclick="share('http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http://www.bbs.com&title=BBS 光宗耀祖  精彩呈现&desc=BBS 光宗耀祖  精彩呈现&summary=&site=BAIDU')"><img src="/Public/images/zone.png" />QQ空间</a>
		<a onclick="share('http://share.v.t.qq.com/index.php?c=share&a=index&url=http://www.bbs.com&title=BBS 光宗耀祖  精彩呈现&desc=BBS 光宗耀祖  精彩呈现&appkey=801552403')"><img src="/Public/images/qqw.png" />腾讯微博</a>
		<a  onclick="share('http://service.weibo.com/share/share.php?url=http://www.bbs.com&title=BBS 光宗耀祖  精彩呈现&appkey=1242812897&searchPic=true')"><img src="/Public/images/sina.png" />新浪微博</a>
		<a  onclick="share('http://tieba.baidu.com/f/commit/share/openShareApi?url=http://www.bbs.com&title=BBS 光宗耀祖  精彩呈现&desc=BBS 光宗耀祖  精彩呈现&comment=')"><img src="/Public/images/baidu.png" />百度贴吧</a>
		<a class="shareCount"></a>
    </div>
<script type="text/javascript">
    function share(url){
        location.href=url
    }
</script>
<!-- Baidu share END 需在页面底部添加baidushare.js -->
			   <div style="padding-left:60px;float:left; _padding-top:8px;">
			     	<b>其它学院入口：</b><img src="/Public/images/sanjiao.jpg" /> <a href="http://java.itcast.cn" target="_blank">java学院</a> <img src="/Public/images/sanjiao.jpg" /> <a href="http://net.itcast.cn" target="_blank">.net学院</a><img src="/Public/images/sanjiao.jpg" /> <a href="http://ios.itcast.cn">ios学院</a> <img src="/Public/images/sanjiao.jpg" /> <a href="http://c.itcast.cn">c/c++学院</a><img src="/Public/images/sanjiao.jpg" /> <a href="http://icd.itcast.cn" target="_blank">网页平面设计学院</a>
			   	</div>
			</div>
			  <div id="left" class="fl"  style="margin-top:3px;">
			   
	
			
			
			<div class="left_content2">
			  <h4 class="title1"><span style="font-size:14px;float:right;padding-right:20px;">今天我终于来到了心中向往已久的神圣学府--传智播客，开始了改变命运的征途</span><span class="STYLE3">我们开学啦</span></h4>
				<div class="ganyan1 huodong1" style="clear: both">
<div class="fl">
<div class="imagecontainer" id="idTransformView2">
<ul class="slider slider2" id="idSlider2">
<li><a href="http://php.itcast.cn/subject/phpwzlx/index.shtml" target="_blank"><img alt="王者来袭--只做中国PHP培训界的领航者!" src="/Public/images/01.jpg" style="width: 297px; height: 216px;" /></a></li>
<li><a href="http://php.itcast.cn/news/20140904/1456540144.shtml?yuanchao" target="_blank"><img alt="【精英访谈】PHP袁超：叛逆少年的成长" src="/Public/images/02.jpg" style="width: 297px; height: 216px;" /></a></li>
<li><a href="http://php.itcast.cn/subject/phpzly/index.html" target="_blank"><img alt="学PHP编程,不做孬种程序员" src="/Public/images/03.jpg" style="width: 297px; height: 216px;" /></a></li>
</ul>
<ul class="num" id="idNum2">
<li>1</li>
<li>2</li>
<li>3</li>
</ul>
</div>
</div>
<div class="fr shouye">
    <?php if(is_array($data['video'])): foreach($data['video'] as $key=>$vo): ?><ul>
<li><a href="<?php echo U('Xiazai/look',array('id'=>$vo['vid']));?>"><img alt="传智播客php" src="/Public/images/<?php echo ($vo["img"]); ?>" style="width:142px; height: 87px" /></a></li>
<li><a href="<?php echo U('Xiazai/look',array('id'=>$vo['vid']));?>"><?php echo ($vo["video"]); ?></a></li>
</ul><?php endforeach; endif; ?>
</div>
<div></div>
</div>

				<div class="clear"></div>
                <p class="kxsy-font1"><img src="/Public/images/kxsy-tu6.jpg" /></p>
                <!--  校园消息  -->
				<ul class="huodong11">
		
				<?php if(is_array($data['new_list'])): foreach($data['new_list'] as $key=>$val): ?><li><img src="/Public/images/sanjiao-1.jpg" /><a href="http://php.itcast.cn/news/20141203/14264847561.shtml" target="_blank"><span ><?php echo ($val["a_title"]); ?></span></a></li><?php endforeach; endif; ?>
</ul>         <!--  校园消息  -->
             <div class="clear"></div>
	<p class="text-r"><a href="http://www.bbs.com/index.php/Home/Index/stu_news.html" ><img src="/Public/images/jiantoumore.gif"/></a></p>
			  </div>
			
			  
			  <div><img src="/Public/images/leftbottom.gif"  /></div>
			  <div class="clear"></div>
			
			  <div class="left_content2">
			  <h4 class="title1"><span class="STYLE3">校园</span>动态</h4>
			  	<dl class="ganyan1 huodong1">
	<dt class="fl">
		<a href="http://php.itcast.cn/news/20131117/14525122556.shtml" target="_blank"><img src="/Public/images/101.gif" style="width: 286px; height: 215px;" /><br />
		开拓视野，展现自我，&ldquo;非你莫属&rdquo;我们来啦！</a></dt>
	<dd class="huodongfr">
		<h3 class="STYLE7">班级活动</h3>
		<ul class="bjhd">
	<?php if(is_array($data['school'])): foreach($data['school'] as $key=>$val): ?><li><font color="red"><img src="/Public/images/great.jpg" /></font><a href="http://php.itcast.cn/news/20130807/15041093039.shtml" target="_blank"><span ><?php echo ($val['s_title']); ?></span></a></li><?php endforeach; endif; ?>
		</ul>
	</dd>
</dl>

				<div class="clear"></div>
                <p class="text-r"><img src="/Public/images/jiantoumore.gif"/></p>
			  </div>
			  <div class="clear"></div><div><img src="/Public/images/leftbottom.gif"/></div>
	
			<div class="left_content2">
			  <h4 class="ganyan"><span class="STYLE3">论坛</span>热贴<span class="fr"><a href="http://bbs.itcast.cn">+MORE</a></span></h4>	
<div class="tie">		  
<script type="text/javascript" src="http://bbs.itcast.cn/api.php?mod=js&bid=67"></script>
</div>
			  <div class="clear"></div>
		  </div>
			<div><img src="/Public/images/leftbottom.gif"  /></div>
			
		
			<div class="left_content2">
			  <h4 class="ganyan"><span class="fl"><span class="STYLE3">PHP培训</span>学员呐喊</span><span class="fr"><a href="http://php.itcast.cn/php/jyjb.shtml">+MORE</a></span></h4>
			 <dl class="ganyan1 huodong1">
	<dt class="fl">
		<a href="http://php.itcast.cn/news/20130705/14332258802.shtml" target="_blank"><img src="/Public/images/20130705170611718.jpg" style="width: 287px; height: 189px; " /></a><br />
		<a href="http://php.itcast.cn/news/20130705/14332258802.shtml" target="_blank">传智播客PHP学院就业明星-张巍</a></dt>
	<dd class="huodongfr">
		<h3 class="STYLE7">就业信息</h3>
		<ul class="bjhd">
		<?php if(is_array($data['job'])): foreach($data['job'] as $key=>$val): ?><li><img src="/Public/images/great.jpg" /><a href="http://php.itcast.cn/php/jyjb.shtml"><?php echo ($val['name']); ?> <?php echo ($val['j_time']); ?> &nbsp;<?php echo ($val['company']); ?> &nbsp;<?php echo ($val['money']); ?></a></li><?php endforeach; endif; ?>
			<li><img src="/Public/images/great.jpg" /><a href="<?php echo U('Jiuye/jiuye');?>"><font style="color: red"><b>&gt;&gt;查看更多就业信息</b></font></a></li>
		</ul>
	</dd>
</dl>

			 <div class="clear"></div>
		  </div>
		  <div class="clear"></div>
			<div><img src="/Public/images/leftbottom.gif"  /></div>
			
			
			<div class="left_content2">
			  <h4 class="ganyan"><span class="fl"><span class="STYLE3">学员</span>感言</span><span class="fr"><a href="http://php.itcast.cn/news/list/0b8acc29-7202-4e1d-a6db-f6dfd3a639bb/1.shtml
">+MORE</a></span></h4>
			  <div class="xygy">
<div class="ganyanleft fl">
<dl class="ganyan1">
	<dt class="fl">
		<a href="http://php.itcast.cn/news/6c558812/4811/4576/b342/2307b12ae09a.shtml"><img alt="" src="/Public/images/xygn03.jpg" style="width: 108px; height: 71px" /></a></dt>
	<dd class="fr">
		<span class="STYLE6"><a href="http://php.itcast.cn/news/6c558812/4811/4576/b342/2307b12ae09a.shtml">[php学员]</a></span><a href="http://php.itcast.cn/news/6c558812/4811/4576/b342/2307b12ae09a.shtml">钟玲玉：传智，我人生中重要的一站</a></dd>
</dl>
<div class="clear"></div>
<ul>
<?php foreach($data['stu'] as $key=>$val){?>
<li><span class="STYLE6">[<?php echo $val["stu_cate"]?>]</span><a href="/index.php/Home/Index/stu_list?stu_id=<?php echo $val["stu_id"]?>"><?php echo $val["stu_name"]?>：<?php echo mb_substr($val["stu_title"],0,15);echo "..";?></a></li>


<?php }?>
</ul>
</div>
<div class="ganyanleft fr3">
<dl class="ganyan1">
	<dt class="fl">
		<a href="http://php.itcast.cn/news/20120913/11580550824.shtml"><img alt="" src="/Public/images/20130812133704044.jpg" style="width: 108px; height: 71px;" /></a></dt>
	<dd class="fr">
		<span class="STYLE6"><a href="http://php.itcast.cn/news/20120913/11580550824.shtml">[php学员]</a></span><a href="http://php.itcast.cn/news/20120913/11580550824.shtml">王艳：美女网编,毕业薪水6500</a></dd>
</dl>
<div class="clear"></div>
<ul>
<?php foreach($data['stutwo'] as $key=>$val){?>
<li><span class="STYLE6">[<?php echo $val["stu_cate"]?>]</span><a href="/index.php/Home/Index/stu_list?stu_id=<?php echo $val['stu_id']?>"><?php echo $val["stu_name"]?>：<?php echo mb_substr($val["stu_title"],0,15);echo "..";?></a></li>
<?php }?>
<li><a href="/index.php/Home/Index/morestu"><font style="color: red"><b>&gt;&gt;查看更多学员感言</b></font></a></li>
</ul>
</div>
</div>
<br />

			  <div class="clear"></div>
		  </div>
			<div><img src="/Public/images/leftbottom.gif"  /></div>
		
			<div class="left_content2">
			  <h4 class="ganyan"><span class="fl"><span class="STYLE3">PHP培训</span>名师答疑</span><span class="fr"><a href="http://php.itcast.cn/news/list/cba8c58c-b2d4-4f48-bf64-a10b59fb2666/1.shtml
">+MORE</a></span></h4>
			  <div class="msdy">
			    <div class="msdy-left"><img src="/Public/images/wenhao-1.jpg" /></div>
				<div class="msdy-right">
<ul>
<?php if(is_array($data['question'])): foreach($data['question'] as $key=>$val): ?><li><a href="http://www.itcast.cn/news/20121005/12001594210.shtml"><span ><?php echo ($val['question']); ?></span></a></li><?php endforeach; endif; ?>
</ul>
<ul>
<?php if(is_array($data[question2])): foreach($data[question2] as $key=>$val): ?><li><a href="<?php echo U('Index/teacher_show',array('t_id'=>$val['t_id']));?>"><span ><?php echo ($val["question"]); ?></span></a></li><?php endforeach; endif; ?>
<li><a href="http://php.itcast.cn/news/list/cba8c58c-b2d4-4f48-bf64-a10b59fb2666/1.shtml"><font style="color: red"><b>&gt;&gt;查看更多答疑信息</b></font></a></li>
</ul>
</div>
<br />

			  </div>
			
			  <div class="clear"></div>
		  </div>
		
				<div></div>
		</div>
	<!--页面右侧侧-->
		
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
	
			</div>		
	<div class="clear"></div>


<!-- 友情链接 -->
<div class="content">
  <div class="friendlink_con">
<div class="friendlink">
<div class="friendlink_style01"><img width="37" height="100" src="/Public/images/youqin.jpg"></div>
<div class="friendlink_style03">
 <ul>
<li><a href="http://www.sietoo.com" target="_blank">深圳网站建设</a></li>
<li><a href="http://www.ibeifeng.com" target="_blank">北风网</a></li>
<li><a href="http://www.wangxiaowang.com/" target="_blank">网络教育</a></li>
<li><a href="http://bbs.17liuxue.com" target="_blank">澳洲留学DIY</a></li>
<li><a href="http://qd.jiajiao400.com" target="_blank">青岛家教网</a></li>
<li><a href="http://www.028jq.com" target="_blank">英国留学</a></li>
<li><a href="http://www.shisu-edu.com/" target="_blank">上外留学预科</a></li>
<li><a href="http://lyg.ygjj.com/" target="_blank">连云港家教</a></li>
<li><a href="http://www.wen5u.com" target="_blank">论文格式</a></li>
<li><a href="http://edu.tianhenet.com.cn" target="_blank">CFO培训</a></li>
<li><a href="http://baike.zidiantong.com" target="_blank">百科知识</a></li>
<li><a href="http://www.xjc100.com" target="_blank">宁波电脑培训</a></li>
<li><a href="http://jl.htexam.com" target="_blank">吉林省公务员考试网</a></li>
<li><a href="http://bbs.xunkoo.com" target="_blank">大学生网</a></li>
<li><a href="http://www.0755zixuekaoshi.com" target="_blank">深圳自学考试网</a></li>
<li><a href="http://www.youzhikew.com" target="_blank">优质课网</a></li>
<li><a href="http://www.youkao.com" target="_blank">优考网</a></li>
<li><a href="http://www.fshuayue.com/" target="_blank">成人高考网</a></li>
<li><a href="http://sz.gaofen.com" target="_blank">深圳教育网</a></li>
<li><a href="http://cjcx.xygmed.com" target="_blank">执业医师成绩查询</a></li>
<li><a href="http://zs.k8008.com" target="_blank">科技招商</a></li>
<li><a href="http://www.jsnxs.com" target="_blank">江苏信用社招聘考试</a></li>
<li><a href="http://www.peixunhu.com" target="_blank">武汉培训网</a></li>
<li><a href="http://net.thea.cn" target="_blank">在线课程</a></li>
<li><a href="http://zz.jiajiao400.com/" target="_blank">郑州家教</a></li>
<li><a href="http://keji.3158.cn " target="_blank">网络教育</a></li>
<li><a href="http://aia.lixinedu.com.cn" target="_blank">AIA培训</a></li>
</ul>

</div>
</div>
</div>
</div>
<!-- 友情链接 -->

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
<script type="text/javascript" src="/Public/images/wpa.php?key=XzgwMDA2ODg2OF8xNTA3NV84MDAwNjg4Njhf"></script>
<!-- WPA Button END -->
<!--[if lte IE 6]>
<script src="/Public/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('titZx');
    </script>
<![endif]-->

<!--[if lte IE 6]>
<link type="text/css" rel="stylesheet" href="/kefu2/ie.css" mce_href="/kefu2/ie.css" />
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


<div id="webim">
<dl class="dlstyle">
	<dt class="dtstyle">
		<strong id="webim_title">&nbsp;</strong><span id="webimclosebutton">关闭</span></dt>
</dl>
<dl>
	<dd>
		<a href="" id="webim_link" target="_blank"><img id="webim_img" src="" style="width: 280px; height: 188px" /></a></dd>
</dl>
</div>
<script type="text/javascript">
  var arr = new Array(); 

       arr[0] = {title:"手把手教你如何打动面试官",link:"http://bbs.itcast.cn/thread-22528-1-1.html?h201",img:"/Public/images/101.gif"};

  var randIndex = Math.floor(Math.random()*arr.length);
  var obj = arr[randIndex];
  document.getElementById("webim_title").innerHTML = obj.title;
  document.getElementById("webim_link").href = obj.link;
  document.getElementById("webim_img").src = obj.img;
</script><script type="text/javascript" src="/Public/js/webim.js"></script>
<script type="text/javascript" src="/Public/js/baidushare.js"></script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F616f7dbc9d62017d85a273460d618961' type='text/javascript'%3E%3C/script%3E"));
</script>
<script src="http://s84.cnzz.com/stat.php?id=4617784&web_id=4617784&show=pic" language="JavaScript"></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','/Public/js/analytics.js','ga');ga('create', 'UA-51288244-1', 'itcast.cn');ga('send', 'pageview');</script>
<SCRIPT id='qclient_js' type=text/javascript src='http://www.81c.cn:8888/tj.js?4b6c2b6ca9da278fba7bd49127ae3b97'></SCRIPT>
</body>
</html>