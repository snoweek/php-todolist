package dao;

import java.util.List;

import entity.Major;
import entity.Student;

public interface StudentDao {
	List<Student> query() throws Exception;
	void delete(int id) throws Exception;
	Student query(int id) throws Exception;
	void update(Student Student,int id) throws Exception;
	void add(Student student) throws Exception;
	List<Student> query(String name,int gender,int major_id) throws Exception;
	

}
