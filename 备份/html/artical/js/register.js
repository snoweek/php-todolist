$(function(){
	var name;
	var password;
	var email;	
	$("#input_name").blur(function(){
		if($("#input_name").val().length<2||$("#input_name").val().length>20){
			$("#span_name_error").text("用户名长度必须是2-20位");				
		}else{
			name=$("#input_name").val().replace(/\s/g,'');//去掉头尾空格
			$.ajax({
				type: "post",
				dataType: "json",
				url: "/artical/register_handle.php?act=check_name",    
				data: {username:name}, 
				success: function(json_message){ 
					var data=(eval(json_message)).check_name;
					if(data=="name exit"){
						$("#span_name_error").text("此用户名已经被注册");		            				            		
				}else if(data=="name no exit"){
						$("#span_name_error").text("");
					}			            	
				}	
			});													
		}	
	});
	$("#input_password").blur(function(){
		if($("#input_password").val().length<6||$("#input_password").val().length>10){
			$("#span_password_error").text("密码长度必须是6-10位");
				
		}else{
			password=$("#input_password").val();
			$("#span_password_error").text("");	
		}	
	});
	$("#input_email").blur(function(){
		var regex = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if (!regex.test($("#input_email").val())) {
			$("#span_email_error").text("邮箱格式不正确");	
		}else{
			email=$("#input_email").val();
			$("#span_email_error").text("");
		}
	});

	$("#register").submit(function(e){
		e.preventDefault();
		if(name && password && email){				 
			$.ajax({
				type: "post",//使用post方法访问后台  
				dataType: "json",//返回json格式的r数据  
				url: "/artical/register_handle.php?act=register_user",//要访问的后=台地址    
				data:{ 
					username:name,
					password:password,
						email:email
				},//要发送的数据  
				success: function(json_message){ 
					var data=(eval(json_message)).register;
				if(data=="success"){			            		
						location.href="/artical/index.php"				            				            		
					}else if(data=="system"){
						//location.href="/artical/register.php"
						$("#register_message").text("注册失败，请重新注册");		
					}			            	
				}	
			});			
		}
			
	});	
});
