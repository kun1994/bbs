<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;

class PvController extends Controller {
	function __construct(){
	parent::__construct();
		$pv = M("pv");
		$data = $pv->where("pid=1")->find();
		//print_r($data);die;
		if($data){
			$pv->pv_count = $data['pv_count']+1;
			$pv->where(" pid=1 ")->save();
			//echo "1";die;
		}else{
			$pv->pid = 1;
			$pv->pv_count = 1;
			$pv->pv_time = 'all';
			$pv->add();
			//echo "0";die;
		}

		//增加日期
		$date = date("Y-m-d",substr(time(),0,10));
		//echo $date;die
		$data1 = $pv->where("pv_time='".$date."'")->find();
		//print_r($data1);die;
		if(!$data1){
			$pv->pv_count = 1;
			$pv->pv_time = $date;
			$pv->add();
			//echo 1;die;
		}else{
			$pv->pv_count = $data1['pv_count']+1;
			$pv->where(" pv_time='".$date."' ")->save();
			//echo 0;die;
		}

	}
	
}