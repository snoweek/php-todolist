<?php
    function check_name($username){
        $dbc=connect_mysql();
        if ($dbc){  
            $q='select * from user where name=?';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_bind_param($stmt,'s',$name);
            $name=$username;
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);                          
            if(mysqli_stmt_affected_rows($stmt)==1){
                $message['check_name']='name exit';
                $json_message=json_encode($message);
                return $json_message;
            }else{
                $message['check_name']='name no exit';
                $json_message=json_encode($message);
                return $json_message;
            } 
            mysqli_stmt_close($stmt); 
            mysql_close($dbc);
        }else{
            die('Could not connect: ' . mysql_error());
        }
    }
?>