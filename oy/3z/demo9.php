<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>函数</title>
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
    	<h1>函数</h1>
    	<h2>定义和调用函数</h2>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p>
    				定义一个函数，计算传入参数的平方。
    			</p>
    			<em>示例：</em><br>
    			<?php
    				function example($num){
    					return ("$num*$num=".($num*$num));
    				}
    				echo example(10);
    			?>
    		</div>
    	</div>
    	<hr>
		<h2>在函数间传递参数</h2>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					调用函数时，要向函数传参。被传入的参数为实参，函数定义的参数为形参。参数传递有按值传递，按引用传递，默认传递。
				</p>
				<h3>按值传递</h3>
				<p class="lead">
					将函数实参的值复制给形参。函数的结果不会影响实参。
				</p>
				<p>
					练习：定义函数，将传入参数的值作一些运算再输出。函数外部再定义一个$m，作为实参。调用函数example($m)输出函数的返回值和变量$m
				</p>
				<p>
					<em>示例：</em><br>
					<?php
						function example2($m){
							echo('在函数内$m='.($m*5+10).'<br>');
						}
						$m=1;
						example2($m);					// 传递参数，将$m的值传递给形参$m
						echo('在函数外$m='.$m);
					?>
				</p>
				<br>
				<h3>按引用传递</h3>
				<p class="lead">
					将实参的内存地址传递给形参。函数内所有操作会影响到实参的值。
				</p>
				<p>
					<em>示例：</em><br>
					<?php
						function example3(&$m){
							$m=$m*5+10;
							echo("在函数内部\$m=".$m.'<br>');	
						}
						$m=1;
						example3($m);
						echo("在函数外部\$m=".$m)
					?>
				</p>
				<br>
				<h3>按默认参数(可选参数)</h3>
				<p class="lead">
					指定某个参数为可选参数。将可选参数放在参数列表末尾。指定其默认值为空。
				</p>
				<p>
					实现一个简单计价器。自定义函数values的参数$tax为可选参数。默认为空。第一次调用时，给$tax赋值0.25.输出价格。第二次调用时不赋值，输出价格。
				</p>
				<p>
					<em>示例：</em><br>
					<?php
						function values($price,$tax=""){		// 定义一个函数，其中一个初始值为空
							$price=$price+($price*$tax);		// 变量$price等于两个参数运算结果
							echo("价格：$price<br>");			// 输出价格
						}
						values(100,0.25);
						values(100);
					?>
				</p>
			</div>
		</div>	<!-- end 传递参数 -->
		<hr>
		<h2>从函数中返回值</h2>
		<div class="row">
			<p class="lead">
				关键字 return()  如果在全局作用域中使用return()关键字，会结束脚本执行。
			</p>
			<p>
				<?php
					function values2($price,$tax=0.45){
						$price=$price+($price*$tax);
						return $price;							// 返回金额
					}
					echo values2(100);							// 调用函数
				?>
			</p>
			<p>
				<em class="red">注：</em> return() 一次只能返回一个值。如果想返回多个，就得定义一个数组，返回整个数组。
			</p>
		</div>		<!-- end 函数中返回值 -->
		<hr>
		<h2>变量函数</h2>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p>
					本例先定义3个函数。再声明一个变量。用变量来访问不同函数。
					<em>示例：</em><br>
					<?php
						function come(){
							echo("来了！<br>");
						}
						function go($name="jack"){
							echo("$name 走了<br>");
						}
						function back($string){
							echo("又回来了，$string <br>");	
						}
						$func="come";
						$func();					// 使用变量名来调用函数 come()
						$func="go";					// 重新给变量赋值	
						$func("TOm");				// 使用变量函数来调用函数 go();
						$func="back";
						$func("Lily");				// 使用变量函数来调用函数 back();
					?>
				</p>
				<p>
					<strong>注意：</strong> 变量函数是通过改变变量名来实现的，通过在变量名后面加上一对小括号，程序自动寻找与变量名相同的函数，执行它。如果找不到，系统会报错。这个技术可以用来实现回调函数和函数表 
				</p>
			</div>
		</div>		<!-- end 变量函数 -->
		<hr>
		<h2>对函数引用</h2>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					对函数的引用，就是对函数返回结果的引用。
				</p>
				<p>
					<em>示例：</em><br>
					<?php
						function &example4($tmp=0){			// 定义一个函数，加&
							return $tmp;					// 返回函数参数$tmp
						}
						$str=&example4("看到了");			// 声明一个函数的引用 $str
						echo( $str.'<br>');					// 输出函数
					?>
				</p>
			</div>
		</div>	<!-- end 对函数的引用 -->
		<h2>取消引用</h2>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					取消引用函数 unset(),只是断开了变量名和变量内容之间的绑定，并不销毁变量内容。
				</p>
				<p>
					<em>示例：</em><br>
					<?php
						$num=1234;
						$math=&$num;
						echo('$math='.$math.'<br>');
						unset($math);
						try {
							echo('$math='.$math.'<br>');
						} 
						catch (Exception $e) {
							echo('$math没有值');
						}
							
						echo('$num='.$num.'<br>');
						
					?>
				</p>
			</div>
		</div>

    </div>	<!-- end .container -->
</body>
</html>