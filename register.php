<?php
    session_start(); 
    if(isset($_SESSION['user_id'])){
        require "./html/login_header.html"; 
    }else{
        require "./html/no_login_header.html";  
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>注册页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script  type="text/javascript" src="./bootstrap/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/register.js"></script>
</head>
    <body>
        <div class="container">
            <br><br><br><br>
            <h3 align="center">注册</h3>
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-sm-4"></div>
                <div class="col-lg-8 col-sm-8 col-sm-8">
                    <form action="register_handle.php" method="post" id="register">
                        <div class="row">                   
                            <div class="col-lg-6 col-sm-6 col-sm-6">
                                <div class="input-group input-lg">            
                                    <span class="input-group-addon glyphicon glyphicon-user">
                                    </span>
                                    <input type="text" id="input_name" name="username" class="form-control " placeholder="请输入姓名">         
                                </div> 
                            </div>                
                            <div class="col-lg-6 col-sm-6 col-sm-6">
                                <br>
                                <div><span id="span_name_error" style="color: red;"></span></div> 
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-sm-6">
                                <div class="input-group input-lg">
                                    <span class="input-group-addon glyphicon glyphicon-lock">
                                    </span>
                                    <input type="password" id="input_password" name="password" class="form-control input-sm" placeholder="请输入密码"/>
                                </div>
                            </div>                                
                            <div class="col-lg-6 col-sm-6 col-sm-6">
                                <br>
                                <div>
                                    <span id="span_password_error" style="color: red;"></span>
                                </div>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-sm-6">
                                <div class="input-group input-lg">
                                    <span class="input-group-addon glyphicon glyphicon-envelope"></span>
                                    <input type="text" id="input_email" name="email" class="form-control input-sm" placeholder="请输入邮箱"/> 
                                 </div>                  
                            </div>             
                            <div class="col-lg-6 col-sm-6 col-sm-6">
                            <br>
                                <div><span id="span_email_error" style="color: red;"></span></div>   
                            </div>
                        </div>                                                                                                                               
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-sm-6">
                                <div align="center">
                                    <input type="submit" value="注册" class="btn btn-success"/>
                                </div>
                            </div>                          
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </body>
</html>
