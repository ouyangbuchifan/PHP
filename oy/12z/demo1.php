<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $im = imagecreate(200,60);                      //创建一个画布
        $white = imagecolorallocate($im, 225,66,159);     //设置画布的背景颜色为浅绿色
        imagegif($im);                               //输出图像

        echo '就是这样！';
    ?>

</body>
</html>
