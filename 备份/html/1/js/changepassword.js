$(function(){
	$("span").hide();
	$("#changepassword").submit(function(){
		var newpassword;
		if($("#newpassword").val().length>0){
			 newpassword=$("#newpassword").val();
		}else{
			$("span").show();
		}
		if(newpassword){
			var data=new Object();
			data.newpassword=newpassword;
			var option=new Object();
			option.data=data;
			option.dataType="text";
			option.type="get";
			option.url="changepassword_ajax.php";
			option.success=function(response){
				if(response=="success"){
					$("#changemessage").text("密码已更改成功");
				}else if(response=="loginfirst"){
					$("#changemessage").text("请先登录");
				}else if(response=="fail"){
					$("#changemessage").text("密码更改失败");
				}
			};
			$.ajax(option);
		}
		return false;
	});
});