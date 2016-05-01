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
    <body background="./image/2.png">
    <?php
session_start();
?>
    	
    	<div class="container lead" id="navbar">
		<div class="row">
		<div class="col-sm-5 col-md-5"></div>
		<div class="col-sm-7 col-md-7">
			<ul class="nav nav-pills nav-justified lead">
		<li><a href="./index.php">首页</a></li>
		<?php					
			if (isset($_SESSION['user_id'])) {						
		?>
		<li><a href="index.php">管理员登录</a></li>
		
		<?php
			} else {
				
						
		?>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">
						<span>学生管理</span>
			</a>
				<ul class="dropdown-menu" role="menu">
					<li role="presentation"><a tabindex="-1" role="menuitem" href="#">查询学生</a></li>
					<li role="presentation"><a tabindex="-1" role="menuitem"  href="#">添加学生</a></li>	
					<li role="presentation"><a tabindex="-1" role="menuitem"  href="#">条件查询</a></li>									
				</ul>			
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">
						<span >专业管理</span>
			</a>
				<ul class="dropdown-menu" role="menu">				
					<li role="presentation" ><a tabindex="-1" role="menuitem"  href="#">查询专业</a></li>				
					<li role="presentation"><a  tabindex="-1" role="menuitem" href="#">添加专业</a></li>							
				</ul>	
		
		</li>	
		<li><a href="#">注销</a></li>				
				<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">
						<span class="glyphicon glyphicon-user" ><span class="caret"></span></span>
			</a>
				<ul class="dropdown-menu" role="menu">
					<li role="presentation"><a tabindex="-1" role="menuitem" href="#">注销</a></li>
					<li role="presentation"><a tabindex="-1" role="menuitem"  href="#">修改密码</a></li>								
				</ul>	
		
		</li>
		<?php
			}
		?>	
		
	</ul>
		</div>
		
		</div>			
	</div> 
	<h1>欢迎访问todolist</h1>   		
    </body>
</html>