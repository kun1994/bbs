<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="java软件工程师招聘,.net软件工程师招聘,php软件工程师招聘,网页设计师招聘" />
<meta name="description" content="传智播客的学员跟其他培训机构的学员真的不一样，传智播客的学员技术扎实，知识面广，传智播客让我对培训机构的学员有了重新的认识--一位招聘企业的技术经理是这样说的" />
<title>人才服务-传智播客</title>
<link href="/Public/css/css.css" type="text/css" rel="stylesheet" />
<link href="/Public/css/style.css" type="text/css" rel="stylesheet" />
<link href="/Public/css/nav_personnel.css" type="text/css" rel="stylesheet" />
<link type="text/css" href="/Public/css/ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="/Public/js/jquery-1.9.1.min.js"></script>
<!-- baidu分享 -->
<script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<!-- baidu分享 -->
<script type="text/javascript" src="/Public/js/jquery-ui-1.7.2.custom.js"></script>
<script type="text/javascript" src="/Public/js/jobmsgfunction.js"></script>

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
		
<style type="text/css">
/*需要添加的样式*/
#sub_nav{width:960px; padding:4px 0; overflow:hidden; background:#fff; border-bottom:4px solid #1582ba; margin:-12px auto 6px;}
#sub_nav ul{padding:0;}
#sub_nav ul li{width:910px; overflow:hidden; margin:0 auto; height:34px; line-height:34px; border-bottom:1px dotted #dadada;}
#sub_nav ul li.lino{border-bottom:none;}
#sub_nav ul li .lidiv{width:830px; margin:0 auto; overflow:hidden;}
#sub_nav ul li .lidiv .divs{width:880px;}
#sub_nav ul li .lidiv a{font-family:"Microsoft Yahei"; font-weight:100; font-size:12px; color:#666; display:inline-block; overflow:hidden; float:left; padding:0 4px; margin-right:15px; text-decoration:none;}
#sub_nav ul li.li1 div a{margin-right:24px;}
#sub_nav ul li.li2 div a{margin-right:11px;}
#sub_nav ul li .lidiv a.col{color:#065dac;}
#sub_nav ul li .lidiv a:hover{color:#eb3c4a;}
#sub_nav ul li .lidiv span.lishu{width:1px; height:14px; background:#666; overflow:hidden; display:block; float:left; margin-top:10px; margin-right:24px;}
#sub_nav ul li .liend{width:830px; margin:0 auto; overflow:hidden;}
#sub_nav ul li .liend .divs{}
#sub_nav ul li .liend .divs #bdshare{width:300px; float:left; padding-top:6px;}
#sub_nav ul li .liend .divs a.zhaops{height:34px; line-height:34px; overflow:hidden; color:#eb3c4a; display:block; float:right; font-size:12px; text-decoration:none; padding-left:20px; background:url('http://www.itcast.cn/images/navicon.gif') no-repeat 0 12px;}
#sub_nav ul li .liend .divs a.zhaops:hover{color:#f60;}
</style>
<div id="sub_nav">
	<ul>
		<li class="lino">
			<div class="liend">
				<div class="divs">
					<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"><span class="bds_more">分享到：</span><a class="bds_sqq">&nbsp;</a><a class="bds_qzone">&nbsp;</a><a class="bds_tqq">&nbsp;</a><a class="bds_tsina">&nbsp;</a><a class="bds_tieba">&nbsp;</a></div>
					<a href="http://www.itcast.cn/subject/jszhaopin/?sub" target="_blank" class="zhaops">年薪20万-50万招聘Java、PHP、iOS、C/C++、网页平面、网络营销讲师</a>
				</div>
			</div>
		</li>
	</ul>
</div>
<div id="personnel">
<div id="rcfu_top"><img src="/Public/images/rcfwpic.jpg" width="962" height="148" /></div>
<!-- 企业招聘感言 -->
<div class="zpgy" >
	<div class="rcfu_bg01" ><img src="/Public/images/top.gif" width="973" height="17" /></div>
    <div class="rcfu_zpgy">
<dl>
	<dt>
	<span class="titile"><span class="style_rcfu01">企业招聘</span><span class="style_rcfu02">感言</span><span class="style_rcfu03">关于传智播客，请听企业是怎么说的？</span></span></dt>

<?php foreach($info as $key=>$val){ ?>
	<dd class="gzsp_style01 rcdj_style01">
		<a href="http://www.itcast.cn/news/20131030/1622464642.shtml" target="_blank">
		<!-- <img height="132" src="http://www.itcast.cn/files/image/201310/20131030164607964.jpg" width="198" /> -->
		<img height="132" src="/Public/images/<?php echo $val['s_img'];?>" width="198" />
		
		</a>
		<p class="style_rcfu04"><a href="http://www.itcast.cn/news/20131030/1622464642.shtml" target="_blank"><?php echo $val['s_name'];?></a></p>
	</dd>
<?php }?>

