<?php 
    require "./todolist.php";
    session_start();  
    logout(); 
    header("Location: ./index.php"); 
    exit;  
     
?>