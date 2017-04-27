<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<script type="text/javascript">
	function loadXMLDoc(){
		var xmlhttp;
		if (window.XMLHttpRequest) {
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp=new ActiveXObject("Miscrosoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","demo.php?t="+Math.random(),true);
		xmlhttp.send();
	}
</script>
</head>
<body>
	<div id="myDiv">ajax</div>
    <button type="button" onclick="loadXMLDoc()">请求</button>
</body>
</html>