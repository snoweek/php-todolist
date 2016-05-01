<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>首页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./public/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script  type="text/javascript" src="./public/bootstrap/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="./public/bootstrap/js/bootstrap.min.js"></script>
</head>
    <body>
        <div class="container lead" id="navbar">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <br><br><br><br>
                    <h1>抒发你的心情</h1>
                    <h1>写尽你的感悟</h1>
                    <h4>随时随地，随心所欲</h4>
                    <br><br>
                    <a href="user/write.php" class="btn btn-success btn-lg">                
                        <span class="glyphicon glyphicon-pencil">&nbsp提笔写篇文章</span>
                    </a><br><br>
                    <a href="user/MyHomePage.php" class="btn btn-success btn-lg">                
                        <span class="glyphicon glyphicon-pencil">&nbsp我的主页</span>
                    </a>
                </div>
                <div class="col-sm-8 col-md-8">
                    <?php
                        session_start(); 
                        if(isset($_SESSION['user_id'])){
                            require "./html/login_header.html"; 
                        }else{
                            require "./html/no_login_header.html";  
                        }
                    ?> 
                    <?php
                        require "./functions/connect_mysql.php";
                        require "./functions/artical_function.php";
                        $dbc=connect_mysql();
                        $q="select * from artical";
                        $r=mysqli_query($dbc,$q);
                        $total_records=mysqli_num_rows($r);
                        $url=$_SERVER['PHP_SELF'];
                        $page_size=5;
                        if(isset($_GET["page_current"])){
                            $page_current=$_GET["page_current"];
                        }else{
                             $page_current=1;
                        }

                        $list=query_all_artical($page_current,$page_size);
                        echo "<table>";
                        for($i=0;$i<count($list);$i++){
                            echo"<tr>";
                            echo"<td>";
                            //echo "<a href='artical/user/MyHomePage.php?user_id=".$list[$i]["user"]["user_id"]."'>"+$list[$i]["user"]["name"]+"</a>"; 
                            echo "<a href='/artical/user/MyHomePage.php?user_id=".$list[$i]["user"]["user_id"]."'>".$list[$i]["user"]["name"]."</a>";  
                            echo "<a href='/artical/user/show_artical.php?artical_id=".$list[$i]["artical"]["artical_id"]."'><h2>".$list[$i]["artical"]["title"]."</h2></a>" ;                                   
                            echo "</td >";                                     
                            echo "</tr>";
                        }
                        echo "</table>";
                        
                       
                        $total_pages=ceil($total_records/$page_size);
                        $page_previous=($page_current<=1)?1:$page_current-1;
                        $page_next=($page_current>=$total_pages)?$total_pages:$page_current+1;
                        $navigator="<a href=index.php?page_current=$page_previous>上一页</a>";
                        for($i=1;$i<=$total_pages;$i++){
                            $navigator.="<a href=$url?page_current=$i>$i</a>";
                        }
                        $navigator.="<a href=$url?page_current=$page_next>下一页</a>";
                        //$navigator.="<a href='/artical/login.php'>下一页</a>";
                        echo $navigator;

                        echo "<br>共".$total_records."条记录,共".$total_pages."页,当前是第".$page_current."页";

                        
                    ?>

                </div>
            </div>          
        </div>                  
    </body>
</html>

