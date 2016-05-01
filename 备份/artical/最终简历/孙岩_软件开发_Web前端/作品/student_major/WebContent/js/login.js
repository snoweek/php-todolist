
  	$(function(){
  		var name;
		$("#input_name").blur(function(){
				name=$("#input_name").val().replace(/\s/g,'');//去掉头尾空格
				$.ajax({
		            type: "post",
		            dataType: "text",
		            url: "/Design/manager?act=text_name",    
		            data: {name:name}, 
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
			var password=$("#input_password").val();
			if(name){				 
				 $.ajax({
			            type: "post",  
			            dataType: "text",
			            url: "/Design/manager?act=login",    
			            data: {name:name,
			            		password:password,
			            		},
			            success: function(data){ 
			            	if(data=="login success"){
			            		$("#register_message").text("恭喜你，登录成功");
			            		location.href="/Design/index.jsp"			            				            		
			            	}else if(data=="password error"){
			            		$("#span_password_error").text("密码错误");
			            	}			            	
			            }	
				 	});			
				}		
		});	
  	});
  	
