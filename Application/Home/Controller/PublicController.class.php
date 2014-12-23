<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;

class PublicController extends PvController {

	//PHP培训课程首页
	public function headera() {
	      $nav = M('nav');
       return  $nav->select();
    }
   public function right($type='') {
        //PHP培训开班信息
        if($type == "pei"){
		$pexun = M("peixun"); //实例化p_class对   
		$p=$pexun->where("status=1")->select();
	
		//print_r($p);die;
		return $p;
	
		}else if($type=='classa'){
				$classa = M("class"); //实例化p_class对   
				$c=$classa->select();
				return $c;
		} else if($type == 'que') {
            $question = M('question');
            //var_dump($question->select());die;
            $q=$question->where("static=1")->select();
			return $q;
        } else if($type == 'zhao'){
            $zhao = M('company_speech');
            //print_r($zhao);die;
            $z=$zhao->where("status=1")->select();
			//print_r($z);die;
			return $z;
        }
    }
}


