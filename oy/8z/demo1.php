<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>表单简介</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
    <div class="container">
    	<h1>表单</h1>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p class="lead">
    				HTML知识，无特别代码。记住：复选框name可以起成 font[] 这样的格式，因为它是一个数组。get发送数据如果太大，有可能会传输失败。
    			</p>
    			<h2>参数传递</h2>
    			<div>
    				<p class="lead">
    					1. $_POST[] 全局变量
    				</p>
    				<p>
    					<?php 
    						// 创建一个表单，设置method=post,添加文本框name=user,
    						//$text=$_POST["user"];	// 可以接收表单元素中user文本框的值
    					?>
    				</p>
    				<p class="lead">
    					2. $_GET[] 全局变量
    				</p>
    				<p class="lead">
    					3. $_SESSION[] 全局变量
    				</p>
    				<p>
    					<?php 
    						// 创建一个表单，添加文本框name=user,
    						//$text=$_SESSION["user"];	// 可以接收表单元素中user文本框的值。保存后text任何页面都可以用。不过这种方法比较占资源。
    					?>
    				</p>
    			</div>
				<h2>
					web 中添加PHP脚本
				</h2>
				<div>
					<p>
						<?php 
							//include("top.php");		// 引入top.php
						?>
					</p>
				</div>
				<h2>对表单value进行赋值</h2>
				<div>
					<p>
						<?php 
							$hidden="yg0025";		// 为变量$hidden赋值
						?>
						<input type="hidden" name="ID" value="<?php echo $hidden;?>">		
						<!-- 将$hidden的值赋给hidden隐藏域。 隐藏域经常用来存不用显示的信息以及需要传递的参数-->
					</p>
				</div>

    		</div>
    	</div>
    </div>
</body>
</html>