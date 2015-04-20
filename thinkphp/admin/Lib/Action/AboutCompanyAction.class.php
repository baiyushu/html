<?php
class AboutCompanyAction extends Action {
    public function index(){
    if(!isset($_SESSION['username'])){
    $this->redirect('Index/index','',0,".......");
    }
    $this->display();
     }

	 
	private function delete($type){	
	 if(!isset($_SESSION['username'])){
     $this->redirect('Main/index','',0,".......");
     }
	 
    $m0=M('company_image');
	$m=M('about_company'); 
	
	$t["type"]=$type;
	$m0->startTrans();
	
	$f=$m0->where($t)->select();
	$d=$m0->where($t)->delete();
    $d1=$m->where($t)->delete();
     
	for($i=0;$i<count($f);$i++){
	$filedir="Public/up/company_image/".$f[$i]["name"];
	if(file_exists($filedir)){
       if(!unlink($filedir)){
	$m->rollback();
	$this->redirect('index','',1,"文件删除失败.......");
	}
	}else {
	continue;
	}
	}
	
	if(!($d1&&$d)){
	$m0->rollback();$this->redirect('index','',1,"数据更新失败.......");
	}

	}
	
	 
	 
	 public function update_about_company(){
	 if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
	 
	 if(isset($_POST["Submit"])){
	 $file=$_FILES["file"]["name"];
	 $des=$_POST["des"];
	 $pos=$_POST["pos"]; 
	 $type=$_POST["type"];
	 $cont=$_POST["brif_cont"];
	 $m=M('about_company'); 
	 $m1=M('company_image');
     $m->startTrans();
	 $arr["type"]=$type;
	 $count = $m->where($arr)->count();
	 if($count>0){
     $this->delete($type);
	 }
	 
	 
	 
	 if(count($file)>0){
	 import('ORG.Net.UploadFile');
	 $upload = new UploadFile();// 实例化上传类
	 $upload->maxSize  = 3145728 ;// 设置附件上传大小
	 $upload->savePath =  './Public/up/company_image/';// 设置附件上传目录
	 $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');
	 if(!$upload->upload()) {// 上传错误提示错误信息
	 $this->error($upload->getErrorMsg());
		 }else{// 上传成功 获取上传文件信息
		$info =  $upload->getUploadFileInfo();
		}	
  	}
	
	
	$cont=htmlspecialchars($cont);
	$cont=preg_replace("/\s{6,}/","</p>*<p>",$cont);
	$cont=preg_replace("/[\s]/","",$cont);
    $cont="<p>".$cont."</p>";
    $p = preg_split('/\*/', $cont);

	for($i=0;$i<count($file);$i++){
	if(($info[$i]['savename']!="")){
	if($pos[$i]>count($p))continue;
	if($i==0){
	$des[$i]=htmlspecialchars($des[$i]);
	$p[$pos[$i]-1]="<img class='company_img_1' src='"."__PUBLIC__/up/company_image/".
	$info[$i]['savename']."'/><p class='img_p'>".$des[$i]."</p>".$p[$pos[$i]-1];
	}else{
	$p[$pos[$i]-1]="<img class='company_img' src='"."__PUBLIC__/up/company_image/".
	$info[$i]['savename']."'/><p class='img_p'>".$des[$i]."</p>".$p[$pos[$i]-1];  
		  }
	}
	}
	
	
	 for($i=0;$i<count($file);$i++){
	 if(($info[$i]['savename']!="")){
     $m1->type=$type;
     $m1->name=	$info[$i]['savename'];
	 if(!$m1->add()){ 
	 $m->rollback();
		$this->redirect('index','',2,'更新失败......');
	}
  }
}
	
	$cont=implode("",$p);
    $m->content=$cont;
	$m->type=$type;
    if($m->add()){ 
	$m->commit();
	$this->redirect('index','',2,'更新成功......');
	}
	
	else{
	    $m->rollback();
		$this->redirect('index','',2,'更新失败......');
	}	
}
}
	
	
	
	
	
	
	public function preview(){
	 if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
    }
	 
    $type=isset($_GET["type"])?$_GET["type"]:"1";
	$m=M('about_company');
	$arr["type"]=$type;
	$d=$m->where($arr)->select();
	$this->assign("type",$type);
	$this->assign("list",$d);
	$this->display();
	}
	
}
	
	
