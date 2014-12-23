<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;


class SchoolController extends Controller {
	function index(){
		$school = M('school');
		$data=$school->select();
		$this->assign('data',$data);
		$this->display("index");
	}
}