<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>首页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script  type="text/javascript" src="./bootstrap/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</head>
    <body  background="./image/2.png">
        <?php
            session_start(); 
            if(isset($_SESSION['user_id'])){
                require "./html/login_header.html"; 
            }else{
                require "./html/no_login_header.html";  
            }
        ?>
    </body>
</html>

