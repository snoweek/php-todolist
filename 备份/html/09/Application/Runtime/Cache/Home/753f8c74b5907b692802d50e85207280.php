<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <title>ueditor的使用</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/sunyan2015/022/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="/sunyan2015/022/Public/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/sunyan2015/022/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/sunyan2015/022/Public/ueditor/ueditor.all.js"></script>
    <script type="text/javascript" src="/sunyan2015/022/Public/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function newtext(){
            var textname=document.getElementById('textname');
            textname.style.display="block";
        }
        function addhtml(){
            var ueditor=document.getElementById('ueditor');
            var text=document.getElementById('text').value();



        }
    </script>
</head>
<body>
<div class="container">
    <div class="row"><br><br><br>
        <div class="col-lg-2">
            <a href="<?php echo U('Home/Index/haveloginindex');?>">首页</a>
            <form action="writer" method="post">
                <div class="input-group input-lg">
                    <span class="input-group-addon glyphicon glyphicon-plus"></span>
                    <button type="button"  onclick="newtext()" class="form-control ">
                    新建文集
                    </button>
                </div>
                <br>
                <div id="textname" style="display:none;">
                    <input type="text" name="textname"  >
                    <input type="submit" value="新建">
                </div>
                <input type="hidden" name="orderhidden" value="newtext" />
            </form>
            <hr>
            <ul>
                <?php if(is_array($select)): foreach($select as $key=>$text): ?><li>
                     <form action="writer" method="post" id="text">
                         <!--<button type="submit" class="btn btn-default" onclick="addhtml()">
                         <?php echo ($text["textname"]); ?>
                     </button>-->
                         <input type="submit" value="<?php echo ($text["textname"]); ?>">
                         <input type="hidden" name="orderhidden" value="textname" />
                     </form>
                     </li><?php endforeach; endif; ?>
            </ul>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
                <form action="writer" method="POST" id="ueditor">
                    文章标题<br>
                    <div class="form-group">
                        <input type="text" name="title" class="form-control " />
                    </div><br><br>
                    文章内容<br>
                    <script id="container" name="content" type="text/plain" style="height:450px;">
                    </script>
                    <input name="info" type="hidden" id="info">
                    <input type="submit" value=" 提交 ">　
                    <input type="hidden" name="orderhidden" value="newartical" />
                </form>
                <script type="text/javascript">
                    var ue = UE.getEditor('container');
                </script>
        </div>
    </div>
</div>
<?php echo ($content); ?>

</body>
</html>