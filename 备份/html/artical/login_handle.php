<?php 
    require "./functions/connect_mysql.php";  
    $act=$_GET["act"];
    if($act=="check_name"){
        require "./functions/check_name.php"; 
        $username=$_POST['username'];
        $result=check_name($username);
        echo $result;   
    }else if($act=="login_user"){
         require "./functions/login_function.php"; 
        $username=$_POST['username'];
        $password=$_POST['password'];
        $result=login($username,$password);
        echo $result; 
    }      
?>