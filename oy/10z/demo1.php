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
    	<div class="row">
    		<div class="col-xs-12 col-md-12">
    			<p class="lead">
    				mktime()函数获取当前时间
    			</p>
    			<div>
    				<?php 
    					echo "现在的时间是：".mktime().'<br>';
    					echo '现在的时间是：'.date("Y-m-d",mktime()).'<br>';	// mktime()返回的是时间戳，所以要用date()函数来格式化下
    					echo '现在的时间是：'.date("H:i:s",mktime()).'<br>';
    				?>
    			</div>
    			<hr>
    			<p class="lead">
    				time()  函数  获取当前时间戳
    			</p>
    			<div>
    				<?php 
    					$nextweek=time()+(7*24*60*60);
    					echo '现在时间：'.date("Y-m-d",time());
    					echo '下周时间：'.date("Y-m-d",$nextweek);
    				?>
    			</div>
    			<hr>
    			<p class="lead">
    				date() 获取当前时间，格式化时间。
    			</p>
    			<div>
    				<?php 
    					echo "DATE_ATOM= ".date(DATE_ATOM).'<br>';			// 输出ATOM时间格式，原子钟
    					echo 'DATE_COOKIE= '.date(DATE_COOKIE).'<br>';		// 输出HTTP cookie格式的时间
    					echo 'DATE_ISO8601= '.date(DATE_ISO8601).'<br>';		// ISO8601
    					echo 'DATE_RFC822= '.date(DATE_RFC822).'<br>';
    					echo 'DATE_RFC850= '.date(DATE_RFC850).'<br>';
    					echo 'DATE_RSS= '.date(DATE_RSS).'<br>';
    					echo 'DATE_W3C= '.date(DATE_W3C).'<br>';				
    				?>
    			</div>
    			<hr>
    			<p class="lead">
    				getdate() 获取时间的某个参数的信息,返回数组。
    			</p>
    			<div>
    				<?php 
    					$arr=getdate();
    					echo "现在时间是：".$arr['year'].'-'.$arr['mon'].'-'.$arr['mday'].'&nbsp;&nbsp;&nbsp;&nbsp;';
    					echo $arr['hours'].'-'.$arr['minutes'].'-'.$arr['seconds'].'-'.$arr['weekday'];
    					echo '<br>';
    					echo "今天是一年中第$arr[yday]天";
    					// $arr['year'] 元素的单引号不能丢，不然报错
    				?>
    			</div>
    			<hr>
    			<p class="lead">
    				checkdate() 检测时间有效性
    			</p>
    			<div>
    				<?php 
    					$year2=2008;
    					$month2=2;
    					$day1=28;
    					$day2=30;
    					var_dump(checkdate($month2, $day1, $year2)) ;
    					echo '<br>';
    					var_dump(checkdate($month2, $day2, $year2)) ;

    				?>
    			</div>
    		</div>
    	</div>
    </div>
</body>
</html>