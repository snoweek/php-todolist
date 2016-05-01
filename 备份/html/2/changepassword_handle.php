<?php
    require "./todolist.php"; 
    $act=$_GET["act"];
    if($act=="check_password"){
        $old_password=$_POST["old_password"];
        $result=check_password($old_password);
        echo $result;

    }else if($act="changepassword"){
        $new_password=$_POST['new_password'];
        $result=changepassword($new_password);
        if($result=="change success"){
            logout();
        }
        echo $result;

    }
?>