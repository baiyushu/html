<?php

    class MainAction extends Action{
	
	public function index(){
	  if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
	 $this->display();
	}
	
	
	
	public function com_inf(){
	
	 if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
	 
	 
	if(isset($_POST["Submit1"])){
	$type=$_POST["type"];
	$val=$_POST["value"];
	
	foreach ( $type as $key0 => $value0 ){
    if($value0==""){
	  $this->redirect('index','',1,"有数据数据为空.......");
	 }
    }
	
	foreach ( $val as $key => $value ){
    if($value==""){
	  $this->redirect('index','',1,"有数据数据为空.......");
	  }
     }
	
	$m=M('company_information');
    $m->execute("delete from web_company_information");
	
	for($i=0;$i<count($type);$i++){
	$data["type"]=$type[$i];
	$data["value"]=$val[$i];
	if(!$m->add($data)){
	  $this->redirect('index','',1,"更新失败.......");
	  }
	}
	$this->redirect('index','',1,"更新成功.......");
	
	}
	
	
	if(isset($_POST["Submit2"])){
	    import('ORG.Net.UploadFile');
		
		$upload = new UploadFile();// 实例化上传类
		$upload->uploadReplace=true;
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->saveRule=$this->$i;
	    $upload->allowExts  = array('jpg');// 设置附件上传类型
		$upload->savePath =  './Public/images/focus/';// 设置附件上传目录
		if(!$upload->upload()) {// 上传错误提示错误信息
		$this->error($upload->getErrorMsg());
		 }else{// 上传成功 获取上传文件信息
		//$info =  $upload->getUploadFileInfo();
		//var_dump($info);
		$this->success('上传成功！');
              }
	}
	
	
	if(isset($_POST["Submit3"])){
	    import('ORG.Net.UploadFile');
	    $upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->uploadReplace=true;
	    $upload->allowExts  = array('png');// 设置附件上传类型
		$upload->saveRule = weixin;
		$upload->savePath =  './Public/images/weixin/';// 设置附件上传目录
		if(!$upload->upload()) {// 上传错误提示错误信息
		$this->error($upload->getErrorMsg());
		 }else{// 上传成功 获取上传文件信息
		$this->success('上传成功！');
              }
	}
	
	}
	
}