<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>变量</title>
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
    	<h1>
    		变量
    	</h1>
		<div class="row">
			<em>示例：</em><br>
			<?php
				$string1="spcn";		// 声明变量
				$string2=$string1;		// 将变量1赋值给变量2
				$string1="zhuding";		// 改变变量1的值
				echo($string2);
			?>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">引用赋值</p>
				<p>
					<em>示例：</em><br>
					<?php
						$i="spcn";
						$j=& $i;
						$i="hello,duning";
						echo $j;
						echo("<br>");
						echo $i;
					?>
				</p>
			</div>
		</div>
		<hr>
		<h2>变量作用域</h2>
		<div class="row">
			<p>局部变量，全局变量，静态变量</p>
		</div>
		<div class="row">
			<p class="lead">
				比较局部变量，全局变量的区别
			</p>
			<p>
				<em>示例：</em><br>
				<?php
					$example="在。。。。。之外 ";			// 声明全局变量
					function example(){
						$example=".....在.....之内";			// 声明局部变量
						echo("在函数内部输出的内容是：$example<br>");		// 输出局部变量
					}
					example();								// 调用函数，输出变量值
					echo("在函数外输出的内容是：$example<br>");
				?>
			</p>
			<p class="lead">
				比较普通变量，静态变量区别
			</p>
			<p>
				<em>示例：</em><br>
				<?php
					function demo(){
						static $message=0;			// 定义静态变量 静态变量的初始化只在第一次时执行 	
						$message+=1;
						echo($message." ");
					}
					function demo1(){
						$message=0;					// 定义普通变量  普通变量的初始化每次执行时都执行
						$message+=1;
						echo($message." ");
					}
					for ($i=0; $i < 10; $i++) { 
						demo();
						
					}
					echo'<br>';
					for ($i=0; $i <10 ; $i++) { 
						demo1();
					}
				?>
			</p>
			<p class="lead">
				比较在自定义函数中应用全局变量与不应用全局变量
			</p>
			<p>
				<em>示例：</em><br>
				<?php
					$zy="不会看到";
					$zyy="会看到";
					function demo2(){
						echo($zy.'<br>');
						global $zyy;
						echo($zyy.'<br>');
					}
					demo2();
				?>
			</p>
		</div>
		<hr>
		<h2>可变变量</h2>
		<div class="row">
			<p class="lead">
				可变变量的值可以动态 地更改，只用在变量前多加一个$
			</p>
			<p>
				<em>示例：</em><br>
				<?php
					$change_name="trans";				// 声明变量$change_name
					$trans="You can see me!";			// 声明变量trans
					$demo4="这什么都不是";
					echo $change_name."<br>";			// 输出变量$change_name的值
					echo $$change_name;
				?>
			</p>
			<p class="red">
				<em>注：对于可变变量存疑。</em>
			</p>
		</div>
		<hr>
		<h2>预定义变量</h2>
		<div class="row">
			PHP留的预定义变量，通过这些变量，可以获得用户访问时的操作系统，COOKIE，等。
		</div>



    </div>	<!-- end.container -->
</body>
</html>