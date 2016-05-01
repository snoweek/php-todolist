<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>登录页面</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/08/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script  type="text/javascript" src="/08/Public/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/08/Public/js/bootstrap.min.js"></script>  
</head>
<body>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>欢迎页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	 <script  type="text/javascript" src="./bootstrap/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</head>
    <body >    	
	    	<div class="container lead" id="navbar">
				<div class="row">
					<div class="col-sm-9 col-md-9"></div>
					<div class="col-sm-3 col-md-3">
						<ul class="nav nav-pills nav-justified lead">
							<li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
							<li><a href="<?php echo U('Home/Index/login');?>">登录</a></li>
							<li><a href="<?php echo U('Home/Index/register');?>">注册</a></li>	
						</ul>
					</div>
			</div>			
		</div>  		
    </body>
</html>
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

            <h3 align="center">登录</h3>
            <form action="login" method="POST" >
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
            <?php echo ($error); ?>
        </div>
    </div>
</div>
</div>
</body>
</html>