$(function(){
	$("$add").submit(function(){
		if($("#content").val().length=0){
			$("span").text("请输入内容");
		}else{
			var content=$("#content").val();
		}
		if(content){
			var data=new Object();
			data.content=content;
			var option=new Object();
			option.data=data;
			option.dataType="text";
			option.type="get";
			option.url="list.php";
			option.success=function(json){
				var arr=(eval(json_message)).register;
				if(response=="success"){
					$("span").text("添加成功");
				}else if(response=="fail"){
					$("span").text("添加失败");
				}
			};
			$.ajax(option);
		}
		return false;
	});
});