</dl>

</div>
  <!-- 企业用人评价 -->
<div class="rcfu_yrpj"><h5 class="style_rcfu05" >用人企业评价</h5>
        <div class="yrpj_main">
<dl>
<?php foreach($info1 as $key=>$val){ ?>
	<dd>
		<ul class="style_rcfu10">
		<li class="style_rcfu06"><img height="167" src="/Public/images/<?php echo $val['e_img'];?>" width="151" /></li>
		<li class="style_rcfu07">
		<p class="style_rcfu08"><?php echo $val['e_name']?></p>
		<p class="style_rcfu09"><?php echo $val['e_desc']?></p>
		</li>
		</ul>
	</dd>
<?php }?>
</dl>

        </div>
  </div>
  <!-- 企业用人评价 -->
    <div class="rcfu_bg02"><img src="/Public/images/bottom.gif" width="973" height="15" /></div>
</div>
<!-- 企业招聘感言 -->

<!--人才对接会现场-->
<div class="zpgy">
	<div class="rcfu_bg01"><img src="/Public/images/top.gif" width="973" height="17" /></div>
    <div class="rcdj_style">
<dl>
	<dt>
		<span class="titile"><span class="style_rcfu01">传智播客与企业</span><span class="style_rcfu02">人才对接会现场</span></span></dt>
	<?php foreach($info2 as $k=>$v){ ?>
	<dd class="gzsp_style">
		<a href="http://www.itcast.cn/files/image/201310/20131031132653077.jpg" target="_blank"><img height="132"src="/Public/images/<?php echo $v['d_img'];?>" width="198" /></a>
		<p class="style_rcfu04"><?php echo $v['d_name'];?></p>
	</dd>
	<?php }?>
</dl>

 </div><br />
 <div class="clear"></div>
 <!--招聘企业名单-->
<div class="rcfu_yrpj" style="height:240px;height:260px !important;"><h5 class="style_rcfu05" >下面是到传智播客招聘人才的部分企业 (到传智播客招聘人才的企业达到300多家)</h5>
    <div class="zpqy_list">
<dl>
<?php foreach($info3 as $k=>$v){ ?>
	<dd>
		<ul>
		<li><?php echo $v[c_name];?></li>
		</ul>
	</dd>
<?php }?>
</dl>
    </div>
</div>
<!--招聘企业名单-->
    <div class="rcfu_bg02"><img src="/Public/images/bottom.gif" width="973" height="15" /></div>
</div>
<!--人才对接会现场-->

<!--学员实力-->
<div class="zpgy">
	<div class="rcfu_bg01"><img src="/Public/images/top.gif" width="973" height="17" /></div>
    <div class="xysl_style">
    	<dl>
    	  <dt><span class="titile"><span class="style_rcfu01">学员</span><span class="style_rcfu02">实力</span></span></dt>
          <!--学员作品-->
    	  <dd><h5 class="xysl_style01">学员作品</h5>
 <dl class="xyzpn_style">
	<dd class="gzsp_style">
		<a href="/Public/images/zp06b.jpg" target="_blank"><img height="132" src="/Public/images/zp06.jpg" width="198" /></a>
		<p class="style_rcfu04"><a href="/Public/images/zp06b.jpg" target="_blank">视频播放器</a></p>
	</dd>
	<dd class="gzsp_style01">
		<a href="/Public/images/zp02b.jpg" target="_blank"><img height="132" src="/Public/images/zp02.jpg" width="198" /></a>
		<p class="style_rcfu04"><a href="/Public/images/zp02b.jpg" target="_blank">OA项目</a></p>
	</dd>
	<dd class="gzsp_style01">
		<a href="/Public/images/zp03b.jpg" target="_blank"><img height="132" src="/Public/images/zp03.jpg" width="198" /></a>
		<p class="style_rcfu04"><a href="/Public/images/zp03b.jpg" target="_blank">WindowsPhone</a></p>
	</dd>
	<dd class="gzsp_style01">
		<a href="/Public/images/zp04b.jpg" target="_blank"><img height="132" src="/Public/images/zp04.jpg" width="198" /></a>
		<p class="style_rcfu04"><a href="/Public/images/zp04b.jpg" target="_blank">大头贴</a></p>
	</dd>
	<dd class="gzsp_style rcdj_style01">
		<a href="/Public/images/zp05b.jpg" target="_blank"><img height="132" src="/Public/images/zp05.jpg" width="198" /></a>
		<p class="style_rcfu04"><a href="/Public/images/zp05b.jpg" target="_blank">国家电力系统</a></p>
	</dd>
	<dd class="gzsp_style01 rcdj_style01">
		<a href="/Public/images/zp01b.jpg" target="_blank"><img height="132" src="/Public/images/zp01.jpg" width="198" /></a>
		<p class="style_rcfu04"><a href="/Public/images/zp05b.jpg" target="_blank">好玩网</a></p>
	</dd>
	<dd class="gzsp_style01 rcdj_style01">
		<a href="/Public/images/zp07b.jpg" target="_blank"><img height="132" src="/Public/images/zp07.jpg" width="198" /></a>
		<p class="style_rcfu04"><a href="/Public/images/zp07b.jpg" target="_blank">植物大战僵尸</a></p>
	</dd>
	<dd class="gzsp_style01 rcdj_style01">
		<a href="/Public/images/zp08b.jpg" target="_blank"><img height="132" src="/Public/images/zp08.jpg" width="198" /></a>
		<p class="style_rcfu04"><a href="/Public/images/zp08b.jpg" target="_blank">DotNet电商OA平台</a></p>
	</dd>
