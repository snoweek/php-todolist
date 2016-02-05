<?php 
    /*include("./config.php");
    require "./todolist.php"; 
    $act=$_GET["act"];
    if($act=="add"){
        $content=$_POST['content'];
        add_list($content);
        header("Location: ./list_handle.php?act=show");          
        exit; 
    }else if($act=="delete"){
        $list_id=$_GET['list_id'];
        delete_list($list_id);
        header("Location: ./list_handle.php?act=show");          
        exit;         
    }else if($act=="show"){
        session_start(); 
        $user_id=$_SESSION['user_id'];
        $result=show_list($user_id);
        $smarty->assign('row',$result);        
        $smarty->display('list.php');
    }  */  
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