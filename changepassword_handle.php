<?php
    require "./todolist.php"; 
    $act=$_GET["act"];
    if($act=="check_password"){
        $old_password=$_POST["old_password"];
        $json_message=check_password($old_password);
        echo $json_message;
    }else if($act="changepassword"){
        $new_password=$_POST['new_password'];
        $json_message=changepassword($new_password);
        $message=json_decode($json_message);   
        if($message->changepassword=="change success"){
            logout();
        }
        //echo "nvwiopnb";
        echo $json_message;
    }
?>