<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>登录页面</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/sunyan2015/022/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script  type="text/javascript" src="/sunyan2015/022/Public/js/jquery-1.7.2.min"></script>
    <script type="text/javascript" src="/sunyan2015/022/Public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/sunyan2015/022/Public/JS/register/js.js"></script>
    <script type="text/javascript">
        $(function(){
            $("span").hide();
            $("#register").submit(function(){
                if($("#username").val().length>0){
                    username=$("#username").val();
                    //$("#usernamep").removeClass("error");
                    //$("#usernameerror").hide();
                }else{
                    //$("#usernamep").addClass("error");
                    $("#usernameerror").show();
                }
                if($("#password").val().length>0){
                    password=$("#password").val();
                    //$("#passwordp").removeClass("error");
                    //$("#passworderror").hide();
                }else{
                    //$("#passwordp").addClass("error");
                    $("#passworderror").show();
                }
                if(username &&password){
                    var data=new Object();
                    data.username=username;
                    data.password=password;
                    var option=new Object();
                    option.data=data;
                    option.dataType="text";
                    option.type="get";
                    option.success=function(response){
                        if(response=="success"){
                            //$("#register").hide();
                            $("#registermessage").text("恭喜你，注册成功");
                            //$("#registermessage").addClass("error");
                        }else if(response=="registered"){
                            $("#registermessage").text("对不起，此用户名已经注册");
                            //$("#registermessage").addClass("error");
                        }else if(response=="system"){
                            $("#registermessage").text("对不起，由于系统问题请稍后再试");
                            //$("#registermessage").addClass("error");
                        }
                    };
                    option.url="register_ajax.php";
                    $.ajax(option);
                }
                return false;
            });
        });
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-left" id="index">
            <a href="<?php echo U('Home/Index/index');?>">
                <span class="glyphicon glyphicon-home lead text-primary"></span>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4" id="register">
            <h1 class="text-danger text-center">抒写</h1>
            <h2 class="text-danger text-center">交流故事，沟通想法</h2>
            <br>

            <h3 align="center">注册</h3>
            <form action="register" method="POST" >
                <div class="input-group input-lg">
                    <span class="input-group-addon glyphicon glyphicon-user"></span>
                    <input type="text" name="username" class="form-control " placeholder="请输入姓名" />
                </div>
                <span class="errormessage" id="usernameerror">请输入用户名</span>
                <br>
                <div class="input-group input-lg">
                    <span class="input-group-addon glyphicon glyphicon-lock"></span>
                    <input type="password" name="password" class="form-control input-sm" placeholder="请输入密码"/>
                    <br />
                </div>
                <span class="errormessage" id="passworderror">请输入密码</span>
                <div align="center">
                    <input type="submit" value="注册" class="btn btn-success"/>
                </div>
            </form>
            <?php echo ($error); ?>
        </div>
    </div>
</div>
</div>
</body>
</html>