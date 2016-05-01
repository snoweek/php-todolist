<?php
            if(isset($_GET['username'],$_GET['password'])){
                session_start();
                $dbc=@mysqli_connect('127.0.0.1', 'root','123456','todolist') 
            or die('could not connect to mysql');
            mysqli_set_charset($dbc,'utf8');
                $username=$_GET['username'];
                $password=$_GET['password'];
                $q1="select user_id from usermessage where name='$username' ";
                $r1=mysqli_query($dbc,$q1);
                if(mysqli_num_rows($r1)==0){
                    $q="insert into usermessage(name,password)values(\"$username\",\"$password\")";
                    $r=mysqli_query($dbc,$q);
                    if($r){
                        echo'success';
                    }else{
                        echo'system';
                    }
                }else{
                    echo'registered';
                }
                mysqli_close($dbc); 
            }
?>