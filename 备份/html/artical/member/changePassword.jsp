<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>更改密码</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script  type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="../js/changePassword.js"></script>
</head>
<body>
<%@include file="/common/header.jsp"%>
<div class="container">
	    	<div class="row">
		        <div class="col-lg-12 text-left" id="index">
		             <h1 class="text-danger text-center">抒写</h1>
		             <h2 class="text-danger text-center">交流故事，沟通思想</h2>
		        </div>
	    	</div>
	           
	    	<div class="row">
	    		<div class="col-lg-4 col-sm-4 col-sm-4"></div>
	    		<div class="col-lg-8 col-sm-8 col-sm-8">
	    			<form action="<%=request.getContextPath()%>/member/loginUser?act=changepassword"  method="post" id="changePassword">
		    			<div class="row">	    			
			    			<div class="col-lg-6 col-sm-6 col-sm-6">
			    				<div class="input-group input-lg">	
			    				          
			                		<span class="input-group-addon glyphicon glyphicon-lock"></span>
			                		
			               		 	<input type="password" id="old_password"  class="form-control " placeholder="请输入原来的密码"  >			
			                	</div> 
			                </div>                
			    			<div class="col-lg-6 col-sm-6 col-sm-6">
			    			<br>
			    				<div><span id="old_password_error" style="color: red;"></span></div>   
			    			</div>
			    		</div>
			    		
			    		
		    			<div class="row">
			    			<div class="col-lg-6 col-sm-6 col-sm-6">
				    			<div class="input-group input-lg">
				                   <span class="input-group-addon glyphicon glyphicon-lock"></span>
				                    <input type="password" id="new_password"  class="form-control input-sm" placeholder="请输入新密码"/>
								</div>
							</div>		                          
			    			<div class="col-lg-6 col-sm-6 col-sm-6">
			    			<br>
			    				<div><span id="new_password_error" style="color: red;"></span></div>   
			    			</div>
		    			</div>
		    			
		    			<div class="row">
			    			<div class="col-lg-6 col-sm-6 col-sm-6">
				    			<div class="input-group input-lg">
				                   <span class="input-group-addon glyphicon glyphicon-lock"></span>
				                    <input type="password" id="confirm_password"  class="form-control input-sm" placeholder="请确认新密码"/>
								</div>
							</div>		                          
			    			<div class="col-lg-6 col-sm-6 col-sm-6">
			    			<br>
			    				<div><span id="confirm_password_error" style="color: red;"></span></div>   
			    			</div>
		    			</div>
		    			
		    				    					    				    				    	
		    			<div class="row">
			    			<div class="col-lg-6 col-sm-6 col-sm-6">
			    				<div align="center">
	                    			<input type="submit" id="submit_password" value="更改密码" class="btn btn-success"/>
	               				 </div>
			    			</div>		    				
		    			</div>
	    			</form>
	    		</div>
	    	</div>	
	    </div>

</body>
</html>