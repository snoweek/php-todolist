 <%@ page language="java" contentType="text/html; charset=utf-8"
	pageEncoding="utf-8" import="entity.*"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>header</title>
</head>
<body>
	<div class="container lead" id="navbar">
		<div class="row">
		<div class="col-sm-5 col-md-5"></div>
		<div class="col-sm-7 col-md-7">
			<ul class="nav nav-pills nav-justified lead">
		<li><a href="<%=request.getContextPath() %>/index.jsp">首页</a></li>
		<%					
			//if ($_SESSION['name'] == null) {	
				if(session.getAttribute("name")==null){
		%>
		<li><a href="<%=request.getContextPath() %>/login.jsp">管理员登录</a></li>
		
		<%
			} else {			
						
		%>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">
						<span>学生管理</span>
			</a>
				<ul class="dropdown-menu" role="menu">
					<li role="presentation"><a tabindex="-1" role="menuitem" href="#">查询学生</a></li>
					<li role="presentation"><a tabindex="-1" role="menuitem"  href="#">添加学生</a></li>	
					<li role="presentation"><a tabindex="-1" role="menuitem"  href="#">条件查询</a></li>									
				</ul>			
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">
						<span >专业管理</span>
			</a>
				<ul class="dropdown-menu" role="menu">				
					<li role="presentation" ><a tabindex="-1" role="menuitem"  href="#">查询专业</a></li>				
					<li role="presentation"><a  tabindex="-1" role="menuitem" href="#">添加专业</a></li>							
				</ul>	
		
		</li>	
		<li><a href="#">注销</a></li>				
				<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">
						<span class="glyphicon glyphicon-user" ><span class="caret"></span></span>
			</a>
				<ul class="dropdown-menu" role="menu">
					<li role="presentation"><a tabindex="-1" role="menuitem" href="#">注销</a></li>
					<li role="presentation"><a tabindex="-1" role="menuitem"  href="#">修改密码</a></li>								
				</ul>	
		
		</li>
		<%
			}
		%>	
		
	</ul>
		</div>
		
		</div>			
	</div>
	

</body>
</html>