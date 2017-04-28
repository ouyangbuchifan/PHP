<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用sort()函数对数组进行升序排序</title>
</head>

<body>
<?php
	$db_usrname="root";  //此处填你的用户名，本例中为root
    $db_password="";     //此处填你的密码，本例中为空
    $conn=mysqli_connect("localhost",$db_usrname,$db_password) or die ('I cannot  connect to the database.'); 
    // mysqli_select_db先链接，后数据表
    mysqli_select_db($conn, "test"); 
    echo "Success"; 

?>
</body>
</html>
