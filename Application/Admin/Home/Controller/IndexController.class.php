<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function _initialize(){
		if(session('user')==null){
			$this->error('亲~，请登录！',U('login/login'));
		}
	}
    public function index(){
        $this->display();
    }
    public function manage(){
		$User = M("user_status"); // 实例化User对象
    	$list = $User->page('1,10')->select(); 
    	$this->assign('list',$list);
    	$this->display();
    }
    public function del(){
    	$id = I('get.id');
    	$User = M("user_status"); // 实例化User对象
    	$list = $User->where(array('id'=>$id))->delete();
    	if($list){
    		return $this->success('删除成功');
    	}else{
    		return $this->error('删除失败');
    	}
    }
    public function money(){
    	$User = M("data");
    	$list = $User->select(); 
    	$this->assign('list',$list);
        $this->display();
    }
    public function edit(){
    	$id = I('get.id');
    	$User = M("data"); // 实例化User对象
    	$list = $User->where(array('id'=>$id))->find();
    	// dump($list);die;
    	$this->assign('list',$list);
        $this->display();
    }
    public function update(){
    	$dd=I('post.');
    	$User = M("data");
    	$list = $User->where(array('id'=>$dd['id']))->save($dd);
    	if($list){
    		return $this->success('修改成功');
    	}else{
    		return $this->error('修改失败');
    	}
     }
}