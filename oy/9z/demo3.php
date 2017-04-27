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
    .red{color:#f00}
    .list li{float: left;list-style: none;margin: 0 15px;}
    input[type="submit"]{display: inline-block;margin: 0 auto;}
</style>
<script type="text/javascript">
	// function check () {
	// 	var element=document.form1;
	// 	var user=document.getElementById("txt-user");
	// 	var title=document.getElementById("txt-title");
	// 	var content=document.getElementById("txt-content");
	// 	if (user.value=="") {
	// 		document.getElementById("noteUser").innerHTML="作者不能为空";
	// 		user.focus();		
	// 		return false;		
	// 	}
	// 	if (title.value=="") {
	// 		document.getElementById("noteTitle").innerHTML="标题不能为空";
	// 		title.focus();
	// 		return false;
	// 	}
	// 	if (content.value=="") {
	// 		document.getElementById("noteCont").innerHTML="请输入文章内容";
	// 		title.focus();
	// 		return false;
	// 	}
	// }

	function check2(){
		var test=document.getElementById("txt-text");
		if (test.value.length>=10) {
			document.getElementById("txtnote2").innerHTML="长度不得超过10";
			test.focus();
		}
	}
</script>
</head>
<body onload="showLeftTime()">
    <div class="container">
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p class="lead">1.添加博客表单页面，提交时检测各内容是否为空。</p>
				<div class="row">
					<div class="col-sm-10 col-md-10">
						<form action="" name="form1" class="form form-horizontal" method="post" onsubmit="return check()">
							<div class="form-group">
								<label class="control-label col-md-4">作者：</label>
								<div class="col-md-4">
									<input type="text" class="form-control" name="txtUser" id="txt-user">
								</div>	
								<div class="col-md-4 red" id="noteUser"></div>							
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">标题：</label>
								<div class="col-md-4">
									<input type="text" class="form-control" name="txtTitle" id="txt-title">
								</div>
								<div class="col-md-4 red" id="noteTitle"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">文章内容：</label>
								<div class="col-md-4">
									<textarea name="txtContent" id="txt-content" cols="30" rows="3"></textarea>
								</div>
								<div class="col-md-4 red" id="noteCont"></div>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="提交">
							</div>
						</form>
					</div>
				</div>
				<hr>
				<p class="lead">
					2. PHP页中，动态地显示当前时间
				</p>
				<div>
					<script type="text/javascript">
					<!--
						//获得当前时间,刻度为一千分一秒
						// var initializationTime=(new Date()).getTime();
						function showLeftTime()
						{
							var now=new Date();
							var year=now.getYear();
							var month=now.getMonth();
							var day=now.getDate();
							var hours=now.getHours();
							var minutes=now.getMinutes();
							var seconds=now.getSeconds();
							document.all.show.innerHTML=""+year+"年"+month+"月"+day+"日 "+hours+":"+minutes+":"+seconds+"";
							//一秒刷新一次显示时间
							var timeID=setTimeout(showLeftTime,1000);
						}
						//-->
					</script>
					<div id="show"></div>
					<p class="red">这个示例有问题，</p>
				</div>
				<hr>
				<p class="lead">
					3.用JS控制字符串输入的长度
				</p>
				<div>
					<form action="" name="form2">
						<input type="text" name="txtTest" id="txt-text" class="control-form" onblur="check2()">
						<div id="txtnote2"></div>
					</form>
				</div>

    		</div>
    	</div>
    </div>
</body>
</html>