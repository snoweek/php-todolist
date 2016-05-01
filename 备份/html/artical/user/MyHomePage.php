<?php
   require "../functions/connect_mysql.php";
                    require "../functions/work_function.php";
                     $user_id=$_GET["user_id"];
                    $work_list=query_user_work($user_id);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>首页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../public/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script  type="text/javascript" src="../public/bootstrap/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../public/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/MyHomePage.js"></script>
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
                    
                    <div id="clicked_work"></div>
                   <?php
                   

                      echo "<table id=\"work_list\">";
                    for($i=0;$i<count($work_list);$i++){
                        echo"<tr id=\"work\">";
                        echo"<td id=\"work_name\" class=\"glyphicon glyphicon-book btn\" >&nbsp;&nbsp;";
                        echo $work_list[$i]["name"];                                        
                        echo "</td >"; 
                        echo "<td id=\"work_id\">";                      
                        echo "<input type=\"hidden\" name=\"work_id\" id=\"hidden\" value=\"".$work_list[$i]["work_id"]."\"> ";
                        //echo $work_list[$i]["work_id"];
                        echo "</td>"; 
                                 
                        echo "</tr>";

                    }
                     echo "</table>";
                ?>                          
                </div>
                <div class="col-sm-8 col-md-8">
                <div id="clicked_artical"></div>
            <table class="table table-hover" id="artical_list">                                        
            </table> 
                    
                </div>
            </div>          
        </div>                  
    </body>
</html>



