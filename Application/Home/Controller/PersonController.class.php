<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;

class PersonController extends Controller {

	//人才服务首页
     public function index(){
         $speech = M('company_speech');
         $data = $speech->select();
   
         $this->assign('info',$data);
			       $data['nav']=PublicController::headera();
		$data["peixun"] = PublicController::right('pei');
		$data["classa"] = PublicController::right('classa');
        $data["que"] = PublicController::right('que');
        $data["zhao"] = PublicController::right('zhao');
		//print_r($data['que']);die;
        $this->assign('data',$data);
	 $this->display();
    }
}