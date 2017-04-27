<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>get false  ajax</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../../css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript">
	function ajax () {
		var xmlhttp;
		if (XMLHttpRequest) {
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp=new ActiveXObject("Miscrosoft.XMLHTTP");
		}
		xmlhttp.open("GET","demo.php",false);
		// 如果不用异步请求，即后面为false时。不用onreadystatechange属性,只用写到send()之后
		xmlhttp.send();
		document.getElementsByClassName("demo").item(0).innerHTML=xmlhttp.responseText;

	}
</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h3 id="myH" class="demo">AJAX</h3>
				<input type="submit" onclick="ajax()" value="提交">
			</div>
		</div>
	</div>
</body>
</html>