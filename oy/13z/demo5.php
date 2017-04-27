<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>目录处理</title>
</head>
<body>
    <?php
        $path='F:\root\oy\13z';
        if( is_dir($path) ){    // 判断如果它是一个目录
            if($dire=opendir($path)){   // 如果这个目录能被打开(有权限)
                echo $dire;
            }
        }else{
            echo '路径错误！';
            exit();
        }
        closedir($path);
        echo '<br/>';
        echo '<hr/>';

        //
        $path='F:\root\oy';
        if(is_dir($path)){
            $dir=scandir($path);
            foreach($dir as $ele){
                echo $ele.'<br/>';
            }
        }else{
            echo '路径不合法。';
        }
    ?>
</body>
</html>