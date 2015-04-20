<?php

class DownloadAction extends Action {
   
    public function index(){
    $title="资料下载";
    $this->assign("title",$title);
	$m=M("download_filename");
	import('ORG.Util.Page');
	$count = $m->count();
	$Page= new Page($count,5);
        $Page->setConfig('header','份材料');
	$show= $Page->show();
	$nowPage = isset($_GET['p'])?$_GET['p']:1;
    $list = $m->order('DateTime')->page($nowPage.','.$Page->listRows)->select();
	
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
	
	
	
	
}