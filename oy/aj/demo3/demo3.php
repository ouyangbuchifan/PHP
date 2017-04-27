<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../../bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	h1{text-align: center;}
	.red{color: #f00}
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
				document.getElementById("myh3").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","demo.php?name=jiyejia&lname=Gates",true);
		xmlhttp.send();
	}
	
</script>
</head>
<body>
    <h3 id="myh3">这里的内容将被替换</h3>
    <input type="submit" onclick="loadXMLDoc()" value="提交">
</body>
</html>