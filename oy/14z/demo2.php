<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>成员变量</title>
</head>
<body>
    <?php
        class SportObject2{
            public $name;       // 定义成员变量
            public $height;     //
            public $avoi;       //

            public function bootFootBall($name,$height,$avoi){      // 声明成员方法
                $this->name=$name;      //      将参数赋给变量
                $this->height=$height;  //  this 调用本类中的成员变量或者方法
                $this->avoi=$avoi;
                if($this->height<=180 && $this->avoi<85 ){
                    return $this->name.'符合踢足球要求';
                }else{
                      return $this->name.'不符合足球要求';
                }
            }
        }

        $sport=new SportObject2();
        echo $sport->bootFootBall('孙伟鹏','176','65');
    ?>
</body>
</html>