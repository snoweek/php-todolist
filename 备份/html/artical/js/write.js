$(function(){
	$("#add_work").hide();
	var count=0;	
	$("#create_work").click(function(){
		count++;
		if(count%2==0){
			$("#add_work").hide();	
		}else{
			$("#add_work").show();	
		}	
	});
	$("#delete_create_work").click(function(){
		count++;
		$("#add_work").hide();
	});
	
	
	
	$("#submit_work").click(function(){
		$("#artical_list tr #opertion" ).html("");
		count++;
		var work_name=$("#work_name").val();
		
		$("#add_work").hide();
		$.ajax({
            type: "post",  
            dataType: "json",
            url: "/artical/user/work_handle.php?act=add_work",    
            data: {work_name:work_name},
            success: function(json_message){  
            	var work_id=(eval(json_message)).work_id;   
            	  		       		
            	$("#work_list").append("<tr id=\"work\">" +
            		"<td id=\"work_name\" class=\"glyphicon glyphicon-book btn\" class=\"work\">&nbsp&nbsp;"+
            		work_name+
            		"</td>"+ 
            		"<td id=\"work_id\">"+                      
                    //"<input type=\"hidden\" name=\"work_id\" id=\"hidden\" value=\""+work_id+"\"> "+
                    work_id+
                    "</td>"+
            		"</tr>"
            	);           	      		       		
            }	            
	 	});						
	});
	
	
	
	

	$("#work_list").on('click','#work_name',function(){			
		$("#artical_list tr").html("");
		$("#work_list tr #opertion" ).html("");
		var work_id=$(this).next().text();
		var work_name=$(this).text();
		$("#clicked_work").html("");
		$("#clicked_work").html("当前选中文集："+"<span id=\"work_name\">"+work_name+"</span><span id=\"work_id\">"+work_id+"</span>");		
		$(this).parent().append("<td id=\"opertion\">"+                                          
				"<div class=\"dropdown\">" +
				"<span class=\"glyphicon glyphicon-asterisk dropdown-toggle btn\" data-toggle=\"dropdown\"></span>" +
				"<ul class=\"dropdown-menu\" role=\"menu\">" +
				"<li role=\"presentation\" id=\"delete_work\"><p tabindex=\"-1\" role=\"menuitem\" class=\"btn glyphicon glyphicon-trash\" >&nbsp删除文集</p></li>" +
				//"<li role=\"presentation\"><span class=\"glyphicon glyphicon-trash\" >&nbsp<a tabindex=\"-1\"  href=\"user/work.php?act=update&work_id="+work_id+"\">修改名称</a></span></li>" +
				"<li role=\"presentation\" id=\"update_work\"><p tabindex=\"-1\" role=\"menuitem\" class=\"btn glyphicon glyphicon-pencil\" ><a href=\"/artical/user/work_update.php?work_id="+work_id+"\">&nbsp修改文集名</a></p></li>" +
				"</ul>" +
				"</div>" +
				"</td>" 				
				);		
		$.ajax({
            type: "post",  
            dataType: "json",
            url: "/artical/user/artical_handle.php?act=query_all_artical",    
            data: {work_id:work_id},
            success: function(data){ 
            	
            	var artical_list=eval(data);
            	for(var i=0;i<artical_list.length;i++){              			            			
            		$("#artical_list").append("<tr id=\"artica\">" +
                		"<td class=\"glyphicon glyphicon-pencil btn\" id=\"artical_title\">"+artical_list[i].title+
                		//"<input type=\"hidden\" id=\"artical_id\" value="+artical_list[i].artical_id+">" +
                		"</td>"+
                		"<td id=\"artical_id\">"+                      
                    //"<input type=\"hidden\" name=\"work_id\" id=\"hidden\" value=\""+work_id+"\"> "+
                    	artical_list[i].artical_id+
                    	"</td>"+
                		"</tr>"               					
                	);             				           				                      			    			        
            	}           	
            }	
	 	});				
		
	});
	
	
	
	$("#work_list").on('click',"#delete_work",function(){
		var r=confirm("是否确认删除此文集下的所有文章");
		if(r==true){
			//var work_id=$(this).parents("td").prev().text();
			var work_id=$("#clicked_work").children("#work_id").text();
			$.ajax({
	            type: "post",  
	            dataType: "json",
	            url: "/artical/user/work_handle.php?act=delete_work",    
	            data: {work_id:work_id},
		 	});
		 	$("#clicked_work").html("");	
		 	$(this).parents("tr").remove();
			
			}					
		});
	/*$("#work_list").on('click',"#update_work",function(){
		var work_id=$("#clicked_work").children("#work_id").text();
		$.ajax({
	            type: "post",  
	            dataType: "json",
	            url: "/artical/user/work_update.php",    
	            data: {work_id:work_id}
		 	});

			
	});*/
	
	
	/*$("#artical_list").on("click","#delete_artical",function(){
		var r=confirm("是否确认删除此文章");
		if(r==true){
			var artical_id=$(this).parents("tr").find("#artical_id").val();
			$.ajax({
	            type: "post",  
	            dataType: "json",
	            url: "/ToDoList/member/writeArtical?act=deleteartical",    
	            data: {artical_id:artical_id},
	            success: function(data){            	           	           	
	            }	
		 	});	
			$(this).parents("tr").remove();
			
			
		}						
		});


	$("#artical_list").on("click","#artical",function(){		
		$("#artical_list tr #opertion" ).html("");
		$(this).next("#opertion").html("<td id=\"opertion\">"+
				"<div class=\"dropdown\">" +
				"<span class=\"glyphicon glyphicon-asterisk dropdown-toggle btn\" data-toggle=\"dropdown\"></span>" +
				"<ul class=\"dropdown-menu\" role=\"menu\">" +
				"<li role=\"presentation\" id=\"delete_artical\"><p tabindex=\"-1\" role=\"menuitem\" class=\"btn\">删除文章</p></li>" +
				"<li role=\"presentation\"><a tabindex=\"-1\" role=\"menuitem\"  href=\"<%=request.getContextPath() %>/changePassword.jsp\">修改名称</a></li>	" +
				"</ul>" +
				"</div>" +
				"</td>"
				);
		
		var artical_id=$(this).children("#artical_id").val();
		$.ajax({
            type: "post",  
            dataType: "json",
            url: "/ToDoList/member/writeArtical?act=showarticalcontent",    
            data: {artical_id:artical_id},
            success: function(data){ 
            	var arr=eval(data);
            		for(var i=0;i<arr.length;i++){ 
            			$("#artical_title").val(arr[i].artical_title);
            			ue.setContent(arr[i].artical_content);            					        			        
            		}            	
            }	
	 	});		
		
	} );
		
	
	
	
	$("#create_artical").click(function(){
	//$("#artical_list").on("click","#artical_title",function(){				
		$("#artical_title").val("请输入新标题");
		ue.setContent("");		
		$("#artical_list tr #opertion" ).html("");		
		$("#artical_list").prepend("<tr id=\"artical\">" +
				"<td class=\"glyphicon glyphicon-pencil btn\" id=\"artical_title\">"+
				"无标题文章" +   
				"</td>"+

				"<td id=\"opertion\">" + 
				"<div class=\"dropdown\">" +
				"<span class=\"glyphicon glyphicon-asterisk dropdown-toggle btn\" data-toggle=\"dropdown\"></span>" +
				"<ul class=\"dropdown-menu\" role=\"menu\" id=\"deleteorchange\">" +
				"<li role=\"presentation\"><p tabindex=\"-1\" role=\"menuitem\" class=\"btn\" id=\"delete_work\">删除文集</p></li>" +
				"<li role=\"presentation\"><a tabindex=\"-1\" role=\"menuitem\"  href=\"\">修改名称</a></li>	" +
				"</ul>" +
				"</div>" +
				"</td>"+
				"</tr>"
				);    
		
		
	});
	$("#form_artical_title").blur(function(){
	//$("#artical_list").on("blur","#artical_title",function(){	
		var artical_title=$("#form_artical_title").val();
		$("#artical_title").text(artical_title);
		//$("#message").text(artical_title);

		$("#clicked_artical").html("");
		$("#clicked_artical").html("当前选中文集："+"<span id=\"artical_title\">"+artical_title+"</span><span id=\"artical_id\"></span>");		
	});


	$("#artical_list").on('click',"#delete_work",function(){
		var r=confirm("是否确认删除此文章");
		if(r==true){
			//var work_id=$(this).parents("td").prev().text();
			var artical_id=$("#clicked_artical").children("#artical_list_id").text();

			$.ajax({
	            type: "post",  
	            dataType: "json",
	            url: "/artical/user/work_handle.php?act=delete_work",    
	            data: {work_id:work_id},
		 	});
		 	$("#clicked_work").html("");	
		 	$(this).parents("tr").remove();
			
			}					
		});
	
	
	
	$("#submit_artical").click(function(){
		var artical_title=$("#artical_title").val();
		var artical_content=ue.getContent();
		var work_id=$("#clicked_work").children("#work_id").text();
		$.ajax({
            type: "post",  
            dataType: "json",
            url: "/artical/user/artical_handle.php?act=add_artical",    
            data: {
            	artical_title:artical_title,
            	artical_content:artical_content,
            	work_id:work_id          	
            	},
            success: function(json_message){
            	var work_id=(eval(json_message)).artical_id;            	  
            	$("#artical_list").children("#")append("<input type=\"hidden\" id=\"artical_id\" value="+arr[i].artical_id+">");            	        	
            }	
	 	});	*/



//	});



$("#create_artical").click(function(){
	//$("#artical_list").on("click","#artical_title",function(){				
		$("#form_artical_title").val("请输入标题");
		ue.setContent("请输入内容");		
		$("#artical_list tr #opertion" ).html("");		
		/*$("#artical_list ").prepend("<tr id=\"artical\">" +
				"<td class=\"glyphicon glyphicon-pencil btn\" id=\"artical_title\">"+
				"无标题文章" +   
				"</td>"+
				"</tr>"
				);    */

				
	});

$("#form_artical_title").blur(function(){
	//$("#artical_list").on("blur","#artical_title",function(){	
		var artical_title=$("#form_artical_title").val();
		$("#artical_title").text(artical_title);
		//$("#message").text(artical_title);

		
	});

$("#submit_artical").click(function(){
		var artical_title=$("#form_artical_title").val();
		var artical_content=ue.getContent();
		var work_id=$("#clicked_work").children("#work_id").text();
		$.ajax({
            type: "post",  
            dataType: "json",
            url: "/artical/user/artical_handle.php?act=add_artical",    
            data: {
            	artical_title:artical_title,
            	artical_content:artical_content,
            	work_id:work_id          	
            	},
            success: function(json_message){
            	var artical_id=(eval(json_message)).artical_id;            	  
            	//$("#artical_list").children("tr").append("<input type=\"hidden\" id=\"artical_id\" value="+artical_id+">");   
            	$("#artical_list").prepend(
            		"<tr id=\"artical\">" +
				"<td class=\"glyphicon glyphicon-pencil btn\" id=\"artical_title\">"+
				artical_title +   
				"</td>"+
            		"<td id=\"artical_id\">"+                      
                    //"<input type=\"hidden\" name=\"work_id\" id=\"hidden\" value=\""+work_id+"\"> "+
                    artical_id+
                    "</td>"+
				"<td id=\"opertion\">" + 
				"<div class=\"dropdown\">" +
				"<span class=\"glyphicon glyphicon-asterisk dropdown-toggle btn\" data-toggle=\"dropdown\"></span>" +
				"<ul class=\"dropdown-menu\" role=\"menu\" id=\"deleteorchange\">" +
				"<li role=\"presentation\"><p tabindex=\"-1\" role=\"menuitem\" class=\"btn\" id=\"delete_work\">删除文集</p></li>" +
				"<li role=\"presentation\"><a tabindex=\"-1\" role=\"menuitem\"  href=\"\">修改名称</a></li>	" +
				"</ul>" +
				"</div>" +
				"</td>"+
				"</tr>"           		
				);  

				$("#clicked_artical").html("当前选中文集："+"<span id=\"artical_title\">"+artical_title+"</span><span id=\"artical_id\">"+artical_id+"</span>");		


            }	
	 	});	
    });



	$("#artical_list").on('click','#artical_title',function(){			
		$("#form_artical_title").val("");
		ue.setContent("");	
		$("#artical_list tr #opertion" ).html("");
		var artical_id=$(this).next().text();
		var artical_title=$(this).text();
		$("#message").text(artical_id+artical_title);
		$("#clicked_artical").html("");
		$("#clicked_artical").html("当前选中文章："+"<span id=\"artical_title\">"+artical_title+"</span><span id=\"artical_id\">"+artical_id+"</span>");		

		$(this).parent().append("<td id=\"opertion\">"+                                          
				"<div class=\"dropdown\">" +
				"<span class=\"glyphicon glyphicon-asterisk dropdown-toggle btn\" data-toggle=\"dropdown\"></span>" +
				"<ul class=\"dropdown-menu\" role=\"menu\">" +
				"<li role=\"presentation\" id=\"delete_artical\"><p tabindex=\"-1\" role=\"menuitem\" class=\"btn glyphicon glyphicon-trash\" >&nbsp删除文章</p></li>" +
				//"<li role=\"presentation\"><span class=\"glyphicon glyphicon-trash\" >&nbsp<a tabindex=\"-1\"  href=\"user/work.php?act=update&work_id="+work_id+"\">修改名称</a></span></li>" +
				//"<li role=\"presentation\" id=\"update_artical\"><p tabindex=\"-1\" role=\"menuitem\" class=\"btn glyphicon glyphicon-pencil\" ><a href=\"/artical/user/work_update.php?work_id="+work_id+"\">&nbsp修改</a></p></li>" +
				"</ul>" +
				"</div>" +
				"</td>" 				
				);		
		$.ajax({
            type: "post",  
            dataType: "json",
            url: "/artical/user/artical_handle.php?act=query_one_artical",    
            data: {artical_id:artical_id
            	
            	},
            success: function(data){ 
            	
            	var artical=eval(data);
            	for(var i=0;i<artical.length;i++){              			            			
            		$("#form_artical_title").val(artical[i].title);
					ue.setContent(artical[i].content);	         					
                	            				           				                      			    			        
            	}           	
            }	
	 	});				
		
	});


	$("#artical_list").on('click',"#delete_artical",function(){
		var r=confirm("是否确认删除此文章");
		if(r==true){
			//var work_id=$(this).parents("td").prev().text();
			var artical_id=$("#clicked_artical").children("#artical_id").text();
			//$("#message").text(artical_id);

			$.ajax({
	            type: "post",  
	            dataType: "json",
	            url: "/artical/user/artical_handle.php?act=delete_artical",    
	            data: {artical_id:artical_id},
		 	});
		 	$("#clicked_artical").html("");	
		 	$(this).parents("tr").remove();
		 	$("#form_artical_title").val("");
			ue.setContent("");	
			
			}				
		});

	
		
});