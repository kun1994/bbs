<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;


class JobController extends PvController {
    /*
    public function index(){
	$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
     * */
	//就业信息
     public function index(){
          $model = M("jiuye");
          $data = $model->where(" 1=1 ")->select();
          
          $modela = M("jiuye_calss");
          $dataa = $modela->where(" 1=1 ")->select();
          
          $modelb = M("jiuye_person");
          $datab = $modelb->where(" 1=1 ")->select();

          $this->assign("list",$data);
          $this->assign("lista",$dataa);
          $this->assign("listb",$datab);
		$data['nav']=PublicController::headera();
		$data["peixun"] = PublicController::right('pei');
		$data["classa"] = PublicController::right('classa');
        $data["que"] = PublicController::right('que');
        $data["zhao"] = PublicController::right('zhao');
		//print_r($data['que']);die;
        $this->assign('data',$data);
          #print_r($dataa);die;
          $this->display("index");
    }
    
    //就业信息详情页
    function jiuye(){
        $id = $_GET['id'];
        $model = M("jiuye");
        
        $data = $model->where(" id=$id ")->find();
        $dataa = $model->where(" id=($id+1) ")->find();
        $datab = $model->where(" id=($id-1) ")->find();
        
        $this->assign("list",$data);
        $this->assign("lista",$dataa);
        $this->assign("listb",$datab);
		$data['nav']=PublicController::headera();
		$data["peixun"] = PublicController::right('pei');
		$data["classa"] = PublicController::right('classa');
        $data["que"] = PublicController::right('que');
        $data["zhao"] = PublicController::right('zhao');
		//print_r($data['que']);die;
        $this->assign('data',$data);
        
        $this->display("jiuye");
    }
	//常见问题
     public function wenti(){
         $model = M("diary_question");
         $data = $model->select();
         $this->assign("list",$data);
		 	$data['nav']=PublicController::headera();
		$data["peixun"] = PublicController::right('pei');
		$data["classa"] = PublicController::right('classa');
        $data["que"] = PublicController::right('que');
        $data["zhao"] = PublicController::right('zhao');
		//print_r($data['que']);die;
        $this->assign('data',$data);
	 $this->display("wenti");
    }
    
    //常见问题详情页
    public function content(){
       $id = $_GET['id'];
       if(!$id){
           $id=1;
       }
        $model = M("diary_question");
        $data = $model->where(" que_id=$id ")->select();
        $this->assign("list",$data);
		$data['nav']=PublicController::headera();
		$data["peixun"] = PublicController::right('pei');
		$data["classa"] = PublicController::right('classa');
        $data["que"] = PublicController::right('que');
        $data["zhao"] = PublicController::right('zhao');
		//print_r($data['que']);die;
        $this->assign('data',$data);
        //print_r($data);die;
        $this->display("content");
    }
}