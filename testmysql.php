<?php 
// php版本过高时，mysql_connect() 改成mysqli_connect()  mysql_close()同

$link = mysqli_connect('localhost','root',''); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 
echo 'Connection OK'; mysqli_close($link); 
?> 