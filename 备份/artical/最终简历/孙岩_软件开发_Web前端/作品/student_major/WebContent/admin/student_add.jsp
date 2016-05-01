<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"import="java.util.List,entity.*"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>添加学生</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	 <script  type="text/javascript" src="../bootstrap/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<%@include file="/common/header.jsp"%>
<%
		request.setCharacterEncoding("utf-8");
		List<Major> majorList=(List<Major>)request.getAttribute("majorList");		
	%>
<div class="container">	 
<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
	<h3 align="center">添加学生信息</h3> 
	<br><br>   	
	    <form action="<%=request.getContextPath()%>/admin/student?act=add" method="post" id="login" class="form-horizontal" role="form">
	    	<div class="form-group">
	    		<label for="name" class="col-sm-3 control-label lead">姓名:</label>
	    		<div class="col-sm-6 input-group input-lg">
	    			<input type="text" class="form-control" id="name" name="name" placeholder="请输入姓名">
	    		</div>
	    		<div class="col-sm-3"></div>
	    	</div>	    	
	    	<div class="form-group">
	    		<label for="gender" class="col-sm-3 control-label lead">性别:</label>
	    		<div class="col-sm-6 input-group input-lg">
	    			&nbsp&nbsp<input type="radio" id="gender" name="gender" value="0">男 &nbsp &nbsp&nbsp &nbsp
	    			<input type="radio"  id="gender" name="gender" value="1">女
	    		</div>
	    		<div class="col-sm-3"></div>
	    	</div>
	    	
	    	<div class="form-group">
	    		<label for="dept" class="col-sm-3 control-label lead">所学专业:</label>
	    		<div class="col-sm-6 input-group input-lg">
	    			<select name="major_id" id="major_id">
	    				<option >未知</option>
			               	<% for (Major major:majorList){%>
			               	<option value="<%=major.getId() %>"><%=major.getName()%></option>
			               		 	
			               	<%} %>
			        </select>
	    		</div>
	    		<div class="col-sm-3"></div>
	    	</div>
	    	<div class="row">
		    			<div class="col-lg-3"></div> 
			    			<div class="col-lg-6 col-sm-6 col-sm-6">
			    				<div align="center">
	                    			<input type="submit" value="提交新的学生信息" class="btn btn-success"/>
	               				 </div>
			    			</div>		    				
		    			</div>
	    	
	    
		    			
	    </form>	 
	</div>
</div> 
<div class="col-lg-3"></div>  
	       			
 </div>


</body>
</html>