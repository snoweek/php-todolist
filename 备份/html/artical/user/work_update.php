<?php
    require "../functions/connect_mysql.php";  
    require "../functions/work_function.php"; 
    $work_id=$_GET["work_id"];
    $name=query_one_work($work_id); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>文集修改</title>
    <link href="../public/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script  type="text/javascript" src="../public/bootstrap/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
        <div class="row">
            <?php                     
                require "../html/login_register_header.html";                       
            ?>  
            </div>
        </div>
           
         <div class="row">
            <div class="col-lg-4 col-sm-4 col-sm-4"></div>
            <div class="col-lg-4 col-sm-4 col-sm-4">
                <h1 align="center">修改文集名</h1>
                <form action="work_handle.php?act=update_work" method="post" id="update">
                    <div class="row">                   
                        <div class="col-lg-6 col-sm-6 col-sm-6">
                            <div class="input-group input-lg">            
                                <input type="text" id="work_name" name="work_name" value="<?php echo $name; ?>" > 
                                <input type="hidden"  name="work_id" value="<?php echo $work_id; ?>" >              
                            </div> 
                        </div>                                   
                    </div>                                
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-sm-6">
                            <div align="center">
                                <input type="submit" value="提交" class="btn btn-success"/>
                                <input type="button" value="取消" class="btn btn-success"/>
                            </div>
                        </div>                          
                    </div>
                </form>
            <div class="col-lg-4 col-sm-4 col-sm-4">
                </div>
            </div>  
        </div>
       <span id="register_message" style="color: red;"></span> 
</body>
</html>