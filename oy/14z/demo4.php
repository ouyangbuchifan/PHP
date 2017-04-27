<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>构造方法 析构方法</title>
</head>
<body>
    <?php
        // 构造方法     生成自对象时自动执行的成员方法
        // __方法名() 两个下划线
        class SportObject4{
            public $name;       // 定义成员变量
            public $height;
            public $avoi;
            public $age;
            public $sex;
            public function __construct($name,$height,$avoi,$age,$sex){     // 定义构造方法
                $this->name=$name;
                $this->height=$name;
                $this->avoi=$avoi;
                $this->age=$age;
                $this->sex=$sex;
            }
            public  function bootFootBall(){
                if($this->height<185&&$this->avoi<85){
                    return $this->name.',符合足球要求';
                }else{
                    return $this->name.'不符合足球要求';
                }
            }
        }   // end class

        $sport=new SportObject4('王月','180','80','25','女');  // 用了构造方法，所以可以直接赋值。
        echo $sport->bootFootBall();    //
    ?>
    <br/>
    <hr/>
    <h4>析构方法</h4>
    <?php
        // 析构方法
        class SportObject42{
            public $name;       // 定义成员变量
            public $height;
            public $avoi;
            public $age;
            public $sex;
            public function __construct($name,$height,$avoi,$age,$sex){     // 定义构造方法
                $this->name=$name;
                $this->height=$name;
                $this->avoi=$avoi;
                $this->age=$age;
                $this->sex=$sex;
            }
            public  function bootFootBall(){
                if($this->height<185&&$this->avoi<85){
                    return $this->name.',符合足球要求';
                }else{
                    return $this->name.'不符合足球要求';
                }
            }
            function __destruct(){
                echo '<b>对象被销毁，调用析构函数</b>';
            }
        }   // end class

        $sport=new SportObject42('王月','180','80','25','女');  // 用了构造方法，所以可以直接赋值。
        // destruct($sport);
    ?>
</body>
</html>