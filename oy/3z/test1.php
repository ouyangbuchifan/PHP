<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>练习</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	h1{text-align: center;}
	.red{color: #f00}
</style>
</head>
<body>
    <div class="container">
    	<h1>练习与实践</h1>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p class="lead">
    				1. 用PHP函数判断输入内容(假设一个变量)是否符合以下要求：输入必须为数字，输入字符长度不超过25，输入不允许为空。获取字符串长度函数为strlen(string)
    			</p>
    			<p>
    				<em class="red">示例：</em><br>
    				<?php 
    					function demo($dem){
    						if (is_null($dem)) {
    							echo("字符串不能为空".'<br>');
    						}
    						else{
    							if (is_numeric($dem)==false) {
    								echo("输入不是数字！".'<br>');
    							}
	    						if (strlen($dem)>25) {
	    							echo("输入长度不能超过25".'<br>');
	    						}
    						}  						 
    					}
    					demo();
    					demo(d);
    					demo("这是一个特殊的长度啊啊啊");
    				?>
    			</p>
    			<hr>
    			<p class="lead">
    				2. 获取当前访问者电脑信息。IP,端口号等
    			</p>
    			<p>
    				<?php 
    					echo('这台电脑的操作系统是：'.PHP_OS.'<br>');		// 操作系统
    					echo('这台电脑的IP是：'.$_SERVER["HTTP_HOST"].'<br>');		// 系统给出的函数
    					echo('文件名：'.__FILE__.'<br>');
    					echo('程序目前行数：'.__LINE__.'<br>');		// 程序行数
    				?>
    			</p>
    			<hr>
    			<p class="lead">
    				3. echo, print, printf, print_r 区别
    			</p>
    			<p>
    				<em class="red">示例：</em><br>
    				<?php 
    					$t1=100;
    					$t2=200;	
    					echo("这是echo的输出！".'<br>');		
    					// echo 只能输出基本类型，除了布尔值(布尔值true时为1，false无输出)。不能输出数组
    					print("这是print的输出"."我也是".'<br>');
    					// 只能输出字符串。能输出数组   					
    				?>
    				<?php 
    					$a=array('a'=>'apple','b'=>'banana','c'=>array('x','y','z') );
    					print_r($a);
    					$b="我就是我，不一样的花朵";
    					print_r("<br>".$b);
    					// print_r 可以打印关于变量易于理解的信息。如果给出的是字符串，整型，浮点型，打印变量本身，如果是数组，按一定格式输出数组。
    				?>
    				<?php 
    					echo("printf是格式化输出字符串，来自于C语言");
    				?>
    				
    			</p>
    		</div>
    	</div>
    </div>
</body>
</html>