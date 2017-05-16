<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link href="http://cdn.bootcss.com/bootstrap/3.1.0/css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1>
			hello,world! I am <?php echo $name?>
		</h1>
		<p>
			<?php
 echo $sex ?>
		</p>
		<p>
			<?php
 echo $today ?>
		</p>

		<!-- TP变量输出 -->
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo ($me["name"]); ?></div>
					<div class="panel-body">
						<p><?php echo ($me['sex']); ?></p>
						<!-- 变量参与计算，只能用[]方式 -->
						<p><?php echo ($me['age']+1); ?></p>
						<!-- 执行函数 -->
						<p><?php echo (md5($me["name"])); ?></p>

						<!-- think时间 -->
						<p><?php echo (date('Y-m-d g:i a',time())); ?></p>
						<p><?php echo (THINK_VERSION); ?></p>
					</div>
					<div class="panel-footer"><?php echo ((isset($me["tel"]) && ($me["tel"] !== ""))?($me["tel"]):'13934340312'); ?></div>
				</div>
			</div>
		</div>	

		<!-- volist循环 -->
		<ul class="list-group col-md-6">
			<!-- empty在数组为空时显示 offset偏移量 length长度 -->
			<?php if(is_array($person)): $i = 0; $__LIST__ = array_slice($person,2,3,true);if( count($__LIST__)==0 ) : echo "无数据" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li class="list-group-item"><?php echo ($data["name"]); ?>--<?php echo ($data["age"]); ?></li><?php endforeach; endif; else: echo "无数据" ;endif; ?>
		</ul>
		<!-- foreach循环 -->
		<ul class="list-group col-md-6">
			<!-- foreach没有offset length这些参数 -->
			<?php if(is_array($person)): foreach($person as $key=>$data): ?><li class="list-group-item"><?php echo ($data["name"]); ?></li><?php endforeach; endif; ?>
		</ul>

		<div class="col-md-6">
			<table class="table table-bordered">
				<tr>
					<td>php模板符号</td>
					<td>数学符号</td>
				</tr>
				<tr>
					<td>eq</td>
					<td> = </td>
				</tr>
				<tr>
					<td>neq</td>
					<td> != </td>
				</tr>
				<tr>
					<td>gt</td>
					<td> > </td>
				</tr>
				<tr>
					<td>lt</td>
					<td> < </td>
				</tr>
				<tr>
					<td>egt</td>
					<td> >= </td>
				</tr>
				<tr>
					<td>elt</td>
					<td> <= </td>
				</tr>
				<tr>
					<td>heq</td>
					<td> === </td>
				</tr>
				<tr>
					<td>nheq</td>
					<td> !== </td>
				</tr>
			</table>
		</div>
		
		<!-- for循环 comprison默认lt -->
		<?php $__FOR_START_24245__=1;$__FOR_END_24245__=5;for($k=$__FOR_START_24245__;$k <= $__FOR_END_24245__;$k+=1){ echo ($k); ?><span> </span><?php } ?>
		<div class="clearfix"></div>

		<!-- if语句 除了if,其他需要结束符-->
		<?php if($num > 10): ?>num大于10
			<?php elseif($num < 10): ?>num小于10
			<?php else: ?>num等于10<?php endif; ?>

		<!-- switch语句 -->
		<p>
			<?php switch($myname): case "laoshi": ?>我是你老师<?php break;?>
				<?php case "xiaoming": case "xiaohong": ?>我是小明<?php break;?>
				<?php default: ?>没有值<?php endswitch;?>
		</p>

		<!-- 
		<比较标签 name='变量名' value='变量值'>为true时语句</标签>
		<?php if(($mynum) != "12"): ?>mynum!=11<?php endif; ?>
		-->
		
		<?php if(($mynum) == "11"): ?>mynum=11
			<?php else: ?>num!=11<?php endif; ?>
		<hr>
		<!-- 
		in notin between notbetween
		notin用法同in  notbetween同between
		between可以输入区间
		 -->
		<p>
			<?php if(in_array(($mynum), explode(',',"1,2,3,4"))): ?>num在这个区间
				<?php else: ?> num不在这个区间<?php endif; ?>
			<br>
			<?php $_RANGE_VAR_=explode(',',"1,20");if($mynum>= $_RANGE_VAR_[0] && $mynum<= $_RANGE_VAR_[1]):?>num在这个区间<?php endif; ?>
		</p>

		<!-- 三元运算符 -->
		<?php echo ($mynum>10?'mynum大于10':'mynum小于10'); ?>
		
		<hr />
		
		<!--
			尽量用TP的语句，不要用if语句，if语句都用的PHP原生语法
		-->
		<?php if(is_array($person)): foreach($person as $key=>$data): if(($data["age"]) >= "18"): ?><p><?php echo ($data["name"]); ?>已经成年了</p>
				<?php else: ?><p><?php echo ($data["name"]); ?>还未成年</p><?php endif; endforeach; endif; ?>
		
		<hr />
		
		<!--
			<?php  ?>TP框架的PHP标签，尽量这么写，否则会被配置文件过滤
		-->
		<p>
			<?php echo $person[1]['name']; echo'<br/>'; for($i=0;$i<=count($person);$i++){ echo $person[$i]['name'].' '; } ?>
		</p>
	</div>
</body>
</html>