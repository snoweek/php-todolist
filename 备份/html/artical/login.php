<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>登录页面</title>
	<link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script  type="text/javascript" src="public/bootstrap/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
</head>
<body>
<div class="container">
	    <div class="row">
	        <?php                     
                require "./html/login_register_header.html";                       
            ?>  
	        </div>
	    </div>
	    	<div class="row">
		        <div class="col-lg-12 text-left" id="index">
		             <h1 class="text-danger text-center">抒写</h1>
		             <h2 class="text-danger text-center">交流故事，沟通思想</h2>
		        </div>
	    	</div>
	            <h3 align="center">登录</h3>
	    	<div class="row">
	    		<div class="col-lg-4 col-sm-4 col-sm-4"></div>
	    		<div class="col-lg-8 col-sm-8 col-sm-8">
	    			<form action="login_handle.php" method="post" id="login">
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
	                    			<input type="reset" value="重置" class="btn btn-success"/>
	               				 </div>
			    			</div>		    				
		    			</div>
	    			</form>
	    		</div>
	    	</div>	
	    </div>
	   <span id="register_message" style="color: red;"></span> 
</body>
</html>