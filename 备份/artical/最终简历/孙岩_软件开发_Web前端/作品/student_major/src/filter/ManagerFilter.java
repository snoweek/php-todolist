package filter;

import java.io.IOException;
import javax.servlet.Filter;
import javax.servlet.FilterChain;
import javax.servlet.FilterConfig;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import entity.Manager;

public class ManagerFilter implements Filter {
    public ManagerFilter() {
        // TODO Auto-generated constructor stub
    }
	public void destroy() {
		// TODO Auto-generated method stub
	}
	public void doFilter(ServletRequest request, ServletResponse response, FilterChain chain) throws IOException, ServletException {
		HttpServletRequest req = (HttpServletRequest) request;    
		HttpServletResponse res = (HttpServletResponse) response;
        HttpSession session = req.getSession(true);      
        Manager manager = (Manager) session.getAttribute("manager");
        if (manager== null) {	            
        	res.sendRedirect("/Design/login.jsp");       
        	} else { 
        		chain.doFilter(request, response);
        	}
        }		
	public void init(FilterConfig fConfig) throws ServletException {
		// TODO Auto-generated method stub
	}

}
