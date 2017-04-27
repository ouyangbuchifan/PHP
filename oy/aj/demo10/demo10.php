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
	function showHit(str){
		var xmlhttp;
		if (str.length=="") {
			document.getElementById("txtHit").innerHTML="";
			return;
		}
		if (XMLHttpRequest) {
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp=new ActiveXObject("Miscrosoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("txtHit").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","demo.php?q="+str,true);
		xmlhttp.send();
	}
</script>
</head>
<body>
    <h3>请输入你的名字</h3>
    <form action="" name="form1">
    	姓名：<input type="text" name="txtUser" id="txt-user" onkeyup="showHit(this.value)" placeholder="请输入姓名">
		<input type="submit" value="提交">
    	<!-- onkeyup键盘松开时触发，this.value，将键盘的值传送 -->
    	<p>建议：<span id="txtHit"></span></p>
    </form>
</body>
</html>