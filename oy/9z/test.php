<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body onload="nowtime()">
    <script type="text/javascript">
    function nowtime(){
    	var now=new Date();
    	var year=now.getYear();
    	// year=parseFloat(year)+1900;
    	year+=1900;
    	var month=now.getMonth()+1;
    	var day=now.getDate();
    	var hour=now.getHours();
    	var minutes=now.getMinutes();
    	var seconds=now.getSeconds();
    	document.all.nowtime.innerHTML=""+year+"年"+month+"月"+day+"日"+hour+":"+minutes+":"+seconds+"";
    	var timeId=setTimeout(nowtime,1000);	// setTimeout() 计时器，1秒一执行
    }
    </script>
    <div id="nowtime"></div>
</body>
</html>