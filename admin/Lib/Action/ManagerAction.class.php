<?php

    class ManagerAction extends Action{
	
	public function index(){
	   if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
    $this->display();	
	}
	
	public function modify(){
	 if(!isset($_SESSION['username'])){
     header("location: http://localhost/thinkphp/admin.php/Index/index");
     exit;}
	$oldpassword=$_POST["oldpassword"];
	$newpassword=$_POST["newpassword"];
	$new_ack=$_POST["newpassword_ack"];
	if($newpassword!=$new_ack){
	$this->redirect('index','',1,"ȷ���������.......");
	}
	$m=M(manager);
	$username = session('username');
	$arr["username"]=$username;
	$d=$m->where($arr)->select();
	$oldpassword=md5($oldpassword);
	
	if($oldpassword!=$d[0]["password"]){
	$this->redirect('index','',1,"ԭʼ�������.......");
	}
	$update["password"]=md5($newpassword);
	$d=$m->where($arr)->save($update);
	
	if($d){
	$this->redirect('index','',1,"�����޸ĳɹ�.......");
	}

	
	}
	
	
	
	public function add_manager(){
	  if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
	$this->display();
	}
	
	
	public function add_manager_1(){
     if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
	 $username=$_POST["username"];
	 $password=$_POST["password"];
	 $password_ack=$_POST["password_ack"];
	 if($password!=$password_ack){
	  $this->redirect('add_manager','',1,"����ȷ��ʧ�ܣ�.......");
	 }
	 $password=md5($password);
	
	 $m=M(manager);
	 $m->username=$username;
	 $m->password=$password;
	 $mark=$m->add();
	if($mark) { 
	$this->redirect('add_manager','',1,"��ӳɹ���.......");
	}
	else{ $this->redirect('add_manager','',1,"���ʧ�ܣ�.......");
	}
	
	}
	
}