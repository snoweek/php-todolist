package servlet;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.hibernate.Query;
import org.hibernate.Session;

import dao.MajorDao;
import dao.ManagerDao;
import daoimpl.MajorDaoImpl;
import daoimpl.ManagerDaoImpl;
import entity.Emp;
import entity.Major;
import entity.Manager;
import entity.Student;
import util.HibernateUtil;

public class ExampleServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
	MajorDao majorDao=new MajorDaoImpl();
	ManagerDao managerDao=new ManagerDaoImpl();
    public ExampleServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	protected void service(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html;charset=utf-8");
		request.setCharacterEncoding("utf-8");
		PrintWriter out=response.getWriter();
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();
		String name="ÀÔ—“";
		int gender=1;
		int major_id=13;
		//Major major=new Major();
		//Major major=null;
		//major.setId(major_id);
		//Query query = s.createQuery("select s from Student s left join fetch s.major where (name is null or s.name=name) and (gender=2 or s.gender=gender) and (major_id=0 or s.major.id=major_id)");	
		//Query query = s.createQuery("select s from Student s where s.major.id=13");	
		//Query query = s.createQuery("select s from Student s where 1=1");	
		String sql="select s from Student s where  1=1";
		if(name!=null){
			sql=sql+" and s.name like"+" '%ÀÔ%'";
		}
		//if(gender!=2){
			//sql=sql+" and s.gender="+gender;
		//}
		//if(major_id!=0){
			//sql=sql+" and s.major="+major_id;
		//}
		Query query = s.createQuery(sql);
		//query.setParameter(0, name);
		//query.setParameter(1, gender);
		//query.setParameter(2, major);
		List<Student> studentList= (List<Student>)query.list();	
		for (Student stu : studentList) {
			out.println(stu.getId() + "," + stu.getName() + ","
					+stu.getGender()+ stu.getMajor().getName());
		}
		s.getTransaction().commit();
		HibernateUtil.closeSessionFactory();
		
		
	}

}
