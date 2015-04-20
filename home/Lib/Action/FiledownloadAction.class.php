<?php

class FiledownloadAction extends Action {
   
    public function index(){
        $Id=$_GET["Id"];
		$m=M("download_filename");
		$arr["Id"]=$Id;
		$d=$m->where($arr)->select();
		$filename=$d[0]["name"];
          
		if(file_exists("Public/up/download/".$filename)){ 
		header("Content-Type: application/force-download");
		header("Content-Disposition: attachment; filename=".basename("$filename"));
		readfile("Public/up/download/".$filename);
		exit;
		}else{
		$this->redirect('__URL__/index','',3,"文件不存在！等待返回.......");
		}
		
            
	 
    }
	
	
	
	
}