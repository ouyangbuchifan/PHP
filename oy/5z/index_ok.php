﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>对检索到的用户输入的查询关键字进行加粗描红</title>
<style>
	.red{color: #f00}
</style>
</head>

<body>
<?php
$text="白领女子公寓，温馨街南行200米，交通便利，亲情化专人管理，您的理想选择！";
$content=$_POST[content];

//对检索到的用户输入的查询关键字进行加粗描红
echo str_ireplace($content,"<font color='red'><strong>".$content."</strong></font>",$text);       	
?>
</body>
</html>
