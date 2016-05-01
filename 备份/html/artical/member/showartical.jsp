<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8" import="java.util.List,entity.Artical"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>文章内容</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script  type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<%@include file="/common/header.jsp"%>
	<%
		Artical artical=(Artical)request.getAttribute("artical");	
	%>
<div class="container">
<div class="row">
<div class="col-lg-4" ></div>
<div class="col-lg-8" ><h2><%=artical.getArtical_title() %></h2></div>

</div>
<div class="row">
<div class="col-lg-2" ></div>
<div class="col-lg-10"><h4><%=artical.getArtical_content() %></h4></div>

</div>
</div>

</body>
</html>