<?php
class DownloadDataAction extends Action {
   
    public function index(){
	 if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
	 
     $this->display();
    }
	
	
    public function up_file(){
	 if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
	
	if(isset($_POST["Subfile"])){
     $des=$_POST["des"];
	 $filename=$_FILES["file"]["name"];
     $mark=0;
	 foreach($des as $va0){   if($va0==""){  $mark=1; }   }
	 foreach($filename as $va1){	if($va1==""){  $mark=1; }   }
     if($mark){$this->redirect('index','',2,"有属性为空，提交失败！等待返回.......");}
	
	 import('ORG.Net.UploadFile');
	 $upload = new UploadFile();// 实例化上传类
	 $upload->maxSize  = 3145728 ;// 设置附件上传大小
	 $upload->savePath =  './Public/up/download/';// 设置附件上传目录
	 //$upload->saveRule = time;
	 if(!$upload->upload()) {// 上传错误提示错误信息
	 $this->error($upload->getErrorMsg());
		 }else{// 上传成功 获取上传文件信息
		$info =  $upload->getUploadFileInfo();
		}
			
	
	$m=M("download_filename");
	 for($i=0;$i<count($filename);$i++){
	 $m->name=$info[$i]["savename"];
	 $m->describle=$des[$i];
	 if(!$m->add()){$m->rollback();$this->redirect('index','',3,"提交失败！等待返回.......");
	     }
	 }
	
     $this->redirect('index','',3,"提交成功！等待返回.......");
	}
	
	}
	
	
	

	
	public function down_file(){
	   if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
	
	$m=M("download_filename");
	import('ORG.Util.Page');
	$count = $m->count();
	$Page= new Page($count,5);
	$show= $Page->show();
	$nowPage = isset($_GET['p'])?$_GET['p']:1;
    $list = $m->order('DateTime')->page($nowPage.','.$Page->listRows)->select();
	
	$this->assign('list',$list);// 赋值数据集
    $this->assign('page',$show);// 赋值分页输出
    $this->display(); 
	
	}
	
	
	

	
	public function delete_file(){
	   if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
	 
	$id=$_GET["Id"];
    $m=M('download_filename');
	$arr["Id"]=$id;
	$d0=$m->where($arr)->select();
	$filedir="Public/up/download/".$d0[0]["name"];
	
	if(file_exists($filedir)){
	$state=unlink($filedir);
	if(!$state){
	 $this->redirect('down_file','',1,"文件删除失败！等待返回.......");
	}
	}
	
	$d=$m->where($arr)->delete();
    if($d){
	$this->redirect('down_file','',1,"删除成功！等待返回.......");
	}else{
	$this->redirect('down_file','',1,"删除失败！等待返回.......");
	}

	
	    }
	
    }
	
	