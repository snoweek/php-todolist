<?php
    session_start();
    if(!isset($_SESSION['username'])){
                echo"loginfirst";
        }else{
    if(isset($_GET['newpassword'])){
    	
    	$dbc=@mysqli_connect('127.0.0.1', 'root','123456','todolist') 
            or die('could not connect to mysql');
        mysqli_set_charset($dbc,'utf8');
    	 	$newpassword=$_GET['newpassword'];
    	 	$q="update usermessage set password='$newpassword' where user_id={$_SESSION['user_id']}";
    	 	$r=mysqli_query($dbc,$q);
    	 	if($r){
    	 		echo"success";
    	 	}else{
    	 		echo"fail";
    	 	}	
        mysqli_close($dbc);
    }
}
    	?>