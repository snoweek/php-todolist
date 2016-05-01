<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>更改密码</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/changepassword.js"></script>
</script>
</head>
    <body>
        <p id="changemessage"></p>
    	<form action="changepassword.php" method="POST" id="changepassword">
    		新密码：<input type="password" name="newpassword" id="newpassword"/>
            <span id="changeerror">请输入新密码</span>
    		<br />
    		<input type="submit" value="确定更改" />
    	</form>
        <a href="login.php">登录</a>
        <br />
        <a href="index.php">返回首页</a>
    </body>
</html>