<?php 
    require "../functions/connect_mysql.php";  
    require "../functions/work_function.php";  
    $act=$_GET["act"];
    if($act=="add_work"){
        $workname=$_POST['work_name'];
        $result=add_work($workname);
        echo $result;   
    }else if($act=="delete_work"){
        $work_id=$_POST["work_id"];
        delete_work($work_id);
    } else if($act="update_work"){
        $work_id=$_POST["work_id"];
        $name=$_POST["work_name"];
        update_work($work_id,$name); 
        echo "success";
        header("Location: ../user/write.php"); 
        exit; 
    }   
?>