<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>目录高级操作</title>
</head>
<body>
    <?php
        $path='demo2/07.txt';
        $total=filesize($path);
        if(is_file($path)){
            echo '文件的总字符数是：'.$total.'<br/>';
            $fopen=fopen($path,'rb');   //      读写模式
            echo '初始指针位置是：'.ftell($fopen).'<br/>';
            fseek($fopen,45);
            echo '使用fseek()之后的指针位置是:'.ftell($fopen).'<br/>';
            echo '输出当前指针之后的内容：'.fgets($fopen).'<br/>';
            if(feof($fopen)){
                echo '当前指针位于文档末尾'.ftell($fopen).'<br/>';
            }
            rewind($fopen);
            echo '使用rewind函数之后的指针位置是'.ftell($fopen).'<br/>';
            echo '输出前34字节的内容'.fgets($fopen,34).'<br/>';
            fclose($fopen);
        }else{
            echo '文件不存在';
        }
    ?>
    <br/>
    <hr/>
    <h4>锁定文件</h4>
    <?php
        $path='demo2/08.txt';
        if(is_file($path)){
            $fopen=fopen($path,'w');
            flock($fopen,LOCK_EX);
            fwrite($fopen,'这是欧阳写入的数据');
            flock($fopen,LOCK_UN);     //解除锁定
            fclose($fopen);             //关闭
            readfile($path);           //读取内容
        }

    ?>
</body>
</html>