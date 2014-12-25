<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;

class CourseController extends PvController{

	//PHP培训课程首页
	public function index(){
		$class = M("class");
	
		$course = M("course");

			
		$data['nav']=PublicController::headera();
		$data["peixun"] = PublicController::right('pei');
		$data["classa"] = PublicController::right('classa');
		$data["que"] = PublicController::right('que');
		$data["zhao"] = PublicController::right('zhao');
		
		$a=1;
        $b = S($a.mem);
        if(!empty($b)){
            $datab=$b;
        }else{
            $datab = $class->cache($a.mem,60)->where(" 1=1 ")->select();
        }

		$aa=2;
        $bb = S($aa.meme);
        if(!empty($bb)){
            $dataa=$bb;
        }else{
            $dataa = $course->cache($aa.meme,60)->where(" 1=1 ")->select();
        }

		$this->assign('data',$data);

		$this->assign('info',$datab);
		$this->assign('infos',$dataa);


		$this->display();
	}
	//基础班简介
	public function base(){
		$this->display("base");
	}

}