package servlet;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import dao.MajorDao;
import dao.StudentDao;
import daoimpl.MajorDaoImpl;
import daoimpl.StudentDaoImpl;
import entity.Major;
import entity.Student;
import util.HibernateUtil;

public class StudentServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
	StudentDao studentDao=new StudentDaoImpl();
	MajorDao majorDao=new MajorDaoImpl();
    
    public StudentServlet() {
        super();
    }
	protected void service(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html;charset=utf-8");
		request.setCharacterEncoding("utf-8");
		PrintWriter out=response.getWriter();
		String act=request.getParameter("act");
		if(act.equals("query")){
			try {
				List<Student> studentList=studentDao.query();
				request.setAttribute("studentList", studentList);	
				request.getRequestDispatcher("/admin/student_query.jsp").forward(request, response);				
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}
		}else if(act.equals("add")){
			String name=request.getParameter("name");
			int gender=Integer.parseInt(request.getParameter("gender"));
			int major_id=Integer.parseInt(request.getParameter("major_id"));
			Major major=new Major();
			major.setId(major_id);
			Student student=new Student();
			student.setName(name);
			student.setGender(gender);
			student.setMajor(major);
			try {
				studentDao.add(student);
				response.sendRedirect(request.getContextPath()+"/admin/student?act=query");				
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}
		}else if(act.equals("query_major")){
			try {
				List<Major> majorList=majorDao.query();
				request.setAttribute("majorList", majorList);	
				request.getRequestDispatcher("/admin/student_add.jsp").forward(request, response);
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}
		}else if(act.equals("delete")){
			int id=Integer.parseInt(request.getParameter("id"));
			try {
				studentDao.delete(id);
				//out.print("success");
				response.sendRedirect(request.getContextPath()+"/admin/student?act=query");
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}
		}else if(act.equals("query_one")){
			int id=Integer.parseInt(request.getParameter("id"));
			try {
				List<Major> majorList=majorDao.query();
				Student student=studentDao.query(id);
				request.setAttribute("majorList", majorList);
				request.setAttribute("student", student);	
				request.getRequestDispatcher("/admin/student_update.jsp").forward(request, response);
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}
		}else if(act.equals("update")){
			int id=Integer.parseInt(request.getParameter("id"));
			String name=request.getParameter("name");
			int gender=Integer.parseInt(request.getParameter("gender"));
			int major_id=Integer.parseInt(request.getParameter("major_id"));
			Major major=new Major();
			major.setId(major_id);
			Student student=new Student();
			student.setName(name);
			student.setGender(gender);
			student.setMajor(major);				
			try {
				studentDao.update(student,id);				
				response.sendRedirect(request.getContextPath()+"/admin/student?act=query");
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}
		}else if(act.equals("condition_query")){
			
			try {
				List<Major> majorList=majorDao.query();
				request.setAttribute("majorList", majorList);	
				request.getRequestDispatcher("/admin/student_condition_query.jsp").forward(request, response);
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}
			
		}else if(act.equals("condition_query_student")){
			
			try {
				String name=request.getParameter("name");
				int gender=Integer.parseInt(request.getParameter("gender"));
				int major_id=Integer.parseInt(request.getParameter("major_id"));
				List<Student> studentList=studentDao.query(name,gender,major_id);
				request.setAttribute("studentList", studentList);	
				request.getRequestDispatcher("/admin/student_query.jsp").forward(request, response);				
			} catch (Exception e) {
				HibernateUtil.closeSessionFactory();
				e.printStackTrace();
			}
			
		}
	}

}
