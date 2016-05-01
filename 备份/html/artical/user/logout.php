<?php 
    
    session_start();  
    session_destroy();
    setcookie('phpsessid','',time()-3600);      
    header("Location: ../index.php"); 
    exit;  
     
?>