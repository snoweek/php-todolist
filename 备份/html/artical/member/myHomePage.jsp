<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8" import="java.util.List,entity.User,entity.Work,entity.Artical"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>我的主页</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script  type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="../ueditor/ueditor.all.js"></script>
     <script type="text/javascript" src="../js/myHomePage.js"></script>
</head>
<body>
<%@include file="/common/header.jsp"%>
<%
	User user=(User)session.getAttribute("user");
	List<Work> workList=(List<Work>)request.getAttribute("workList");
	List<Artical> articalList=(List<Artical>)request.getAttribute("articalList");
%>
<div class="container">
	<div class="row">
		<div class="col-lg-4">
		<br><br><br><br><br><br>
			<div class="row">
				<div class="col-lg-6">
					<h2>我的文集</h2>
					<ul class="list_unstyled" id="work_list">			 	
				 		<% for(Work work:workList){ %>	 	
						<li class="glyphicon glyphicon-book btn" id="work">
						<%=work.getWork_name()  %>
						<input type="hidden" id="work_id" value="<%=work.getWork_id() %>">					
						</li> 										 
						 <%} %>			 
			 		</ul>
				</div>
			</div>
						
		</div>
		<div class="col-lg-8">
		<p id="message"></p>
			<table class="table" id="artical_list">
				<% for(Artical artical:articalList){ %>	 	
				<tr>
					<td>
					<a href="<%=request.getContextPath()%>/member/myHomePage?act=showarticalcontent&&artical_id=<%=artical.getArtical_id() %>"><h3><%=artical.getArtical_title()  %></h3></a>
					</td>											
				</tr> 										 
				 <%} %>	
			
			</table>
		
		</div>
	</div>
</div>


</body>
</html>