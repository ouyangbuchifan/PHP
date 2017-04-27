<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>类常量</title>
</head>
<body>
    <?php
        class SportObject3{                   //  注意：未特殊定义时所有的class是通用的。所以不要起同名
            const BOOK_TYPE='计算机图书';     //   声明常量BOOK_TYPE;
            public $object_name;    //   声明变量，存放商品名称
            function setObjectName($name){
                $this->object_name=$name;
            }
            function getObjectName(){
                return $this->object_name;
            }
        }

        $c_book=new SportObject3();
        $c_book->setObjectName('PHP图书');      //  调用方法setObjectName(),
        echo SportObject3::BOOK_TYPE.'->';      //  输出常量的值，常量不用实例化
        echo $c_book->getObjectName();          //  输出变量。
    ?>
</body>
</html>