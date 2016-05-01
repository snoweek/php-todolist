<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>文章内容显示</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="/sunyan2015/022/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script  type="text/javascript" src="/sunyan2015/022/Public/js/jquery-1.7.2.min"></script>
	<script type="text/javascript" src="/sunyan2015/022/Public/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-7" align="center">
			<div class="row"><h1><?php echo ($title); ?></h1></div>
			<div class="row"><?php echo ($content); ?></div>

				<br>
				<a href="<?php echo U('Index/haveloginindex');?>">首页</a>
				</br>
		</div>
		<div class="col-lg-3"></div>
	</div>
</div>
</body>
</html>