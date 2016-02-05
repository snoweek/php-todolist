<?php
session_start();
require "./html/background.html";	
if(isset($_SESSION['user_id'])){
	require "./html/login_header.html";	
}else{
	require "./html/no_login_header.html";	
}
?>
