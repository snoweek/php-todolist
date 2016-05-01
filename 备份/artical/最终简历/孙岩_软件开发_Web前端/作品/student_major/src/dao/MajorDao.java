package dao;

import java.util.List;

import entity.Dept;
import entity.Major;

public interface MajorDao {
	List<Major> query() throws Exception;
	void add(Major major) throws Exception;
	void delete(int id) throws Exception;
	Major query(int id) throws Exception;
	void update(Major major,int id) throws Exception;


}
