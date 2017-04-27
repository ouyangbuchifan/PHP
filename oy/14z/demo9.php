<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP对象的高级应用</title>
</head>
<body>
    <h3> final 关键字</h3>
    <?php
        //final  为'最终的版本'。如果为类，说明该类不可以被继承，不能有子类。
        //如果为方法，说明该方法在子类中不能被重写，也不能覆盖。
        final class Book9{
            function __construct(){
                echo 'final Object';
            }
        }
//        class my_Book9 extends Book9{
//            static function exam(){
//                echo 'You can not see me!';
//            }
//        }
//        my_Book9::exam();       //因为父类是final的。所以子类无法继承。不能有子类。报错
    ?>
    <hr/>
    <h3>抽象类</h3>
    <?php
        //抽象类
        //不能被实例化，只能当作其他类的父类。至少包含一个抽象方法。
        //抽象方法后面要有分号;
        abstract class CommondityObject{
            abstract function service($name,$price,$num);
        }
        class MyBook extends CommondityObject{
            function service($name,$price,$num){
                echo '你购买的商品是:'.$name.'该商品的价格是'.$price.'元。';
                echo '购买的数量是：'.$num.'本。';
                echo '如发现缺页，损坏请在3日内更换。';
            }
        }
        class MyComputer extends CommondityObject{
            function service($name,$price,$num){
                echo '你购买的商品是:'.$name.'该商品的价格是'.$price.'元';
                echo '购买的数量是:'.$num.'台';
                echo '如果发生非人文损坏，请在3个月内更换。';
            }
        }

        $book=new MyBook();
        $computer=new MyComputer();
        $book->service('小说',80,3);
        echo '<br/>';
        $computer->service('linux服务器',5200,4);
    ?>
    <hr/>
    <h3>接口的使用</h3>
    <?php
        //继承只支持单继承。如果想实现多重继承，就使用接口。PHP可以实现多个接口。
        //接口类通过interface关键字来声明。对于方法，不写关键字也可以，这是一个接口类自身属性决定的。

        //声明Mpopedom接口
        interface Mpopedom{
            function popedom();
        }
        //声明Mpurview接口
        interface Mpurview{
            function purview();
        }
        //创建子类Member,实现一个接口Mpurview
        class Member implements Mpurview{
            function purview(){
                echo '会员拥有的权限';
            }
        }
        //创建子类Manager,实现多个接口Mpurview Mpopedom
        class Manager implements Mpopedom,Mpurview{
            function  popedom(){
                echo '管理员拥有会员的权限,';
            }
            function  purview(){
                echo '管理员拥有会员所没有的权限，';
            }
        }
        $member=new member();   //类member实例化
        $manager=new Manager();     //类manager实例化
        $member->purview();     //调用member类的purview方法
        echo '<br/>';
        $manager->purview();
        $manager->popedom();

    ?>
</body>
</html>