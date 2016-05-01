package servlet;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import dao.MajorDao;
import dao.EmpDao;
import daoimpl.MajorDaoImpl;
import daoimpl.EmpDaoImpl;
import entity.Dept;
import entity.Emp;
import util.HibernateUtil;

public class EmpServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
	EmpDao empDao=new EmpDaoImpl();
	MajorDao deptDao=new MajorDaoImpl();
    
    public EmpServlet() {
        super();
    }
	protected void service(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html;charset=utf-8");
		request.setCharacterEncoding("utf-8");
		PrintWriter out=response.getWriter();
		String act=request.getParameter("act");
		if(act.equals("query")){
			try {
				List<Emp> empList=empDao.query();
				request.setAttribute("empList", empList);	
				request.getRequestDispatcher("emp_query.jsp").forward(request, response);
				
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}
		}
	}

}
