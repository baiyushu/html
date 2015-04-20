<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    $title="公司主页";
    $this->assign("title",$title);
	$m=M('about_company');
	$arr["type"]=1;
	$d=$m->where($arr)->select();
	$this->assign("list",$d);

	
	$m=M('news_content');
    $arr["type"]=1;
    $news = $m->where($arr)->order('news_date')->limit(0,7)->select();
	$this->assign('list_news',$news);// 赋值数据集
   
	$m=M('technology_suport');
    $arr["type"]="临床技术";
    $tech = $m->where($arr)->limit(0,7)->select();
	$this->assign('list_tech',$tech);// 赋值数据集
	
	
	$m=M('download_filename');
    $down = $m->limit(0,7)->select();
	$this->assign('list_down',$down);// 赋值数据集
	

   $m=M('product');
    $list_product = $m->Distinct(true)->field('name,image_name')->limit(0,6)->select();
	$this->assign('list_product',$list_product);// 赋值数据集
	
   $m=M('company_information');
   $arr1['type']="QQ";
   $QQ = $m->where($arr1)->select();
   $this->assign("QQ",$QQ);
   $inf=$m->select();
   $this->assign("inf",$inf);
   
   
   $this->display();
    }
}