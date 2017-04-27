<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>fwrite() file_put_contents() 文件写入</title>
</head>
<body>
    <?php
        $file='demo2/05.txt';
        $str="我就是我，不一样的花朵";
        echo '使用 fwrite() 来写入';
        echo '<br>';
        $fopen=fopen($file,'wb') or die('文件不存在！');
        // 如果存在文件就打开，否则提示不存在。
        fwrite($fopen,$str);
        fclose($fopen);
        readfile($file);
        echo '<hr>';
        echo '使用 file_put_contents()来写入<br/>';
        // 这个方法只支持PHP5以上。
        file_put_contents($fopen,$str);
        readfile($file);
    ?>
</body>
</html>