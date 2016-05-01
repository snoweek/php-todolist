<?php
include("./config.php");
$smarty->assign('title','走进smarty模板引擎');
$smarty->assign('content','认真学习吧！smarty模板引擎');
$smarty->display('index.html');
?>