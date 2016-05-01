<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>注销页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
    <body>
    	<?php
    	session_start();
    	if(empty($_SESSION['username'])){
    		header("http://127.0.0.1/sunyan2015/013/login.php");
    	}else{
    		$_SESSION=array();
    		session_destroy();
    		setcookie('phpsessid','',time()-3600);
    	}
    	echo'你已经注销成功';
    	?>
        <br />
        <a href="login.php">登录</a>
        <br />
        <a href="index.php">返回首页</a>
    </body>
</html>