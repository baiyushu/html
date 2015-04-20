<?php
class TechnologyAction extends Action {
   
    public function index(){
    $title="技术中心";
    $this->assign("title",$title);
    $t="临床技术";
    $type=isset($_GET["type"])?$_GET["type"]:$t;
    $arr["type"]=$type;
	$m=M('technology_suport');
	import('ORG.Util.Page');
	$count = $m->count();
	$Page= new Page($count,5);
	$show= $Page->show();
	$nowPage = isset($_GET['p'])?$_GET['p']:1;
	
    $list = $m->where($arr)->page($nowPage.','.$Page->listRows)->select();
	
	$this->assign('list',$list);
    $this->assign('page',$show);

       $m=M('company_information');
       $arr1['type']="QQ";
       $QQ = $m->where($arr1)->select();
       $this->assign("QQ",$QQ);
       $inf=$m->select();
       $this->assign("inf",$inf);
       
 $this->display();
	}
	

	public function preview(){
        $title=isset($_GET["title"])?$_GET["title"]:"1";
	$this->assign("title",$title);
        $m=M('technology_suport');
	$arr["title"]=$title;
	$d=$m->where($arr)->select();
	$this->assign("list",$d);

       $m=M('company_information');
       $arr1['type']="QQ";
       $QQ = $m->where($arr1)->select();
       $this->assign("QQ",$QQ);
       $inf=$m->select();
       $this->assign("inf",$inf);
       $this->display();

	}
	
	
	
}