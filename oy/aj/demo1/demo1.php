<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>w3school上的ajax示例</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript">
	function loadXMLDoc(){
		var xmlhttp;
		if (window.XMLHttpRequest) {
			// ie6以上及非IE浏览器
			xmlhttp=new XMLHttpRequest;
		}else{
			// ie6
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","demo.php",true);
		// 这样有可能得到的是缓存的结果。
		xmlhttp.send();
	}
</script>
</head>
<body>
	<h2>AJAX</h2>
	<button type="button" onclick="loadXMLDoc()">请求数据</button>
	<div id="myDiv"></div>
    <p>
    	利用get方法来发送请求。
    </p>		
</body>
</html>