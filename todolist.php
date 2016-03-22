<?php
    function connect_mysql() {
        $dbc=@mysqli_connect('127.0.0.1', 'root','123456','todolist') 
            or die('could not connect to mysql');
        mysqli_set_charset($dbc,'utf8');
        return $dbc; 
    }
    function register($username,$password,$email){
        $dbc=connect_mysql();           
        if($dbc){
            $q='insert into user(name,password,email)values(?,?,?)';
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

    function logout(){
        session_destroy();
        setcookie('phpsessid','',time()-3600);        
    }

    function check_password($old_password){
        session_start(); 
        $password=$_SESSION['password'];
        if($password!=$old_password){
            $message['check_password']='password wrong';
            $json_message=json_encode($message);
            return $json_message;
        }else{
            $message['check_name']='password correct';
            $json_message=json_encode($message);
            return $json_message;
        } 
    }

    function changepassword($new_password){
        session_start(); 
        $dbc=connect_mysql();
        $session_user_id=$_SESSION['user_id'];
        if ($dbc){
            $q='update user set password=? where user_id=?';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_bind_param($stmt,'si',$password,$user_id);
            $password=$new_password;
            $user_id=$session_user_id;
            mysqli_stmt_execute($stmt);
            if(mysqli_stmt_affected_rows($stmt)==1){
                $message['changepassword']='change success';
                $json_message=json_encode($message);
                return $json_message;
            }else{
                $message['changepassword']='system';
                $json_message=json_encode($message);
                return $json_message;
            }   
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }else{
            die('Could not connect: ' . mysql_error());
        }
    }

    function show_list($user_id_from_user){
        $dbc=connect_mysql();
        $q='select content,list_id from list where user_id=?';
        $stmt=mysqli_prepare($dbc,$q);
        mysqli_stmt_bind_param($stmt,'i',$user_id);
        $user_id=$user_id_from_user;
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt); 
        mysqli_stmt_bind_result($stmt,$content,$list_id);           
        while(mysqli_stmt_fetch($stmt)){
            $list['content']=$content;
            $list['list_id']=$list_id;
            $list_merge[]=$list;
        }
        $list_json=json_encode($list_merge);
        return $list_json;
        mysqli_stmt_close($stmt);
        mysql_close($dbc); 	  
    }

    function add_list($form_content){
        session_start(); 
        $user_id_from_session=$_SESSION['user_id'];
        $dbc=connect_mysql();
        $q='insert into list (content ,user_id) values (?,?)';
        $stmt=mysqli_prepare($dbc,$q);
        mysqli_stmt_bind_param($stmt,'si',$content,$user_id);
        $content=$form_content;
        $user_id=$user_id_from_session;
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);
    }
    
    function delete_list($form_list_id){
        $dbc=connect_mysql();
        $q='delete from list where list_id=?';
        $stmt=mysqli_prepare($dbc,$q);
        mysqli_stmt_bind_param($stmt,'i',$list_id);
        $list_id=$form_list_id;
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);
    }
?>