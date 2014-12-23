<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;


class YuanchuangController extends PvController {
    public function index(){
        $link = M("ebook");

        $b = S(yuanchuangshuji);
        if(!empty($b)){
            $list=$b;
        }else{
            $list = $link->cache(yuanchuangshuji,10)->select();
        }
        
        $this->assign("list",$list);
        
        $data['nav']=PublicController::headera();
		$data["peixun"] = PublicController::right('pei');
		$data["classa"] = PublicController::right('classa');
        $data["que"] = PublicController::right('que');
        $data["zhao"] = PublicController::right('zhao');
		//print_r($data['que']);die;
        $this->assign('data',$data);
        
        $this->display("index");
    }
}
?>