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
    				计算脚本运行时间
    			</p>
    			<div>
    				<?php 
    					function ren_time(){
    						list($msec,$sec)=explode(" ", microtime());
    						return( (float)$msec+(float)$sec );
    					}
    						$starttime=ren_time();
    						$time1=strtotime(date("H-m-d H:i:s"));
    						$time2=strtotime(date("2010-2-10 17:10:00"));
    						$time3=strtotime("2010-1-1");
    						$sub1=ceil( ($time1-$time2)/3600 );		// 60*60
    						$sub2=ceil( ($time1-$time3)/86400 );	// 60*60*24
    						echo '距离2010年2月10日已过了'.$sub1.'小时'.'<br/>';
    						echo '距离2010年元旦已经过了'.$sub2.'小时'.'<br/>';	

    						$endtime=ren_time();
    				?>
    				<p>
    					这个脚本花费了 <?php echo $endtime-$starttime.'秒' ?>
    				</p>
    			</div>
    		</div>
    	</div>
    </div>
</body>
</html>