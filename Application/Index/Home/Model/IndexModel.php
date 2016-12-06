<?php 
namespace Home\Model;
use Think\Model;
class IndexModel extends Model {
	public static function getHandle($map){
		$User = M("user_status"); // 实例化User对象
	    // $map['id'] = '2';
	    // 把查询条件传入查询方法
	    $list = $User->where($map)->select(); 
	    foreach($list as $k=>$v){
	    	// dump($v['status']	);
	    	if($v['status']==0){
	    		$this->error('未支付，无法抽奖','Index/getLogList');
	    	}else if($v['status']==1){
	    		$this->error('您已抽奖，暂无抽奖机会','Index/getLogList');
	    	}else if($v['status']==2){
	    		$this->redirect('Index/getBreak');
	    	}
	    }
	}
}

 ?>