$(function(){
	//$("#work_name").click(function(){	
	$("#work_list").on('click','#work_name',function(){				
		var work_id=$(this).next().children().val();
		var work_name=$(this).text();
		//$("#clicked_work").text(work_id);
		$("#clicked_work").html("当前选中文集："+"<span id=\"work_name\">"+work_name+"</span>");
		$.ajax({
            type: "post",  
            dataType: "json",
            url: "/artical/user/artical_handle.php?act=query_all_artical",    
            data: {work_id:work_id},
            success: function(data){ 
            	
            	var artical_list=eval(data);
            	for(var i=0;i<artical_list.length;i++){              			            			
            		$("#artical_list").append("<tr id=\"artica\">" +
                		"<td>"+
                		"<a href=\"/artical/user/show_artical.php?artical_id="+
                		artical_list[i].artical_id+
                		"\"><h2>"+
                		artical_list[i].title+
                		"</h2></a>"+
                		//"<input type=\"hidden\" id=\"artical_id\" value="+artical_list[i].artical_id+">" +
                		"</td>"+
                		
                		"</tr>"               					
                	);             				           				                      			    			        
            	}           	
            }	
	 	});		
		
	});
	
	
	


		
});