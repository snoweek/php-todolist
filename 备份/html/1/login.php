
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>登录页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
</head>
    <body>
        <p id="loginmessage"></p>
    	<form action="login.php" method="POST" id="login"> 
    		用户名：<br />
    		<input type="text" name="username" id="username" /><span id="usernameerror">请输入姓名</span>
            <br />
    		密码：<br />
    		<input type="password" name="password" id="password"/><span id="passworderror">请输入密码</span>
            <br />
            <input type="submit" value="登录" />
            <input type="reset" value="重置">
        </form>
        <a href="changepassword.php">更改密码</a>
        <br />
        <a href="index.php">返回首页</a>

    </body>
</html>