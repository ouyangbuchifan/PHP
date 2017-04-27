<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$link=mysql_connect('localhost','root','123456') or die('数据库连接出错');
mysql_select_db('db_study',$link) or die('数据库选择出错');
mysql_query('set names utf8');
$txt_title=$_POST[txt_title];
$txt_content=$_POST[txt_content];
$txt_time=date('Y-m-d H:i:s');
$sql=mysql_query("insert into tb_aff(txt_title,txt_content,creatime)values('$txt_title','$txt_content','$txt_time')");
echo "<script>alert('添加成功！');window.location.href='list.php';</script>";
mysql_free_result($sql);
mysql_close($link);

?>
</body>
</html>
