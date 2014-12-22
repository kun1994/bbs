<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
class PersonController extends Controller {

	//人才服务首页
     public function index(){
		//企业招聘感言
		$speech = M('company_speech');
		$info = $speech->select();
		$this->assign('info',$info);
		//用人企业评价
		$evaluate = M('company_evaluate');
		$info1 = $evaluate->select();
		$this->assign('info1',$info1);
		// 传智播客与企业人才对接会现场
		$docking = M('company_docking');
		$info2 = $docking->select();
		$this->assign('info2',$info2);
		//下面是到传智播客招聘人才的部分企业
		$company = M('company');
		$info3=$company->select();
		$this->assign("info3",$info3);
	

		$data['nav']=PublicController::headera();
		$data["peixun"] = PublicController::right('pei');
		$data["classa"] = PublicController::right('classa');
		$data["que"] = PublicController::right('que');
		$data["zhao"] = PublicController::right('zhao');
		//print_r($data['que']);die;
		$this->assign('data',$data);
		$this->display();
    }
	//验证码
	function verify(){
        $Verify = new \Think\Verify();
        $Verify->entry();
    }
	//招聘信息添加处理页面
	public function addpro(){
		$code = $_POST['verify_code'];
         $Verify = new \Think\Verify();
         if(empty($Verify->check($code,$id=''))){
              $this->error("验证码错误");
         }else{
            $resume = M("resume");
			//表单数据接收
			$resume->company = $_POST["company"];
			$resume->site = $_POST["site"];
			$resume->address = $_POST["address"];
			$resume->tel = $_POST["tel"];
			$resume->contact = $_POST["contact"];
			$resume->qq = $_POST["contactqq"];
			$resume->mobile = $_POST["contactmobile"];
			$resume->email = $_POST["contactemail"];
			$resume->note = $_POST["note"];
			$resume->content = $_POST["content"];
			
			//执行添加
			if($resume->add()){
				$this->assign('data',$data);
				$this->success("添加成功");
			}else{
				$this->error("添加失败");
			}
         }	
	}

}