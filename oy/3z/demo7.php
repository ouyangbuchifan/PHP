<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>运算符</title>
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
    	<h1>运算符</h1>
    	<h2>算术运算符</h2>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p>
    				+ &nbsp;&nbsp; - &nbsp;&nbsp; * &nbsp;&nbsp; / &nbsp;&nbsp; % &nbsp;&nbsp; ++ &nbsp;&nbsp; --
    			</p>
    			<p>
    				<em>示例：</em><br>
    				<?php
    					$a=-100;
    					$b=50;
    					$c=30;
    					echo('$a='.$a.' ');					// 输出变量
    					echo('$b='.$b.' ');
    					echo('$c='.$c.' '.'<br>');
    					echo('$a+$b='.($a+$b).'<br>');			// 输出$a+$b, 注意输出时要加上括号
    					echo('$a-$b='.($a-$b).'<br>');
    					echo('$a*$b='.($a*$b).'<br>');
    					echo('$a/$b='.($a/$b).'<br>');
    					echo('$a%$b='.($a%$b).'<br>');
    					echo('$a++='.($a++).'<br>');
    					echo('$a++之后$a='.$a.'<br>');
    					echo('$b-- ='.($b--).'<br>');
    					echo('$b--之后$b的值为'.$b.'<br>');
    					echo('++$c='.(++$c).'<br>');
    					echo('++$c之后$c的值为'.$c.'<br>');
    				?>
    			</p>
    		</div>
    	</div>
		<hr>
		<h2>字符串操作符</h2>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				.点运算符。  将两个字符串连接起来。 
				<p>
					当使用+运算符时，PHP会认为是一次运算。两边有字符类型，则转换为整型。如果两边是字母，则输出0.如果是以数字开头的字符串，则截取到数字结束，再进行运算。
				</p>
				<p>
					<em>示例：</em><br>
					<?php
						$a1="123abc";
						$a2='12dfk';
						$a3='df';
						$a4='fg';
						echo $a1+$a2;
						echo $a3+$a4.'<br>';
					?>
					<em>示例2：</em><br>
					<?php
						$n='3.1415926r*r';
						$m=1;
						$nm=$n.$m;						// 用点运算符连接
						echo('$nm='.$nm.'<br>');
						$mn=$n+$m;						// 用+运算符连接
						echo('$mn='.$mn.'<br>');
					?>

				</p>
			</div>
		</div>
		<hr>
		<h2>赋值运算符</h2>
		<div class="row">
			=&nbsp;&nbsp;+=&nbsp;&nbsp;-=&nbsp;&nbsp;*=&nbsp;&nbsp;/=&nbsp;&nbsp;.=&nbsp;&nbsp;%&nbsp;&nbsp;
		</div>
		<hr>
		<h2>位运算符</h2>	
		<div class="row">
			<p>位逻辑运算符是对二进制位从低位到高位对齐后进行运算。</p>
			<p>
				&(按位与)&nbsp;&nbsp;|(按位或)&nbsp;&nbsp;^(按位异或)&nbsp;&nbsp;~(按位取反)&nbsp;&nbsp;<<(向左移位)&nbsp;&nbsp;>>(向右移位)
			</p>
			<p>
				<em>示例</em><br>
				<?php
					$m=8;
					$n=12;
					echo('$m='.$m.'<br>');
					echo('$n='.$n.'<br>');
					$mn=$m&$n;								// 位与
					echo('$m&$n='.$mn.'<br>') ;
					$mn=$m|$n;								// 位或
					echo('$m|$n='.$mn.'<br>');
					$mn=$m^$n;								// 位异或
					echo('$m^$n='.$mn.'<br>');
					$mn=~$m;								// 位取反
					echo('~$m='.$mn.'<br>');
					$mn=$m<<$n;								// 向左移位
					echo('$m<<$n='.$mn.'<br>');
					$mn=$m>>$n;								// 向右移位
					echo('$m>>$n='.$mn.'<br>');
				?>
			</p>
		</div>
		<hr>
		<h2>逻辑运算符</h2>
		<div class="row">
			<p>
				&& 或 and(逻辑与)&nbsp;&nbsp;&nbsp;&nbsp;|| 或 or(逻辑或)&nbsp;&nbsp;&nbsp;&nbsp;xor(逻辑异或)&nbsp;&nbsp;&nbsp;&nbsp;!(逻辑非)
			</p>
			<p>
				<em>示例：</em><br>
				<?php
					$i=true;
					$j=true;
					$z=false;
					if ($i or $j and $z) {
						echo( 'true'.'<br>' );				// 如果为真，输出true. or 及 and 时优先级先and 后or
					}
					else{
						echo( 'false' );
					}
					if ($i || $j and $z) {					// || 及and时，优先级先|| 后and
						echo( 'true'.'<br>' );
					}
					else{
						echo( 'false'.'<br>' );
					}
					if ($i & $j || $z) {
						echo( 'true'.'<br>'	 );
					}
					else{
						echo( 'false' );
					}
				?>
				<p>优先级：  & || and or</p>
			</p>
		</div>
		<h2>比较运算符</h2>
		<div class="row">
			<p>
				<&nbsp;&nbsp;>&nbsp;&nbsp;<=&nbsp;&nbsp;>=&nbsp;&nbsp;==&nbsp;&nbsp;!=&nbsp;&nbsp;===&nbsp;&nbsp;!==&nbsp;&nbsp;
			</p>
			<p>
				=== 恒等   表示A B两个变量数值相等，类型也相等
			</p>
			<p>
				<em>示例：</em><br>
				<?php
					$value="100";
					echo( "\$value=\"$value\"".' ' );
					echo( "$value==100".'<br>' );	
					var_dump($value==100);				// var_bump 系统函数，输出变量的信息
					echo( '<br>'."\$value=true".' ' );
					var_dump($value==true);

					echo('<br>'."\$value!=null".' ');
					var_dump($value!=null);

					echo('<br>'."\$value==false".' ');
					var_dump($value==false);

					echo('<br>'."\$value===100".' ');
					var_dump($value===100);

					echo('<br>'."\$value===true".' ');
					var_dump($value===true);

					echo('<br>'."10/2.0!=5".' ');
					var_dump(10/2.0!=5);
				?>
			</p>
		</div>
		<hr>
		<h2>错误控制运算符</h2>
		<div class="row">			
			<p>@ 不影响程序的语句出错时，不想显示错误，可以在前面加上</p>
			<p>
				<em>示例：</em><br>
				<?php
					$err=@(5/0);			// 加上后，页面上将什么都不显示，不报错
					echo ("$err");
				?>
			</p>
		</div>
		<hr>
		<h2>三元运算符</h2>
		<div class="row">
			<p>
				(?:)  根据一个表达示的值在另外两个中选择一个。
			</p>
			<p>
				<em>示例：</em><br>
				<?php
					$value=100;
					echo($value==100)?'三元运算':'没有该值';		// 与C#中一样。如果前面判断为真，则执行:前面，否则后面
				?>
			</p>
		</div>
		<hr>
		<h2>运算符的优先顺序和结合规则</h2>
		<div class="row">
			最好用 ()
		</div>



    </div>
</body>
</html>