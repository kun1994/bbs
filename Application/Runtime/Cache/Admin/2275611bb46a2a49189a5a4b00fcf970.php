<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<!-- demo scripts -->
<link rel="stylesheet" href="/files/style.css">
</head>

<body>
<br><br><br><br><br><br><br>
<!-- demo content -->
<div class="loginform cf">
	<form name="login" action="/admin/admin/login_do" method="post" accept-charset="utf-8">
		<ul>
			<li><label for="usermail">用户名</label>
			<input type="text" name="name" placeholder="yourname@email.com" required>
			</li>
			<li><label for="password">Password</label>
			<input type="password" name="pwd" placeholder="password" required></li>
			<li><input type="submit" value="登陆"> <input type="submit" value="注册"> </li>
		</ul>
	</form>
</div>
<div style="text-align:center;clear:both">
<h1><p>三组、</p></h1>

</div>
</body>

</html>