<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>继承 多态</title>
</head>
<body>
    <?php
        //    继承
        class SportObject5{     //父类
            public $name;
            public $age;
            public $avio;
            public $sex;
            public function __construct($name,$age,$avio,$sex){     // 定义构造方法
                $this->name=$name;
                $this->age=$age;
                $this->avio=$avio;
                $this->sex=$sex;
            }
            function showMe(){          //父类中有这个方法，但是子类中重定义覆盖了这个方法，所以它不会被显示。
                echo '这句话不会被显示';
            }
        }
        //子类-篮球
        class BeatBasketBall extends SportObject5{  //定义子类，继承于父类
            public $height;
            function __constructs($name,$height){       //定义构造方法
                $this->name=$name;
                $this->height=$height;
            }
            function showMe(){
                if($this->height>180){
                    return $this->name.'符合打篮球要求';
                }else{
                    return $this->name.'不符合打篮球要求';
                }
            }
        }
        //子类－举重
        class WeightLife extends SportObject5{      //定义子类，继承于父类
            function showMe(){
                if($this->avio<85){
                    return $this->name.'符合举重要求';
                }else{
                    return $this->name.'不符合举重要求！';
                }
            }
        }
        //实例化对象
        $basketball=new BeatBasketBall('江苏','190');
        $weight=new WeightLife('小竣','184','20岁','130','男');
        echo $basketball->showMe().'<br/>';
        echo $weight->showMe().'<br/>';
    ?>
    <br/>
    <hr/>
    <br/>
    <?php
        //多态
        //同一个方法。根据参数多少，调用不同的成员方法。
        class C{
            function __call($name,$num){
                echo '方法名称：'.$name.'<p>';
                echo '参数存在个数'.count($num).'<p>';
                if(count($num)==1){
                    echo $this->list1($a);
                }
                if(count($num)==2){
                    echo $this->list2($a,$b);
                }
            }
            public function list1($a){
                return '这个是list1的函数';
            }
            public function list2($a,$b){
                return '这个是list2的函数';
            }
        }
        $a=new C();
        $a->listhow(1,2);
    ?>
</body>
</html>