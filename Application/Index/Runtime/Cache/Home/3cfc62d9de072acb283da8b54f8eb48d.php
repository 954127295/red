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
    <script type="text/javascript" src="/Public/js/jquery-1.8.3.min.js"></script>
  </head>
  <style>
	*{margin:0;padding:0;}
	body{background-color:#FFEBAF;}
	#index_head{width:100%;}
	.b_cont{width:94%;margin:0 auto;border:1px solid #DDC67C;border-radius:3px;background-color:#F3D479;height:auto;}
	.b_cont #r1{width:94%;height:27px;line-height:27px;color:#BA1715;font-weight:bold;text-align:center;background-color:#FEF0C4;margin:0 auto;margin-top:15px;}
	.b_cont #r2{width:92%;margin:0 auto;margin-top:7px;height:auto;}
	.b_cont #r2 #i{width:25%;text-align:center;color:#725217;font-size:9px;float:left;display:inline;}
	.r_break_c{width:98%;margin:0 auto;margin-top:9px;}
	.r_break_c #b{width:23%;height:auto;margin-left:1.5%;float:left;display:inline;margin-top:11px;}
	.r_break_c #b img{width:100%;height:130px;}
	.tb{width:100%;height:6px;}
	#b{position: relative;}
	.p{position: absolute;top:69%;left:0%;text-align:center;width:100%;}
	/*span{float:left;}*/
  </style>
  <body>
	<img id="index_head" src="/Public/img/get.jpg" />
	<div class="b_cont">
		<div id="r1">红包列表</div>
		<div id="r2">
			<div id="i">2.34</div>
			<div id="i">2.12</div>
			<div id="i">1.23</div>
			<div id="i">36.66</div>
			<div style="clear:both;"></div>
		</div>
		<div id="r2">
			<div id="i">2.34</div>
			<div id="i">2.12</div>
			<div id="i">1.23</div>
			<div id="i">36.66</div>
			<div style="clear:both;"></div>
		</div>
		<div id="r2">
			<div id="i">2.34</div>
			<div id="i">2.12</div>
			<div id="i">1.23</div>
			<div id="i">36.66</div>
			<div style="clear:both;"></div>
		</div>
		<div class="tb"></div>
	</div>
	<div class="r_break_c">
		<div id="b" class="a"><img src="/Public/img/redbreak.png" /></div>
		<div id="b" class="a"><img src="/Public/img/redbreak.png" /></div>
		<div id="b" class="a"><img src="/Public/img/redbreak.png" /></div>
		<div id="b" class="a"><img src="/Public/img/redbreak.png" /></div>
		<div id="b" class="a"><img src="/Public/img/redbreak.png" /></div>
		<div id="b" class="a"><img src="/Public/img/redbreak.png" /></div>
		<div id="b" class="a"><img src="/Public/img/redbreak.png" /></div>
		<div id="b" class="a"><img src="/Public/img/redbreak.png" /></div>
		<div style="clear:both;"></div>
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
<script>
 $(".r_break_c .a").click(function(){
	var a = <?php echo ($kopen); ?>;
 	var dd = (Math.random()*10).toFixed(2);
	ajax_get_money(a);
 	var aaa = $(this).children('img').after("<p class='p'>" + a + "</p>");

	for (var i=0;i<7;i++){
		var rank = Math.ceil(Math.random()*10)*a;
		var ranks =Number(rank).toFixed(2);
		var rankss= Number(ranks).toFixed(2);
		var numr = rankss;
		$('.r_break_c *').not(this).children('img').eq(i).after("<p class='p'>" + numr + "</p>");
	}
 	// alert(aaa);
 	$('.p').css('display','block');
	
	function ajax_get_money(m){
		$.ajax({
			url:"<?php echo U('Index/ajax_get_money');?>",
			type:"post",
			dataType:"json",
			data:{"money":m},
			success:function(data){
				if(data.code == 0){
					alert(data.message);
				}
			}
		});
	}
 	// var a = $("input[name='uname']").val('vvv');
  //   if($(this).attr('checked')){
  //     id=$(this).val();
  //     a.push(id);
  //   }
  // })
  //  $.get('/alldodel',{uname:a},function(data){
  //       if(data==1){
  //         //删除html样式
  //         for(var i=0;i<a.length;i++){
  //           $("input[value="+a[i]+"]").parents('tr').remove();
  //         }
  //       }
  //   })

 })
</script>