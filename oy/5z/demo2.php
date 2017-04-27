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
    	<h1>字符串操作 二</h1>
    	<div class="row">
    		<h2>1.去除字符串首尾空格和特殊字符</h2>
    		<div class="col-sm-12 col-md-12">
    			<h3> trim() 函数</h3>
				<p class="lead">
					去除字符串首尾空格，并返回去除后的字符串。
				</p>
				<p>
					<strong class="red">语法：</strong>string trim(string str[,string charlist]);
					<br>
					str为要操作的对象。charllst为可选参数，确定要从字符串中删除哪些字符，如果不设置，所有可选字符都将被删除。
				</p>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-sm-9 col-md-9">
    			<table class="table table-condensed table-striped table-hover">
    				<thead>
    					<tr>
    						<th>参数值</th>
    						<th>说明</th>
    					</tr>
    				</thead>
    				<tbody>
    					<tr>
    						<td>\0</td>
    						<td>NULL,空值</td>
    					</tr>
    					<tr>
    						<td>\t</td>
    						<td>tab,制表符</td>
    					</tr>
    					<tr>
    						<td>\n</td>
    						<td>换行符</td>
    					</tr>
    					<tr>
    						<td>\x0B</td>
    						<td>垂直制表符</td>
    					</tr>
    					<tr>
    						<td>\r</td>
    						<td>回车符</td>
    					</tr>
    					<tr>
    						<td>" "</td>
    						<td>空格</td>
    					</tr>
    				</tbody>
    			</table>
    			<p>
    				除以上字符，也可以在charlist参数中提供要过滤掉的字符。
    			</p>
    			<p>
    				<em class="red">示例：</em><br>
    				<?php 
    					$str="\r\r(:@_@ 创图书编撰伟业 展软件开发雄风 @_@:)     ";
    					echo trim($str);			// 去掉左右两边的空格和回车
    					echo "<br>";
    					echo trim($str,"\r\r(: :)");		// 去除字符串左右两边的特殊字符(::) 注意中间有空格，可分隔多个
    				?>
    			</p>
    		</div>
    	</div>
    	<div class="row">
    		<h3> ltrim() 函数</h3>
    		<div class="col-sm-12 col-md-12">
    			<p class="lead">
    				去除字符串左边的空格或者指定字符串
    			</p>
    			<p>
    				去除字符串左边的空格及特殊字符"(:@_@"    				
    			</p>
    			<p>
    				<?php 
    					$str1="   (:@_@ 创图书编撰伟业 展软件开发雄风 @_@:)   ";
    					echo ltrim($str1);
    					echo "<br>";
    					echo ltrim($str1," (:@_@");
    				?>
    			</p>
    		</div>
    	</div>
    	<div class="row">
    		<h3> rtrim() 函数</h3>
    		<div class="col-sm-12 col-md-12">
    			<p class="lead">
    				去除字符串右边的空格或者指定字符串
    			</p>
    			<p>
    				去除字符串右边的空格及特殊字符 "@_@:)"
    				<em class="red">示例：</em><br>
    				<?php 
    					$str2="\r\r(:@_@ 创图书编撰伟业 展软件开发雄风 @_@:)   ";
    					echo rtrim($str2);
    					echo "<br>";
    					echo rtrim($str2,"@_@:) ");				// 注意后面的空格
    				?>
    			</p>
    		</div>
    	</div>				<!-- end  trim()函数 -->
    	<hr>
		<div class="row">
			<h2>2.转义，还原字符串数据</h2>
			<div class="col-sm-12 col-md-12">
				<h3>手动转义，还原</h3>
				<p>
					利用\进行转义。
					<em class="red">示例：</em><br>
					<?php 
						echo 'select * from tb_book where bookname=\'PHP从入门到精通\'  ';
					?>
				</p>
				<p>
					<em class="red">提示：</em> 对于简单字符串可以用手动进行转义。如果数据量很大的字符串，就用自动。
				</p>
				<p>
					手动转义可以用 addcslashes() 函数进行还原。
				</p>
				<br>
				<h3>自动转义，还原</h3>
				<p class="lead">
					addslashes() 函数 用来给字符串加入斜线 \
				</p>
				<p class="lead">
					stripslashes() 函数 用来把 addslashes()函数转义后的字符串回复原样。
				</p>
				<p>
					<em class="red">示例：</em><br>
					<?php 
						$str4="select * from tb_book where bookname='PHP从入门到精通'  ";
						echo $str4."<br>";						// 输出字符串
						$a=addslashes($str4);					// 对特殊字符进行转义
						echo $a."<br>";
						$b=stripcslashes($a);
						echo "还原之后的字符串为".$b;
					?>
				</p>
				<p>
					<em class="red">提示：</em>所有数据在插入数据库之前，都有必要用 addslashes() 函数进行转义。
				</p>
			</div>
		</div>		<!-- end 转义 -->
		<div class="row">
			<h2> strlen() 获取字符串长度</h2>
			<div class="col-sm-12 col-md-12">
				<p>
					<em class="red">示例：</em><br>
					<?php 
						echo strlen("编程体验网:www.bcty365.com");			// 输出字符串的长度
					?>
				</p>
			</div>
		</div>





    </div>
</body>
</html>