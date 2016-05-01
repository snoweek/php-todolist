<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>首页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script  type="text/javascript" src="./bootstrap/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./upload.js"></script>
</head>
    <body>
      <?php 
     $dir='./upload/';
     if(is_dir($dir)){//is_dir判断$dir表示的是否是一个文件夹，结果返回一个布尔值，若是，则返回一个真值否则，返回0.     
      if($dh=opendir($dir)){//打开文件夹$dir，若打开则条件为真，否则为假     
        while( ($filename=readdir($dh)) != false ){//进行while 循环，readdir函数读取文件夹内容，直到内容读取完毕       
        $s1=$filename;
        $s2='.png';
        $pos=strpos($s1,$s2);//strpos函数：当$s1中包括$s2字符串时，返回一个真值，赋给$pos
        if($pos!=false){
          $filepath=$dir.$filename;
          echo "<img src=\"" . $filepath . "\" width=\"100px\" ><br/>";
          echo $filename."<br/>";           
        }      
       }
       closedir($dh);
      }
     }
?>                    
    </body>
</html>