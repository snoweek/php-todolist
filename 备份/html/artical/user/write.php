<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>写文章</title>
    <link href="../public/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script  type="text/javascript" src="../public/bootstrap/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../public/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="../public/ueditor/ueditor.all.js"></script>
    <script type="text/javascript" src="../js/write.js"></script>
</head>
<body>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-2"><!--文集区域-->  
       <input type="hidden" name="work_id" id="work_id" value="1">   
            <p class="input-group-addon glyphicon glyphicon-plus btn" id="create_work">&nbsp新建文集</p>
            <br>
            <div  id="add_work">                        
                <input type="text" id="work_name" class="form-control " placeholder="请输入文集名..."  ><br>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" value="取消" class="btn btn-default" id="delete_create_work">&nbsp;&nbsp;&nbsp
                <input type="button" value="提交" class="btn btn-success" id="submit_work">           
            </div> <!-- 点击可以添加文集--> 
            <div id="clicked_work"></div>
                           
             <!-- 列出用户的所有文集--> 

               <?php
                    echo "<table id=\"work_list\">";
                    require "../functions/connect_mysql.php";
                    require "../functions/work_function.php";
                    $work_list=query_all_work();
                    for($i=0;$i<count($work_list);$i++){
                        echo"<tr id=\"work\">";
                        echo"<td id=\"work_name\" class=\"glyphicon glyphicon-book btn\" >&nbsp;&nbsp;";
                        echo $work_list[$i]["name"];                                        
                        echo "</td >"; 
                        echo "<td id=\"work_id\">";                      
                        //echo "<input type=\"hidden\" name=\"work_id\" id=\"hidden\" value=\"".$work_list[$i]["work_id"]."\"> ";
                        echo $work_list[$i]["work_id"];
                        echo "</td>"; 
                                 
                        echo "</tr>";

                    }
                     echo "</table>";
                ?>                           
            <!-- 列出用户的所有文集-->              
            <span id="message"></span>                                                                                          
        </div>



                  
        <div class="col-lg-2" ><!--文章区域-->             
            <p class="input-group-addon glyphicon glyphicon-pencil  btn" id="create_artical">
                &nbsp新建文章
            </p>
            <div id="clicked_artical"></div>
            <table class="table table-hover" id="artical_list">                                        
            </table> 
                 
        </div>




        
        <div class="col-lg-8"><!--ueditor区域-->
        <?php
             require "../html/login_header.html"; 
        ?>   
        <p id="message"> </p> 
        <form action="artical_handle.php?act=add_artical" method="post">        
                    文章标题<br>
                    <p id="message"></p>
                    <div class="form-group">
                        <input type="text" id="form_artical_title" class="form-control " value="" />
                    </div>
                    文章内容<br>
                   <div id="artical_content">
                        <script id="container" type="text/plain" style="height:450px;">
                        <div>  </div>              
                        </script>
                   </div>
                   <input type="button" value="提交 " id="submit_artical">　
        </form>                        
                    <script type="text/javascript">
                    var ue = UE.getEditor('container');
                    ue.setContent();
                    </script>
        </div>
    </div>
</div>
<?php  $i=1;?>
<?php echo $i;?>

</body>
</html>