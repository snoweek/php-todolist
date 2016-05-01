<?php
    function add_artical($submit_title,$submit_content,$submit_work_id){  
        session_start(); 
        $dbc=connect_mysql();    
        $current_user_id=$_SESSION['user_id'];     
        if($dbc){
            $q='insert into artical(title,content,user_id,work_id,write_time)values(?,?,?,?,NOW())';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_bind_param($stmt,'ssii',$title,$content,$user_id,$work_id);
            $title=$submit_title;
            $content=$submit_content;
            $user_id=$current_user_id;
            $work_id=$submit_work_id;
            mysqli_stmt_execute($stmt);
            if(mysqli_stmt_affected_rows($stmt)==1){
             $q='select artical_id from artical where title=? and user_id=?';
                $stmt=mysqli_prepare($dbc,$q);
                mysqli_stmt_bind_param($stmt,'si',$title,$user_id);
                $title=$submit_title;
                $user_id=$current_user_id;
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt); 
                mysqli_stmt_bind_result($stmt,$artical_id);           
                while(mysqli_stmt_fetch($stmt)){                   
                    $message['artical_id']=$artical_id;
                    $json_message=json_encode($message);
                    return $json_message;
                }               
            }
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }else{
            die('Could not connect: ' . mysql_error());
        }
    }
    function query_work_artical($current_work_id){
        $dbc=connect_mysql();           
        if($dbc){
            $artical_list=array();          
            $q='select title,artical_id from artical where work_id=? order by write_time desc';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_bind_param($stmt,'i',$work_id);
            $work_id=$current_work_id;
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); 
            mysqli_stmt_bind_result($stmt,$title,$artical_id);           
            while(mysqli_stmt_fetch($stmt)){ 
                $artical=array();            
                $artical['artical_id']=$artical_id;
                $artical["title"]=$title;
                $artical_list[]=$artical;
            }
            $artical_json=json_encode($artical_list);
            return $artical_json;         
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }else{
            die('Could not connect: ' . mysql_error());
        }
    }
    function query_all_artical($page_current,$page_size){
        $dbc=connect_mysql(); 
        $start=($page_current-1)*$page_size;
        
        //$dbc=connect_mysql(); 
        //$start=$page_current*$page_size;
        //$end= ($page_current+1)*$page_size;          
        if($dbc){
            $l=array();
           $list=array();          
            $q="select artical.artical_id,artical.title,user.user_id,user.name from artical left join user on artical.user_id=user.user_id  order by artical.write_time desc limit $start,$page_size";
           //$q='select artical.artical_id,artical.title,user.user_id,user.name from artical left join user on artical.user_id=user.user_id  order by artical.write_time desc';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); 
            mysqli_stmt_bind_result($stmt,$artical_id,$title,$user_id,$name);           
            while(mysqli_stmt_fetch($stmt)){ 
                $artical=array(); 
                $user=array();           
                $artical['artical_id']=$artical_id;
                $artical["title"]=$title;
                $user['user_id']=$user_id;
                $user["name"]=$name;
                $l["artical"]=$artical;
                $l["user"]=$user;
                $list[]=$l;

            }
           return $list;      
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }else{
            die('Could not connect: ' . mysql_error());
        }
    }



    function query_one_artical($current_artical_id){
        $dbc=connect_mysql();           
        if($dbc){
            $artical_list=array();          
            $q='select title,content from artical where artical_id=?';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_bind_param($stmt,'i',$artical_id);
            $artical_id=$current_artical_id;
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); 
            mysqli_stmt_bind_result($stmt,$title,$content);           
            while(mysqli_stmt_fetch($stmt)){ 
                $artical=array();                           
                $artical["title"]=$title;
                $artical['content']=$content;
                $artical_list[]=$artical;
            }
            $artical_json=json_encode($artical_list);
            return $artical_json;         
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }else{
            die('Could not connect: ' . mysql_error());
        }
    }

     function delete_artical($submit_artical_id){
        $dbc=connect_mysql();
        $q='delete from artical where artical_id=?';
        $stmt=mysqli_prepare($dbc,$q);
        mysqli_stmt_bind_param($stmt,'i',$artical_id);
        $artical_id=$submit_artical_id;
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);

    }
?>