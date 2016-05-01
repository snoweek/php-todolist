<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>更改密码页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="布尔教育 http://www.itbool.com" />
</head>
    <body>
    	<form action="changepassword" method="POST">
    		新密码：<input type="password" name="newpassword" />
    		<br />
    		<input type="submit" value="确定更改" />
    		<input type="reset" value="重置" />
    	</form>
        <a href="<?php echo U('Index/haveloginindex');?>">首页</a>
        </br>
        <?php echo ($error); ?>
        </br>
        <?php echo ($error1); ?>
        </br>
        <?php echo ($error2); ?>
        <br>
        <?php echo ($user_id); ?>
    </body>
</html>