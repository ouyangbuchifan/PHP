<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>特殊数据类型 转换数据类型</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	h1{text-align: center;}
	.ta-c{text-align: center;}
	.fw-b{font-weight: bold;}
	.row [class^=col-] {padding: 5px 0}
</style>
</head>
<body>
    <div class="container">
    	<h1>特殊数据类型</h1>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p>
    				unset() 函数的作用是从内存中删除变量。PHP4之后，unset()没有返回值。不要去尝试获取或者输出它
    			</p>
    			<hr>

					<?php
						echo "变量($string1)直接赋值为null <br>";		
						$string1=null;										// 变量$string1被赋空值
						$string3="str";										// 变量$string3的值为str
						if ( is_null($string1) ) {							// 判断$string1是不是空值	
							echo( '$string1为null' );
							echo( '变量\$string2未被赋值 <p>' );
						}
						if ( is_null($string2) ) {							// 判断$string2是不是为空
							echo( '$string2=null <p>' );
						}
						echo('被 unset()函数处理过的变量<p>');
						unset($string3);
						if (is_null($string3)) {
							echo("\$string3=null<p>");
						}
					?>
				<p>
					is_null() 函数判断变量是否为null，返回一个布尔值。
				</p>
    		</div>
    	</div>
		<hr>
		<h2>转换数据类型</h2>
		<div>
			<div class="row fw-b">
				<span class="col-sm-3 col-md-3">
					转换操作符
				</span>
				<span class="col-sm-4 col-md-4">
					转换类型
				</span>
				<span class="col-sm-5 col-md-5">
					举例
				</span>
			</div>
			<div class="row">
				<span class="col-sm-3 col-md-3">
					(boolean)
				</span>
				<span class="col-sm-4 col-md-4">
					转换成布尔值
				</span>
				<span class="col-sm-5 col-md-5">
					(boolean)$num (boolean)$str
				</span>
			</div>	
			<div class="row">
				<span class="col-sm-3 col-md-3">
					(string)
				</span>
				<span class="col-sm-4 col-md-4">
					转换成字符串
				</span>
				<span class="col-sm-5 col-md-5">
					(string)$str
				</span>
			</div>
			<div class="row">
				<span class="col-sm-3 col-md-3">
					(integer)
				</span>
				<span class="col-sm-4 col-md-4">
					转换成整型
				</span>
				<span class="col-sm-5 col-md-5">
					(integer)$str
				</span>
			</div>
			<div class="row">
				<span class="col-sm-3 col-md-3">
					(float)
				</span>
				<span class="col-sm-4 col-md-4">
					转换成浮点型
				</span>
				<span class="col-sm-5 col-md-5">
					(float)$str
				</span>
			</div>
			<div class="row">
				<span class="col-sm-3 col-md-3">
					(array)
				</span>
				<span class="col-sm-4 col-md-4">
					转换为数组
				</span>
				<span class="col-sm-5 col-md-5">
					(array)$str
				</span>
			</div>
			<div class="row">
				<span class="col-sm-3 col-md-3">
					(object)
				</span>
				<span class="col-sm-4 col-md-4">
					转换为对象
				</span>
				<span class="col-sm-5 col-md-5">
					(object)$str
				</span>
			</div>
			<p>
				字符型转换成整型时，以数字开头就截取到非数字位，否则0
			</p>
			<p class="lead">
				settype()函数也可以做类型转换
				bool settype(mixed var,string type).
			</p>
			<p>
				示例：
			</p>				
				<?php
					$num='3.1415926r*r';
					echo('使用(integer)操作符来转换$num类型：');
					echo( (integer)$num );
					echo('<p>');
					echo('输出变量$num的值:' .$num);		// PHP里.点运算符相当于其他语言里的+，点运算符用来连接字符串
					echo('</p><p>');
					echo('使用 settype函数转换$num类型：');		
					echo settype($num,'integer');				// 使用settype()函数转换$num的值
					echo('</p>');
					echo('输出变量$num的值：'.$num);			// 输出原始变量$num
				?>
			
		</div>
		

    </div>
</body>
</html>