<?php
    $link=mysql_connect('localhost','root','123456')or die('服务器连接失败').mysql_error();   // connect mysql
    $db_selected=mysql_select_db('db_study',$link); // 选择数据库
    if($db_selected){
        echo '数据表选择成功！';
    }else{
        echo '出错'.mysql_error();
    }

?>