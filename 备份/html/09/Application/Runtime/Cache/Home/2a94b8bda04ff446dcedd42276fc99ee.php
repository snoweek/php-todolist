<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>未登陆的首页</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="/sunyan2015/022/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script  type="text/javascript" src="/sunyan2015/022/Public/js/jquery-1.7.2.min"></script>
	<script type="text/javascript" src="/sunyan2015/022/Public/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			background-image:url("/sunyan2015/022/Public/image/2.png");
			font-color: #fff620;

		}
	</style>
</head>
<body>
<div class="container lead" id="navbar">
	<div class="row">
		<div class=" col-lg-1"></div>
		<div class="  col-lg-3">
			<a href="<?php echo U('Home/Index/index');?>">
				<span class="glyphicon glyphicon-home lead text-primary">&nbsp抒写</span>
			</a>
		</div>
		<div class="col-lg-5"></div>
		<div class="col-lg-3">
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-4"><a href="<?php echo U('Home/Index/login');?>" >登录</a></div>
				<div class="col-lg-4"><a href="<?php echo U('Home/Index/register');?>"  >注册</a></div>
				<div class="col-lg-2"></div>
			</div>
		</div>
	</div>
</div>
<div class="container text-primary" id="body">
	<div class="row">
		<div class="col-lg-6" id="body_left">
			<br><br><br><br><br><br>
			<h1>抒发你的心情</h1>
			<h1>&nbsp&nbsp&nbsp&nbsp写尽你的感悟</h1>
			<h4>随时随地，随心所欲</h4>
			<br><br>
			<a href="<?php echo U('Home/Index/loginorregister');?>" class="btn btn-success btn-lg">
				<span class="glyphicon glyphicon-pencil">&nbsp提笔写篇文章</span>
			</a><br><br>
			<a href="<?php echo U('Home/Index/loginorregister');?>" class="btn btn-success btn-lg">
				&gt&gt&nbsp&nbsp进入我的主页
			</a>
		</div>
		<div class="col-lg-2"></div>
		<div class=" col-lg-4" id="body_right">
			<br><br><br>
			<div class="panel panel-info">
				<div class="panel panel-heading">
					<h2 align="center">用户登录</h2>
				</div>
				<div class="panel-body">
					<form action="<?php echo U('Home/Index/login');?>" method="POST" >
						<div class="form-group">
							<label>用户名：</label>
							<input type="text" name="username" class="form-control " placeholder="请输入姓名" />
						</div>
						<div class="form-group">
							<label>密码：</label>
							<input type="password" name="password" class="form-control input-sm" placeholder="请输入密码"/>
							<br />
						</div>
						<div align="center"><input type="submit" value="登录" class="btn btn-success btn-lg"/></div>
					</form>
				</div>
				<div class="panel-footer" align="center">
					<a href="<?php echo U('Home/Index/register');?>"><h4>申请注册</h4></a>

				</div>
			</div>

		</div>
	</div>
</div>
</body>
</html>