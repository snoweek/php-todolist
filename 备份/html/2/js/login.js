
  	$(function(){  	
		$("#input_name").blur(function(){
				var name=$("#input_name").val().replace(/\s/g,'');//去掉头尾空格
				$.ajax({
		            type: "post",
		            dataType: "text",
		            url: "/todolist/login_handle.php?act=check_name",    
		            data: {username:name}, 
		            success: function(data){ 
		            	if(data=="name exit"){
		            		$("#span_name_error").text(" ");		            				            		
		            	}else if(data=="name no exit"){
		            		$("#span_name_error").text("此用户名未被注册");
		            	}			            	
		            }	
			 	});					            															
		});
		
		$("#login").submit(function(e){
			e.preventDefault();
			var name=$("#input_name").val().replace(/\s/g,'');
			var password=$("#input_password").val();
			if(name.length!=0){				 
				 $.ajax({
			            type: "post",  
			            dataType: "text",
			            url: "/todolist/login_handle.php?act=login_user",    
			            data: {username:name,
			            		password:password,
			            		},
			            success: function(data){ 
			            	if(data=="login success"){
			            		location.href="/todolist/index.php"			            				            		
			            	}else if(data=="password error"){
			            		$("#span_password_error").text("密码错误");
			            	}			            	
			            }	
				 	});			
				}		
		});	
  	});
  	
