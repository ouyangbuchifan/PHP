<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>URL传参 编/解码</title>
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
    	<h2>URL传参 编/解码</h2>
    	<div class="row">
    		<div class="col-xc-12 col-sm-12 col-md-12">
    			<div>
    				<p class="lead">
	    				urlencode() 函数 编码
	    			</p>
	    			<p>
	    				<a href="index.php?id=<?php echo urlencode("编程词典");?>">PHP编程词典</a> 
	    				<!-- 这个编码后的，只有在IE下才是 -->
	    			</p>
	    			<p class="lead">
	    				urlencode() 函数 解码
	    			</p>
	    			<p>
	    				<a href="index.php?id=<?php echo urlencode("编程词典");?>">PHP编程词典</a>
	    				
	    			</p>
    			</div>
    			
    		</div>
    	</div>
    </div>
</body>
</html>