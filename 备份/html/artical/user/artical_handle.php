<?php 
    require "../functions/connect_mysql.php";  
    require "../functions/artical_function.php";  
    $act=$_GET["act"];
    if($act=="add_artical"){
        $title=$_POST['artical_title'];
        $content=$_POST['artical_content'];
        $work_id=$_POST['work_id'];
        $result=add_artical($title,$content,$work_id);
        echo $result;     
    }else if($act=="query_all_artical"){
        $work_id=$_POST['work_id'];
        $result=query_work_artical($work_id);
        echo $result;  
    }else if($act=="delete_artical"){
       $artical_id=$_POST['artical_id'];
        delete_artical($artical_id);       
    }else if($act=="query_one_artical"){
       $artical_id=$_POST['artical_id'];
        $result=query_one_artical($artical_id);
        echo $result;  
    }       
?>