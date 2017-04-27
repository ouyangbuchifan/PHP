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
    	<h2>截取字符串</h2>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p class="lead">
    				substr()  函数 截取指定字符串中指定长度的字符。
    			</p>
    			<p>
    				string substr(string str,int start[,int length])
    			</p>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-sm-9 col-md-9">
    			<table class="table table-bordered table-striped table-hover">
    				<thead>
    					<tr>
    						<th>参数</th>
    						<th>说明</th>
    					</tr>
    				</thead>
    				<tbody>
    					<tr>
    						<td>str</td>
    						<td>指定字符串对象</td>
    					</tr>
    					<tr>
    						<td>start</td>
    						<td>指定开始截取字符串的位置，如果为负数，表示从末位开始截取。</td>
    					</tr>
    					<tr>
    						<td>length</td>
    						<td>可选参数，可以指定截取字符个数。如果为负，表示取到倒数第length个字符</td>
    					</tr>
    				</tbody>
    			</table>
    			<p>
    				与数组一样，从0开始。
    			</p>
    			<p>
    				<em class="red">示例：</em><br>
    				<?php 
    					echo substr("she is a well-read girl", 0);			//
    					echo '<br>';
    					echo substr("she is a well-read girl", 4, 14);		// 从第4位开始截取，截取14个字符
    					echo '<br>';
    					echo substr("she is a well-read girl", -4, 4);		// 从倒数第4个位开始截取，截取4个字符。如果长度超过字符总个数，就只截取到末尾
    					echo '<br>';
    					echo substr("she is a well-read girl", 0, -4);		// 从0开始，截取到倒数第4个字符	
    				?>
    			</p>
    			<p>
    				<em class="red">示例：</em><br>
    				<?php 
    					$str="祝全国人民在奔向小康的路上一羊开泰一羊开泰一羊开泰一羊开泰一羊开泰一羊开泰一羊开泰一羊开泰一羊开泰一羊开泰一羊开泰一羊开泰一羊开泰一羊开泰一羊开泰一羊开泰";
    					if (strlen($str)>30) {					// strlen() 函数获取字符串长度
    						echo substr($str, 0, 30)."...";
    					}
    					else{
    						echo $str;
    					}
    				?>
    			</p>
    		</div>
    	</div>
    	<hr>
		<h2>比较字符串</h2>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					strcmp() 函数		按照字节对两个字符串进行比较。 区分大小写 <br>
					strcasecmp() 不区分大小写<br>
					int strcmp(string str1, string str2) <br>
					如果相等，返回0. 如果前者大，返回值大于0. 前者小，返回值小于0
				</p>
				<p>
					<em class="red">示例：</em><br>
					<?php 
						$str1="明日编程词典";
						$str2="明日编程词典";
						$str3="mrsoft";
						$str4="MRSOFT";
						echo strcmp($str1,$str2);				// 两个相等
						echo strcmp($str3, $str4);				// 3大于4，因为编码小写在前面
						echo strcasecmp($str3, $str4);			// 不区分大小写时两个相等
					?>
				</p>

			</div>
		</div>
		<hr>
		<h2>检索字符串</h2>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					strstr() 函数  查找指定的关键字	
				</p>
				<p>
					string strstr(string haystack,string needle) 		<br>
					haystack	必要参数，指定从哪个字符串中进行检索	<br>
					needle		必要参数，指定索引对象。如果为数值，则是对应的ASCII值对应字符。	<br>
					区分大小写
				</p>
				<p>
					<em class="red">示例：</em><br>
					获取上传图片的后缀名，来限制上传图片格式、  <br>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<form action="demo4.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="action" value="upload">
					<input type="file" name="u_file">
					<input type="submit" value="上传">
				</form>
				<?php 
					if ($_POST[action]== "upload") {					    // 判断提交按钮是否为空
						$file_path="./upload\\";							// 定义图片在服务器中的存储路径
						$picture_name=$_FILES[u_file][name];				// 获取上传图片的名称
						$picture_name=strstr($picture_name,".");			// 获取图片后缀
						if ($picture_name!=".jpg") {
							echo "<script>alert ('上传图片格式不正确，请重新上传'); window.location.href='demo4.php';</script>";
						}elseif($_FILES[u_file][tmp_name]){
							move_uploaded_file($_FILES[u_file][tmp_name], $file_path.$_FILES[u_file][name]);			// 执行图片上传
							echo "图片上传成功！";	
						}else{
							echo "上传失败！";
						}
					}


					
				?>
				<strong class="red">！！问题！！</strong>
				<p class="lead">
					利用 substr_count() 函数检索字符串出现次数
				</p>
				<p>
					<?php 
						$str5="明日编程词典日";
						echo substr_count($str5, "日");			// 输出出现的次数
					?>
				</p>
			</div>
		</div>
		<h2>字符串替换</h2>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					1. str_ireplace() 函数 使用新的子串替换选中的子串。	<br>
					mixed str_ireplace(mixed search,mixed replace,mixed subject [, int &count])  <br>	
					所有 subject中出现的参数search被replace 替换，&count为次数。 区分大小写。  除count外都是必要参数
				</p>
				<p>
					<em class="red">示例：</em><br>
					<?php 
						$example1="某某";
						$example2="**";
						$example3="某某公司是一家计算机软件技术为核心的高科技企业，多年来始终至于于行业管理软件开发，数字化出版物制作，计算机领域综合应用以及行业电子商务网站开发领域。";
						echo str_ireplace("某某", "**", $example3)
					?>
				</p>
				<p>
					<em class="red">提示：</em> 多用在数据库检索中。
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					2. substr_replace()  函数	<br>
					string substr_replace(string str,string repl,int start,[int length])	<br>
				</p>
				<table class="table table-hover table-bordered table-striped">
					<thead>
						<tr>
							<th>参数</th>
							<th>说明</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>str</td>
							<td>原始字符串</td>
						</tr>
						<tr>
							<td>repl</td>
							<td>指定替换后的新字符串</td>
						</tr>
						<tr>
							<td>start</td>
							<td>替换开始位置。正数表示起始字符位置从字符串开头开始，负数表示从结尾开始。0表示插入而非代替。</td>
						</tr>
						<tr>
							<td>length</td>
							<td>可选参数。指定返回的字符串长度。默认为整个字符串。正数表示从开头开始，负数表示从结尾。0表示插入而非代替。</td>
						</tr>
					</tbody>
				</table>
				<p>
					<em class="red">提示：</em>如果start为负数，而length数值<=start，length数值自动为0
				</p>
				<p>
					<em class="red">示例：</em><br>
					<?php 
						$str5="用今日的辛勤工作,换明日的双倍回报";
						$replace="百倍";
						echo substr_replace($str5,$replace,37,4);			// utf编码与gbk编码长度不一致。
					?>
				</p>
			</div>
		</div>
		<h2>字符串格式化</h2>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					number_format() 函数	<br>
					string number_format(float number,[int num_decimal_places],[string dec_seperator],string thousands_seperator)		<br>
					可以有1个，2个，4个参数。不能只有3个。
				</p>
				<p>
					<?php 
						$number=1868.965;
						echo number_format($number);			// 一个参数时，去除小数点，四舍五入
						echo "<br>";
						echo number_format($number,2);			// 以逗号分隔，两位小数
						echo "<br>";
						$number2=11886655.765415;
						echo number_format($number2,2,".",",");		// 4个参数时 最后一个点，表示千位也以.分隔  倒数第二 小数点
					?>
				</p>
			</div>
		</div>
		<hr>
		<h2>字符串分隔</h2>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					explode() 函数	按指定规则分隔字符串，返回值是数组<br>
					array explode(string separator,string str,[int limit])	
				</p>
				<table class="table table-striped table-hover table-bordered">
					<thead>
						<tr>
							<th>参数</th>
							<th>说明</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>separator</td>
							<td>必要参数，指定分隔符。如果为空字符串，explode()返回false</td>
						</tr>
						<tr>
							<td>str</td>
							<td>必要参数，指定要被分隔的字符串</td>
						</tr>
						<tr>
							<td>limit</td>
							<td>可选。如果设置，返回数组包含最多limit个元素。如果设置负数，除了最后的-limit个元素外所有元素</td>
						</tr>
					</tbody>
				</table>
				<p>
					<em class="red">示例：</em><br>
					<?php 
						$str6="php编程词典@net编程词典@asp编程词典@jsp编程词典";
						$str_arr=explode("@", $str6);
						print_r($str_arr);
					?>
				</p>
			</div>
		</div>
		<hr>
		<h2>合并字符串</h2>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					implode()  函数， 与explode() 函数相反
				</p>
				<p>
					<?php 
						$str7="php编程词典@net编程词典@asp编程词典@jsp编程词典";
						$str_arr2=explode("@", $str7);
						$str_arr3=implode("@", $str_arr2);
						echo $str_arr3;

					?>
					
				</p>
			</div>
		</div>



    </div>
</body>
</html>