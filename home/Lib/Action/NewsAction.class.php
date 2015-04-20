<?php
// 本类由系统自动生成，仅供测试用途
class NewsAction extends Action {
 
   
    public function index(){
	 $title="新闻中心";
	 $this->assign("title",$title);
	 
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


       $m=M('company_information');
       $arr1['type']="QQ";
       $QQ = $m->where($arr1)->select();
       $this->assign("QQ",$QQ);
       $inf=$m->select();
       $this->assign("inf",$inf);
       $this->display();


	
}

	public function news_details(){
	
	$title=$_GET["title"];
	$this->assign("title",$title);
	 
	$m=M('news_content');
	$arr["news_title"]=$title;
	$d=$m->where($arr)->select();
	$views=$d[0]["views"];
    $arr["news_title"]=$title;
	$update["views"]=$views+1;
	$m->where($arr)->save($update);
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