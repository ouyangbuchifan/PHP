<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ӧ��sort()��������������������</title>
</head>

<body>
<?php
    $db_usrname="root";  //用户名
    $db_password="";     //密码
    $conn=mysqli_connect("localhost",$db_usrname,$db_password) or die ('I cannot connect to the database.'); 
    mysqli_select_db($conn, "test"); 	// mysqli_select_db先link，后用表
    echo "Success"; 

?>
</body>
</html>
