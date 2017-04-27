<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mysql_query()函数执行sql语句</title>
</head>
<body>
    <?php
    $link=mysql_connect('localhost','root','123456') or die('error').mysql_error();
    $db_selected=mysql_select_db('db_study',$link);

    // insert
    $result=mysql_query('insert into db_stu1 value("3","ouyang") ',$link);
    // update
    $result=mysql_query('update db_stu1 set name="ouyang" where id="1" ',$link);
    // del
    $result=mysql_query('delete from db_stu1 where id="1" ',$link);
    // select
    $result=mysql_query('select * from db_stu1',$link);
    // 显示表结构
    $result=mysql_query('DESC db_stu1',$link);
    ?>
</body>
</html>

