<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>未登录的首页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
    <body>
    	<a href=<?php echo U('Home/Index/login');?>>登录</a>
    	<br>
    	<a href=<?php echo U('Home/Index/register');?>>注册</a>
    	<br>
    </body>
</html>