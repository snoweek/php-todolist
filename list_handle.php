<?php 
    require "./todolist.php"; 
    $act=$_GET["act"];
    if($act=="add"){
        $content=$_POST['content'];
        add_list($content);
        header("Location: ./list.php");          
        exit; 
    }else if($act=="delete"){
        $list_id=$_GET['list_id'];
        delete_list($list_id);
        header("Location: ./list.php");          
        exit;         
    }
?>