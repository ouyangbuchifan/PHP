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
	function ajax () {
		var xmlhttp,txt,x;
		if (XMLHttpRequest) {
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				xmlDoc=xmlhttp.responseXML;
				txt="";
				x=xmlDoc.getElementsByTagName("title");
				for (var i = 0; i<x.length; i++) {
					txt=txt+x[i].childNodes[0].nodeValue+"<br/>";
				}
				document.getElementById("myDiv").innerHTML=txt;
			}
		}
		xmlhttp.open("GET","demo.xml",true);	
		xmlhttp.send();
	}
</script>
</head>
<body>
    <div class="container">
    	<div class="row">
    		<h2>my Book collection:</h2>
    		<div class="col-sm-12 col-md-12">
    			<div id="myDiv">这里是空的</div>
    			<button type="button" onclick="ajax()">提交</button>
    		</div>
    	</div>
    </div>
</body>
</html>