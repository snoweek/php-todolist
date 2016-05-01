<?php 
    require "../functions/connect_mysql.php";  
    require "../functions/artical_function.php";  
    $act=$_GET["act"];
   if($act=="query_one_artical"){
       $artical_id=$_POST['artical_id'];
        $result=query_one_artical($artical_id);
        echo $result;  
    }else if($act=="delete_artical"){
        //$artical_id=$_POST['artical_id'];
        //delete_artical($artical_id);   
        echo "sunyan";    
    }             
?>