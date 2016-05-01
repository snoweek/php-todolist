<?php

session_start(); 
$count=0;
echo "iqrhgq";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>计划页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
{include file='todolist/html/login_header.html'}

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4 col-sm-4">            
                <h3><?php echo $_SESSION['username'];?>,欢迎来到你的计划列表 ckfk</h3>
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
                    
                    
                       {foreach from=$row item=v}
                        <tr>
                                    <td><?php echo ++$count; ?></td>
                                    <td>{$v.content}</td>
                                    <td>
                                        <div class="dropdown">
                                            <span class="glyphicon glyphicon-asterisk dropdown-toggle btn" data-toggle="dropdown"></span> 
                                            <ul class="dropdown-menu" >
                                                <li>
                                                    <a href="list_handle.php?act=delete&list_id={$v.list_id}">删除计划</a>
                                                </li>                                
                                            </ul>
                                        </div>  
                                    </td>
                                </tr>


                        {/foreach}
                        
                                                             
                </table>                   
            </div>
        </div>  
    </div>
</body>
</html>