$(function(){
	$("#work_list").on('click','#work',function(){
		$("#artical_list").text("");
		var work_id=$(this).children("#work_id").val();
		$.ajax({
            type: "post",  
            dataType: "json",
            url: "/ToDoList/member/myHomePage?act=oneworkartical",    
            data: { work_id:work_id},
            success: function(articalArray){
            	var arr=eval(articalArray);
            	for(var i=0;i<arr.length;i++){ 
            		$("#artical_list").append("<tr>" +
            				"<td>" +
            				"<a  id=\"showarticalcontent\" href=\"myHomePage?act=showarticalcontent&&artical_id="+arr[i].artical_id+"\"><h3>"+arr[i].artical_title+"</h3></a>" +
            				"</td>" +
            				"</tr>" 
            				);           		
            	}           	
            }	
	 	});
	}				
	);	
});