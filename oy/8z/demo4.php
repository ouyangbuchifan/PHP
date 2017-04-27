<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>个人表单提交</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	h1{text-align: center;}
	.red{color: #f00}

	.center{display: block;margin: 0 auto;text-align: center;}
</style>
</head>
<body>
    <div class="container">
    	<h1></h1>
    	<div class="row">
    		<div class="col-xs-12 col-sm-12 col-md-12">	
    			<form action="" class="form form-horizontal" method="post">
	    			<div class="demo">
	    				<div class="form-group">
	    					<div class="col-xs-10 col-sm-2 col-md-2 control-label">
		    					姓名：
		    				</div>
		    				<div class="col-xs-10 col-sm-6 col-md-6">
		    					<input type="text" name="txtUser" id="txt-user" class="form-control">
		    				</div>
	    				</div>
	    				<div class="form-group">
	    					<div class="col-xs-10 col-sm-2 col-md-2 control-label">
	    						性别：
	    					</div>
	    					<div class="col-xs-10 col-sm-6 col-md-6">
	    						<label class="radio-inline">
	    							<input type="radio" name="radSex" value="男" checked="checked">男
	    						</label>
	    						<label class="radio-inline">
	    							<input type="radio" name="radSex" value="女">女
	    						</label>
	    					</div>
	    				</div>
	    				<div class="form-group">
	    					<div class="control-label col-xs-10 col-sm-2 col-md-2">
	    						密码：
	    					</div>
	    					<div class="col-xs-10 col-sm-6 col-md-6">
	    						<input type="password" name="pwd" class="form-control">
	    					</div>
	    				</div>
	    				<div class="form-group">
	    					<div class="control-label col-xs-10 col-sm-2 col-md-2">
	    						学历：
	    					</div>
	    					<div class="control-xs-10 col-sm-2 col-md-2">
	    						<select name="selEdu" id="sel-edu" class="form-control">
	    							<option value="博士" selected="selected">博士</option>
	    							<option value="硕士">硕士</option>
	    							<option value="研究生">研究生</option>
	    							<option value="大学">大学</option>
	    							<option value="大专">大专</option>
	    							<option value="高中">高中</option>
	    						</select>
	    					</div>
	    				</div>
	    				<div class="form-group clearfix">
	    					<div class="control-label col-xs-10 col-sm-2 col-md-2">
	    						爱好：
	    					</div>
	    					<div class="col-xs-10 col-sm-6 col-md-6">
	    						<label class="checkbox-inline">
	    							<input type="checkbox" name="chkHob[]" value="篮球">篮球    							
	    						</label>
	    						<label class="checkbox-inline">
	    							<input type="checkbox" name="chkHob[]" value="足球">足球
	    						</label>
	    						<label class="checkbox-inline">
	    							<input type="checkbox" name="chkHob[]" value="阅读">阅读
	    						</label>
	    						<label class="checkbox-inline">
	    							<input type="checkbox" name="chkHob[]" value="自行车">自行车
	    						</label>
	    					</div>
	    				</div>
	    				<div class="form-group">
	    					<div class="control-label col-xs-10 col-sm-2 col-md-2">
	    						个人简历：
	    					</div>
	    					<div class="col-xs-10 col-sm-6 col-md-6">
	    						<textarea name="txtCV" id="txt-CV" cols="20" rows="3" class="form-control"></textarea>
	    					</div>
	    				</div>
	    				<div class="form-group">
	    					<div class="control-label col-xs-10 col-sm-2 col-md-2">
	    						写真上传：
	    					</div>
	    					<div class="col-xs-10 col-sm-6 col-md-6">
	    						<input type="file" name="file" id="" class="col-sm-5 col-md-5">   						
	    					</div>
	    				</div>
	    				<div class="form-group">
	    					<div class="col-xs-10 col-sm-10 col-md-10 center">
	    						<input type="submit" name="btnSub" value=" 提 交 " class="btn btn btn-primary">
	    					</div>
	    				</div>
	    				<?php 
	    					if ($_POST['btnSub']==true) {
	    						echo '你的姓名是：';
	    						echo $_POST['txtUser'];
	    						echo '<br>你的姓名是：';
	    						echo $_POST['radSex'];
	    						echo '<br>你的密码是：';
	    						echo $_POST['pwd'];
	    						echo '<br>你的学历是：';
	    						echo $_POST['selEdu'];
	    						echo '<br>你的爱好是：';
	    						if ($_POST['chkHob']!=null) {
	    							for ($i=0; $i <count($_POST['chkHob']) ; $i++) { 
	    							echo $_POST['chkHob'][$i]."&nbsp;&nbsp;";
	    							}
	    						}
	    						echo '<br>你的个人简历是：';
	    						echo $_POST['txtCV'];
	    						echo '<br>个人写真目录是：';
	    						echo $_POST['file'];
	    						
	    					}else{
	    						echo '表单未提交';
	    					}
	    				?>
	    			</div>
    			</form>
    		</div>
    	</div>
    </div>
</body>
</html>