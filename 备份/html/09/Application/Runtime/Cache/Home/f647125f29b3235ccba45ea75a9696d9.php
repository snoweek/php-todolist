<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>计划列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="布尔教育 http://www.itbool.com" />
</head>
    <body>
    	<h2 align="center"><?php echo ($username); ?>欢迎来到你的文章列表</h2>
    	<?php echo ($message); ?>
    	<table align="center" border=3>
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