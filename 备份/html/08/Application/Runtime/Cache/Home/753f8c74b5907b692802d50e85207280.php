<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <title>ueditor的使用</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/08/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="/08/Public/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/08/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/08/Public/ueditor/ueditor.all.js"></script>
    <script type="text/javascript" src="/08/Public/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function newtext(){
            var textname=document.getElementById('textname');
            textname.style.display="block";
        }
        function addhtml(){
            var ueditor=document.getElementById('ueditor');
            var text=document.getElementById('text').value();
        }
    </script>
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
<div class="container">
    <div class="row"><br><br><br>
        <div class="col-lg-2">
            <a href="<?php echo U('Home/Index/haveloginindex');?>">首页</a>
            <form action="writer" method="post">
                <div class="input-group input-lg">
                    <span class="input-group-addon glyphicon glyphicon-plus"></span>
                    <button type="button"  onclick="newtext()" class="form-control ">
                    新建文集
                    </button>
                </div>
                <br>
                <div id="textname" style="display:none;">
                    <input type="text" name="textname"  >
                    <input type="submit" value="新建">
                </div>
                <input type="hidden" name="orderhidden" value="newtext" />
            </form>
            <hr>
            <ul>
                <?php if(is_array($select)): foreach($select as $key=>$text): ?><li>
                     <form action="writer" method="post" id="text">
                         <!--<button type="submit" class="btn btn-default" onclick="addhtml()">
                         <?php echo ($text["textname"]); ?>
                     </button>-->
                         <input type="submit" value="<?php echo ($text["textname"]); ?>">
                         <input type="hidden" name="orderhidden" value="textname" />
                     </form>
                     </li><?php endforeach; endif; ?>
            </ul>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
                <form action="writer" method="POST" id="ueditor">
                    文章标题<br>
                    <div class="form-group">
                        <input type="text" name="title" class="form-control " />
                    </div><br><br>
                    文章内容<br>
                    <script id="container" name="content" type="text/plain" style="height:450px;">
                    </script>
                    <input name="info" type="hidden" id="info">
                    <input type="submit" value=" 提交 ">　
                    <input type="hidden" name="orderhidden" value="newartical" />
                </form>
                <script type="text/javascript">
                    var ue = UE.getEditor('container');
                </script>
        </div>
    </div>
</div>
<?php echo ($content); ?>

</body>
</html>