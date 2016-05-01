package servlet;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import dao.ManagerDao;
import daoimpl.ManagerDaoImpl;
import entity.Manager;
import util.HibernateUtil;

public class ManagerServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
	ManagerDao managerDao=new ManagerDaoImpl();
    public ManagerServlet() {
        super();
        
    }
	protected void service(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html;charset=utf-8");
		request.setCharacterEncoding("utf-8");
		PrintWriter out=response.getWriter();
		String act=request.getParameter("act");
		if(act.equals("text_name")){	
			String result=null;
			String name=request.getParameter("name");
			try {
				Manager manager=managerDao.login(name);								
				if(manager==null){					
					result="name no exit";
				}else{
					result="name exit";
				}
				out.print(result);
								
				
				
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}			
		}else if(act.equals("login")){
			String result=null;
			String name=request.getParameter("name");
			String password=request.getParameter("password");
			Manager manager=new Manager();
			manager.setName(name);
			manager.setPassword(password);
			try {
				Manager m = managerDao.login(manager);
				if(m==null){					
						result="password error";
				}else{
					HttpSession session=request.getSession(true);					
					session.setAttribute("manager", m);
					result="login success";
				}
				out.print(result);				
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}							
		}
		
	}

}
