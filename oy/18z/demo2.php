<?php
    $link=mysqli_connect('localhost','root','123456')or die('服务器连接失败').mysql_error();   // connect mysql
    $db_selected=mysqli_select_db($link,'db_study'); // 选择数据库
    if($db_selected){
        echo '数据表选择成功！';
    }else{
        echo '出错'.mysql_error();
    }

?>