<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;

class CourseController extends Controller {

	//PHP培训课程首页
	public function index(){
		$class = M("class");
		$datab= $class->select();
		$course = M("course");
		$dataa= $course->select();
			
		$data['nav']=PublicController::headera();
		$data["peixun"] = PublicController::right('pei');
		$data["classa"] = PublicController::right('classa');
		$data["que"] = PublicController::right('que');
		$data["zhao"] = PublicController::right('zhao');
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