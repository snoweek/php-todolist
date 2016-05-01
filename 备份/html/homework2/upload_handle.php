<?php
    header("Content-Type:text/html;charset=utf-8");
    require "upload.php";
    $name=$_POST["name"];
    $password=$_POST["password"];
    $gender=$_POST["gender"];
    $interests=$_POST["interests"];
    $content=$_POST["content"];
    $MAX_FILE_SIZE=$_POST["MAX_FILE_SIZE"];
    echo "your name is:".$name."<br>";
    echo "your password is:".$password."<br>";
    echo "your gender is:".$gender."<br>";
    echo "your content is:".$content."<br>";
    echo "文件大小不能超过".$MAX_FILE_SIZE."<br>";
    foreach($interests as $a){
        echo $a."<br>";
    }
    $error=$_FILES['picture']['error'];
    foreach($error as $e){
        echo $e;
        switch($e){
            case 0:upload($_FILES['picture'],"upload/");
            echo "文件上传成功<br>";
                break;
            case 1:
                echo "上传的文件超过配置文件限制的数值<br>";
                break;
            case 2:
                echo "上传的文件超过表单限制的数值<br>";
                break;
             case 3:
                echo "文件只有部分上传<br>";
                break;
             case 3:
                echo "没有选择文件上传<br>";
                break;

        }
    }
    
    
    echo "<a href=\"add.html\">继续添加图片</a><br>";
    echo "<a href=\"show_picture.php\">显示图片</a><br>";
   /* $size=sizeof($_FILES['picture']['name']);
    for ($i=0; $i<$size; $i++){
        $picturename=$_FILES['picture']['name'][$i];
       $tmp_file=$_FILES['picture']['tmp_name'][$i];
        $desndertination="upload/".$picturename;
        echo '<p>picture:'.$picturename.'</p>';
        echo '<p>tmp_file:'.$tmp_file.'</p>';
        move_uploaded_file($tmp_file,$destination);
    }*/


    /*foreach($picture["name"]as $picturename){        
        echo $picturename;
        //$destination="upload/".$picturename;
    }*/    
?>