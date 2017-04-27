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
    				1. 比较两个时间的大小
    			</p>
    			<div>
    				<?php 
    					$time1=date("Y-m-d H:i:s");
    					$time2="2014-03-05 18:00:00";
    					echo '$time1的时间为：'.$time1.'<br/>';
    					echo '$time2的时间为：'.$time2.'<br/>';
    					if (strtotime($time1)>strtotime($time2)) {		// 时间戳其实就是一种源格式
    						echo '$time1比$time2要晚';
    					}else{
    						echo '$time2比$time1要晚';
    					}
    				?>
    			</div>
    			<hr>
    			<p class="lead">
    				2. 倒计时
    			</p>
    			<div>
    				<?php 
    					$time3=date("Y-m-d H:i:s");		// 获取当前时间
    					$time4="2014-09-30 18:00:00";		// 9月30号，十一放假时间
    					$time5="2015-01-01 00:00:00";		// 获取2015年元旦时间。
    					$result=ceil( (strtotime($time4)-strtotime($time3))/3600 );			// ceil()取整	60*60转为小时
    					$result2=ceil( (strtotime($time5)-strtotime($time3))/86400 );
    					echo '距离十一假还有'.$result.'小时'.'<br/>';
    					echo "距离元旦还有".$result2.'天';
    				?>
    			</div>
    		</div>
    	</div>
    </div>
</body>
</html>