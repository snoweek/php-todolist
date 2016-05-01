<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"import="java.util.List,entity.*"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>添加专业</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	 <script  type="text/javascript" src="../bootstrap/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/major_add.js"></script>
</head>
<body>
<%@include file="/common/header.jsp"%>

<div class="container">	 
<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
	<h3 align="center">添加专业信息</h3> 
	<br><br>   	
	    <form action="<%=request.getContextPath()%>/admin/major?act=add" method="post" id="add" class="form-horizontal" role="form">
	    	<div class="form-group">
	    		<label class="col-sm-3 control-label lead">专业名称:</label>
	    		<div class="col-sm-6">
	    			<input type="text" class="form-control" id="name" name="name" placeholder="请输入名称">
	    		</div>
	    		<div class="col-sm-3"><span id="span_name_error" style="color: red;"></span></div>
	    	</div>    	
	    	<div class="form-group">
	    		<label for="college" class="col-sm-3 control-label lead">所属学院:</label>
	    		<div class="col-sm-6">
	    			<input type="text" class="form-control" id="college" name="college" placeholder="请输入学院">
	    		</div>
	    		<div class="col-sm-3"><span id="span_college_error" style="color: red;"></span></div>
	    	</div>
	    	
	    	<div class="row">
		    			<div class="col-lg-3"></div> 
			    			<div class="col-lg-6 col-sm-6 col-sm-6">
			    				<div align="center">
	                    			<input type="submit" value="提交新的专业信息" class="btn btn-success"/>
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