<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��sort()���������������������</title>
</head>

<body>
<?php
	 $db_usrname="root";  //�˴�������û�����������Ϊroot
    $db_password="123456";     //�˴���������룬������Ϊ��
    $conn=mysql_connect("localhost",$db_usrname,$db_password) or die ('I cannot  connect to the database.'); 
    mysql_select_db("test",$conn); 
    echo "Success"; 

?>
</body>
</html>
