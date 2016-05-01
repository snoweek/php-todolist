$(function(){
	$("$delete").submit(function(){
		var list_id=$("#list_id").val();
			var data=new Object();
			data.list_id=list_id;
			var option=new Object();
			option.data=data;
			option.dataType="text";
			option.type="get";
			option.url="list.php";
			option.success=function(response){
				if(response=="fail"){
					$("span").text("删除失败");
				}
			};
			$.ajax(option);
		return false;
	});
});