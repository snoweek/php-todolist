<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8" import="java.util.List,entity.User,entity.Work,entity.Artical"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>写文章</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script  type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="../ueditor/ueditor.all.js"></script>
     <script type="text/javascript" src="../js/artical.js"></script>
</head>
<body>
	<%@include file="/common/header.jsp"%>
	<%
		User user=(User)session.getAttribute("user");
		List<Work> workList=(List<Work>)request.getAttribute("workList");	
		List<Artical> articalList=(List<Artical>)request.getAttribute("articalList");
		Artical articalcontent=(Artical)request.getAttribute("artical");
	%>
<div class="container">
    <div class="row">
         <div class="col-lg-2">	        
	        <p class="input-group-addon glyphicon glyphicon-plus btn" id="create_work">&nbsp新建文集</p>
	        <br>
	        <div  id="add_work">	         			
			      <input type="text" id="work_name" class="form-control " placeholder="请输入文集名..."  ><br>
			      &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="取消" class="btn btn-default" id="delete_create_work">&nbsp;&nbsp;&nbsp
			      						<input type="button" value="提交" class="btn btn-success" id="submit_work">			
			</div> 			 		
			  <table class="" id="work_list">			 	
			 <% 
			 int count=1;
			 
			 for(Work work:workList){
				 if(count==1){
					 count++;
				
				%>
				<div id="clicked_work_id"><input type="hidden" id="input_click_work_id" value="<%=work.getWork_id() %>"></div>
			 <tr>
			 <td class="glyphicon glyphicon-book btn" id="work">
			 	<%=work.getWork_name()  %>
					<input type="hidden" id="work_id" value="<%=work.getWork_id() %>">	
			 </td>
			   <td id="opertion"> 
			    <div class="dropdown">
				<span class="glyphicon glyphicon-asterisk dropdown-toggle btn" data-toggle="dropdown"></span> 
				<ul class="dropdown-menu" role="menu" >
				<li role="presentation" id="delete_work"><p tabindex="-1" role="menuitem" class="btn" id="delete">删除文集</p></li>
				<li role="presentation"><a tabindex="-1" role="menuitem"  href="<%=request.getContextPath() %>/member/changeworkname.jsp">修改名称</a>	</li>	 
				</ul>
				</div>				 
			 </td>			 
			 </tr>
			 
			 	
			 <%}else{
				 count++;
			 %>
			 <tr>
			 <td class="glyphicon glyphicon-book btn" id="work">
			 	<%=work.getWork_name()  %>
					<input type="hidden" id="work_id" value="<%=work.getWork_id() %>">	
			 </td>
			  <td id="opertion"> 					 
			 </td>			 
			 </tr>
			 <%}} %>
			 </table>				
			 <span id="message"></span>       	             	      		                                                     
        </div>
                  
        <div class="col-lg-2" >
        	
        	 <p class="input-group-addon glyphicon glyphicon-pencil  btn" id="create_artical">&nbsp新建文章</p>
        		<table class="table table-hover" id="artical_list">  
        		    <% 
        		    int countartical=1;
        		    for(Artical artical:articalList){ 
        		    if(countartical==1){
        		    	countartical++;
        		   
        		    %>
			 <tr>
			 <td class="glyphicon glyphicon-pencil btn" id="artical">
			 	<%=artical.getArtical_title()  %>
					<input type="hidden" id="artical_id" value="<%=artical.getArtical_id() %>">	
			 </td>	
			 <td id="opertion"> 
			    <div class="dropdown">
				<span class="glyphicon glyphicon-asterisk dropdown-toggle btn" data-toggle="dropdown"></span> 
				<ul class="dropdown-menu" role="menu">
				<li role="presentation" id="delete_artical"><p tabindex="-1" role="menuitem" class="btn">删除文章</p><input type="hidden" id="artical_id" value="<%=artical.getArtical_id() %>"></li>
				<li role="presentation"><a tabindex="-1" role="menuitem"  href="<%=request.getContextPath() %>/changePassword.jsp">修改名称</a></li>	 
				</ul>
				</div>				 
			 </td>			   			 
			 </tr>	
			 <%}else{
				 countartical++;
				 %>
				 <tr>
			 <td class="glyphicon glyphicon-pencil btn" id="artical">
			 	<%=artical.getArtical_title()  %>
					<input type="hidden" id="artical_id" value="<%=artical.getArtical_id() %>">	
			 </td>	
			 <td id="opertion">		   			 
			 </tr>
			 
			 <%} }%> 					 
			 	</table>	  
        </div>
        
        <div class="col-lg-8">  
        <p id="message">   </p>         
                    文章标题<br>
                    <p id="message"></p>
                    <div class="form-group">
                        <input type="text" id="artical_title" class="form-control " value="<%=articalcontent.getArtical_title()   %>" />
                    </div>
                    文章内容<br>
                   <div id="artical_content">
	                    <script id="container" type="text/plain" style="height:450px;">
						<div>	<%=articalcontent.getArtical_content()   %>	</div>				
                    	</script>
                   </div>
                   <input type="button" value="提交 " id="submit_artical">　                        
               		<script type="text/javascript">
                	var ue = UE.getEditor('container');
                	ue.setContent();
                	</script>
        </div>
    </div>
</div>
</body>
</html>