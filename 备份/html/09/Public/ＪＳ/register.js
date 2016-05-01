$(function(){
	$("span").hide();
	$("#register").submit(function(){
		if($("#username").val().length>0){
			username=$("#username").val();
			//$("#usernamep").removeClass("error");
			//$("#usernameerror").hide();
		}else{
			//$("#usernamep").addClass("error");
			$("#usernameerror").show();
		}
		if($("#password").val().length>0){
			password=$("#password").val();
			//$("#passwordp").removeClass("error");
			//$("#passworderror").hide();
		}else{
		//$("#passwordp").addClass("error");
		$("#passworderror").show();
		}
		if(username && password){
			var data=new Object();
			data.username=username;
			data.password=password;
			var option=new Object();
			option.data=data;
			option.dataType="text";
			option.type="get";
			option.success=function(response){
				if(response=="success"){
					//$("#register").hide();
					$("#registermessage").text("恭喜你，注册成功");
					//$("#registermessage").addClass("error");
				}else if(response=="registered"){
					$("#registermessage").text("对不起，此用户名已经注册");
					//$("#registermessage").addClass("error");
				}else if(response=="system"){
					$("#registermessage").text("对不起，由于系统问题请稍后再试");
					//$("#registermessage").addClass("error");
				}
			};
			option.url="register_ajax.php";
			$.ajax(option);
		}
		return false;
	});
});