package daoimpl;

import java.util.List;

import org.hibernate.Query;
import org.hibernate.Session;

import dao.EmpDao;
import entity.Dept;
import entity.Emp;
import entity.Manager;
import util.HibernateUtil;

public class EmpDaoImpl implements EmpDao{
	public List<Emp> query() throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();
		Query query = s.createQuery("select e from Emp e");		
		List<Emp> empList= (List<Emp>)query.list();		
		s.getTransaction().commit();				
		return empList;	
	}
	public void delete(int id) throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();		
		Emp emp = new Emp();
		emp.setId(id);		
		s.delete(emp);
		s.getTransaction().commit();	
		
	}
	public Emp query(int id) throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();		
		Query query = s.createQuery("select emp from Emp emp where demp.id=?");
		query.setParameter(0, id);
		Emp emp= (Emp) query.uniqueResult();		
		s.getTransaction().commit();			
		return emp;	
	}
	public void update(Emp emp, int id) throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();		
		Emp e= (Emp) s.get(Emp.class, id);
		e.setName(emp.getName());
		e.setGender(emp.getGender());
		e.setSalary(emp.getSalary());
		Dept dept=new Dept();
		dept.setId(id);
		e.setDept(dept);
		s.update(e);
		s.getTransaction().commit();
		
	}
	

}
