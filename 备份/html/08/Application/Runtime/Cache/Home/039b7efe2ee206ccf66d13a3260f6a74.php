<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>已登录</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="/08/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script  type="text/javascript" src="/08/Public/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="/08/Public/js/bootstrap.min.js"></script>
	<style type="text/css">
		.bg{background:url("/sunyan2015/022/public/image/8.png") no-repeat ;
		}
	</style>
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
				<div class="col-sm-7 col-md-7"></div>
				<div class="col-sm-5 col-md-5">
					<ul class="nav nav-pills nav-justified lead">
						<li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
						<li><a href="<?php echo U('Home/Index/index');?>">计划列表</a></li>
						<li><a href="<?php echo U('Home/Index/index');?>">注销</a></li>				
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
	<div class="container ">
		<div class="row" >
			<div class="col-lg-2 bg" >
				<a href="<?php echo U('Home/Index/index');?>">
					<span class="glyphicon glyphicon-home lead text-primary"></span>
				</a>
				<br>
				<a href="<?php echo U('Home/Index/changepassword');?>">更改密码</a>
				<br>
				<a href="<?php echo U('Home/Index/logout');?>">注销</a>
				<br><br><br><br><br><br><br><br>

				<br><br><br><br>
				<br><br><br><br><br><br><br>
				<a href="<?php echo U('Home/Index/haveloginindex');?>" class="btn btn-default btn-lg">
					<span class="glyphicon glyphicon-user">&nbsp<?php echo ($username); ?></span>
				</a><br><br><br>
				<a href="<?php echo U('Home/Index/writer');?>" class="btn btn-default btn-lg">
					<span class="glyphicon glyphicon-pencil">&nbsp提笔写篇文章</span>
				</a>
				<br><br><br><br><br><br><br><br><br>

			</div>
			<div class="col-lg-1"></div>
			<div class=" col-lg-9">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-6" align="center">
						<form action="search" method="post">
							<div class="input-group input-lg">
								<input type="text" name="username" class="form-control " placeholder="请输入要搜索的文章" />
							<span class="input-group-addon">
								<input type="submit" value="搜索" class="btn btn-default btn-xs" >
							</span>
							</div>
						</form>
					</div>
				</div>
				<br><br>
				<div class="row">
					<table class="table table-hover table-responsive">
						<?php if(is_array($select)): foreach($select as $key=>$list): ?><tr>
								<td>
									<?php echo ($list["artical_title"]); ?>
								</td>
								<td>
									<form action="haveloginindex" method="POST">
										<input type="hidden" name="artical_id" value="<?php echo ($list["artical_id"]); ?>" />
										<input type="submit" value="删除" />
									</form>
								</td>
								<td>
									<form action="showcontent" method="POST">
										<input type="hidden" name="artical_id" value="<?php echo ($list["artical_id"]); ?>" />
										<input type="submit" value="查看" />
									</form>
								</td>
							</tr><?php endforeach; endif; ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>