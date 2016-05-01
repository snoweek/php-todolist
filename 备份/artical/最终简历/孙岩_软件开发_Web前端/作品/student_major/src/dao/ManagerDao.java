package dao;

import java.util.List;

import entity.Major;
import entity.Manager;

public interface ManagerDao {
	Manager  login(Manager manager) throws Exception;
	Manager login(String name) throws Exception;
	void update(String password,int id) throws Exception;


}
