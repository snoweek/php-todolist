<?php 
    require "./todolist.php"; 
   // $dbc=mysqli_connect('127.0.0.1', 'root','123456','todolist');
          
    //while($i=0;$i<2;$i++){
/*$list['name']="sunyan";
$list['age']=22;
$list_merge[]=$list;
$$list['name']="zhanglan";
$list['age']=24;
$list_merge[]=$list;   
$list_json=json_encode($list_merge);
echo $list_json;
$list_j=json_decode($list_json); 
foreach($list_j as $key=>$list){
    echo "$key<ul>";
    foreach($list as $k=>$v){
        echo "<li>$v</li>";        
    }
    echo"</ul>";
}                   
foreach($list_merge as $key=>$v){
    echo "$key<ul>";        
    echo "<li>$v->name</li>";
    echo "<li>$v->age</li>";    
    echo"</ul>";
}


$list['name']="sunyan";
$list['age']=22;
$list_merge[]=$list;
$$list['name']="zhanglan";
$list['age']=24;
$list_merge[]=$list;   
foreach($list_merge as $key=>$list){
    echo "$key<ul>";
    foreach($list as $k=>$v){
        echo "<li>$v</li>";        
    }
    echo"</ul>";
}



    
 


$json = '[{"name":"sunyan","age":22},{"name":"zhanglan","age":24}]';
$result = json_decode($json);
foreach($result as $key => $value) {
    if($value) {
        echo "<br>$value->name<br>"." $value->age<br>";
    }    
}
echo $result;





   
        $new_password="123456";
        $json_message=changepassword($new_password);
        $message=json_decode($json_message);   
        echo $message->changepassword;*/


        //echo $json_message;


/*$message['login']='成功';
$json_message=json_encode($message,JSON_UNESCAPED_UNICODE);
echo $json_message;
var_dump($json_message);
$a=json_decode($json_message);  
echo $a->login;


$arr = array ('a'=>urlencode('芒果小站'));
echo urldecode(json_encode($arr));*/

$dbc=connect_mysql();
//$name="孙岩";
$name=null;
$password="123456sy";
//$q="select * from usermessage where (name=$name or name is null)and(password=$password or $password is null)";
$q="select * from usermessage where 1=1 and (name='$name'or name is null)and(password='$password' or password is null)";
//$q="select * from usermessage where name is null";

$r=mysqli_query($dbc,$q);
if($r){
    echo "success";
    while($row=mysqli_fetch_array($r)){
    echo $row["name"];
    echo $row['password'];
    }
}else{
    echo "fail";
}
?>