<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>POST 方式 AJAX</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../../css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript">
	function ajax(){
		var xmlhttp;
		if (XMLHttpRequest) {
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp=new ActiveXObject("Miscrosoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("myP").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","demo.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		// post格式传数据，
		xmlhttp.send("name=jiyejia&lname=oy");
	}
</script>
</head>
<body>
	<div class="container">
		<h1>POST 方式传参</h1>
		<p id="myP">这里的内容将被替换掉</p>
		<input type="submit" onclick="ajax()" value="提交">
	</div>
</body>
</html>