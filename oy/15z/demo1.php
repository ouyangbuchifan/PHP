<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>加密函数</title>
</head>
<body>
    <h3>crypt()函数</h3>
    <?php
        $str='我是孙伟鹏';
        $newstr=crypt($str);
        echo '原来的数据是：'.$str.'<br/>';
        echo '加密之后的数据是：'.$newstr;
    ?>
    <hr/>
    <h3>md5()函数</h3>
    <?php
        echo '源字符串是：我是孙伟鹏<br/>';
        echo md5('我是孙伟鹏').'<br/>';
        echo sha1('我是孙伟鹏');
    ?>
</body>
</html>