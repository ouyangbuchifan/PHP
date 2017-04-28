<?php
    // 连接数据库，最好加上 die()
    $link=mysqli_connect('localhost','root','123456')or die('无法连接到数据库，请检查用户名和密码').mysql_error();
    if($link){
        echo '连接成功！';   // 正式程序里不用加这段。
    }
?>