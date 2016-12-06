<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>精彩互换 精彩无限</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
  </head>
  <style>
	*{margin:0;padding:0;}
	body{background-color:#EC724D;}
	.get_money_top{width:100%;height:auto;color:white;text-align:center;margin-top:25px;}
	.get_money_top #p1{font-size:12px;}
	.get_money_top #p2{font-size:25px;font-weight:bold;}
	.get_money_next{width:100%;height:auto;margin-top:20px;}
	.get_money_next #i{width:33%;height:auto;float:left;display:inline;text-align:center;color:white;font-size:12px;}
	.g_s{width:100%;height:auto;margin-top:25px;text-align:center;color:#FBFF8A;font-size:10px;}
	.go_m_img{width:92%;margin-left:4%;}
  </style>
  <body>
	<div class="get_money_top">
		<p id="p1">已经获得代理佣金</p>
		<p id="p2">0元</p>
	</div>
	<div class="get_money_next">
		<div id="i">
			<img src="/Public/img/gone.png" /><br>
			赚钱说明
		</div>
		<div id="i">
			<img src="/Public/img/gtwo.png" /><br>
			领取佣金
		</div>
		<div id="i">
			<img src="/Public/img/gthree.png" /><br>
			领取记录
		</div>
		<div style="clear:both;"></div>
	</div>
	<div class="g_s">
		长按下图保存您的专属二维码到手机<br>
		发给朋友参与游戏即可获得佣金<br>
		<img src="/Public/img/down.png" />
	</div>
	<img class="go_m_img" src="/Public/img/get_money.png" />
	<style>
	.foot_top{width:100%;height:60px;}
	.foot_div{width:100%;height:auto;position:fixed;bottom:0;background-color:white;}
	.foot_div #oneline{width:25%;height:auto;color:gray;text-align:center;float:left;display:inline;margin-top:7px;}
</style>
<div class="foot_top"></div>
<a href="<?php echo U('Index/index');?>">
<div class="foot_div">
	<div id="oneline">
		<span class="glyphicon glyphicon-folder-open"></span>
		<br>
		支付
	</div>
</a>
<a href="<?php echo U('Index/get');?>">
	<div id="oneline">
		<span class="glyphicon glyphicon-usd"></span>
		<br>
		抽红包
	</div>
</a>
<a href="<?php echo U('Index/getMoney');?>">
	<div id="oneline">
		<span class="glyphicon glyphicon-user"></span>
		<br>
		赚钱
	</div>
</a>
<a href="<?php echo U('Index/getMoneySpeak');?>">
	<div id="oneline">
		<span class="glyphicon glyphicon-search"></span>
		<br>
		玩法
	</div>
	<div style="clear:both;"></div>
</div>
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
  </body>
</html>