<?php
namespace Home\Controller;
use Think\Controller;
use Think\Session;
class IndexController extends Controller {
	private $uid;
	public function __construct(){
		parent::__construct();
		$this->uid = 2;
	}
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
	// 亲，您未支付，请支付后领取红包~
	public function getError(){
		$this->display();
	}
	// 是否领取红包判断
	private function getHandle(){
		$uid = $this->uid;
		$where['uid'] = $uid;
		$where['status'] = 2;
		$res = M("UserStatus")->where($where)->find();
		if(empty($res)){
			$this->error("没有抽奖机会");
		}
	}
	public function getBreak(){
		$this->getHandle();
		$open = M("Data")->find();
		$min = $open['min'];
		$max = $open['max'];
		$rand = mt_rand($min,$max-1);
		$kopen = $rand + rand(10,99)/100;
		$this->assign("kopen",$kopen);
		$this->display();
	}
	//写入获奖记录
	public function ajax_get_money(){
		$money = I("post.money");
		$gl = M("Getlog");
		$us = M("UserStatus");
		$uid = $this->uid;
		$where['uid'] = $uid;
		$where['status'] = 2;
		$check = $us->where($where)->find();
		if(!empty($check)){
			$data['uid'] = $uid;
			$data['gmoney'] = $money;
			$res = $gl->add($data);
			if(!empty($res)){
				$edit['status'] = 3;
				unset($where);
				$where['uid'] = $uid;
				$us->where($where)->save($edit);
				echo json_encode(array("code"=>0,"message"=>"恭喜中奖".$money."元"));
			}
		}else{
			echo json_encode(array("code"=>0,"message"=>"抽奖资格已用完"));
		}
	}
}