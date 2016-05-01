<?php 
    require "./todolist.php"; 
    $act=$_GET["act"];
    if($act=="check_name"){
        $username=$_POST['username'];
        $result=check_name($username);
        echo $result;   
    }else if($act=="login_user"){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $result=login($username,$password);
        echo $result; 
    }      
?>