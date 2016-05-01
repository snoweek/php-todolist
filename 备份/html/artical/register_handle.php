<?php
    require "./functions/connect_mysql.php";  
    require "./functions/check_name.php"; 
    require "./functions/register_function.php"; 
    //require "todolist.php";
    $act=$_GET["act"];
    if($act=="check_name"){
        $username=$_POST['username'];
        $result=check_name($username);
        echo $result;   
    }else if($act=="register_user"){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $result=register($username,$password,$email);
        echo $result; 
    }      
?>