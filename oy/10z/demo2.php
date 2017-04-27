<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>时间</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    h1{text-align: center;}
    .red{color:#f00}
    .list li{float: left;list-style: none;margin: 0 15px;}
    input[type="submit"]{display: inline-block;margin: 0 auto;}
</style>
</head>
<body>
    <div class="container">
    	<h1></h1>
    	<p>
    		这些函数平时开发过程中不常用到，了解一下。
    	</p>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p class="lead">
    				date() 函数的各种格式化选项
    			</p>
    			<div>
    				<?php 
    					echo "输出单个时间变量： ".date("Y").'-'.date("m").'-'.date("d").'<br>';
    					echo "输出组合时间变量： ".date("Y:m:d").'<br>';
    					echo '输出更详细的时间： '.date("Y:m:d-H:i:s").'<br>';			// 年月日时分秒
    					echo '更详细的，加上时区和星期： '.date("l Y:m:d-H:i:s T")		// l周几 T时区	
    				?>
    			</div>
    			<hr>
    			<p class="lead">
    				strftime() 函数 根据本地环境的格式来输出时间
    			</p>
    			<div>
    				<?php 
    					setlocale(LC_ALL, "en_US");
    					echo '美国格式'.strftime("Today is %A");
    					echo '<br/>';
    					setlocale(LC_ALL, "chs");
    					echo '中文格式'.strftime("今天是 %A");
    					echo '<br/>';
    					setlocale(LC_ALL, "cht");
    					echo '繁体格式'.strftime("今天是 %A");

    				?>
    			</div>
    			<hr>
    			<p class="lead">
    				strtotime()  将日期和时间转换为 UNIX时间戳
    			</p>
    			<div>
    				<?php 
    					echo strtotime("now")."<br/>";
    					echo '输出时间：'.date("Y-m-d H:i:s",strtotime("now"))."<br>";		// 输出当前时间
    					echo strtotime("21 May 2009").'<br>';
    				?>
    			</div>
    		</div>
    	</div>
    </div>
</body>
</html>