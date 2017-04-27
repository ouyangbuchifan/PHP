<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
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
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4&&xmlhttp.status==200) {
				document.getElementById("title").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","demo.php",true);
		xmlhttp.send();
	}
</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h3 id="title" class="demo">这里是空</h3>
				<input type="submit" onclick="ajax()" value="提交">
				<p class="demo" style="display:none">我就是我，不一样的花朵！</p>
				<script type="text/javascript">
				var demo=document.getElementsByClassName("demo").item(1).innerHTML;
				// getElementsByClassName() 返回的是一个集合
				// getElementById() 返回的是单个元素
				// getElementByTagName() 返回的是一个集合
				document.write("<br><br>JS输出的内容是："+demo);
				</script>
			</div>
		</div>
	</div>
</body>
</html>