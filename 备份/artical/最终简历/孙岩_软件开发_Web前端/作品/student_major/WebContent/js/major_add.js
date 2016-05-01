$(function(){
	$("#name").blur(function(){
		var name=$("#name").val();//去掉头尾空格
		if(name.length==0){	
			$("#span_name_error").text("名称不许为空");			
		}else{
			$("#span_name_error").text("");	
		}						            												
	});
	$("#college").blur(function(){
		var college=$("#college").val();//去掉头尾空格
		if(college.length==0){	
			$("#span_college_error").text("位置不许为空");			
		}else{
			$("#span_college_error").text("");	
		}						            												
	});
		$("#add").submit(function(e){
			e.preventDefault();
			var name=$("#name").val();
			var college=$("#college").val();
			if(name.length==0||college.length==0){	
				
				if(name.length==0&college.length>0){
					$("#span_name_error").text("名称不许为空");	
				}else if(name.length>0&college.length==0){
					$("#span_college_error").text("位置不许为空");
				}else{
					$("#span_name_error").text("名称不许为空");
					$("#span_college_error").text("位置不许为空");
				}
				}else{
					$("#span_name_error").text("");
					$("#span_college_error").text("");
					 $.ajax({
		            type: "post",  
		            dataType: "text",
		            url: "/Design/admin/major?act=add",    
		            data: {name:name,
		            		college:college
		            		},
		            		success: function(data){ 				            	
				            		location.href="/Design//admin/major?act=query"			            				            						            		            	
				            }	
		            
			 	});	
					
				}		
		});	
  	});
  	