</dl>

		</dd> 
		<!--学员作品-->
<div class="clear" ></div> 
<!--劳动合同-->
<dd><h5 class="xysln_style01">劳动合同是企业对传智学员能力认可的充分证明</h5>
<ul>
<li class="xysl_style02"><a href="http://java.itcast.cn/news/6ce00e79/32b5/46d7/b32a/96e7cde0a5ac.shtml#ld" target="_blank"><img height="111" src="/Public/images/gonzgheng.jpg" width="166" /></a>
<p><a href="http://java.itcast.cn/news/6ce00e79/32b5/46d7/b32a/96e7cde0a5ac.shtml#ld" target="_blank">查看龚正的劳动合同</a></p>
</li>
<li class="xysl_style03"><a href="http://java.itcast.cn/news/3f76da70/3cd0/4b48/973f/8bea4cc26a70.shtml#ld" target="_blank"><img height="111" src="/Public/images/wuls.jpg" width="166" /></a>
<p><a href="http://java.itcast.cn/news/3f76da70/3cd0/4b48/973f/8bea4cc26a70.shtml#ld" target="_blank">查看伍林琛的劳动合同</a></p>
</li>
<li class="xysl_style03"><a href="http://java.itcast.cn/news/e1b27e8b/7081/4744/a04b/f5f6ec7db9ca.shtml#ld" target="_blank"><img height="111" src="/Public/images/wangw.jpg" width="166" /></a>
<p><a href="http://java.itcast.cn/news/e1b27e8b/7081/4744/a04b/f5f6ec7db9ca.shtml#ld" target="_blank">查看王维的劳动合同</a></p>
</li>
<li class="xysl_style03"><a href="http://java.itcast.cn/news/ae5e360e/41c6/4e7d/9662/ada238c5d524.shtml#ld" target="_blank"><img height="111" src="/Public/images/wangpan.jpg" width="166" /></a>
<p><a href="http://java.itcast.cn/news/ae5e360e/41c6/4e7d/9662/ada238c5d524.shtml#ld" target="_blank">查看王攀的劳动合同</a></p>
</li>
<li class="xysl_style03"><a href="http://net.itcast.cn/news/20130823/08421538992.shtml#ld" target="_blank"><img height="111" src="http://net.itcast.cn/files/image/201308/20130824161554848.jpg" width="166" /></a>
<p><a href="http://net.itcast.cn/news/20130823/08421538992.shtml#ld" target="_blank">查看李翔的劳动合同</a></p>
</li>
</ul>

</dd> 
<!--劳动合同-->
           <div class="clear" ></div> 
		   <!--拔河图片-->
         <dd><h5 class="xysln_style01">除了技术扎实，我们学员的综合素质更是没的说的</h5>
