<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>计划页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
    <body>
    	<?php
        session_start();
        echo"{$_SESSION['username']},欢迎来到你的计划列表 ";
        echo"<br />";
        $dbc=@mysqli_connect('127.0.0.1', 'root','123456','todolist') 
            or die('could not connect to mysql');
        mysqli_set_charset($dbc,'utf8');
       if($_SERVER['REQUEST_METHOD']=='POST'){
       if($_POST['orderhidden']=='a'){
        if(!empty($_POST['content'])){
            $content=$_POST['content'];
            $p="insert into listmessage (content ,user_id) values (\"$content\",\"{$_SESSION['user_id']}\")";
            @mysqli_query($dbc,$p);
           $r=mysqli_affected_rows($dbc);
           // echo $r;
            if($r<=0)
                {
                echo "添加失败";
            }
        }else{
            echo"请添加内容";           
        } 
    }
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
if($_POST['orderhidden']=='b'){
    $list_id=$_POST['listhidden'];
    $q="delete from listmessage where list_id='$list_id'";
    $r=mysqli_query($dbc,$q);
    if(!$r){
        echo"请重新点击删除";
        //echo mysqli_error($dbc);
    }
   }   
    }
      $q="select content,list_id from listmessage where user_id={$_SESSION['user_id']}";
        $s=mysqli_query($dbc,$q);
        $num=mysqli_num_rows($s);
       if($s){
         //$order=0;
        
         echo'您有'.$num.'条计划';
         echo'<br />';
         echo'您有'.$num.'个计划编码';
        echo'<table align="center" border="3">';
      while($row=mysqli_fetch_array($s,MYSQLI_ASSOC)){
                echo'<tr><td>'.$row['content'].
                ' <form action="list.php" method="POST">
                <input type="hidden" name="listhidden" value='.$row['list_id'].'>
               <input type="hidden" name="orderhidden" value="b" />
                <input type="submit" value="删除" />
                </form>
                </td></tr>';
            }
        echo'<tr><td>
             <form action="list.php" method="POST">
          内容：<textarea name="content" cols="30" rows="3"></textarea>
         <br />
        <input type="submit" value="添加" />
        <input type="hidden" name="orderhidden" value="a" />
         </form>
        </td></tr>'; 
        echo'</table>';
    }  
        ?>  
        <a href="logout.php">注销</a>
        <br />
        <a href="changepassword.php">更改密码</a>
        <br />
         <a href="index.php">返回首页</a>
    </body>
    </html>