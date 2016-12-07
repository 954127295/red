<?php
namespace Home\Controller;
use Think\Controller;
use Think\Session;
class LoginController extends Controller {
	public function login(){
		$this->display();
	}
	public function gologin(){
		$user="admin";
		$password="admin123";
		$a= I('post.');
		// dump($a['']);die;
		if($a['user']=$user&&$a['password']=$password){
			session('user',$user);
			$this->success('登录成功',U('index/index'));
		}else{
			$this->error('登录失败',U('login/login'));
		}
	}
}