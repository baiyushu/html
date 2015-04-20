<?php

class ConnectAction extends Action {
   
    public function index(){
	$title="联系我们";
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