<?php
for($i=1;$i<=10;$i++){
	echo $i;
}
?>


<form action="list.php" method="POST">
         内容：<textarea name="content" cols="30" rows="3"></textarea>
        <br />
         <input type="submit" value="添加" />
         </form>
          /* $order=0;
        $row=mysqli_fetch_array($s,MYSQLI_ASSOC);
        foreach($row as $value){
            
            $order++;
            if($order!=$num){
                echo $value;
               // echo"一个表单";
            }else{
                echo"一个表单";
            }

        }
    }*/
       
         /*$row=mysqli_fetch_array($s,MYSQLI_ASSOC);
          //free_result($s);
        echo"先打印第一句{$row['content']}";
        echo $num ;

         for($i=0;$i<=$num;$i++){
            echo"打印格局$row[i]";
         }
      echo"<table align=\"center\" >";
        for($i=0;$i<=$num;$i++){
            if($i!=$num){
                echo"<tr><td>";
                echo"$row[i]";
                echo"</td></tr>";
            }else{
                echo"<tr><td>";
                echo"<form action=\"list.php\" method=\"POST\">";
                echo"内容";
                echo "<textarea name=\"content\" cols=\"30\" rows=\"3\"></textarea>";
                echo"<br />";
                echo" <input type=\"submit\"";
                echo" value=\" ";
                echo "添加";
                echo"\"/>";
                echo" </form>";
                echo"</tr></td>";
                //echo"</table>";
          }
        }
     echo"</table>";*/
     <a href="register.php">注册</a>
        <a href="login.php">登录</a>
        <a href="logout.php">注销</a>
        <a href="changepassword.php">更改密码</a>