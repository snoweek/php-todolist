$(function(){
	$("#input_name").blur(function(){
		var name=$("#input_name").val().replace(/\s/g,'');//去掉头尾空格
			$.ajax({
				type: "post",
				dataType: "json",
				url: "/artical/login_handle.php?act=check_name",
				data: {username:name}, 
				success: function(json_message){ 
				var data=(eval(json_message)).check_name;
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
					dataType: "json",
					url: "/artical/login_handle.php?act=login_user",
					data: {username:name,
					password:password,
				},
				success: function(json_message){ 
					var data=(eval(json_message)).login;
					if(data=="login success"){
						location.href="/artical/index.php"						
					}else if(data=="password error"){
						$("#span_password_error").text("密码错误");
					}
				}
			});			
		}
	});
});
