<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>计划列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="/08/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script  type="text/javascript" src="/08/Public/js/jquery-1.11.3.min.js"></script>
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
    	<h2 align="center"><?php echo ($username); ?>欢迎来到你的文章列表</h2>
    	<?php echo ($message); ?>
    	<table class="table table-responsive">
    	<?php if(is_array($select)): foreach($select as $key=>$list): ?><tr>
    			<td>
    				<?php echo ($list["artical_title"]); ?>
    				<form action="planlist" method="POST">
                		<input type="hidden" name="listhidden" value="<?php echo ($list["artical_id"]); ?>" />
                		<input type="submit" value="删除" />
                    <input type="submit" value="编辑" />
            </form>
    			</td>
    		</tr><?php endforeach; endif; ?>
     </table>
        <div class="container">
            <table class="table">
                <caption>Table 基本案例</caption>
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>User Name</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>aehyok</td>
                    <td>leo</td>
                    <td>@aehyok</td>
                </tr>
                <tr>
                    <td>lynn</td>
                    <td>thl</td>
                    <td>@lynn</td>
                </tr>
                </tbody>
            </table>
        </div>
        </br>
        <a href="<?php echo U('Home/Index/changepassword');?>">更改密码</a>
        <br />
        <a href="<?php echo U('Home/Index/index');?>">返回首页</a>
    </br>
    <a href="<?php echo U('Home/Index/logout');?>">注销</a>
    </br>
    <a href="<?php echo U('Home/Index/writer');?>">写文章</a>
    </body>
</html>