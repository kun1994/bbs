<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0061)http://www.js-css.cn/divcss/admin/bui-bootstrap/Node/add.html -->
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
	<script type="text/javascript" src="/files/jq.js"></script>
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
<body><form action="/admin/admin/useradd_do" method="post">
<table class="table table-bordered table-hover definewidth m10">
    <tbody><tr>
        <td width="10%" class="tableleft">用户名称</td>
        <td><input type="text" id="name" name="name"><span id="spname"></span></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">用户密码</td>
        <td><input type="password" id="pwd" name="pwd"><span id="sppwd"></td>
    </tr>
    <tr>
        <td class="tableleft">机构名称</td>
        <td>
			<select name="u_class" id="u_class">
					<option value="0" selected>请选择</option>
				<?php if(is_array($res)): foreach($res as $key=>$it): ?><option value="<?php echo ($it["f_id"]); ?>"><?php echo ($it["f_name"]); ?></option><?php endforeach; endif; ?>
			</select>
		</td>
    </tr>	
	<tr>
        <td class="tableleft"></td>
        <td>
            <button type="button" onclick="tiji()" class="btn btn-primary">保存</button>&nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid">返回列表</button>
        </td>
    </tr>
</tbody></table>
</form>


<script>
    $(function () {       
		$('#backid').click(function(){
				window.location.href="/admin/admin/user";
		 });

    });
	function tiji(){
			name=$("#name").val();
			pwd=$("#pwd").val();
			u_class=$("#u_class").val();
			
			if(name==""){
				alert("请填写用户");
				return false;	
			}
			if(pwd==""){
				alert("请填写密码");
				return false;
			}
		
			if(u_class==0){
				alert("请选择机构");
				return false;
			}

			if(name.length<3){
				$("#spname").html("<font color='red'>名字最少为3位</font>");
				return false;
			}
			else{
				$("#spname").html("");
			}
			if(pwd.length<6){
				$("#sppwd").html("<font color='red'>密码最少为6位</font>");
				return false;
			}
			else{
				$("#sppwd").html("");
			}
		$.ajax({
			url:"/admin/admin/useradd_do",
			data:{"name":name,"pwd":pwd,"u_class":u_class},
			type:"post",
			success:function(e){
				if(e==1){
					alert("添加成功!");
					//top.location="http://www.jiuyue.com/admin/admin/index#1/12";
				}
				if(e==0){
					alert("添加失败");	
				}
				if(e==3){
					$("#spname").html("<font color='red'>用户名已经存在!</font>");
				}
			}
		})
		
	}
</script></body></html>