package dao;

import java.util.List;

import entity.Dept;
import entity.Emp;

public interface EmpDao {
	List<Emp> query() throws Exception;
	void delete(int id) throws Exception;
	Emp query(int id) throws Exception;
	void update(Emp emp,int id) throws Exception;

}
