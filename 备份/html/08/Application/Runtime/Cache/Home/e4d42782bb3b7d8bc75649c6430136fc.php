<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>登陆的首页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="/08/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script  type="text/javascript" src="/08/Public/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/08/Public/js/bootstrap.min.js"></script>
</head>
<body background="/08/Public/image/2.png">
<div class="container lead" id="navbar">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>欢迎页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">

    <body >   	
    	<div class="container lead" id="navbar">
			<div class="row">
				<div class="col-sm-7 col-md-7"></div>
				<div class="col-sm-5 col-md-5">
					<ul class="nav nav-pills nav-justified lead">
						<li><a href="<?php echo U('Home/Index/login_index');?>">首页</a></li>
						<li><a href="<?php echo U('Home/Index/planlist');?>">计划列表</a></li>
						<li><a href="<?php echo U('Home/Index/logout');?>">注销</a></li>				
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">
								<span class="glyphicon glyphicon-user" >
									<span class="caret"></span>
								</span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li role="presentation">
									<a tabindex="-1" role="menuitem" href="<?php echo U('Home/Index/index');?>">注销</a>
								</li>
								<li role="presentation">
									<a tabindex="-1" role="menuitem"  href="<?php echo U('Home/Index/index');?>">修改密码</a>
								</li>								
							</ul>			
						</li>
					</ul>
				</div>		
			</div>			
		</div>  		
    </body>
</html>
<div class="container text-primary" id="body">
    <div class="row">
        <div class="col-lg-6" id="body_left">
            <br>
            <h1>抒发你的心情</h1>
            <h1>&nbsp&nbsp&nbsp&nbsp写尽你的感悟</h1>
            <h4>随时随地，随心所欲</h4>
            <br>
            <a href="<?php echo U('Home/Index/writer');?>" class="btn btn-success btn-lg">
                <span class="glyphicon glyphicon-pencil">&nbsp提笔写篇文章</span>
            </a><br><br>
            <a href="<?php echo U('Home/Index/planlist');?>" class="btn btn-success btn-lg">
                &gt&gt&nbsp&nbsp进入我的主页
            </a>
        </div>
    </div>
</div>
</body>
</html>