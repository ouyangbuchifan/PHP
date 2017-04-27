<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $link=mysql_connect('localhost','root','123456') or die('数据库连接出错'.mysql_error());
    $sel=mysql_select_db('db_study',$link) or die('选择出错'.mysql_error());
    mysql_query('set names utf8');
    // 更新\
    $title=$_POST[txt_title];
    $content=$_POST[txt_content];
    $id=$_POST[id];
    $sql=mysql_query("update tb_aff set txt_title='$title',txt_content='$content' where id=$id ");
    if($sql){
        echo "<script>alert('信息更新成功！');history.back();window.location.href='list.php';</script>";
    }else{
        echo "<script>alert('信息更新失败！');history.back();window.location.href='edit.php?id=$id';</script>";
    }
    ?>
</body>
</html>
