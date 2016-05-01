package daoimpl;

import java.util.List;

import org.hibernate.Query;
import org.hibernate.Session;

import dao.MajorDao;
import entity.Dept;
import entity.Emp;
import entity.Major;
import entity.Manager;
import util.HibernateUtil;

public class MajorDaoImpl implements MajorDao{
	public List<Major> query() throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();
		Query query = s.createQuery("select m from Major m");		
		List<Major> majorList= (List<Major>) query.list();		
		s.getTransaction().commit();				
		return majorList;	
	}
	public void add(Major major) throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();
		s.save(major);
		s.getTransaction().commit();				
	}
	public void delete(int id) throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();		
		Major major = new Major();
		major.setId(id);		
		s.delete(major);
		s.getTransaction().commit();		
	}
	public Major query(int id) throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();		
		Query query = s.createQuery("select m from Major m where m.id=?");
		query.setParameter(0, id);
		Major major= (Major) query.uniqueResult();		
		s.getTransaction().commit();			
		return major;			
	}
	public void update(Major major,int id) throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();		
		Major m= (Major) s.get(Major.class, id);
		m.setName(major.getName());
		m.setCollege(major.getCollege());				
		s.update(m);
		s.getTransaction().commit();
		
	}
	

}
