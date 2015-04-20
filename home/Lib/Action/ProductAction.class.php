   <?php
   class ProductAction extends Action {
    public function index(){
       $title="产品中心";
       $this->assign("title",$title);
       $t1="疫苗产品";
       $t2="猪用疫苗";
       $type1=isset($_GET["type1"])?$_GET["type1"]:$t1;
       $type2=isset($_GET["type2"])?$_GET["type2"]:$t2;
       $m=M('product');
	
       import('ORG.Util.Page');
       $arr["type1"]=$type1;
       $arr["type2"]=$type2;
       $d = $m->Distinct(true)->field('name')->where($arr)->select( );
       $count =count($d);
       $Page= new Page($count,5);
       $show= $Page->show();
       $nowPage = isset($_GET['p'])?$_GET['p']:1;
       $list = $m->Distinct(true)->field('name,image_name')->where($arr)->page($nowPage.','.$Page->listRows)->select();
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
   
   
   	public function product_details(){
    
      
	$name=$_GET["name"];
        $title=$name;
	$this->assign("title",$title);
        $m=M('product');
	$arr["name"]=$name;
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