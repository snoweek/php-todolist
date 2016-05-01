<?php  
      if(isset($_GET['username'],$_GET['password'])){
                $username=$_GET['username'];
                $password=$_GET['password'];
                session_start();
                $dbc=@mysqli_connect('127.0.0.1', 'root','123456','todolist') 
                or die('could not connect to mysql');
                mysqli_set_charset($dbc,'utf8');
                $q="select user_id from usermessage where name='$username' ";
                $r=mysqli_query($dbc,$q);
                $q1="select user_id from usermessage where password='$password' ";
                 $r1=mysqli_query($dbc,$q1);
                if(mysqli_num_rows($r)==0){
                    echo'usernamefail';
                }else{
                    while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                        $user_id=$row['user_id'];    
                    }
                    if(mysqli_num_rows($r1)==0){
                        echo"passwordfail";
                    }else{
                    $_SESSION['username']=$username;
                    $_SESSION['user_id']=$user_id;
                    echo"success";
                    echo $_SESSION['user_id'];
                     }
                }
                mysqli_close($dbc); 
                exit();   
            }
    	?>