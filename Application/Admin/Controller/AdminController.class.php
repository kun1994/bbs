<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;


class AdminController extends Controller {
	
	public function index(){
		header("content-type:text/html;charset=utf-8");
		if($_SESSION['b_id']==""){
			echo "<script>alert('请先登录');location.href='http://www.bbs.com/admin/admin/login'</script>";die;
		}
		$a=date('Hi',time());
		if($a>600&&$a<=1159){
			$a="上午好";
		}else if($a>1200&&$a<=1300){
			$a="中午好";
		}
		else if($a>1300&&$a<=1800){
			$a="下午好";
		}
		else if($a>1800&&$a<=2400){
			$a="晚上好";
		}
		else{
			$a="凌晨";
		}
		$this->assign("user",$_SESSION['b_name']);
		$this->assign("a",$a);
		$this->display();
	}
	public function user(){
		//分页
		$user = M('b_user');
		$count=$user->count();
		//echo $count;
		$pagesize=5;
		$page=ceil($count/$pagesize);
		$str="";
		for($i=1;$i<=$page;$i++){
			$str=$str."<a href='#' onclick='page(".$i.")'>".$i."</a>&nbsp;&nbsp;";
		}

		$data=$user->join('user_class ON b_user.b_class = user_class.f_id')->limit("0,5")->select();
		$this->assign('data',$data);
		$this->assign("str",$str);
		$this->display("user");
	}
	public function page(){
		$user = M('b_user');
		$nowpage=$_POST['p'];
		$start=($nowpage-1)*5;
		$data=$user->join('user_class ON b_user.b_class = user_class.f_id')->limit("$start,5")->select();
		$count=$user->count();
		$pagesize=5;
		$page=ceil($count/$pagesize);
		$str="";
		for($i=1;$i<=$page;$i++){
			$str=$str."<a href='#' onclick='page(".$i.")'>".$i."</a>&nbsp;&nbsp;";
		}
		$this->assign("data",$data);
		$this->assign("str",$str);
	
		$this->display("page");
	}
	public function adduser(){
		//用户分类
		$user = M('user_class');
		$data = $user->select();
		$this->assign('res',$data);
		$this->display();
	}
	//添加处理
	public function useradd_do(){
		$model = M('b_user');
		$data = $model->select();
		foreach($data as $v){
			if($v['b_name']==$_POST['name']){
				echo 3;die;
			}
		}
		$user['b_name']=$_POST['name'];
		$user['b_pwd']=md5($_POST['pwd']);
		$user['b_class']=$_POST['u_class'];
		$user['status']="开启";
		$a=$model->add($user);
		if($a){
			echo 1;die;
		}
		else{
			echo 0;die;
		}
	}
	public function del(){
		$id=$_POST['id'];
		$model=D("b_user");
			if($model->where("b_id=$id")->delete()){
				$user = M('b_user');
				$count=$model->count();
				$pagesize=5;
				$page=ceil($count/$pagesize);
				$str="";
				for($i=1;$i<=$page;$i++){
					$str=$str."<a href='#' onclick='page(".$i.")'>".$i."</a>&nbsp;&nbsp;";
				}
				$data=$user->join('user_class ON b_user.b_class = user_class.f_id')->limit("0,5")->select();
				$this->assign('data',$data);
				$this->assign("str",$str);
				$this->display("del");
		}
		else{
			echo 0;
		}
	}
	//搜索
	function sea(){
		$model=D("b_user");
		$text=$_POST['text'];
		$a=$model->where("b_name like '%$text%'")->limit("0,2")->select();
		$count=$model->where("b_name like '%$text%'")->count();
		//print_r($a);die;
		$pagesize=2;
		$page=ceil($count/$pagesize);
		$str="";
		for($i=1;$i<=$page;$i++){
			$str=$str."<a href='#' onclick='page(".$i.")'>".$i."</a>&nbsp;&nbsp;";
		}
		//print_r($a);die;
		$this->assign("str",$str);
		$this->assign("data",$a);
		$this->display("page");
	}
	public function login(){
		$this->display("login");
	}
	public function login_do(){
		header("content-type:text/html;charset=utf-8");
		$name=$_POST['name'];
		$pwd=$_POST['pwd'];
		
		$model=D("b_user");
		$data = $model->where("b_name='".$name."'")->find();
		if($data){

			if($data['b_pwd']==md5($pwd)){
				session_start();
				$_SESSION['b_id']=$data['b_id'];
				$_SESSION['b_name']=$name;
				echo "<script>location.href='http://www.bbs.com/admin/admin/index'</script>";die;
			}
			else{
				echo "<script>alert('密码错!');</script>";die;
			}
		}
		else{
			echo "<script>alert('用户错!');location.href='http://www.jiuyue.com/admin/admin/login'</script>";die;
		}
	}
	//清除session
	function sess(){
		header("content-type:text/html;charset=utf-8");
		if(session_destroy()){
			echo "<script>alert('退出成功');location.href='http://www.jiuyue.com/admin/admin/login'</script>";
		}
		
	}
	//学院信息
	function stu_article(){
		$model=D("article");
		$data = $model->select();
		$this->assign("data",$data);
		$this->display("stu_article");
	}
	//改变状态
	function change(){
		$id=$_POST['id'];
		$model=D("article");
		$info=$model->where("a_id = $id")->find();
		if($info){
			if($info["a_status"]==2){
				$info["a_status"]=1;
				echo 1;
			}
			else{
				$info["a_status"]=2;
				echo 2;
			}
			$model->where("a_id = $id")->save($info);
		}
	}
	//修改名称
	function gai(){
		$id=$_POST['id'];
		$title=$_POST['title'];
		$model=D("article");
		$data['a_title']=$title;
		$model->where("a_id = $id")->save($data);
		if($model){
			echo 1;
		}
		else{
			echo 0;
		}
		
	}
	function menu(){
		$model=D("nav");
		$data = $model->select();
		$this->assign("data",$data);
		$this->display("menu");
	}
	//修改导航
	function dh(){
		$id=$_POST['id'];
		$data['nav_name']=$_POST['title'];

		$model=D("nav");
		$model->where("nav_id = $id")->save($data);
		if($model){
			echo 1;
		}
		else{
			echo 0;
		}
	}
	//开班信息
	function classs(){
		header("content-type:text/html;charset=utf-8");
		$model=D("peixun");
		$data=$model->join('class ON peixun.c_id= class.c_id')->select();
		//var_dump($data);die;
		$this->assign("data",$data);
		$this->display("class");
	}
}