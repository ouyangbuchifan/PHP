<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
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
    	<h1>字符串操作</h1>
    	<div class="row">
    		<h2>字符串简介</h2>
    		<div class="col-sm-12 col-md-12">
    			<p>
    				数字类型：1 2 3 4 5
    			</p>
    			<p>
    				字母类型：a b c d e 
    			</p>
    			<p>
    				特殊字符：# $ & 等
    			</p>
    			<p>
    				不可见字符： \n \r \t
    			</p>
    		</div>
    		<h2>单引号和双引号的区别</h2>
    		<div class="col-sm-12 col-md-12">
    			<p>
    				<em class="red">示例：</em><br>
    				<?php 
    					echo "I LOVE YOU <br>";				// 普通字符串时无区别
    					echo 'I LOVE YOU <br>';		
    				?>
    				<?php 
    					$test="PHP";
    					$str="I LOVE $test<br>";			// 双引号，会将变量转换为实际值
    					$str1='I LOVE $test<br>';			// 单引号，所见即所得
    					echo $str;
    					echo $str1;
    				?>
    			</p>
    			<p>
    				<em class="red">提示：</em>进行SQL查询之前，所有字符串必须加单引号，以避免可能的注入漏洞或者SQL错误。
    			</p>
    		</div>  <!-- end 单引号 -->
			<h2>字符串的连接符</h2>
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<p>
						<?php 
							$name="明日编程字典:";
							$url="www.baidu";
							echo $name.$url.".com";
						?>
					</p>					
					<br>
					<p>
						<em class="red">提示：</em> . 无法连接大量简单字符串的连接。PHP允许在双引号中直接跟变量。
					</p>
					<?php 
						$name2="明日编程字典：";
						$url="www.baidu";
						echo "$name2$url.com";
					?>
					
				</div>
			</div>	<!-- end 字符串连接符 -->
			
    	</div>
    </div>
</body>
</html>