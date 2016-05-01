<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<html>
<head>
    <title>登录或注册</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/08/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script  type="text/javascript" src="/08/Public/js/jquery-1.7.2.min"></script>
    <script type="text/javascript" src="/08/Public/js/bootstrap.min.js"></script>
   <!-- <script type="text/javascript" src="/08/Public/JS/first.js"></script>-->
    <script type="text/javascript">
        function checkbutton(f){
            var l=document.getElementById('login');
            var r=document.getElementById('register');
            if(f=="login"){
                l.style.display="block";
                r.style.display="none";
            }else{
                l.style.display="none";
                r.style.display="block";
            }

        }
    </script>

</head>
<body>
<div class="container" >
    <div class="row">
        <div class="col-lg-12 text-left" id="index">
            <a href="<?php echo U('Home/Index/index');?>">
                <span class="glyphicon glyphicon-home lead text-primary"></span>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <h1 class="text-danger text-center">抒写</h1>
            <h2 class="text-danger text-center">交流故事，沟通想法</h2>
            <br>
           <h5 align="center">请先登录或注册</h5></p>
            <p align="center">

                <input type="button" onclick="checkbutton('login')" value="登录" class="btn btn-default btn-lg">
                <span class="lead">·</span>
                <input type="button" onclick="checkbutton('register')" value="注册" class="btn btn-default btn-lg">
            </p>
            <hr>
            <form action="login" method="POST" id="login" style="display:block">
                <div class="input-group input-lg">
                    <span class="input-group-addon glyphicon glyphicon-user"></span>
                    <input type="text" name="username" class="form-control " placeholder="请输入姓名" />
                </div>
                <br>
                <div class="input-group input-lg">
                    <span class="input-group-addon glyphicon glyphicon-lock"></span>
                    <input type="password" name="password" class="form-control input-sm" placeholder="请输入密码"/>
                    <br />
                </div>
                <div align="center">
                    <input type="submit" value="登录" class="btn btn-success"/>
                </div>
            </form>
            <form action="register" method="POST" id="register" style="display:none" >
                <div class="input-group input-lg">
                    <span class="input-group-addon glyphicon glyphicon-user"></span>
                    <input type="text" name="username" class="form-control " placeholder="请输入姓名" />
                </div>
                <br>
                <div class="input-group input-lg">
                    <span class="input-group-addon glyphicon glyphicon-lock"></span>
                    <input type="password" name="password" class="form-control input-sm" placeholder="请输入密码"/>
                    <br />
                </div>
                <div align="center">
                    <input type="submit" value="注册" class="btn btn-success"/>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>