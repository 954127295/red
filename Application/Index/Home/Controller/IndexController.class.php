<?php
namespace Home\Controller;
use Think\Controller;
use Think\Session;
class IndexController extends Controller {
    public function index(){
		$this->display();
    }
    // 拆红包
	public function get(){
	    $this->display();
	}
	// 赚钱
	public function getMoney(){
		$this->display();
	}
	// 玩法
	public function getMoneySpeak(){
		$this->display();
	}
	// 我的佣金
	public function getLogList(){
		$this->display();
	}
	// 8个红包
	public function getBreak(){
		if(session('judge')==2){
				$this->display();
		}else{
			$this->redirect('Index/get');
		}
	}
	// 亲，您未支付，请支付后领取红包~
	public function getError(){
		$this->display();
	}
	// 是否领取红包判断
	public function getHandle(){
		unset($map);
		// 实例化User对象
		$User = M("user_status");
		// 接受get传过来的Id值 
	    $map['id'] = '2';
	    // 把查询条件传入查询方法
	    $list = $User->where($map)->select(); 
	    foreach($list as $k=>$v){
	    	if($v['status']==1){
	    		$this->error('未付款，暂无抽奖机会');
	    	}else if($v['status']==1){
	    		$this->error('您已抽奖，暂无抽奖机会');
	    	}else if($v['status']==0){
	    		session('judge',2);
	    		$User = M("data"); // 实例化User对象
	    		unset($map);
	    		$map['id'] = '1';
				$data = $User->where($map)->select(); 
		
				foreach($data as $k=>$v){
					// dump($v['number']);
				$this->assign('number',$v['number']);
	    		}
	    		$this->display('Index/getBreak');
	    	}
	    }
	}
}