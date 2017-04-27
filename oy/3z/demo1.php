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
<body>
    <?php
		echo("这个是xml风格的标记");		
		// 一般用这种标记风格，服务器无法禁用
	?>

	<script language="php">
		echo("脚本风格标记");
	</script>

	<? echo("简单风格"); ?>		<!-- 简单风格和ASP风格，需要在PHP.ini中做配置 -->

	<%
		echo("ASP风格标记");
	%>
</body>
</html>



