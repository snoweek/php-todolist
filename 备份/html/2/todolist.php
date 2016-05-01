<?php
    function connect_mysql() {
  		$dbc=@mysqli_connect('127.0.0.1', 'root','123456','todolist') 
            or die('could not connect to mysql');
            mysqli_set_charset($dbc,'utf8');
            return $dbc; 
	}
	function register($username,$password,$email){
		$dbc=connect_mysql();		
	    if ($dbc){	       
	        $q="insert into usermessage (name,password,email)values(\"$username\",\"$password\",\"email\")";
	        $r=mysqli_query($dbc,$q);
	        if($r){
	            return'success';
	        }else{
	            return'system';
	        }
        	
    	mysql_close($dbc); 	   
	    }else{
	    	die('Could not connect: ' . mysql_error());
	    }
	}
	function login($username,$password){
		session_start(); 
		$dbc=connect_mysql();			
	    if ($dbc){	                            
            $q="select user_id from usermessage where password='$password' and name='$username' ";
            $r=mysqli_query($dbc,$q); 
            if(mysqli_num_rows($r)==0){
            	return "password error";
            }else{
            	while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                	$user_id=$row['user_id'];                 
           		} 
            $_SESSION['username']=$username;
            $_SESSION['user_id']=$user_id; 
            $_SESSION['password']=$password;
            return "login success";
            }                                                                     
    		mysql_close($dbc); 	   
	    }else{
	    	die('Could not connect: ' . mysql_error());
	    }
	}

	function check_name($username){		
		$dbc=connect_mysql();			
	    if ($dbc){	                            
            $q="select user_id from usermessage where name='$username' ";
            $r=mysqli_query($dbc,$q); 
            if(mysqli_num_rows($r)==0){
            	return "name no exit";
            }else{
            return "name exit";
            }                                                                     
    		mysql_close($dbc); 	   
	    }else{
	    	die('Could not connect: ' . mysql_error());
	    }

	}
	function logout(){
		session_start();		
    	session_destroy();
    	setcookie('phpsessid','',time()-3600);
	}
	
	function check_password($old_password){
		session_start(); 
		$password=$_SESSION['password'];
		if($password!=$old_password){
			return "password wrong";
		}else{
			return "password correct";
		}

	}
	function changepassword($new_password){
		session_start(); 
		$dbc=connect_mysql();			
	    if ($dbc){	                            
    	 	$q="update usermessage set password='$new_password' where user_id={$_SESSION['user_id']}";
    	 	$r=mysqli_query($dbc,$q);
    	 	if($r){
    	 		echo"change success";
    	 	}else{
    	 		echo"change fail";
    	 	}	                                                    
    		mysql_close($dbc); 	   
	    }else{
	    	die('Could not connect: ' . mysql_error());
	    }

	}
	function show_list($user_id){
		$dbc=connect_mysql();
		$q="select content,list_id from listmessage where user_id='$user_id'";
		$s=mysqli_query($dbc,$q);
		return $s;
	}
	function add_list($content){
		session_start(); 
		$user_id=$_SESSION['user_id'];
		$dbc=connect_mysql();
		$p="insert into listmessage (content ,user_id) values (\"$content\",\"$user_id\")";
		mysqli_query($dbc,$p);
	}
	function delete_list($list_id){		
		$dbc=connect_mysql();
		$q="delete from listmessage where list_id='$list_id'";
    	mysqli_query($dbc,$q);
	}
?>


