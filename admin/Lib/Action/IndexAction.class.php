<?php
class IndexAction extends Action {
    Public function verify(){
       import('ORG.Util.Image');
	   ob_end_clean();
	   Image::buildImageVerify(4,1,'png'); 
    }
	
     public function index(){
	 $this->display();
    }
	
	 public function  login(){
	 if(session('verify') != md5($_POST['verify'])) {
     $this->redirect('index','',1,"验证码错误.......");
     }
	 
	 $user=$_POST["username"];
	 if(!preg_match('/[0-9A-Za-z]{2,}\@[0-9A-Za-z]{2,}\.[0-9A-Za-z]{2,}/', $user)){
	 $this->redirect('index','',1,"用户不存在.......");
	 }
	 $pass=$_POST["password"];
	 $m=M("manager");
	 $pass=md5($pass);
	 $arr["password"]=$pass;
	 $arr["username"]=$user;
	 $d=$m->where($arr)->count();
	 
     if($d){
	 session('username',$user); 
	 $this->redirect('Main/index','',2,"登录成功.......");  
     }else{
	 $this->redirect('index','',2,"登录失败.......");  
	 }	  
	}
	
	public function  quit(){
	
	unset($_SESSION['username']);
	$this->redirect('Main/index','',0,".......");   
  
	
	}

}