package servlet;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import dao.ManagerDao;
import daoimpl.ManagerDaoImpl;
import entity.Dept;
import entity.Manager;
import util.HibernateUtil;

public class LoginManagerServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
	ManagerDao managerDao=new ManagerDaoImpl();
    public LoginManagerServlet() {
        super();
        // TODO Auto-generated constructor stub
    }
	protected void service(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html;charset=utf-8");
		request.setCharacterEncoding("utf-8");
		PrintWriter out=response.getWriter();
		HttpSession session=request.getSession(true);
		Manager manager=(Manager)session.getAttribute("manager");
		String act=request.getParameter("act");
		if(act.equals("text_password")){	
			String result=null;
			String old_password=request.getParameter("old_password");
			String password=manager.getPassword();
			if(password.equals(old_password)){
				result="password correct";
			}else{
				result="password wrong";
			}	
			out.print(result);
		}else if(act.equals("logout")){
			request.getSession().invalidate();
			response.sendRedirect(request.getContextPath() + "/index.jsp");
			
		}else if(act.equals("changepassword")){	
			int id=manager.getId();			
			String password=request.getParameter("new_password");				
			try {
				managerDao.update(password,id);	
				request.getSession().invalidate();
				response.sendRedirect(request.getContextPath()+"/index.jsp");
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}
		}						
		}
		
	}

