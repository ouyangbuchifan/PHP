<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>POSIX扩展正则函数</title>
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
    	<h1>POSIX扩展正则函数</h1>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p class="lead">
    				1. 		Ereg()函数	 eregi()函数<br>
    				在字符串中匹配表达式，如果成功，返回true,否则false.如果有第三个参数。将成功匹配的字串按子串划分，存到数组中。ereg区分大小写，eregi不区分。
    			</p>
    			<p>
    				<em class="red">示例：</em> 用ereg()函数验证合法变量。	<br>
    				<?php 
    					$ereg='^[$][[:alpha:]_][[:alnum:]]*';
    					ereg($ereg,'$_name', $register);
    					// 第一个参数，需要匹配的子串
    					// 第二个参数，当成功匹配后返回的子串
    					// 第三个参数，匹配成功后返回的子串存储到这个数组中。
    					var_dump($register);

    				?>
    			</p>
    		</div>
    	</div>
    	<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
    				2.  	ereg_replace()函数  eregi_replace()函数
    			</p>
    			<p>
    				在字符串中匹配表达式，如果成功，用一个子串替换，并返回替换后的。
    			</p>
    			<p>
    				<em class="red">示例：</em> <br>
    				<?php 
    					$ereg2="tm";
    					$str="hello,tm,Tm,tM";
    					$reg_str=eregi_replace($ereg2, 'TM', $str);
    					//第一个 要匹配的子串，
    					//第二个 将子串替换为什么
    					//第三个 匹配哪个字符串
    					echo $reg_str;
    				?>
    			</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					3.   split()  spliti()  <br>
					使用表达式1来分隔字符串2，如果有参数3，则数组最多有3个元素。剩余的都写在最后一个数组元素中。如果错误，返回false
				</p>
				<p>
					<em class="red">示例：</em>分隔字符串<br>
					<?php 
						$ereg3="is";
						$str2="this is a interesting book";
						$arr_str=spliti($ereg3, $str2);
						var_dump($arr_str);
					?>
				</p>
			</div>
		</div>


    </div>
</body>
</html>