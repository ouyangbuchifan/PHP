<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>POST请求  AJAX</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../../css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	
</style>
<script type="text/javascript">
	function loadXMLDoc(){
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
		xmlhttp.send();
	}
</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p id="myP">空的内容</p>
				<button type="button" onclick="loadXMLDoc()">请求</button>
			</div>
		</div>
	</div>

</body>
</html>