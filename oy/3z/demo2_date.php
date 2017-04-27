<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>PHP的数据类型</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	h1{text-align: center;}
</style>
</head>
<body>
	<div class="container">
		<h1>数据类型</h1>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
				8种原始类型。其中4种标量类型：布尔型，整型，浮点型(float/double),字符串型(string)。 2种复合类型：数组(array),对象(object)。 2种特殊类型：资源(resource),NULL。	
				</p>
				
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h2>布尔类型</h2>
				<p>
					<?php
						$boo=true;			//定义一个布尔类型变量boo,值为真
						if ($boo==true) {
							echo("BOO的值是真的");
						}
						else{
							echo("BOO的值是假的");
						}
					?>

				</p>
				<p>
					php中，除了false为假，还有一些特殊情况也为假 0 0.0 "0" 空白字符串("") 只声明没有赋值的数组。  $符号是变量开始符号，不论是声明变量还是引用变量都要加上
				</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h2>字符串型(string)</h2>
				<p>
					三种方式定义字符串。  单引''  双引""  界定符<<< 。
				</p>
				<p>
					<?php 
						$a='字符串';		// 单引号内容就是字符串，数字也只是普通字符
						$ab="字符串";		// 双引号内容变量会被自动替换成实际数值
					?>
					<?php
						$i='你只会看到一次';		// 声明一个字符串变量
						echo("$i");					// 用双引号输出	结果与  echo($i);  一样
						echo("<p>");				// 输出段标记
						echo('$i');					// 单引号输出 

					?>
				</p>
				<p>
					定义简单字符串时，一般用单引号，相比双引号节省PHP转换时间
				</p>
				<p>
					<<< 的示例出错
				</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h2>整型</h2>
				<p>
					本例分别输出八进制，十进制，十六进制结果
				</p>
				<p>
					<?php
						$str1=1234567890;		// 声明一个十进制整数
						$str2=0x1234567890;		// 声明一个十六进制整数
						$str3=01234567890;		// 声明一个八进制整数
						$str4=01234567;			// 声明另一个八进制整数
						echo'数字123456790不同进制的输出结果<p>';
						echo'十进制的输出结果：\'.$str1\'<br>  ';		//输出十进制数
						echo'十六进制的输出结果：\'.$star2\'<br> ';		//输出十六进制数
						echo'八进制输出结果：';
						if ($str3==$str4) {							// 判断str3与str4的关系
							echo('$str3=$str4=\'.$str3\' ');		// 如果相等，输出值	
						}
						else{
							echo('$str3!=$str4');					// 如果不等，输出两个不等
						}
					?>
				</p>
				<p>
					如果给出的数值超出了int型所能表达的最大范围，将会当作float处理
				</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h2>浮点型 float</h2>
				<p>
					float与double没有区别。两种书写格式<br>
					3.1415  -35.8 <br>
					科学记数法：<br>
					3.58E1  849.72e-3
				</p>
				<p>
					输出圆周率的近似值，三种格式。
					<?php
						echo'圆周率的3种书写方法：<p>';
						echo'第一种：pi()='.pi().'<p> ';		// 调用pi函数输出圆周率
						echo'第二种：3.14159565359=\'3.14159265359\'<p>';	// 传统书写格式的浮点数
						echo'第三种：314159265359E-11= \'.314159265359E-11.\' <P>';
					?>
				</p>
				<p>
					浮点值是个近似值，所以应该避免浮点数之间进行比较大小，有时候会出错
				</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h2>数组</h2>
				<p>
					<?php
						$array=array('value1','value2','df');
					?>
						或者
					<?php
						$array[0]='value';
					?>
						或者
					<?php
						$array=array(key1=>value1,key2=>value2);
					?>
				</p>
				<p>
					<?php
						$arr1=array('This','is','a','example');
						$arr2=array( 0=>'php',1=>'is','the'=>'the','str'=>'best' );
						$arr3[0]='tmpname';
					?>
				</p>
			</div>
		</div>


	</div>		<!-- end .container -->
	
</body>
</html>
