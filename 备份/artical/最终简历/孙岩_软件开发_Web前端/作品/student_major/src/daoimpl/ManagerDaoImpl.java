package daoimpl;


import java.util.List;

import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.Transaction;

import dao.ManagerDao;
import entity.Major;
import entity.Manager;
import util.HibernateUtil;

public class ManagerDaoImpl implements ManagerDao{
	public Manager login(Manager manager) throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();
			Query query = s.createQuery("select m from Manager m where m.name=? and m.password=?");
			query.setParameter(0, manager.getName());
			query.setParameter(1, manager.getPassword());
			Manager m= (Manager) query.uniqueResult();		
			s.getTransaction().commit();			
			return m;			
	}
	public Manager login(String name) throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();
		Query query = s.createQuery("select m from Manager m where m.name=?");
		query.setParameter(0, name);
		Manager m= (Manager) query.uniqueResult();		
		s.getTransaction().commit();		
		return m;
	}
	public void update(String password, int id) throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();		
		Manager manager= (Manager) s.get(Manager.class, id);
		manager.setPassword(password);			
		s.update(manager);
		s.getTransaction().commit();
		
		
	}

}
