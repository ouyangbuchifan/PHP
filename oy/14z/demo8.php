<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>静态变量(方法)</title>
</head>
<body>
    <?php
        //关键字：静态方法
        //关键字可以是: self或者静态成员所在的类
        //静态方法中只能调用静态变量，不能调用普通变量。而普通方法可以调用静态变量。
        class Book8{    //定义类
            static $num=0;      //定义静态变量
            function showMe(){      //定义一个方法
                echo '你是第'.self::$num.'个阅读这本书的人'.'<br/>';   //输出静态变量
                self::$num++;       //静态变量+1
            }
        }
        $book1=new Book8();
        $book1->showMe();       //使用成员方法
        echo '<br/>';
        $book2=new Book8();
        $book2->showMe();       //使用成员方法。静态变量的值会存储起来以便下次使用。
    ?>
    <br/>
    <hr/>
    <p>如果把static变成private后  </p>
    <?php
        class Book82{
            private $num=0;
            public function showMe(){
                echo '你是第'.$this->num.'个阅读这本杂志的人<br/>';
                $this->num++;
            }
        }
        $book3=new Book82();
        $book3->showMe();
        echo '<br/>';
        $book4=new Book82();
        $book4->showMe();
    ?>
</body>
</html>