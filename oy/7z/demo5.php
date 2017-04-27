<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>多文件上传</title>
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
   <!--  <div class="container">
    	<h1>多文件上传</h1>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<h3>5个文件以内任意上传</h3>
    			<form action="up.php" method="post" enctype="multipart/form-data" name="form1" class="form-horizontal ">
    				<div class="form-group">
    					<div class="label-control col-xc-1 col-sm-1 col-md-1">内容1：</div>
    					<div class="col-xc-9 col-md-9">
    						<input type="file" name="picture[]" id="picture[]" size="30">
    					</div>
    				</div>
    				<div class="form-group">
    					<div class="label-control col-xc-1 col-md-1">内容2：</div>
    					<div class="col-xc-9 col-md-9">
    						<input type="file" name="picture[]" id="picture[]" size="30">
    					</div>
    				</div>
    				<div class="form-group">
    					<div class="label-control col-xc-1 col-md-1">内容3：</div>
    					<div class="col-xc-9 col-md-9">
    						<input type="file" name="picture[]" id="picture[]">
    					</div>
    				</div>
    				<div class="form-group">
    					<div class="label-control col-xc-1 col-md-1">内容4：</div>
    					<div class="col-xc-9 col-md-9">
    						<input type="file" name="picture[]" id="picture[]">
    					</div>
    				</div>
    				<div class="form-group">
    					<div class="label-control col-xc-1 col-md-1">内容5：</div>
    					<div class="col-xc-9 col-md-9">
    						<input type="file" name="picture[]" id="picture[]">
    					</div>
    				</div>
    				<div class="form-group">
    					<input type="submit" class="btn btn-warning">
    				</div>
    			</form>
    		</div>
    	</div>
    </div> -->

	<form action="up.php" method="post"
	enctype="multipart/form-data">
	<label for="file">Filename:</label>
	<input type="file" name="file" id="file" /> 
	<br />
	<input type="submit" name="submit" value="Submit" />
	</form>
	
	<em class="red">提示：</em>
	这个例子有问题，出错了！



</body>
</html>