<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>修改数据</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
    <body>
        <?php
        
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $n=$_GET['id'];
            echo "...";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $n=$_POST['id'];
            $content=$_POST['content'];
            $dbc=@mysqli_connect('127.0.0.1', 'root','123456','todolist') 
                or die('could not connect to mysql');
            mysqli_set_charset($dbc,'utf8');
            $content2=mysqli_real_escape_string($dbc,$content);
            $p="update todo set content=\"$content2\"  where id={$n}";
            echo $p;
            echo "<br/>";
            @mysqli_query($dbc,$p);
            $r2=mysqli_affected_rows($dbc);
            echo $r2;
            if($r2>0)
            {
               
               echo "update successes";
              
            }
            else
            {
                echo'update fail';
            }
            mysqli_close($dbc);
            echo "<a href=\"index.php\">返回首页</a>";
        }



        ?>
           <!-- 表单 用于 修改-->
    <br/><br/><hr/>

    <form action='update.php' method='post'>
        content:<br/>
        <textarea name='content' cols='60' rows='3'></textarea><br/>
        <input type='text' name='id' value='<?php echo $n;?>'/><br/>
        <input type='submit'  value='修改'/>
        
    </form>
    </body>
</html>