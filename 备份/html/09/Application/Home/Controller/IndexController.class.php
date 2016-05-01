<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
  public function index(){
    $this->display();
  }
  public function loginorregister(){
    $this->display();
  }
  public function haveloginindex(){
    if(!empty(session('username'))){
      $username=session("username");
      $user_id=session("user_id");
      $artical=D("artical");
      $artical->create();
      $artical_id=$_POST['artical_id'];
      $r1=$artical->where("artical_id='$artical_id'")->delete();
      $r=$artical->where("user_id='$user_id'")->select();
      $this->assign("select",$r);
      $this->assign("username","$username");
      $this->display();
    }else{
      $this->redirect('login');
    }
  }
  public function register(){
    $user=D("usermessage");
    $error=array();
    if($_SERVER['REQUEST_METHOD']=='POST'){
      if(!empty($_POST['username'])){
        $data['name']=$_POST['username'];
      }else{
        $error[]="请输入用户名";
      }
      if(!empty($_POST['password'])){
        $data['password']=$_POST['password'];
      }else{
        $error[]="请输入密码";
      }
      if(empty($error)){
        $r=$user->where("name='{$data['name']}'")->select();
        if(empty($r)){
          $r1=$user->add($data);
          if($r1){
            //$this->success("恭喜你，注册成功,请登录","login");
            $this->redirect('login');
          }else{
            $this->assign("error","系统正忙，请重新注册");
          }
          }else{
            $this->assign("error","对不起，此用户名已经注册");
          }
        }else{
          foreach($error as $msg){
            $this->assign("error","$msg");
          }
        }   
    }
    $this->display();
  }
  public function login(){ 
    $user=D("usermessage");
    $user->create();
    $error=array();
    if($_SERVER['REQUEST_METHOD']=='POST'){
      if(!empty($_POST['username'])){
        $username=$_POST['username'];
      }else{
        $error[]="请输入用户名";
      }
      if(!empty($_POST['password'])){
        $password=$_POST['password'];
      }else{
         $error[]="请输入密码";
      }
      if(empty($error)){
        $r=$user->where("name='$username'")->select();
        if(!empty($r)){
          $r1=$user->where("name='$username' and password='$password'")->find();
          if(!empty($r1)){
            session("username","$username");
            session('user_id',$r1['user_id']);
            $this->redirect("haveloginindex");
          }else{
            $this->error("密码错误，请重新输入");
          } 
        }else{
          $this->error("对不起，此用户名并未注册"); 
        }
        }else{
          foreach($error as $msg){
            $this->assign("error","$msg");
          }
      }
    }
    $this->display();
  }
  public function logout(){
    $username=session('username');
    if(!empty($username)){
      session(null);
      $username=session('username');
      if(empty($username)){
        $this->success('注销成功','index');               
      }else{
        $this->assign('logout','注销失败');
      }
    }else{
       $this->assign('logout','您还没有登录');
    }
  }
  public function changepassword(){
    $error=array();
    $user=D('usermessage');
    $username=session('username');
    $user_id=session('user_id');
    if(!empty($username)){
      if($_SERVER['REQUEST_METHOD']=='POST'){
        if(!empty($_POST['newpassword'])){
          $this->assign("user_id","$user_id");
          $data['password']=$_POST['newpassword'];
        }else{
          $error[]="请输入密码";
        }
        if(empty($error)){
          $r=$user->where("user_id='$user_id'")->save($data);
          $this->assign("error2","$r");
          if($r){
            $this->assign("error","恭喜你，密码更改成功");
          }else{
             $this->assign("error","系统正忙，请重新更改密码");
          }
        }else{
          foreach($error as $msg){
            $this->assign("error","$msg");
          }
        }
      }
    }else{
      $this->assign('error','请先登录');
    }
    $this->display();
  }
  public function writer(){
    if(!empty(session('username'))){
      $text=D("text");
      $artical=D('artical');
      $user_id=session('user_id');
      $username=session('username');
      $content=$_POST['content'];
      $orderhidden=$_POST['orderhidden'];
      if($orderhidden=='newtext'){
        $data['user_id']=$user_id;
        $data['textname']=$_POST['textname'];
        $text->add($data);
      }else if($orderhidden=='textname'){
        $data['textname']=$_POST['$text.textname'];
        $artical->add($data);
      }else{
          $title=$_POST['title'];
          $this->assign("content","$content");
          $this->assign("user_id","$user_id");
          $artical=D("artical");
          $artical->create();
          $data['user_id']=$user_id;
          $data['artical_content']= $content;
          $data['artical_title']=$title;
          $data['username']=$username;
          $artical->add($data);

        }

      $r=$text->where("user_id='$user_id'")->select();
      $this->assign("select",$r);
      $this->display();

    }else{
      $this->redirect('login');
    }

  }
  public function showcontent(){
    $artical_id=$_POST['artical_id'];
    $artical=D('artical');
    $r=$artical->where("artical_id='$artical_id'")->find();
    $this->assign("title",$r['artical_title']);
    $this->assign("content",$r['artical_content']);
    $this->display();
  }
}
?>