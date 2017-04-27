<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>类的实例化</title>
</head>
<body>
    <?php
        class SportObject{      // 声明类
            function beatBasketBall($name,$height,$avoirdupois,$age,$sex){
                // 声明成员方法
                if($height>180 and $avoirdupois<=100){
                    return $name.',符合打篮球的要求！';
                }else{
                    return $name.',不符合打篮球的要求!';
                }
            }
        }
        $sport=new SportObject();
        echo $sport->beatBasketBall('明日','185','80','20周岁','男');
    ?>
</body>
</html>