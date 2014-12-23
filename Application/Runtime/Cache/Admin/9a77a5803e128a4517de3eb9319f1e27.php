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
<br>
    用户名称：
    <input type="text" name="rolename" id="rolename" class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="button" onclick="sea()" class="btn btn-primary">查询</button>&nbsp;&nbsp; 
</form>
<div id="po">
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
		<th>导航编号</th>
        <th>导航名称</th>
        <th>导航路径</th>
		<th>操作</th>
    </tr>
    </thead>
	     <tbody>
		 	 <?php if(is_array($data)): foreach($data as $key=>$is): ?><tr id="op<?php echo ($is["nav_id"]); ?>">	
			<td><?php echo ($is["nav_id"]); ?></td>
            <td><span id="title<?php echo ($is["nav_id"]); ?>" onclick="sj(<?php echo ($is["nav_id"]); ?>)"><?php echo ($is["nav_name"]); ?></span><span style="display:none" id="sptitle<?php echo ($is["nav_id"]); ?>">
			<input type="text" id="tta<?php echo ($is["nav_id"]); ?>"  name="" value="<?php echo ($is["nav_name"]); ?>" onblur="sjlk(<?php echo ($is["nav_id"]); ?>)" >
			</span></td>
            <td><span id="titlea<?php echo ($is["nav_id"]); ?>" onclick="sja(<?php echo ($is["nav_id"]); ?>)"><?php echo ($is["nav_url"]); ?></span><span style="display:none" id="sptitlea<?php echo ($is["nav_id"]); ?>">
			<input type="text" id="ttaa<?php echo ($is["nav_id"]); ?>"  name="" value="<?php echo ($is["nav_url"]); ?>" onblur="sjlka(<?php echo ($is["nav_id"]); ?>)" >
			</span></td>
			
			
			<td>
                  <a href="#" onclick="deletea(<?php echo ($is["nav_id"]); ?>)">删除</a>

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

		if(confirm('确定删除?')){
			$("#op"+id).remove();
		}
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
	//修改名称
	function sj(id){
		//alert(id);
		$("#sptitle"+id).show();
		$("#title"+id).hide();
	}
	//离开时间
	function sjlk(id){
		var title=$("#tta"+id).val();
		if(title==""){
			alert("不能为空");
			return false;
		}
		$.ajax({
			url:"/admin/admin/dh",
			data:{"title":title,"id":id},
			type:"post",
			success:function(e){
				if(e==1){
					$("#sptitle"+id).hide();
					$("#tta"+id).html(title);
					$("#title"+id).html(title);
					$("#title"+id).show();
				}
			}
		})
	}
	//修改名称
	function sja(id){
		//alert(id);
		$("#sptitlea"+id).show();
		$("#titlea"+id).hide();
	}
	//离开时间
	function sjlka(id){
		var title=$("#ttaa"+id).val();
		if(title==""){
			alert("不能为空");
			return false;
		}
					$("#sptitlea"+id).hide();
					$("#ttaa"+id).html(title);
					$("#titlea"+id).html(title);
					$("#titlea"+id).show();
	}

</script></body></html>