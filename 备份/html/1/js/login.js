$(function(){
	$("span").hide();
	$("#login").submit(function(){
		if($("#username").val().length>0){
			username=$("#username").val();
		}else{
			$("#usernameerror").show();
		}
		if($("#password").val().length>0){
			password=$("#password").val();
		}else{
		$("#passworderror").show();
		}
		if(username && password){
			/*var data=new Object();
			data.username=username;
			data.password=password;
			var option=new Object();
			option.data=data;
			option.dataType="text";
			option.type="get";
			option.success=function(response){
				if(response=="success"){
					//$("#login").hide();
					//$("#loginmessage").text("恭喜你，登录成功.");
					$("#loginmessage").html("恭喜你，登录成功</br><a href=\"list.php\">点此进入你的计划页表</a></br><a href=\"logout.php\">注销</a>");
					//$("#registermessage").addClass("error");
				}else if(response=="usernamefail"){
					$("#loginmessage").text("对不起，此用户名并未注册");
					//$("#registermessage").addClass("error");
				}else if(response=="passwordfail"){
					$("#loginmessage").text("密码输入错误");
					//$("#registermessage").addClass("error");
				}
			};
			option.url="login_ajax.php";
			$.ajax(option);
			var data=new Object();
			data.username=username;
			data.password=password;
			$.ajax({
				type:"GET",
				url:"login_ajax.php",
				data:data,
				success:function(response){
					if(response=="success"){
						$("#loginmessage").html("恭喜你，登录成功</br><a href=\"list.php\">点此进入你的计划页表</a></br><a href=\"logout.php\">注销</a>");
					}else if(response=="usernamefail"){
						$("#loginmessage").text("对不起，此用户名并未注册");
					}else if(response=="passwordfail"){
						$("#loginmessage").text("密码输入错误");					//$("#registermessage").addClass("error");
					}			
				}
			});*/
			var data=new Object();
			data.username=username;
			data.password=password;
			$.get(
				"login_ajax.php",
				data,
				function (response){
					/*if(response=="success"){
						$("#loginmessage").html("恭喜你，登录成功</br><a href=\"list.php\">点此进入你的计划页表</a></br><a href=\"logout.php\">注销</a>");
					}else if(response=="usernamefail"){
						$("#loginmessage").text("对不起，此用户名并未注册");
					}else if(response=="passwordfail"){
						$("#loginmessage").text("密码输入错误");					
					}*/
					$("#loginmessage").html(response);			
				}
				);
		}
		return false;
	});
	
});