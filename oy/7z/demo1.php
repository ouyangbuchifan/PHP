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
	.red{color: #f00}

	.demo{border: 1px solid #ccc;background: #eee;border-radius: 10px;padding-top: 10px;}
	.demo .btn-primary{display: block;margin: 0 auto;}
</style>
</head>
<body>
    <div class="container">
    	<header>
    		<h1>数组</h1>
    	</header>   	
    	<h3>声明数组</h3>
    	<div class="row">   		
    		<div class="col-sm-12 col-md-12">
    			<?php 
    				$array=array("jsp","asp","php");		// 定义数组
    				print_r($array);						// 输出数组
    				echo '<br>'.$array[1];
    			?>
    		</div>
    		<div class="col-sm-12 col-md-12">
    			<?php 
    				$array2[0]="编";
    				$array2[1]="程";
    				$array2[2]="词";
    				$array2[3]="典";
    				print_r($array2);
    			?>
    		</div>
    	</div>
    	<hr>
		<h3>数组类型</h3>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					数字索引数组
				</p>
				<p class="lead">
					关联数组00
				</p>
				<p>
					<?php 
						$newarray=array("first"=>1,"second"=>2,"third"=>3);		// 这就是一个关联数组
						echo $newarray["second"]." ";
						$newarray["third"]=9;
						echo $newarray["third"];
					?>
				</p>
			</div>
		</div>
		<hr>
		<h3>数组输出</h3>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				print_r()
			</div>
		</div>
		<hr>
		<h3>一维数组与二维数组</h3>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<?php 
					$newarray2=array(				// 一个二维数组，还可以创建三维数组。
						"书籍"=>array("文学","历史","地理"),
						"体育用品"=>array("m"=>"足球","n"=>"篮球"),
						"水果"=>array("橙子",8=>"葡萄","苹果"));
					print_r($newarray2);	
				?>
			</div>
		</div>
		<hr>
		<h3>遍历数组</h3>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					foreach()    <br>
					并不对数组操作，只操作其备份。一般用于比较复杂的数组，例如二维数组。
				</p>
				<?php 
					// foreach ($variable as $key => $value) {
					// 	# code...
					// }

					$url=array("编程资源网"=>"http://www.baidu.com","百度"=>"http://www.baidu.com","谷歌"=>"http://www.google.com");
					foreach ($url as $link) {
						echo $link.'<br>';
					}
				?>
				<p class="lead">
					list()  <br>
					并不是一个真正函数，只是一个结构。只能用于数字索引数组，并且索引自增。
				</p>
				<div class="demo col-sm-6 col-md-6">
					<form method="post" class="form-horizontal " role="form">
						<div class="form-group">
							<div class="col-sm-3 col-md-3 control-label">
								用户名：
							</div>
							<div class="col-sm-6 col-md-6">
								<input type="text" class="form-control" name="txtName">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-3 col-md-3 control-label">
								密码：
							</div>
							<div class="col-sm-6 col-md-6 ">
								<input type="password" class="form-control" name="txtPwd">
							</div>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary">
						</div>
					</form>
					<?php 
						while (list($name,$value)=each($_POST)) {		// list遍历表单数组，用each语句获取表单提交的全局数组
							if ($name!="submit") {	
							// 将表单接收到的内容除了submit的值，全部输出。表单数组里，submit也是一个元素				
								echo "$name=$value <br>";
							}
						}
					?>
				</div>
			</div>
		</div>
		<hr>
		<h3>字符串与数组的转换</h3>
		<div>
			<h4>explode()</h4>
			<p class="lead">
				将字符串转换为数组
			</p>
			<p>
				<?php 
					$str="时装、休闲、职业装";
					$strs=explode("、", $str);
					print_r($strs);
				?>
			</p>
				
		</div>
		<hr>
				




		<div>
			<h4></h4>
		</div>


    </div>
</body>
</html>