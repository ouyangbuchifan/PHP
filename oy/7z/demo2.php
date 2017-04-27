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
    	<h1>数组</h1>    	
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<h2>字符串与数组的转换</h2>
    				<div class="demo col-sm-6 col-md-6 ">
						<form action="" method="post" class="form-horizontal ">
							<div class="form-group">
								<div class="col-sm-3 col-md-3 control-label">
									添加投票选项：
								</div>
								<div class="col-sm-5 col-md-5">
									<textarea name="content" id="textcontent" cols="30" rows="2"></textarea>
									<p class="red">选项间用*分隔</p>
								</div>
								<div class="col-sm-2 col-md-2">
									<input type="submit" name="submit" class="btn btn-primary">
								</div>
							</div>
						
							<div class="form-group">
								<div class="col-sm-3 col-md-3 control-label">
									投票选项：
								</div>
								<div class="col-sm-4 col-md-4">
									<?php 
										if ($_POST['submit']!="") {
											$content=$_POST['content'];

											$data=explode("*", $content);
											print_r($data);
											while (list($name,$value)=each($data)) {
												echo '<input type="checkbox" name="checkbox" value="checkbox">';
												echo $value."\n";
											}
										}
									?>
								</div>

							</div>
						</form>
					</div>
					<div class="clearfix"></div>

    			<hr>
				<h2>implode() 将数组转换为一个字符串</h2>
				<div>
					<p>
						<em class="red">示例：</em><br>
						<?php 
							$str=array("明日","编程词典","网址","www.baidu.com","服务电话","13934340312");
							echo implode(' ', $str);
						?>
					</p>
				</div>
				<hr>
				<h2>count() 统计数组元素个数</h2>
				<p>
					<?php 
						// count(var,COUNT_RECURSIVE)		// 第二个参数可选，默认为0，也可写作COUNT_RECURSIVE或1。多维数组
					?>
				</p>
				<div>
					<?php 
						$mystring=array(
							"php"=>array("PHP函数参考大全","程序开发大全","数据库开发应用手册"),
							"asp"=>array("ASP经验与技巧")
							);
						echo count($mystring,1).'<br>';

						$mystring2=array(123);
						echo count($mystring2);
					?>
				</div>
				<hr>
				

    		</div>
    	</div>
    </div>
</body>
</html>