<?php
    function add_work($workname){
        $dbc=connect_mysql(); 
        session_start(); 
        $current_user_id=$_SESSION['user_id'];          
        if($dbc){
            $q='insert into work(name,user_id,create_time)values(?,?,NOW())';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_bind_param($stmt,'si',$name,$user_id);
            $name=$workname;
            $user_id=$current_user_id;
            mysqli_stmt_execute($stmt);
            if(mysqli_stmt_affected_rows($stmt)==1){
                $q='select work_id from work where name=? and user_id=?';
                $stmt=mysqli_prepare($dbc,$q);
                mysqli_stmt_bind_param($stmt,'si',$name,$user_id);
                $name=$workname;
                $user_id=$current_user_id;
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt); 
                mysqli_stmt_bind_result($stmt,$work_id);           
                while(mysqli_stmt_fetch($stmt)){                   
                    $message['work_id']=$work_id;
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

    function query_all_work(){
        session_start();
        $dbc=connect_mysql();  
        $current_user_id=$_SESSION['user_id'];          
        if($dbc){
            $work_list=array();          
            $q='select work_id,name from work where user_id=?';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_bind_param($stmt,'i',$user_id);
            $user_id=$current_user_id;
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); 
            mysqli_stmt_bind_result($stmt,$work_id,$name);           
            while(mysqli_stmt_fetch($stmt)){ 
                $work=array();            
                $work['work_id']=$work_id;
                $work["name"]=$name;
                $work_list[]=$work;
            }            
            return $work_list;           
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }else{
            die('Could not connect: ' . mysql_error());
        }
    }
    function query_one_work($submit_work_id){
        $dbc=connect_mysql();           
        if($dbc){
                    
            $q='select name from work where work_id=?';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_bind_param($stmt,'i',$work_id);
            $work_id=$submit_work_id;
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); 
            mysqli_stmt_bind_result($stmt,$name);           
            while(mysqli_stmt_fetch($stmt)){            
               return $name;    
                
            }
            
                   
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }else{
            die('Could not connect: ' . mysql_error());
        }
    }
    function delete_work($submit_work_id){
        $dbc=connect_mysql();
        $q='delete from work where work_id=?';
        $stmt=mysqli_prepare($dbc,$q);
        mysqli_stmt_bind_param($stmt,'i',$work_id);
        $work_id=$submit_work_id;
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);

    }

    function update_work($submit_work_id,$work_name){
        $dbc=connect_mysql();
        $q='update work set name=? where work_id=?';
        $stmt=mysqli_prepare($dbc,$q);
        mysqli_stmt_bind_param($stmt,'si',$name,$work_id);
        $name=$work_name;
        $work_id=$submit_work_id;
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);

    }

    function query_user_work($submit_user_id){
        session_start();
        $dbc=connect_mysql();        
        if($dbc){
            $work_list=array();          
            $q='select work_id,name from work where user_id=?';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_bind_param($stmt,'i',$user_id);
            $user_id=$submit_user_id;
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); 
            mysqli_stmt_bind_result($stmt,$work_id,$name);           
            while(mysqli_stmt_fetch($stmt)){ 
                $work=array();            
                $work['work_id']=$work_id;
                $work["name"]=$name;
                $work_list[]=$work;
            }            
            return $work_list;           
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }else{
            die('Could not connect: ' . mysql_error());
        }
    }
?>