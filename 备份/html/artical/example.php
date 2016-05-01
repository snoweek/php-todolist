<?php
echo date("Y-m-d H:i:s",time());
require "./functions/connect_mysql.php";  
    require "./functions/check_name.php"; 
    require "./functions/work.php"; 
    $dbc=connect_mysql();           
        if($dbc){
            /*$q='insert into user(name,password,email,register_date)values(?,?,?,?)';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_bind_param($stmt,'ssss',$name,$password,$email,$register_date);
            $name="ly";
            $password="123456";
            $email="145@qq.com";
            $register_date=date("Y-m-d H:i:s",time());
            mysqli_stmt_execute($stmt);
            if(mysqli_stmt_affected_rows($stmt)==1){
                echo "success";
            }else{
                echo "fail";
            } 
 
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
            $q='select user_id from user where name=? and password=?';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_bind_param($stmt,'ss',$name,$password);
            $name=$username;
            $password=$password;
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); 
            mysqli_stmt_bind_result($stmt,$user_id);      
            if(mysqli_stmt_affected_rows($stmt)==1){
                while(mysqli_stmt_fetch($stmt)){
                    $user_id=$user_id;               
                } 
                $_SESSION['username']=$username;
                $_SESSION['user_id']=$user_id; 
                $_SESSION['password']=$password;
                $message['login']='login success';
                $json_message=json_encode($message);
                return $json_message;
            }else{
                $message['login']='password error';
                $json_message=json_encode($message);
                return $json_message;
            } 
            mysqli_stmt_close($stmt);
            mysqli_close($dbc); */    

           /* $q='select * from user where name=?';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_bind_param($stmt,'s',$name);
            $name="sy";
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);                          
            if(mysqli_stmt_affected_rows($stmt)==1){
               echo "success";
            }else{
                echo "fail";
            } 
            mysqli_stmt_close($stmt); 
            mysqli_close($dbc);  
            $q='insert into work(name,user_id,create_time)values(?,?,NOW())';
            $stmt=mysqli_prepare($dbc,$q);
            mysqli_stmt_bind_param($stmt,'si',$name,$user_id);
            $name="first";
            $user_id=7;
            mysqli_stmt_execute($stmt);
            if(mysqli_stmt_affected_rows($stmt)==1){
                echo "success";
                $work=array();
                $q='select work_id from work where name=? and user_id=?';
                $stmt=mysqli_prepare($dbc,$q);
                mysqli_stmt_bind_param($stmt,'si',$name,$user_id);
                $name="first";
                $user_id=7;
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt); 
                mysqli_stmt_bind_result($stmt,$work_id);           
                while(mysqli_stmt_fetch($stmt)){                   
                    $work['work_id']=$work_id;
                }
                echo $work["work_id"];
                
            } else{
                echo "fail";
            }     
        }else{
            die('Could not connect: ' . mysql_error());
        }*/
        $work_list=show_work();
        for($i=0;$i<count($work_list);$i++){
            echo $work_list[$i]["work_id"];
            echo $work_list[$i]["name"];
        }
    }





    <?xml version="1.0"?>
<?xml-stylesheet type="text/xsl" href="configuration.xsl"?>

<!-- Put site-specific property overrides in this file. -->

<configuration>
    <property>
        <name>fs.default.name</name>
        <value>hdfs://localhost:9000</value>

    </property>
    <property>
                        
        <name>hadoop.tmp.dir</name>
        <value>/home/sunyan/software/hadoop/tmp</value>
        <description>A base for other temporary directories.</description>
        </property>

</configuration>




<?xml version="1.0"?>
<?xml-stylesheet type="text/xsl" href="configuration.xsl"?>

<!-- Put site-specific property overrides in this file. -->

<configuration>
    <property>
        <name>dfs.replication</name>
        <value>1</value>
    </property>
        <property>
             <name>dfs.namenode.name.dir</name>
             <value>f /home/sunyan/software/hadoop/tmp/dfs/name</value>
        </property>
        <property>
             <name>dfs.datanode.data.dir</name>
             <value> /home/sunyan/software/hadoop/tmp/dfs/data</value>
        </property>

</configuration>


?>