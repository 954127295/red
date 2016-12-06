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
	body{background-color:#FFEBAF;}
	#index_head{width:100%;}
	.speak{width:70%;height:auto;margin:0 auto;margin-top:10px;text-align:center;color:#985423;font-size:12px;}
	.statu_center{border:1px solid #DDDDDD;border-radius:5px;width:93%;height:150px;margin:0 auto;margin-top:10px;background-color:white;}
	.statu_center #c{width:93%;height:auto;margin:0 auto;margin-top:15px;}
	.statu_center #n{width:100%;height:32px;background-color:#FFF1C4;}
	.statu_center #n #s{width:33%;height:32px;line-height:32px;float:left;display:inline;text-align:center;font-weight:bold;}
	.statu_center #c #break{width:65%;height:45px;line-height:45px;color:white;border-radius:7px;text-align:center;font-size:18px;background-color:#CB3D39;margin:0 auto;margin-top:25px;}
  </style>
  <body>
	<img id="index_head" src="/Public/img/get.jpg" />
	<div class="speak">请选拆红包<br>每一个红包内都装有1-200元不等的奖金</div>
	<div class="statu_center">
		<div id="c">
			<hr style="margin:0;padding:0;">
			<div id="n">
				<div id="s">时间</div>
				<div id="s">状态</div>
				<div id="s">金额（元）</div>
				<div style="clear:both;"></div>
			</div>
			<a href="<?php echo U('Index/getHandle');?>"><div id="break">拆红包</div></a>
		</div>
	</div>
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