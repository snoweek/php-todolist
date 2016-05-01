$(function(){
	var old_password;
	var new_password;
	var confirm_password;
	$("#old_password").blur(function(){
		old_password=$("#old_password").val();
		$.ajax({
            type: "post",  
            dataType: "text",
            url: "/ToDoList/member/loginUser?act=text_old_password",    
            data: {
            	old_password:old_password         	
            	},
            success: function(data){
            	if(data=="correct"){
            		$("#old_password_error").text("");
            		
            	}else if(data=="wrong"){
            		$("#old_password_error").text("原密码错误");
            	}
            	
            }	
	 	});		
	});
	
	
	$("#new_password").blur(function(){
		if($("#new_password").val().length<6||$("#new_password").val().length>10){
			$("#new_password_error").text("密码长度必须是6-10位");
			
		}else{
			$("#new_password_error").text("");	
			new_password=$("#new_password").val();
			
		}	
	});
	
	
	
	
	$("#confirm_password").blur(function(){
		if($("#confirm_password").val()!=$("#new_password").val()){
			$("#confirm_password_error").text("请重新确定新密码");			
		}else{
			$("#confirm_password_error").text("");
			confirm_password=$("#confirm_password").val();
		}		
	});
	
	$("#changePassword").submit(function(e){	
		e.preventDefault();
		if(old_password &&new_password &&confirm_password){
			$.ajax({
	            type: "post", 
	            dataType: "text", 
	            url: "/ToDoList/member/loginUser?act=changepassword",   
	            data: {new_password:new_password},
	            success: function(data){ 
	            	if(data=="success"){
	            		//$("#register_message").text("恭喜你，注册成功");
	            		location.href="/ToDoList/index.jsp"	;		            				            		
	            	}		            	
	            }	
		 	});			
		}
		
	});
});