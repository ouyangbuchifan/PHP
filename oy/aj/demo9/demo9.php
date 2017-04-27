<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>AJAX callback函数</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<script type="text/javascript">
	var xmlhttp;
	function loadXML(url,cfunc){
		if (XMLHttpRequest) {
            xmlhttp=new XMLHttpRequest();
        }else{
            xmlhttp=ActiveObject("Miscrosoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=cfunc;
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
	}
    function ajax () {
        loadXML("demo.php",function(){
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                document.getElementById("myh3").innerHTML=xmlhttp.responseText;
            }
        });
    }
</script>
</head>
<body>
    <p>
    	callback函数   就是把一个函数以参数形式来传递给另外一个函数。
    </p>
    <div>
    	<h3 id="myh3"></h3>
    	<button type="button" onclick="ajax()">提交</button>
    </div>
</body>
</html>