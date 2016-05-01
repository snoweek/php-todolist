
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>注册页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/register.js"></script>
</head>
    <body>
        <p id="registermessage"></p>
    	<form action="register.php" method="POST" id="register"> 
    		用户名：<br />
    		<p id="usernamep"><input type="text" name="username" id="username"/>
                <span class="errormessage" id="usernameerror">请输入用户名</span></p>
            <br />
    		密码：<br />
    		<p id="passwordp"><input type="password" name="password" id="password" />
            <span class="errormessage" id="passworderror">请输入密码</span></p>
            <br />
            <input type="submit" value="注册" />
            <input type="reset" value="重置">
            </br>
    	</form>
         <a href="login.php">登录</a>
         <br />
        <a href="changepassword.php">更改密码</a>
        <br />
         <a href="index.php">返回首页</a>
    </body>
</html>
