<?php /* Smarty version 2.6.25-dev, created on 2016-02-04 22:03:13
         compiled from list.php */ ?>
<?php echo '<?php'; ?>

require "../html/login_header.html";
require "../todolist.php"; 
session_start(); 
$count=0;
echo "iqrhgq";
<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>计划页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4 col-sm-4">            
                <h3><?php echo '<?php'; ?>
 echo $_SESSION['username'];<?php echo '?>'; ?>
,欢迎来到你的计划列表 ckfk</h3>
                <br />
                <form action="list_handle.php?act=add" method="POST">
                    内容：<textarea name="content" cols="30" rows="3"></textarea>
                    <br />
                    <input type="submit" value="添加" />
                </form>     
            </div>
            <div class="col-lg-8 col-sm-8 col-sm-8">
                <h1 align="center">计划列表</h1>
                <table class="table ">  
                    <tr class="lead">
                        <td></td>
                        <td>内容</td>
                        <td>操作</td>
                        <td></td>                               
                    </tr>
                    
                    
                       <?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                        <tr>
                                    <td><?php echo '<?php'; ?>
 echo ++$count; <?php echo '?>'; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['v']['content']; ?>
</td>
                                    <td>
                                        <div class="dropdown">
                                            <span class="glyphicon glyphicon-asterisk dropdown-toggle btn" data-toggle="dropdown"></span> 
                                            <ul class="dropdown-menu" >
                                                <li>
                                                    <a href="list_handle.php?act=delete&list_id=<?php echo $this->_tpl_vars['v']['list_id']; ?>
">删除计划</a>
                                                </li>                                
                                            </ul>
                                        </div>  
                                    </td>
                                </tr>


                        <?php endforeach; endif; unset($_from); ?>
                        
                                                             
                </table>                   
            </div>
        </div>  
    </div>
</body>
</html>