<?php
class NewsAction extends Action {
   
     public function index(){
	 if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
	 $this->display();
    }

	
     public function insert_news(){
	 if(!isset($_SESSION['username'])){
     $this->redirect('Index/index','',0,".......");
     }
	 if(isset($_POST["Submit"])){
	 $file=$_FILES["file"]["name"];
	 $des=$_POST["news_des"];
	 $pos=$_POST["pos"];
	 $title=$_POST["title"];
	 $date=$_POST["date"];
     $cont=$_POST["news_cont"];
	 $type=$_POST["type"];
	 $title=htmlspecialchars($title);
	 $cont=htmlspecialchars($cont);
	  if($title==""||$cont==""){$this->redirect('News/index','',2,'有内容为空，等待返回......');}
	  
	 if(count($file)>0){
	 import('ORG.Net.UploadFile');
	 $upload = new UploadFile();// 实例化上传类
	 $upload->maxSize  = 3145728 ;// 设置附件上传大小
	 $upload->savePath =  './Public/up/news_image/';// 设置附件上传目录
	 $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');
	 //$upload->saveRule = time;
	 if(!$upload->upload()) {// 上传错误提示错误信息
	 $this->error($upload->getErrorMsg());
		 }else{// 上传成功 获取上传文件信息
		$info =  $upload->getUploadFileInfo();
		}	
	}
	

	 $m=M('news_content'); 
	 $m1=M("news_image");
	 $m->startTrans();
     for($i=0;$i<count($file);$i++){
	 if(($info[$i]['savename']!="")){
     $m1->title=$title;
     $m1->name=	$info[$i]['savename'];
	 if(!$m1->add()){ 
	 $m->rollback();
		$this->redirect('index','',2,'更新失败......');
	}
  }
}

	$cont=preg_replace("/\s{5,}/","</p>*<p>",$cont);
	$cont=preg_replace("/[\s]/","",$cont);
    $cont="<p>".$cont."</p>";
    $p = preg_split('/\*/', $cont);

    for($i=0;$i<count($file);$i++){
	if(($_FILES["file"]["name"][$i]!="")){
	if($pos[$i]>count($p))continue;
	$des[$i]=htmlspecialchars($des[$i]);
	$p[$pos[$i]-1]="<img src='"."__PUBLIC__/up/news_image/".
	$info[$i]['savename']."'/><p class='img_p'>".$des[$i]."</p>".$p[$pos[$i]-1];
	}
	}
	
	
	$cont=implode("",$p);
    $m->news_title=$title;
	$m->news_content=$cont;
	$m->news_date=$date;
	$m->type=$type;
    if($m->add()){ $m->commit();$this->redirect('News/index','',2,"插入成功，等待返回");
	}
	else{
	    $m->rollback();
		$this->redirect('News/index','',2,'插入失败，等待返回......');
	}
   }
}
	
	
	public function news_list(){
	if(!isset($_SESSION['username'])){
    $this->redirect('Index/index','',0,".......");
     }
	
	$type=isset($_GET["type"])?$_GET["type"]:0;
	$m=M('news_content');
	import('ORG.Util.Page');
	$arr["type"]=$type;
	$count = $m->where($arr)->count();
	$Page= new Page($count,5);
	$show= $Page->show();
	$nowPage = isset($_GET['p'])?$_GET['p']:1;
	$list = $m->where($arr)->order('news_date')->page($nowPage.','.$Page->listRows)->select();
	
	$this->assign('list',$list);// 赋值数据集
    $this->assign('page',$show);// 赋值分页输出
    $this->display();
   
	}
	
	
	
	public function preview(){
	if(!isset($_SESSION['username'])){
    $this->redirect('Index/index','',0,".......");
     }
	$title=$_GET["title"];
	$m=M('news_content');
	$arr["news_title"]=$title;
	$d=$m->where($arr)->select();
	$this->assign("list",$d);
	$this->display();
	}
	
	
	
	public function delete(){	
	if(!isset($_SESSION['username'])){
    $this->redirect('Index/index','',0,".......");
     }
	
	$title=$_GET['title'];
	$t["title"]=$title;
    $m=M("news_image");
	$m1=M('news_content');
	$m->startTrans();
	$arr["title"]=$title;
	$arr["news_title"]=$title;
    
	$f=$m->where($arr)->select();
	for($i=0;$i<count($f);$i++){
	$filedir="./Public/up/news_image/".$f[$i]["name"];
	if(file_exists($filedir)){
	$state=unlink($filedir);
	if(!$state){
	$m->rollback();
	$this->redirect('News/query_news','',2,"图片删除失败！等待返回.......");}
	}
	else { continue;
	}
	}
	
    $d=$m->where($arr)->delete();
    $d1=$m1->where($arr)->delete();
	
	if($d1){ $m->commit();$this->redirect('News/news_list','',1,"删除成功！等待返回.......");
	}
	else{ $m->rollback();$this->redirect('News/news_list','',1,"删除失败！等待返回.......");
    }
	}
	
	
}