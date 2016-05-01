<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"import="java.util.List,entity.*"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>查询部门</title>
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
		<h1 align="center">专业信息</h1>
	<table class="table ">	
		<tr class="lead">
		<td>专业ID</td>
		<td>专业名称</td>
		<td>所属院校</td>
		<td></td>								
		</tr>
		<% 
		for(Major major:majorList){													
		%>
		<tr>
		<td><%=major.getId() %></td>
		<td><%=major.getName() %></td>
		<td><%=major.getCollege() %></td>
		<td>
		<!--<a href="<%=request.getContextPath()%>/dept?act=delete" >删除</a>
		<a href="<%=request.getContextPath()%>/dept?act=query_one">更新</a>-->
		<div class="dropdown">
				<span class="glyphicon glyphicon-asterisk dropdown-toggle btn" data-toggle="dropdown"></span> 
				<ul class="dropdown-menu" >
				<li><a href="<%=request.getContextPath()%>/admin/major?act=delete&id=<%=major.getId() %>" >删除专业</a></li>
				<li><a href="<%=request.getContextPath()%>/admin/major?act=query_one&id=<%=major.getId()%>">更新专业</a></li>	 
				</ul>
		</div>	
		</td>
		</tr>
		<%}%>
	</table>
	
	
	</div>
	<div class="col-lg-3"></div>
	</div>
	</div>
</body>
</html>