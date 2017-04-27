<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>检测数据类型</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	h1{text-align: center;}
</style>
</head>
<body>
    <div class="container">
    	<h1>检测数据类型</h1>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p>
    				检测数据类型各函数的功能和用法一样。如果是，返回true,如果不是，返回false.
    			</p>
                <p>
                    is_bool is_string is_float is_integer is_null is_array is_object is_numeric
                </p>
    			<p>
    				示例：
    				<?php 
	    				$boo="0123654984.6513";
	    				if ( is_numeric($boo) ) {
	    					echo('$boo变量是一个数字类型 '.$boo);
	    				}
	    				else{
	    					echo('$boo变量不是一个数字类型');
	    				}
    				?>
    			</p>
    		</div>
    	</div>
    </div>
</body>
</html>