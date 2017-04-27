<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>获取数组元素中最后一个元素</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	h1{text-align: center;}
	.red{color: #f00}

	.demo{border: 1px solid #ccc;background: #eee;border-radius: 10px;padding-top: 10px;}
	.demo .btn-primary{display: block;margin: 0 auto;}
</style>
</head>
<body>
    <div class="container">  
    	<h1>数组元素添加与删除</h1>  	
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<h2>array_pop() 获取数组元素中最后一个元素</h2>
    			<div>
    				<?php 
	    				// array_pop(array)
	    				$array=array("asp","php","java",".net","html");		
	    				$last=array_pop($array);			// 获取之后，数组中这个元素将被去掉。
	    				echo $last.'<br>';
	    				print_r($array);
	    				echo '数组现在的长度是'.count($array);
	    			?>
    			</div>
    			<hr>
    			<h2>array_push() 向数组添加元素</h2>
				<div>
					<?php 
						// array_push(array, var)		// 添加的新信息在函数最后
						$myarray=array(0=>"html",1=>"孙伟鹏");
						array_push($myarray,"是个","大好人");
						print_r($myarray);
					?>
				</div>
				<hr>
				<h2>删除数组中重复元素</h2>
				<div>
					<?php 
						// array_unique(array)	并不会改变数组的值。所以要将结果赋给一个新数组。
						$myarray2=array("孙伟鹏","王悦",2=>"王宁");
						array_push($myarray2, "沈佳琪","黄岩","王悦");
						print_r($myarray2);
						echo '<br>删除重复后数组是：';
						$array3=array_unique($myarray2);		
						print_r($array3);
					?>
				</div>

    		</div>
    	</div>
    </div>
</body>
</html>