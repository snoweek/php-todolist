<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>欢迎页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
    <body>
    	<h1>欢迎访问todolist</h1>
    		
    </body>
</html>
<?php
if(isset($_SESSION['user_id'])){
	echo'<a href="list.php">进入你的计划列表</a>';
	echo"<br />";
	echo'<a href="logout.php">注销</a>';
	echo"<br />";
	echo'<a href="changepassword.php">更改密码</a>';
}else{
	echo'<a href="login.php">登录</a>';
    echo"<br />";
	echo'<a href="register.php">注册</a>';
}
?>
