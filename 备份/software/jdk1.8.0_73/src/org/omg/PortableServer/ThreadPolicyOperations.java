package org.omg.PortableServer;


/**
* org/omg/PortableServer/ThreadPolicyOperations.java .
* Generated by the IDL-to-Java compiler (portable), version "3.2"
* from /HUDSON3/workspace/8-2-build-linux-amd64/jdk8u73/6086/corba/src/share/classes/org/omg/PortableServer/poa.idl
* Friday, January 29, 2016 5:40:38 PM PST
*/


/**
	 * The ThreadPolicy specifies the threading model 
	 * used with the created POA. The default is 
	 * ORB_CTRL_MODEL.
	 */
public interface ThreadPolicyOperations  extends org.omg.CORBA.PolicyOperations
{

  /**
  	 * specifies the policy value
  	 */
  org.omg.PortableServer.ThreadPolicyValue value ();
} // interface ThreadPolicyOperations
