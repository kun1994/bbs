<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;


class IndexController extends PvController {
 
	//首页数据显示
     public function Index(){
		$article = M("article");
		$data['new_list']=$article->where("a_status=2")->select(); 
		//print_r($data['new_list']);die;
		$school = M("school");
		$data['school']=$school->order("s_id")->limit(7)->select();
		$job = M("job");
		$data['job']=$job->select();
		$student = M("student");
		$data['stu'] = $student->where("stu_sex=1")->order("stu_id")->limit(5)->select();
		$data['stutwo'] = $student->where("stu_sex=2")->order("stu_id")->limit(4)->select();
		$question = M("question");
		$data['question'] = $question->where("status=1")->order("q_id")->limit(6)->select();
		$data['question2'] = $question->where("status=2")->order("q_id")->limit(5)->select();
		$video=M("video");
		$data['video']=$video->order("video_click")->limit(4)->select();
		$data['nav']=PublicController::headera();
		$data["peixun"] = PublicController::right('pei');
		$data["classa"] = PublicController::right('classa');
        $data["que"] = PublicController::right('que');
        $data["zhao"] = PublicController::right('zhao');
		//print_r($data['que']);die;
        $this->assign('data',$data);
        $this->display();
		
    }
	//学院新闻更多
	public function stu_news(){
		$article = M("article");
		$count = $article->count();
        //调用分页  并且设置每页显示的记录数
        $page = new \Think\Page($count,15);
		 //分页显示
        $show = $page->show();
        //获取分页后数据
		$data["new_list"] = $article->limit($page->firstRow.','.$page->listRows)->select();
		$data['nav']=PublicController::headera();
		$data["peixun"] = PublicController::right('pei');
		$data["classa"] = PublicController::right('classa');
        $data["que"] = PublicController::right('que');
        $data["zhao"] = PublicController::right('zhao');
		$this->assign('data',$data);
		$this->assign('page',$show);
		
		$this->display();
	}

	//学员感言更多
	public function ganyan(){
		
	
		$this->display("ganyan");
	}
	//学员名师答疑更多
	public function teacher(){
		
	
		$this->display("teacher");
	}
	//PHP培训课程
	public function stu_train(){
		
	
		$this->display("stu_train");
	}
}