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
	body{background-color:#FDF9ED;}
	#index_head{width:100%;}
	.index_head_t{width:93%;margin:0 auto;height:27px;margin-top:10px;text-align:center;color:#985423;font-size:12px;}
	.red_bao{width:100%;height:auto;text-align:center;margin-top:10px;}
	.red_bao img{margin:0 auto;}
  </style>
  <body>
	<img id="index_head" src="/Public/img/index_head.jpg" />
	<div class="index_head_t">
		已经有13573人在抢红包~~~金秋豪礼扫二维码付款5元即可获得1-200元随机红包
	</div>
	<div class="red_bao">
		<img src="/Public/img/red_bao.png" />
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