<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��sort()���������������������</title>
</head>

<body>
<?php
	$db_usrname="root";  //�˴�������û�����������Ϊroot
    $db_password="";     //�˴���������룬������Ϊ��
    $conn=mysqli_connect("localhost",$db_usrname,$db_password) or die ('I cannot  connect to the database.'); 
    // mysqli_select_db�����ӣ������ݱ�
    mysqli_select_db($conn, "test"); 
    echo "Success"; 

?>
</body>
</html>
