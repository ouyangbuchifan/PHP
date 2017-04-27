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
    .red{color:#f00}
    .list li{float: left;list-style: none;margin: 0 15px;}
    input[type="submit"]{display: inline-block;margin: 0 auto;}
</style>
</head>
<body>
    <div class="container">
    	<h1></h1>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p class="lead">
    				1. 获取任意一天的时间，格式： yyyy-MM-DD HH:MM:SS
    			</p>
    			<div>
    				<?php 
    					$now=date("Y-m-d H:i:s");
    					echo $now;
    				?>
    			</div>
    			<p class="lead">
    				2. 计算两个时间之差
    			</p>
    			<div>
    				距离下班时间还有<?php 
					$dateY=date("Y");
					$datem=date("m");
					$dated=date("d");
					$dates1=mktime(17,10,0,$datem,$dated,$dateY);
					$dates2=mktime();
					$dates3=$dates1-$dates2;
					echo ceil($dates3/3600);
					?>小时。
    			</div>
    			<div>
    				距离奥运会开幕还有：<?php 
						$date=gmmktime();
						$str=gmmktime(0,0,0,8,8,2012);
						$str2=$str-$date;
						echo ceil($str2/86400);
						?>天
    			</div>
    		</div>
    	</div>
    </div>
</body>
</html>