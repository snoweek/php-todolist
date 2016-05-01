<?php
function login($username,$password){
        session_start(); 
        $dbc=connect_mysql();
        $user_id;
        if($dbc){
            $q='select user_id from user where name=? and password=?';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_bind_param($stmt,'ss',$name,$password);
            $name=$username;
            $password=$password;
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); 
            mysqli_stmt_bind_result($stmt,$user_id);      
            if(mysqli_stmt_affected_rows($stmt)==1){
                while(mysqli_stmt_fetch($stmt)){
                    $user_id=$user_id;               
                } 
                $_SESSION['username']=$username;
                $_SESSION['user_id']=$user_id; 
                $_SESSION['password']=$password;
                $message['login']='login success';
                $json_message=json_encode($message);
                return $json_message;
            }else{
                $message['login']='password error';
                $json_message=json_encode($message);
                return $json_message;
            } 
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);             
        }else{
            die('Could not connect: ' . mysql_error());
        }
    }
?>