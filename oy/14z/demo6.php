<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$this->  :: </title>
</head>
<body>
    <h3>$this-></h3>
    <?php
        //类被实例化后，$this也变为实例化后的对象。只能在类的内部使用
        class example{          //定义类
            function exam(){    //定义成员方法
                if(isset($this)){   //判断变量$this是否存在
                    echo '$this的值为:'.get_class($this);  //如果$this存在，输出$this所在的类
                }else{
                    echo '$this未定义';
                }
            }
        }
        $class_name=new example();
        $class_name->exam();
    ?>
    <br/>
    <hr/>
    <br/>
    <h3>::</h3>
    <?php
        //相对于$this只能在类里使用， ::可以在没有声明任何实例的情况下访问类里的方法或者变量

        class Book{
            const Name='电脑';
            function __construct(){     //定义构造方法
                echo '本月的图书冠军是：'.Book::Name.' ';    //输出默认值
            }
        }
        class I_book extends Book{
            const Name='小说';
            function __construct(){     //定义构造方法
                parent::__construct();  //调用父类的成员方法
                echo '本月的图书冠军是：'.self::Name.' '; //输出本类中的默认值
            }
        }
        $obj=new I_book();          //实例化对象

    ?>

</body>
</html>