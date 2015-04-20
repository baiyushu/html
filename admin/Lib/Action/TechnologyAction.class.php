<?php
class TechnologyAction extends Action {
   
     public function index(){
	 if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
	 $this->display();
    }

	
     public function clinical_skills(){
	 if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
	 
	 if(isset($_POST["Submit"])){
	 $file=$_FILES["file"]["name"];
	 $des=$_POST["des"];
	 $pos=$_POST["pos"];
	 $type=$_POST["type"];
	 $cont=$_POST["cont"];
	 $title=$_POST["title"];
	 if(empty($title)||empty($cont)||empty($type)){
	 $this->redirect('index','',2,'������Ϊ��......');
	 }
	 
	 if(count($file)>0){
	 import('ORG.Net.UploadFile');
	 $upload = new UploadFile();// ʵ�����ϴ���
	 $upload->maxSize  = 3145728 ;// ���ø����ϴ���С
	 $upload->savePath =  './Public/up/technology_image/';// ���ø����ϴ�Ŀ¼
	 $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');
	 //$upload->saveRule = time;
	 if(!$upload->upload()) {// �ϴ�������ʾ������Ϣ
	 $this->error($upload->getErrorMsg());
		 }else{// �ϴ��ɹ� ��ȡ�ϴ��ļ���Ϣ
		$info =  $upload->getUploadFileInfo();
		}
	}	
	
	
	$m=M('technology_suport'); 
	$m1=M('tech_image');
	$m->startTrans();
    for($i=0;$i<count($file);$i++){
	 if(($info[$i]['savename']!="")){
     $m1->title=$title;
     $m1->filename=	$info[$i]['savename'];
	 if(!$m1->add()){ 
	 $m->rollback();
		$this->redirect('index','',2,'����ʧ��......');
	}
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
	$p[$pos[$i]-1]="<img src='"."__PUBLIC__/up/technology_image/".
	$info[$i]["savename"]."'/><p class='img_p'>".$des[$i]."</p>".$p[$pos[$i]-1];
	}
	}
	
	
	$cont=implode("",$p);
    $m->content=$cont;
	$m->type=$type;
	$m->title=$title;
	$info="<h1>����ɹ����ȴ�����......</h1>";
	if($m->add()){ $m->commit();$this->redirect('Technology/tech_list','',2,"����ɹ����ȴ�����");
	}
	else{
	    $m->rollback();
		$this->redirect('Technology/tech_list','',2,'����ʧ�ܣ��ȴ�����......');
	}
	
}
}

	public function tech_list(){
	 if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }

	
	$type=isset($_GET["type"])?$_GET["type"]:0;
	$m=M('technology_suport');
	import('ORG.Util.Page');
	$arr["type"]=$type;
	$count = $m->where($arr)->count();
	$Page= new Page($count,5);
	$show= $Page->show();
	$nowPage = isset($_GET['p'])?$_GET['p']:1;
	$list = $m->where($arr)->page($nowPage.','.$Page->listRows)->select();
	$this->assign('list',$list);// ��ֵ���ݼ�
	$this->assign('page',$show);// ��ֵ��ҳ���
    $this->display();
	}
	

	public function preview(){
	if(!isset($_SESSION['username'])){
    $this->redirect('Index/index','',0,".......");
     }
    $title=isset($_GET["title"])?$_GET["title"]:"1";
	
	$m=M('technology_suport');
	$arr["title"]=$title;
	$d=$m->where($arr)->select();
	$this->assign("list",$d);
	$this->display();
	}
	
	
	public function delete(){	
	if(!isset($_SESSION['username'])){
    $this->redirect('Index/index','',0,".......");
     }
	 
	$title=$_GET['title'];
	$m=M('tech_image');
	$m1=M('technology_suport');
	$m->startTrans();
	$arr["title"]=$title;
	$file=$m->where($arr)->select();

	for($i=0;$i<count($file);$i++){
	if(file_exists("./Public/up/technology_image/".$file[$i]["filename"])){
	$state=unlink("./Public/up/technology_image/".$file[$i]["filename"]);
	if(!$state){
	$m->rollback();
	$this->redirect('Technology/tech_list','',2,"ɾ��ʧ��ͼƬ���ȴ�����.......");
	}
	}
	else {  
	continue;
	}
	}

	$d=$m->where($arr)->delete();
    $d1=$m1->where($arr)->delete();
	
	if($d1){ 
	$m->commit();$this->redirect('Technology/tech_list','',0,"ɾ���ɹ����ȴ�����.......");
	}
	else{ $m->rollback();$this->redirect('Technology/tech_list','',3,"ɾ��ʧ�ܣ��ȴ�����.......");
        }
		
		
	}
	
	
}