<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0063)http://www.js-css.cn/divcss/admin/bui-bootstrap/Node/index.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/files/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/files/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="/files/style.css">
    <script type="text/javascript" src="/files/jquery.js"></script>
    <script type="text/javascript" src="/files/jquery.sorted.js"></script>
    <script type="text/javascript" src="/files/bootstrap.js"></script>
    <script type="text/javascript" src="/files/ckform.js"></script>
    <script type="text/javascript" src="/files/common.js"></script>

    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }


    </style>
</head>
<body>
<form class="form-inline definewidth m20" action="index(1).html" method="get">  
    动态标题：
    <input type="text" name="rolename" id="rolename" class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="button" onclick="sea()" class="btn btn-primary">查询</button>&nbsp;&nbsp; 
</form>
<div id="po">
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
		<th>动态编号</th>
        <th>动态名称</th>
        <th>动态内容</th>
        <th>管理操作</th>
    </tr>
    </thead>
	     <tbody>
		 	 <?php if(is_array($data)): foreach($data as $key=>$is): ?><tr>
	
		
			<td><?php echo ($is["s_id"]); ?></td>
            <td><span><?php echo ($is["s_title"]); ?></span style="display:none"></td>
            <td><?php echo ($is["s_content"]); ?></td>
			<td>
                  <a href="#" onclick="deletea(<?php echo ($is["s_id"]); ?>)">删除</a>

            </td>
		
        </tr><?php endforeach; endif; ?></tbody></table>
			
<div class="inline pull-right page">
 </div>
</div>

<script>
</script></body></html>