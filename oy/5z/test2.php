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
    	<h1>练习题</h1>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p class="lead">
    				1.去掉字符串首尾空格和特殊字符&&
    			</p>
    			<p>
    				<?php 
    				$string1="&& 明日编程字典 &&";
    				echo "原始字符串是：".$string1.'<br>';
    				echo trim($string1,"&&  &&");
    				?>
    			</p>
    		</div>
    	</div>
    	<hr>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p class="lead">
    				2.验证用户输入的身份证号长度是否正确
    			</p>
    		</div>
    	</div>
    	<form action="test3.php" method="post">
    		<div class="row">
    			<span class="col-sm-2 col-md-2">
    				身份证号：
    			</span>
    			<span class="col-sm-3 col-md-3">
    				<input type="text" name="Num" id="txt-num">
    			</span>
    		</div>
    		<div class="row">
    			<div class="col-sm-12 col-md-12">
    				<input type="submit" class="btn btn-primary">
    			</div>
    		</div>
    	</form>
		<hr>
		<div class="row">
			<div class="col-sm-12 col md-12">
				<p class="lead">
					3.对检索到的用户输入的关键词加粗描红
				</p>
			</div>
		</div>
		<form action="" method="post">
			<div class="row">
				<span class="col-sm-2 col-md-2">
					内容：
				</span>
				<span class="col-sm-2 col-md-2">
					<input type="text" name="Text" id="txt-text">
				</span>
				<span class="col-sm-2 col-md-2">
					<input type="submit" class="btn btn-primary" value="提交">
				</span>
			</div>
		</form>
		<p>
			<?php 
				$mytext=$_POST['Text'];
				$mystring3="白领女子公寓，温馨街南行200米，交通便利，亲情化专人管理，您的理想选择！";
				echo str_ireplace($mytext, '<span class="red">'.$mytext.'</span>', $mystring3);
				// 三个参数，第一个要替换的，第二个替换为什么，第三个字符串。
			?>
		</p>		
		<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					4. 用explode()函数对全国各省名称以,分隔
				</p>
				<p>
					<?php 
						$mystring="山西省,陕西省,宁夏省,河北省,河南省,山东省,甘肃省";
						$mystring2=explode(",", $mystring);
						for ($i=0; $i <count($mystring2) ; $i++) { 
							echo $mystring2[$i].',';
						}
					?>
				</p>
			</div>
		</div>


    </div>
</body>
</html>