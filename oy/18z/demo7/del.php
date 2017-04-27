<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $link=mysql_connect('localhost','root','123456') or die('连接出错'.mysql_error());
    $sel=mysql_select_db('db_study',$link) or die('选择出错'.mysql_error());
    mysql_query('set names utf8');
    $id=$_GET[id];
    $sql=mysql_query("delete from tb_aff where id=$id");
    if($sql){
        echo "<script>alert('信息删除成功！');window.location.href='list.php';</script>";
    }else{
        echo "<script>alert('信息删除失败！');window.location.href='list.php';</script>";
    }

    ?>
</body>
</html>
