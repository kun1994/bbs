<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;

class TeacherController extends PvController {

    //师资力量
    public function index(){
	header("content-type:text/html;charset=utf-8");
        $p_class = M("b_teacher"); //实例化p_class对象
        $count=$p_class->count(); //查询总记录数
        $Page= new\Think\Page($count,6); // 实例化分页类  传入总记录数和每页显示条数
        $show=$Page->show(); //分页显示输出
        // 进行分页数据查询  注意limit 方法的参数要使用Page类的属性
        
        $a=$_GET['p'];
        $b = S($a.shizi);
        if(!empty($b)){
            $list=$b;
        }else{
            $list = $p_class->cache($a.shizi,60)->where(" 1=1 ")->limit($Page->firstRow.','.$Page->listRows)->select();
        }
        
        $this->assign("list",$list); //赋值数据集
        $this->assign('page',$show); //赋值输出*/
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