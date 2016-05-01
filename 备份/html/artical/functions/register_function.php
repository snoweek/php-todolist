<?php
    function register($username,$password,$email){
        $dbc=connect_mysql();           
        if($dbc){
            $q='insert into user(name,password,email,register_date)values(?,?,?,NOW())';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_bind_param($stmt,'sss',$name,$password,$email);
            $name=$username;
            $password=$password;
            $email=$email;
            mysqli_stmt_execute($stmt);
            if(mysqli_stmt_affected_rows($stmt)==1){
            $message['register']='success';
                $json_message=json_encode($message);
                return $json_message;
            }else{
                $message['register']='system';
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