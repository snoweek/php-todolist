<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"import="java.util.List,entity.*"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>学生查询</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	 <script  type="text/javascript" src="../bootstrap/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<%@include file="/common/header.jsp"%>
	<%
		request.setCharacterEncoding("utf-8");
		List<Student> studentList=(List<Student>)request.getAttribute("studentList");		
	%>		
	<div class="container">
	<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<h1 align="center">学生信息</h1>
	<table class="table">	
		<tr>
		<td>学生ID</td>
		<td>姓名</td>
		<td>性别</td>
		<td>专业</td>
		<td></td>				
		</tr>
		
		<% 
		for(Student student:studentList){													
		%>
		<tr>
		<td><%=student.getId() %></td>
		<td><%=student.getName() %></td>
		<td><%=student.getGender()==1?"女":"男" %></td>
		<td><%=student.getMajor().getName() %></td>
		<td>
		
		<div class="dropdown">
				<span class="glyphicon glyphicon-asterisk dropdown-toggle btn" data-toggle="dropdown"></span> 
				<ul class="dropdown-menu" >
				<li><a href="<%=request.getContextPath()%>/admin/student?act=delete&id=<%=student.getId() %>" >删除学生</a></li>
				<li><a href="<%=request.getContextPath()%>/admin/student?act=query_one&id=<%=student.getId()%>">更新学生信息</a></li>	 
				</ul>
		</div>		
		</tr>
		<%}%>
	</table>
	<% 
		int count=0;
		for(Student student:studentList){	
			count++;
			
			
		%>
	<%}
		if(count==0){		
		%>
		<h2 align="center" style="color: red;">没有符合条件的学生信息</h2>
		
		<%} %>
	</div>
	<div class="col-lg-3"></div>
	</div>
	</div>
	
	


</body>
</html>