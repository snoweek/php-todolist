package util;

import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;

/**
 * 获取SessionFactory的工具类
 * 
 */
public class HibernateUtil {
	// 该静态成员在该类加载时即被初始化，而且只有一份
	// 所以在程序运行过程中，只使用这一个SessionFactory对象（避免重复创建对象）
	private static final SessionFactory sessionFactory = buildSessionFactory();

	private static SessionFactory buildSessionFactory() {
		// 创建Configuration对象，调用configure()方法获取hibernate.cfg.xml中的配置信息
		Configuration cfg = new Configuration().configure();
		// 使用Configuration对象创建并返回SessionFactory
		return cfg.buildSessionFactory();
	}

	public static SessionFactory getSessionFactory() {
		return sessionFactory;
	}

	public static void closeSessionFactory() {
		sessionFactory.close();
	}
}