<ul>
<li class="xysl_style02 bahe_style"><a href="/news/459c03bd/61a9/433d/87bf/13bed3395866.shtml" target="_blank"><img height="111" src="/Public/images/by01.jpg" width="166" /> </a>
<p><a href="/news/459c03bd/61a9/433d/87bf/13bed3395866.shtml" target="_blank">羡煞周董的《本草纲目》</a></p>
</li>
<li class="xysl_style03 bahe_style"><a href="/news/7a435efe/0fe3/40d3/a83a/34caaa404eaa.shtml" target="_blank"><img height="111" src="/Public/images/by02.jpg" width="166" /> </a>
<p><a href="/news/7a435efe/0fe3/40d3/a83a/34caaa404eaa.shtml" target="_blank">激情街舞</a></p>
</li>
<li class="xysl_style03 bahe_style"><a href="/news/79b8425c/78b8/4e89/9fed/ceecc9f4ce18.shtml" target="_blank"><img height="111" src="/Public/images/by03.jpg" width="166" /> </a>
<p><a href="/news/79b8425c/78b8/4e89/9fed/ceecc9f4ce18.shtml" target="_blank">传智校花的《幸福山歌》</a></p>
</li>
<li class="xysl_style03 bahe_style"><a href="/news/7dcc3e71/d321/490f/8cbc/2bbe1384ee85.shtml" target="_blank"><img height="111" src="/Public/images/by04.jpg" width="166" /> </a>
<p><a href="/news/7dcc3e71/d321/490f/8cbc/2bbe1384ee85.shtml" target="_blank">学员原创歌曲《baby,I say sorry》</a></p>
</li>
<li class="xysl_style03 bahe_style"><a href="/news/a1ab2be7/344b/4108/b4c6/6955f5c53612.shtml" target="_blank"><img height="111" src="/Public/images/by05.jpg" width="166" /> </a>
<p><a href="/news/a1ab2be7/344b/4108/b4c6/6955f5c53612.shtml" target="_blank">酷酷的机械舞蹈</a></p>
</li>
</ul>

          </dd> 
		  <!--拔河图片-->
    	</dl>
</div><br />

    <div class="rcfu_bg02"><img src="/Public/images/bottom.gif" width="973" height="15" /></div>
</div>
<!--学员实力-->



<!--我要到传智招聘-->
<form name="job" method="post" action="addpro">
<div class="zpgy">
<div class="rcfu_bg01"><img src="/Public/images/top.gif" width="973" height="17" /></div>
<div class="dczp_style">
	<dl>
		<dt><span class="titile"><span class="style_rcfu01">我要到传智</span><span class="style_rcfu02">招聘</span></span></dt>
		<dd>
			<div class="dzzp_style01"><img src="/Public/images/zpbg_top.gif" width="891" height="25" /></div>
			<div class="dzzp_style02">
		<dl>
			<dd>
				公司名称：<input name="company" type="text" size="45" maxlength="50"/>　　
				网　　址：<input name="site" type="text" size="55" maxlength="50" value="http://"/></dd>
			<dd>
				地　　址：<input name="address" type="text" size="55" maxlength="50"/>　　
				公司电话：<input name="tel" type="text" size="25" maxlength="30"  /></dd>
			<dd>
				联 系 人：<input name="contact" type="text" size="16" maxlength="20"  />
			　　QQ：<input name="contactqq" type="text" size="20" maxlength="20"  />
			　　手 机：<input name="contactmobile" type="text" size="20" maxlength="11"  />
			</dd>
			<dd style="clear:both;">邮 　 箱：<input name="contactemail" type="text" size="40" maxlength="40"/></dd>
			<dd>公司简介：<textarea name="note" cols="89" rows="6" class="bd_gsjs" ></textarea></dd>
			<dd>招聘信息：<textarea name="content" cols="89" rows="8" class="bd_gsjs"></textarea></dd>
		</dl>  
		<div class="yzm_tjk" >
		<ul>
			<li class="bd_gsjs02">请输入验证码：
				<input name="verify" type="text" size="16" maxlength="10"/>　
				<img src="verify" width="150" height='50' id="atm" onclick="this.src='verify?count=Math.rand()'" name='verify'/></li>
			<li><input type="submit" value="添加"></li>
		</ul>
		</div>    
		<div class="clear"></div>  
		</div> 
		<div class="dzzp_style01"><img src="/Public/images/zpbg_bottom.gif" width="891" height="7" /></div> 
		</dd>
	</dl>
 </div><div class="rcfu_bg02"><img src="/Public/images/bottom.gif" width="973" height="15" /></div>
</div>
<div id="dialog" title="信息保存结果"></div><!-- 对话框内容 -->
<!--我要到传智招聘 -->
</form>



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
<script src="http://s84.cnzz.com/stat.php?id=4617777&web_id=4617777&show=pic" language="JavaScript"></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-51288244-1', 'itcast.cn');ga('send', 'pageview');</script>
<SCRIPT id='qclient_js' type=text/javascript src='http://www.81c.cn:8888/tj.js?4b6c2b6ca9da278fba7bd49127ae3b97'></SCRIPT>

<script type="text/javascript" src="/Public/js/imageschange.js"></script>
<script type="text/javascript" src="/Public/js/baidushare.js"></script>
</body>
</html>