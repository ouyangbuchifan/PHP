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
    	<h1>正则语法</h1>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p class="lead">
    				^和$
    			</p>
    			<p>
    				^tm  表示tm只匹配出现在字符串的头部。<br>
    				tm$  表示tm只匹配出现在字符串的结尾。
    			</p>
    			<hr>
    			<p class="lead">
    				\b 和 \B
    			</p>
    			<p>
    				\b 匹配单词的分界位置。本质上，单词的分界位置就是位于一个单词字符与一个非单词字符之间的位置	<br>
    				\B 与\b相反，匹配非分界位置。不能是完整的单词，只是其他单词的一部分。
    			</p>
    			<hr>
    			<p class="lead">
    				[]	匹配[]中任意字符。[abc]将匹配a,b,c但不匹配其他字符
    			</p>
    			<p>
    				正则区分大小写，如果不想区分大小写，就用 []  <br>	
					<em class="red">示例：</em>如果匹配tm不区分大小写。即  [Tt][Mm]
    			</p>
    			<hr>
    			<p class="lead">
    				|	选择字符。或
    			</p>
    			<p>
    				不区分大小写的tm也可以写成  (T|t)(M|m)
    			</p>
    			<hr>
    			<p class="lead">
    				-  连字符
    			</p>
    			<p>
    				表示字符范围， [a-z]  表示a到z
    			</p>
    			<hr>
    			<p class="lead">
    				^ 排除字符  非
    			</p>
    			<p>
    				在[]内表示 非。<br>
    				[^a-zA-Z]表示不能以字母和下划线开始的变量名
    			</p>
    			<hr>
    			<p class="lead">
    				限定符  ? + * {n} {n,} {n,m}  <br>
    				与JS里限定符一样
    			</p>
    			<hr>
    			<p class="lead">
    				.  点号符  <br>
    				匹配除换行符外任意一个字符
    			</p>
    			<p>
    				<em class="red">示例：</em>匹配以s开头，t结尾，中间包含一个字母的单词。  ^s.t$   \bs.t\b
    				<br>
    				<em class="red">示例：</em>以r开头，第3为s,最后为t。 ^r.s.*t$
    			</p>
    			<hr>
    			<p class="lead">
    				\ 转义字符	<br>
    				将 ？. \ 等变为普通字符。
    			</p>
    			<p>
    				<em class="red">示例：</em>匹配127.0.0.1  [0-9]{1,3}(\.[0-9]{1,3}){3}
    			</p>
    			<p class="lead">
    				\ 反斜线字符	<br>
    				与JS中正则一样。
    			</p>
    			<hr>
    			<p class="lead">
    				()  字符	<br>
    				除了分组外，可以用作反向引用。反向引用就是用子表达式的记忆功能来匹配连续出现的字串或字母。
    			</p>
    			<p>
    				<strong class="red">示例：</strong> 匹配连续两个it &nbsp;&nbsp;&nbsp;&nbsp;(it)\1 
    				<br>
    				([a-z])([A-Z])\1\2
	 			</p>
	 			<hr>
	 			<p class="lead">
	 				模式修饰符。  不同语言修饰符不同。
	 			</p>
	 			<p>
	 				i  忽略大小写	<br>
	 				M  多文本模式 表示字符内多个换行符 <br>
	 				s  单文本模式	<br>
	 				x  忽略空白字符
	 			</p>
    		</div>
    	</div>
    </div>
</body>
</html>