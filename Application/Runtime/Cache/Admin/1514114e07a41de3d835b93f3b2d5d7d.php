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
    用户名称：
    <input type="text" name="rolename" id="rolename" class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="button" onclick="sea()" class="btn btn-primary">查询</button>&nbsp;&nbsp; 
</form>
<div id="po">
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
		<th>用户编号</th>
        <th>用户名称</th>
        <th>机构名称</th>
        <th>状态</th>

        <th>管理操作</th>
    </tr>
    </thead>
	     <tbody>
		 	 <?php if(is_array($data)): foreach($data as $key=>$is): ?><tr>
	
		
			<td><?php echo ($is["b_id"]); ?></td>
            <td><span><?php echo ($is["b_name"]); ?></span style="display:none"></td>
            <td><?php echo ($is["f_name"]); ?></td>
            <td><?php echo ($is["status"]); ?></td>
			<td>
                  <a href="#">编辑</a>
                  <a href="#" onclick="deletea(<?php echo ($is["b_id"]); ?>)">删除</a>

            </td>
		
        </tr><?php endforeach; endif; ?></tbody></table>
			
<div class="inline pull-right page">
 <?php echo ($str); ?>
 </div>
</div>

<script>

	
	
	
	
	//分页
	function page(i){
		$.ajax({
			url:"/admin/admin/page",
			data:{"p":i},
			type:"post",
			success:function(e){
				//alert(e);
				$("#po").html(e);
			}
		})
		
	}
	//删除
	function deletea(id){
		$.ajax({
			url:"/admin/admin/del",
			data:{"id":id},
			type:"post",
			success:function(e){
				//alert(e);
				$("#po").html(e);
			}
		})
	}
	function sea(){
		text=$("#rolename").val();
		$.ajax({
			url:"/admin/admin/sea",
			data:{"text":text},
			type:"post",
			success:function(e){
				//alert(e);
				$("#po").html(e);
			}
		})
	}
</script></body></html>