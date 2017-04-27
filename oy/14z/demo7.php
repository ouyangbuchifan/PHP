<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>数据隐藏 public private protected</title>
</head>
<body>
    <?php
        //private     私有变量
        //只能在本类中使用其方法和变量。子类中也不能用
        class Book7{
            private $name='computer';
            public function setName($name){
                $this->name=$name;
            }
            public function getName(){
                return $this->name;
            }
        }
        class m_book extends Book7{
        }
        echo '正确操作私有变量的方法';
        $i_book=new Book7();
        $i_book->setName('PHP进阶');
        echo $i_book->getName();
        echo '  直接操作私有变量的结果：';
        //$i_book::$name;         //这样会报错。$name是私有变量
    ?>
    <hr/>
    <?php
        //protected    保护成员
        //只能在本类和子类中使用
        class Book72{
            protected $name='computer games';
        }
        class my_book72 extends Book72{
            public  function showMe(){
                echo '对于protected修饰的变量，在子类中是可以使用的，例如 $name='.$this->name;
                // $this不能替换为Book72,因为$this代表实例化之后的类
            }
        }
        $book=new my_book72();
        $book->showMe();
        echo '<br/>但在其他地方使用父类中的变量是不可以的';
        //$book->name='新的内容';     //这样是错的。
    ?>
</body>
</html>