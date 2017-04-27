<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../../css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	h1{text-align: center;}
	.red{color: #f00}
</style>
</head>
<body>
	<p class="red">注：实用过程中不用程序来做验证。用JS更好</p>
	<div class="container">
		<h1>用户登录</h1>
		
		<form action="index.php" method="post">
			<div class="row">
				<div class="col-sm-1 col-md-1">
					用户名：
				</div>
				<div class="col-sm-3 col-md-3">
					<input type="text" name="Name" id="txt-Name" placeholder="输入用户名">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-1 col-md-1">
					密码：
				</div>
				<div class="col-sm-3 col-md-3">
					<input type="password" name="Pwd" id="txt-Pwd">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<input type="submit" value="提交">
				</div>
			</div>
		</form>
	</div>
    
</body>
</html>