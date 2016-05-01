<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理员登录</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	 <script  type="text/javascript" src="bootstrap/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
</head>
<body>
<%@include file="/common/header.jsp"%>
	<div class="container">
	    	<br><br><br><br>
	            <h3 align="center">登录</h3>
	    	<div class="row">
	    		<div class="col-lg-4 col-sm-4 col-sm-4"></div>
	    		<div class="col-lg-8 col-sm-8 col-sm-8">
	    			<form action="<%=request.getContextPath()%>/manager/act=login" method="post" id="login">
		    			<div class="row">	    			
			    			<div class="col-lg-6 col-sm-6 col-sm-6">
			    				<div class="input-group input-lg">	          
			                		<span class="input-group-addon glyphicon glyphicon-user"></span>
			               		 	<input type="text" id="input_name" name="name" class="form-control " placeholder="请输入姓名"  >			
			                	</div> 
			                </div>                
			    			<div class="col-lg-6 col-sm-6 col-sm-6">
			    			<br>
			    				<div><span id="span_name_error" style="color: red;"></span></div>   
			    			</div>
			    		</div>
			    		
			    		
		    			<div class="row">
			    			<div class="col-lg-6 col-sm-6 col-sm-6">
				    			<div class="input-group input-lg">
				                   <span class="input-group-addon glyphicon glyphicon-lock"></span>
				                    <input type="password" id="input_password" name="password" class="form-control input-sm" placeholder="请输入密码"/>
								</div>
							</div>		                          
			    			<div class="col-lg-6 col-sm-6 col-sm-6">
			    			<br>
			    				<div><span id="span_password_error" style="color: red;"></span></div>   
			    			</div>
		    			</div>
		    			
		    					    					    				    				    	
		    			<div class="row">
			    			<div class="col-lg-6 col-sm-6 col-sm-6">
			    				<div align="center">
	                    			<input type="submit" value="登录" class="btn btn-success"/>
	               				 </div>
			    			</div>		    				
		    			</div>
	    			</form>
	    		</div>
	    	</div>	
	    </div>


</body>
</html>