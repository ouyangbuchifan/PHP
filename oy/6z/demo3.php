<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>PCRE兼容正则表达式函数</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	h1{text-align: center;}
	.red{color: #f00;}
</style>
</head>
<body>
    <div class="container">
    	<h1>PCRE兼容正则表达式函数</h1>
    	<p class="lead">
    		PCRE函数无论效率还是兼容性都比POSIX函数要好
    	</p>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<?php 
    				//	preg_grep(pattern, input)
    			 ?>
    			 <p class="lead">
    			 	preg_grep() 函数 <br>
    			 	用数组input中的元素一一匹配表达式pattern,最后返回由所有相关匹配元素组成的数组。
    			 </p>
    			 <p>
    			 	<em class="red">示例：</em> <br>
    			 	<?php 
    			 		$preg='/\d{3,4}-?\d{7,8}/';
    			 		$arr=array('043212345678','0431-7654321','12345678');
    			 		$preg_arr=preg_grep($preg, $arr);
    			 		var_dump($preg_arr);		// 输出数组
    			 		echo '<br>$preg_arr=';
    			 		print_r($preg_arr);
    			 	?>
    			 </p>
    		</div>
    	</div>
		<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<?php 
					//preg_match(pattern, string, subject)
				?>
				<p class="lead">
					preg_match()   preg_match_all()   <br>
					在字符串2中匹配表达式1，如果有参数数组3.每次匹配结果存到数组里。preg_match函数返回结果是0或者1.因为它匹配成功后就不查找了，3可省。preg_replace_all会一直匹配到最后才停止，数组3不可省。
				</p>
				<p>
					<em class="red">示例：</em><br>
					<?php 
						$str2='this is an example';
						$preg2='/\b\w{2}\b/';			// 匹配两个字母的单词
						$num2=preg_match($preg2, $str2, $str22);			// preg_match用来查看正则是不是写对了 ^_^
						echo $num2.'<br>';
						var_dump($str22);
						echo '<br>';	
						$num22=preg_match_all($preg2, $str2, $str222);
						echo $num22.'<br>';
						var_dump($str222);
					?>
				</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<?php 
					// preg_quote(str,str)
				?>
				<p class="lead">
					preg_quote() <br>
					将str中的所有特殊字符进行自动转义。如果有第2个参数，该参数包含的字串也被转义。返回转义后的字串。
				</p>
				<p>
					<em class="red">示例：</em><br>
					<?php 
						$str3='|,$,^,*,+,.,[\],\\,/,b,<,>';
						$str31='b';
						$match_one3=preg_quote($str3,$str31);		// 对$str3进行自动转义。
						echo $match_one3;		// 字母b也进行了转义。
					?>
				</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<?php 
					//preg_replace(pattern, replacement, subject, int)
				?>
				<p class="lead">
					preg_replace() <br>
					在字符串3中匹配表达式1，将匹配到的内容替换为2.如果有参数4，替换参数4次。
				</p>
				<p>
					<em class="red">示例：</em><br>
					<?php 			// 这个函数将格式转换为可被HTML识别的标签。
						$string4='[b]粗字体[/b]';
						$b_rst4=preg_replace('/\[b\](.*)\[\/b\]/i','<b>$1</b>',$string4);
						echo $b_rst4;
					?>
				</p>
				<p>
					<strong class="red">提示：</strong>如果参数中调用的是数组，有可能调用过程中不是按照key值替换。调用之前要将数组重新排列 ksort()
				</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					<?php 
						// preg_replace_callback(pattern, callback, subject, int)
					?>
					preg_replace_callback() <br>
					与 preg_replace()类似。区别在于用一个回调函数callback来替换replacement参数。参数4可选. 	<br>
					回调函数中，字符串用" 保证字符串中的特殊符号不会被转义。
				</p>
				<p>
					<em class="red">示例：</em><br>
					<?php 
						function c_back($str5){				// 定义一个函数
							$str5="<font color=$str5[1]>$str5[2]</font>";
							return $str5;
						}
						$string5="[color=blue]字体颜色[/color]";
						echo preg_replace_callback('/\[color=(.*)\](.*)\[\/color\]/i', 'c_back', $string5);
					?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<?php 
					//preg_split(pattern, subject, int)		3可选
				?>
				<p class="lead">
					preg_split() <br>
					用表达式1来分隔字符串2，如果有参数3，则数组最多参数3个元素。与 ereg_split()用法相同。
				</p>
			</div>
		</div>

    </div>
</body>
</html>