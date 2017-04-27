<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>计算两个时间的差</title>
</head>

<body>
	<?php 

		// mktime()  获取当前时间
		$nowdate=mktime();
		echo date("Y-m-d H:i:s",$nowdate);

		// time() 
		echo '<br/>现在时间是：';		// time()获取当前时间戳
		echo date("Y-m-d H:i:s",time());

		//getdate() 获取时间的某个元素，数组
		echo '<br/>';
		$arr=getdate();
		echo '今年是'.$arr['year'].'年'.$arr['month'].'月'.$arr['mday'].'<br/>';

		// checkdate()
		var_dump(checkdate('8', '45', '2014')) ;
		var_dump($arr);
		echo '<br/>'
		// var_dump()方法输出变量的类型，及数值。如果是数组，就递归展开值。

	?>
	<div>
		<?php 
			$now=mktime();
			$ban=date("2014-8-27 18:00:00");
			$result=(strtotime($ban)-$now)/3600;
			echo '距离下班还有'.$result.'小时<br/>';
		?>
	</div>
</body>
</html>
