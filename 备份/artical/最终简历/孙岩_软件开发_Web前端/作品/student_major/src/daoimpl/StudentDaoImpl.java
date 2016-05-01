package daoimpl;

import java.util.List;

import org.hibernate.Query;
import org.hibernate.Session;

import dao.StudentDao;
import entity.Major;
import entity.Manager;
import entity.Student;

import util.HibernateUtil;

public class StudentDaoImpl implements StudentDao {
	
	public void add(Student student) throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();
		s.save(student);
		s.getTransaction().commit();				
	}
	public List<Student> query() throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();
		Query query = s.createQuery("select s from Student s left join fetch s.major");	
		List<Student> studentList= (List<Student>)query.list();		
		s.getTransaction().commit();				
		return studentList;	
	}
	public void delete(int id) throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();		
		Student student = new Student();
		student.setId(id);		
		s.delete(student);
		s.getTransaction().commit();	
		
	}
	public Student query(int id) throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();		
		Query query = s.createQuery("select student from Student student left join fetch student.major where student.id=?");
		query.setParameter(0, id);
		Student student= (Student) query.uniqueResult();		
		s.getTransaction().commit();			
		return student;	
	}
	public void update(Student student, int id) throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();		
		Student stu= (Student) s.get(Student.class, id);
		stu.setName(student.getName());	
		stu.setGender(student.getGender());	
		stu.setMajor(student.getMajor());	
		s.update(stu);
		s.getTransaction().commit();		
	}
	public List<Student> query(String name, int gender,int major_id) throws Exception {
		Session s = HibernateUtil.getSessionFactory().getCurrentSession();
		s.beginTransaction();
		//Query query = s.createQuery("select s from Student s left join fetch s.major where (name is null or s.name=name) and (gender=2 or s.gender=gender) and (major_id=0 or s.major.id=major_id)");	
		String sql="select s from Student s where  1=1";
		if(name!=null&name!=""){
			sql=sql+" and s.name like"+"'%"+name+"%'";
		}else{
			sql=sql;
		}
		if(gender!=2){
			sql=sql+" and s.gender="+gender;
		}else{
			sql=sql;
		}
		if(major_id!=0){
			sql=sql+" and s.major.id="+major_id;
		}else{
			sql=sql;
		}
		Query query = s.createQuery(sql);
		List<Student> studentList= (List<Student>)query.list();		
		s.getTransaction().commit();				
		return studentList;	
	}
	

}
