<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>回顾</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<script type="text/javascript">
	
</script>
</head>
<body>
    <?php
        $myarray=array('a','s','d','f');
        $myint=456981654;
        if( is_array($myarray) ){
            echo '是一个数组</br>';
        }
        if(is_int($myint)){
            echo '$myint 是一个整型</br>';
        }

        define('mycont','你只能看到一次');
        echo mycont.'<br/>';
        define('mycont2','这是个常量,不过不区分大小写',true);
        echo MYCONT2.'<br/>';
        
        
    ?>
    <hr>
    <?php
        echo '这个系统版本是'.PHP_OS.'<br/>';
        echo '这个程序版本是'.PHP_VERSION.'<br/>';
        echo '文件名字是:'.__FILE__.'<br/>';
        echo '当前行号是:'.__LINE__.'<br/>';

    ?>
    <hr>
    <?php
    //        变量
        $my1='我是孙伟鹏';
        $my2='她是王悦';
        $my1=$my2;          // 已经将$my2的值赋给了$my1  $my2的值再发生改变,不会影响到$my1
        $my2='她是沈佳琦';
        echo $my1.'<br/>';

    //  引用赋值
        $my3='今天是19号';
        $my4=& $my3;
        $my3='晚上吃面包';
        echo $my4;
        echo '<br/>'.$my3;
    
    // 静态变量
        function demo(){
            static $text=0;     // 静态变量的值,只在定义的时候进行初始化,之后不再做
            $text+=1;
            echo $text;
        }
        for($i=0; $i<10; $i++){
            demo();
        }
    ?>
    <hr>
    <?php
        // 函数内引用 全局变量
        $note='检察员';
        function demo2(){
            global $note;
            echo $note;
        }
        demo2();
    ?>
    <hr>    
    <?php
        // 可变变量 动态改变变量的值.
        $my1='my2123';
        $my2123=456;
        $my3=789;
        echo $my1;
        echo $$my1;
    ?>
    <br>
    <hr>
    <?php
        $t1=123;
        $t2=456;
        echo $t1.$t2.'<br/>';
        echo ($t1+$t2);
    ?>
    <br>
    <hr>
    <?php
        $num=rand(1,31);
        if($num%2==0){
            echo $num.'是整数';
        }else{
            echo $num;
        }
    ?>
    <br>
    <hr>
    <div>
       <?php
            $num="10以内的偶数是：";
            $str=0;
            while($str<10){
                if($str%2==0){
                    $num.=$str.' ';
                }
                $str++;
            }
            echo $num;
        ?>
        <hr>
        <?php
//           $myarray=[ [1,2,3],[2,3,4],['我','你','他'] ];
//            for($i=0;$i<count($myarray);$i++){
//                $demo=$myarray[$i];
//                for($j=0;$j<count($demo);$j++){
//                    echo $demo[$j];
//                }
//            }
        ?>
    </div>
    <br>
    <hr>
    <div>
        <?php
          $arr=array('1：'=>array('王悦','女'),'2:'=>array('孙伟鹏','男'));
          foreach($arr as $b =>$value){
              echo $b.'=>';
              foreach($value as $c){
                  echo $c;
              }
          }
        ?>
    </div>
    <br>
    <hr>
    <div>
        <h4>trim() 去两边的空格</h4>
        <?php
            $mystr='\t\r 这是一个好天气 @@@:    ';
            echo trim($mystr);
            echo '<br/>';
            echo trim($mystr,'\t\r @@@: ');
        ?>
        <hr>
        <h4>addcslashes  stripslashes  添加删除斜线</h4>
        <?php
            $mystr3="我要'好好学习，天天向上'" ;
            $a= addslashes($mystr3);
            echo $a.'<br/>';
            $b=stripslashes($a);
            echo $b;
        ?>
        <hr>
        <h4>获取字符串长度 strlen()</h4>
        <?php
            $mystr="http://www.baiu.com";
            echo '字符串长度是'.strlen($mystr);
        ?>
        <hr>
        <h4>截取字符串 substr()</h4>
        <?php
            $mystr="哞哞是头坏牛";
            echo substr($mystr,0);
            echo '<br/>';
            echo substr($mystr,6,14); 
            echo '<br/>';
            echo substr($mystr,-9,9);
            echo '<br/>';
            echo substr($mystr,12,6);
        ?>
        <hr>
        <h4>检查两个字符串是否相等  strcmp()</h4>
        <?php
            $str="我就是这么屌";
            $str2="我就是这么屌";
            $str3="mrsoft";
            $str4="MRSOFT";
            echo strcmp($str,$str2).'<br/>';
            echo strcmp($str4,$str3).'<br/>';
            echo strcasecmp($str3,$str4);
        ?>
        <hr>
        <h4>substr_count  字符串出现的次数</h4>
        <?php
            $mystr="哞哞是个坏牛，坏哞哞";
            echo '哞 出现的次数：'.substr_count($mystr,'哞');
        ?>
        <hr>
        <h4>str_ireplace  字符串替换</h4>
        <?php
            $mystr="某某公司是一家计算机软件技术为核心的高科技企业，多年来始终至于于行业管理软件开发，数字化出版物制作，某某计算机领域综合应用以及行业电子商务网站开发领域。";
            echo str_ireplace('某某','**',$mystr);
        ?>
        <hr>
        <h4>substr_replace 字符串替换，</h4>
        <?php
            $mystr1="我是孙伟鹏，";
            $mystr2="王悦";
            echo substr_replace($mystr1,'王悦',9);
        ?>
        <hr>
        <h4>number_format 字符串格式化</h4>
        <?php
            $mynum=12654651.56819815;
            echo '原内容：  '.$mynum.'<br/>';
            echo '四舍五入后：'.number_format($mynum).'<br/>';
            echo '保留两位小数:'.number_format($mynum,2).'<br/>';
            echo '以-分隔：'.number_format($mynum,2,".","-").'<br/>';
        
        ?>
        <hr>
        <h4>implode  explode  字符串的合并与分隔</h4>
        <?php
            $mystr="大海啊你全是水啊骏马啊你四条腿啊";
            $mystr2=explode('啊',$mystr);
            print_r( $mystr2 );
            echo '<br/>合并后：'.implode('啊',$mystr2);
        ?>
    </div>
    <br>
    <hr>
    <div>
        <p>test</p>
        <?php
            $mystr="&& 明日编程词典 &&";
            echo trim($mystr,'&&  &&').'<br/>';
        ?>
        <?php
            $mystr="142631546815971531";
            if(strlen($mystr)<>18||strlen($mystr)<>15){
                echo '长度正确';
            }else{
                echo '请输入正确的长度，18位或者15位身份证号';
            }
        ?>
        <br>
        <?php
            
        ?>
    </div>

    <script type='text/javascript' src='http://ajax.useso.com/ajax/libs/jquery/1.7.2/jquery.min.js?ver=3.4.2'></script>
   
</body>
</html>