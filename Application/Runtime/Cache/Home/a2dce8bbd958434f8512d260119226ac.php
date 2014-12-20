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