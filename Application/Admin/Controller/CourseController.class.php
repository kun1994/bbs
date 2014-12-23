<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;

class CourseController extends Controller {
	function index(){
		$course = M('course');
		$data=$course->join('class ON course.c_id = class.c_id')->select();
		$this->assign('data',$data);
		$this->display("index");
	}
}