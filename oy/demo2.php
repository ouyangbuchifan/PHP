<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用sort()函数对数组进行升序排序</title>
</head>

<body>
<?php
	 $db_usrname="root";  //此处填你的用户名，本例中为root
    $db_password="123456";     //此处填你的密码，本例中为空
    $conn=mysql_connect("localhost",$db_usrname,$db_password) or die ('I cannot  connect to the database.'); 
    mysql_select_db("test",$conn); 
    echo "Success"; 

?>
</body>
</html>
