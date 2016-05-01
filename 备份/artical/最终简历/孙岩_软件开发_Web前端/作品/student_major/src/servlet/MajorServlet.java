package servlet;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import dao.MajorDao;
import daoimpl.MajorDaoImpl;
import util.HibernateUtil;
import entity.Major;

public class MajorServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
	MajorDao majorDao=new MajorDaoImpl();
    public MajorServlet() {
        super();
        // TODO Auto-generated constructor stub
    }
    protected void service(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html;charset=utf-8");
		request.setCharacterEncoding("utf-8");
		PrintWriter out=response.getWriter();
		String act=request.getParameter("act");
		if(act.equals("query")){
			try {
				List<Major> majorList=majorDao.query();
				request.setAttribute("majorList", majorList);	
				request.getRequestDispatcher("/admin/major_query.jsp").forward(request, response);

				//response.sendRedirect(request.getContextPath()+"/major_query.jsp");
				
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}
		}else if(act.equals("add")){
			String name=request.getParameter("name");
			String college=request.getParameter("college");
			Major major=new Major();
			major.setName(name);
			major.setCollege(college);
			try {
				majorDao.add(major);
				//response.sendRedirect(request.getContextPath()+"/admin/major?act=query");				
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}
		}else if(act.equals("delete")){
			int id=Integer.parseInt(request.getParameter("id"));
			try {
				majorDao.delete(id);
				//out.print("success");
				response.sendRedirect(request.getContextPath()+"/admin/major?act=query");
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}
		}else if(act.equals("query_one")){
			int id=Integer.parseInt(request.getParameter("id"));
			try {
				Major major=majorDao.query(id);
				request.setAttribute("major", major);	
				request.getRequestDispatcher("/admin/major_update.jsp").forward(request, response);
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}
		}else if(act.equals("update")){
			int id=Integer.parseInt(request.getParameter("id"));
			String name=request.getParameter("name");
			String college=request.getParameter("college");
			Major major=new Major();
			major.setName(name);
			major.setCollege(college);		
			try {
				majorDao.update(major,id);				
				response.sendRedirect(request.getContextPath()+"/admin/major?act=query");
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}
		}
    }

}
