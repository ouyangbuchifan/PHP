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
	.red{color: #f00;}
	.sidebar{background: #eee;}
	/*span.red{margin-left: 10px;}*/
	.row [class^=col-]{margin-bottom: 10px;}
</style>
<script type="text/javascript" src="js/check.js"></script>

</head>
<body>
    <div class="container">
        <h1>用户注册表单</h1>
        <div class="row">
            <div class="col-sm-2 col-md-2 control-label">
                用户名：
            </div>
            <div class="col-sm-7 col-md-7">
                <?php 
                    echo $_POST['recuser'];
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 col-md-2 control-label">
                详细联系地址：
            </div>
            <div class="col-sm-7 col-md-7">
                <?php 
                    echo $_POST['adress'];
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 col-md-2 control-label">
                邮政编码：
            </div>
            <div class="col-sm-7 col-md-7">
                <?php 
                    echo $_POST['postalcode'];
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 col-md-2 control-label">
                QQ号码：
            </div>
            <div class="col-sm-7 col-md-7">
                <?php 
                    echo $_POST['qq'];
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 col-md-2 control-label">
                E-mail:
            </div>
            <div class="col-sm-7 col-md-7">
                <?php 
                    echo $_POST['email'];
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 col-md-2 control-label">
                固定电话：
            </div>
            <div class="col-sm-7 col-md-7">
                <?php 
                    echo $_POST['gtel'];
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 col-md-2 control-label">
                手机号码：
            </div>
            <div class="col-sm-7 col-md-7">
                <?php 
                    echo $_POST['mtel'];
                ?>
            </div>
        </div>

    </div>
</body>
</html>