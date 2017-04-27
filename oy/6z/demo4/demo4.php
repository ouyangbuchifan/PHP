<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>用正则对用户注册信息进行验证</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../../css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	h1{text-align: center;}
	.red{color: #f00;}
	.sidebar{background: #eee;}
	/*span.red{margin-left: 10px;}*/
	.row [class^=col-]{margin-bottom: 10px;}
	.row [id^=check_]{padding-top: 5px;color: #f00}
	.row input[type="button"],.row input[type="submit"]{margin: 0 auto;text-align: center;display: block;}
</style>
<script type="text/javascript" src="js/check.js"></script>
</head>
<body>
    <div class="container">
    	<h1>用正则对用户注册信息进行验证</h1>
    	<div class="main row">
    		<div class="content col-sm-9 col-md-9">
    			<!-- <form action="index.php" name="reg_check" method="post" class="form-horizontal" onSubmit="return chkreg(reg_check,'all')"> -->
    			<form name="reg_check" method="post" action="index.php" onsubmit="return chkreg(reg_check,'all')" class="form-horizontal">
	    			<div class="row form-group-sm">
	    				<div class="col-sm-3 col-md-3 control-label">
	    					用户名：
	    				</div>
	    				<div class="col-sm-3 col-md-3">
	    					<input type="text" name="recuser" size="20" class="form-control" onblur="chkreg(reg_check,0)">	    	
    					</div>
	    				<div class="red col-sm-1 col-md-1">*</div>
						<div class="col-sm-3 col-md-3" id="check_recuser"></div>
	    			</div>
	    			<div class="row form-group-sm">
	    				<div class="col-sm-3 col-md-3 control-label">
	    					详细联系地址：
	    				</div>
	    				<div class="col-sm-3 col-md-3">
	    					<input type="text" name="adress" class="form-control" onBlur="chkreg(reg_check,1)">
	    				</div>
	    				<div class="red col-sm-1 col-md-1">*</div>
	    				<div class="col-sm-3 col-md-3" id="check_adress"></div>
	    			</div>
	    			<div class="row form-group-sm">
	    				<div class="col-sm-3 col-md-3 control-label">
	    					邮政编码：
	    				</div>
	    				<div class="col-sm-3 col-md-3">
	    					<input type="text" name="postalcode" class="form-control" size="20" onBlur="chkreg(reg_check,2)">
	    				</div>
	    				<div class="col-sm-3 col-md-3" id="check_postalcode"></div>
	    			</div>
	    			<div class="row form-group-sm">
	    				<div class="col-sm-3 col-md-3 control-label">
	    					QQ号码：
	    				</div>
	    				<div class="col-sm-3 col-md-3">
	    					<input type="text" name="qq" size="20" class="form-control" onblur="chkreg(reg_check,3)">
	    				</div>
	    				<div class="col-sm-3 col-md-3" id="check_qq"></div>
	    			</div>
	    			<div class="row form-group-sm">
	    				<div class="col-sm-3 col-md-3 control-label">
	    					E-mail:
	    				</div>
	    				<div class="col-sm-3 col-md-3">
	    					<input type="text" name="email" class="form-control" size="20" onblur="chkreg(reg_check,4)">
	    				</div>
	    				<div class="red col-sm-1 col-md-1">*</div>
	    				<div class="col-sm-3 col-md-3" id="check_email"></div>
	    			</div>
	    			<div class="row form-group-sm">
	    				<div class="col-sm-3 col-md-3 control-label">
	    					固定电话：
	    				</div>
						<div class="col-sm-3 col-md-3">
							<input type="text" name="gtel" class="form-control" size="20" onblur="chkreg(reg_check,6)">
						</div>
						<div class="red sm-1 col-md-1">*</div>
						<div class="col-sm-3 col-md-3" id="check_gtel"></div>
	    			</div>
	    			<div class="row form-group-sm">
	    				<div class="col-sm-3 col-md-3 control-label">
	    					移动电话：
	    				</div>
	    				<div class="col-sm-3 col-md-3">
	    					<input type="text" name="mtel" class="form-control" size="20" onblur="chkreg(reg_check,5)">
	    				</div>
	    				<div class="red col-sm-1 col-md-1">*</div>
	    				<div class="col-sm-3 col-md-3" id="check_mtel"></div>
	    			</div>
	    			<div class="row form-group-sm">
	    				<div class="col-sm-3 col-md-3">
	    					<input type="submit" value="提交" class="btn btn-primary">
	    					<!-- <input type="image" src="bg_09.jpg"> -->
	    				</div>
	    				<div class="col-sm-3 col-md-3">
	    					<input type="button" value="重置" onclick="reg_check.reset()" class="btn btn-default">
	    				</div>
	    			</div>
    			</form>
    		</div>	<!-- end .content -->

    		<div class="sidebar col-sm-2 col-md-2">
    			&nbsp;
    			<br><br><br><br><br><br><br><br>
    		</div>	<!-- end .sidebar -->   		
    	</div>
    </div>
</body>
</html>