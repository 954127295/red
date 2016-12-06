<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function manage(){
		$User = M("user_status"); // 实例化User对象
    	$list = $User->select(); 
    	$this->assign('list',$list);
    	$this->display();
    }
}