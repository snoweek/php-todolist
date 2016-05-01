<%@ page language="java" contentType="text/html; charset=utf-8"
	pageEncoding="utf-8" import="entity.User"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>header</title>
</head>
<body>

	<div class="container lead" id="navbar">
		<div class="row">
			
			<div class="col-sm-1 col-md-1">
					<a href="<%=request.getContextPath() %>/index.jsp">
						<span class="glyphicon glyphicon-home lead text-primary"></span>
					</a>
			</div>
			
			<div class="col-sm-6 col-md-6"></div>
			
			<div class="col-sm-2 col-md-2">
				<%					
					if (session.getAttribute("user") == null) {						
				%>				
				<a href="<%=request.getContextPath() %>/login.jsp" >登录</a>
				<%
					} else {
						User user=(User)session.getAttribute("user");
				%>
				欢迎，<%=user.getName() %>
				<a href="<%=request.getContextPath()%>/member/loginUser?act=logout">注销</a>	
				<%
					}
				%>	
			</div>
			
			
			
			
			
			<div class=" col-sm-1 col-md-1">
				<a href="<%=request.getContextPath() %>/register.jsp"  >注册</a>
			</div>
			
			
			
			
			
					
			<div class="col-sm-2 col-md-2">	
				<%					
					if (session.getAttribute("user") != null) {						
				%>						
				<div class="dropdown">
					<p role="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<span class="glyphicon glyphicon-user" >&nbsp<span class="caret"></span></span>
					</p>
					<ul class="dropdown-menu" role="menu">
						<li role="presentation"><a tabindex="-1" role="menuitem" href="<%=request.getContextPath() %>/member/changePassword.jsp">修改密码</a></li>
						<li role="presentation"><a tabindex="-1" role="menuitem"  href="<%=request.getContextPath() %>/member/myHomePage?act=workandartical">我的主页</a></li>				
						<li role="presentation" ><a tabindex="-1" role="menuitem"  href="<%=request.getContextPath() %>/member/writeArtical?act=showwork">提笔写篇文章</a></li>				
						<li role="presentation"><a  tabindex="-1" role="menuitem" href="<%=request.getContextPath() %>/member/loginUser?act=logout">注销</a></li>							
					</ul>				
				</div>
				<%
					}else{
				%>
				
				<%	
					}
				%>
			</div>																						
			
		</div>			
	</div>	

</body>
</html>