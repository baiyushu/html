<?php

class AboutCompanyAction extends Action {
   
     public function index(){
	
		$type=isset($_GET["type"])?$_GET["type"]:"1";
		$m=M('about_company');
		$arr["type"]=$type;
		$d=$m->where($arr)->select();
		$this->assign("type",$type);
		$this->assign("list",$d);

	    $title="关于我们";
		$this->assign("title",$title);
        $m=M('company_information');
        $arr1['type']="QQ";
        $QQ = $m->where($arr1)->select();
        $this->assign("QQ",$QQ);
        $inf=$m->select();
        $this->assign("inf",$inf);

		
        $this->display();
    }
	
}