<?php
class ProductAction extends Action {
   
    public function index(){
	 if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
	 $this->display();
    }


     public function add_product(){
	 if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
	
    if(isset($_POST["Submit1"])){
	 import('ORG.Net.UploadFile');
	 $upload = new UploadFile();// 实例化上传类
	 $upload->maxSize  = 3145728 ;// 设置附件上传大小
	 $upload->savePath =  './Public/up/Product_image/';// 设置附件上传目录
	 $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');
	 if(!$upload->upload()) {// 上传错误提示错误信息
	 $this->error($upload->getErrorMsg());
		 }else{// 上传成功 获取上传文件信息
		$info =  $upload->getUploadFileInfo();
		}	
	 
	 $image_name=$info[0]["savename"];
	 $name=$_POST["name1"];
     $type0=$_POST["type0"];
	 $type=$_POST["type1"];
	 $att=$_POST["att1"];
	 $value=$_POST["val1"];
	
	 $mark=0;
	 if($name==""){
	 $mark=1;   }
	 foreach($att as $va0){   
	  if($va0==""){ 
	  $mark=1; 
	  }  
	 }
	 foreach($value as $va1){	
	 if($va1==""){  
	 $mark=1;
	 }  
	 }
     if($mark){
	 $this->redirect('index','',1,"有属性为空，提交失败！等待返回.......");
	 }
	 
	 
	 
	 $m=M('product'); 
	 $m->startTrans();
	 
	 for($i=0;$i<count($att);$i++){
	 $m->name=$name;
     $m->type1=$type0;
	 $m->type2=$type;
	 $m->image_name=$image_name;
	 $m->attribute=$att[$i];
	 $m->value=$value[$i];
	 if(!$m->add()){$m->rollback();$this->redirect('product_list/','',1,"提交失败！等待返回.......");}
	  }
	  
	 $m->commit();
     $this->redirect('index','',1,"提交成功！等待返回.......");
	}
	

	 
   }
  
  
  




   public function product_list(){
   if(!isset($_SESSION['username'])){
   $this->redirect('Index/index','',0,".......");
     }
   
   
   $t1="疫苗产品";
   $type1=isset($_GET["type1"])?$_GET["type1"]:$t1;
   $m=M('product');
	import('ORG.Util.Page');
	$arr["type1"]=$type1;
    $d = $m->Distinct(true)->field('name')->where($arr)->select( );
	$count =count($d);
	$Page= new Page($count,5);
	$show= $Page->show();
	$nowPage = isset($_GET['p'])?$_GET['p']:1;
	$list = $m->Distinct(true)->field('name,image_name')->where($arr)->page($nowPage.','.$Page->listRows)->select();
	$this->assign('list',$list);// 赋值数据集
	$this->assign('page',$show);// 赋值分页输出
    $this->display();
   
   }
  
  




  
   public function preview(){
	 if(!isset($_SESSION['username'])){
	 $this->redirect('Index/index','',0,".......");
	 }
	   $name=$_GET["name"];
	   $m=M('product');
	   $arr["name"]=$name;
	   $d=$m->where($arr)->select();
	   $this->assign("list",$d);
	   $this->display();
   }
   
   



   public function delete_product(){
     if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
   
    $name=$_GET["name"];
    $m=M('product');
	$arr["name"]=$name;
	$d0=$m->where($arr)->select();
	$filedir="Public/up/Product_image/".$d0[0]["image_name"];
	if(file_exists($filedir)){
	$state=unlink($filedir);
	if(!$state){
	$this->redirect('product_list','',1,"图片删除失败！等待返回.......");
	}
	}
	
	$d=$m->where($arr)->delete();
    if($d){
	$this->redirect('product_list','',1,"删除成功！等待返回.......");
	}else{
	$this->redirect('product_list','',1,"删除失败！等待返回.......");
	}
	
   } 
 
   
}