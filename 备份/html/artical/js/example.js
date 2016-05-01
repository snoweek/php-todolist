$().ready(function() {
	debug:true;
 $("#registerForm").validate({
        rules: {
   input_name: {required:true,
	   minlength:2,
	   maxlength:6
   },
   
   input_password: {
    required: true,
    minlength: 5
   },
   input_email: {
	    required: true,
	    email: true
	   },
   /*confirm_password: {
    required: true,
    minlength: 5,
    equalTo: "#password"
   }*/
  },
    messages: {
   input_name: {required:"请输入姓名",
	   minlength:"名字不能小于两个字符",
	   maxlength:"名字长度不能大于6"
   },
   input_email: {
    required: "请输入Email地址",
    email: "请输入正确的email地址"
   },
   input_password: {
    required: "请输入密码",
    minlength: jQuery.format("密码不能小于{0}个字 符")
   },
  /* confirm_password: {
    required: "请输入确认密码",
    minlength: "确认密码不能小于5个字符",
    equalTo: "两次输入密码不一致不一致"
   }*/
  }
    });
});


/*$("#work_list").on('click','#work',function(){      
    $("#artical_list tr").html("");
    $("#work_list tr #opertion" ).html("");
    var work_id=$(this).children("#work_id").text();
    var work_name=$(this).children("#work_name").text();
    //var work_id=1;
    $("#message").text("nqpeor"+work_id);
    $("#clicked_work_id").html("");
    $("#clicked_work_id").html("当前选中文集："+work_name+work_id);    
    $(this).append("<td id=\"opertion\">"+                  
                        
        "<div class=\"dropdown\">" +
        "<span class=\"glyphicon glyphicon-asterisk dropdown-toggle btn\" data-toggle=\"dropdown\"></span>" +
        "<ul class=\"dropdown-menu\" role=\"menu\">" +
        "<li role=\"presentation\" id=\"delete_work\"><p tabindex=\"-1\" role=\"menuitem\" class=\"btn\" id=\"delete\">删除文集</p></li>" +
        "<li role=\"presentation\"><a tabindex=\"-1\" role=\"menuitem\"  href=\"user/work.php?act=update&work_id="+work_id+"\">修改名称</a></li>" +
        "</ul>" +
        "</div>" +
        "</td>"         
        );    
    $.ajax({
            type: "post",  
            dataType: "json",
            url: "/artical/user/artical.php?act=show_artical",    
            data: {work_id:work_id},
            success: function(data){ 
              var artical_list=(eval(data)).artical_list;
              for(var i=0;i<artical_list.length;i++){                                     
                $("#artical_list").append("<tr>" +
                    "<td class=\"glyphicon glyphicon-pencil btn\" id=\"artical\">"+artical_list[i].title+
                    "<input type=\"hidden\" id=\"artical_id\" value="+artical[i].artical_id+">" +
                    "</td>"+
                    "<td id=\"opertion\">"+                   
                    "</td>"+                                            
                    "</tr>"                         
                  );                                                                                    
              }             
            } 
    });       
    
  });*/
