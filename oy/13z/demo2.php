<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>读写文件-文件系统</title>
    <link id="data-uikit-theme" rel="stylesheet" href="http://www.getuikit.net/docs/css/uikit.docs.min.css">
    <style>
        .uk-grid [class^='uk-width']{border: 1px solid #ccc;padding: 15px 10px;}
        .demo-table{margin-top: 30px;border-collapse: collapse}
        .demo-table tr>td{
            border: 1px solid #ccc;}
    </style>

</head>
<body>
<div class="uk-container uk-container-center">
    <div class="uk-grid demo-table">
        <div class="uk-width-2-5">
            使用readfile()函数读取文件内容
        </div>
        <div class="uk-width-2-5">
            <?php
            readfile('txt/txt1.txt');
            ?>
        </div>
    </div>
    <div class="uk-grid">
        <div class="uk-width-2-5">
            使用file()函数读取文件内容
        </div>
        <div class="uk-width-2-5">
            <?php
            $f_fal=file('txt/txt1.txt');
            // file() 函数获取到的是一个数组
            foreach($f_fal as $ele){
                echo $ele.'<br/>';
            }
            ?>
        </div>
    </div>
    <div class="uk-grid">
        <div class="uk-width-2-5">
            使用 file_get_contents()函数获取文件内容
        </div>
        <div class="uk-width-2-5">
            <?php
            $f_chr=file_get_contents('txt/txt1.txt');
            // 可以获取文件内容，如果有参数，第一个开始，第二个为长度。
            echo $f_chr;
            ?>
        </div>
    </div>
    <hr/>
    <table class="uk-table demo-table">
        <tr>
            <td>
                使用readfile()函数读取文件内容
            </td>
            <td>
                <?php
                echo readfile('txt/txt1.txt');
                ?>
            </td>
        </tr>
        <tr>
            <td>
                使用file()函数读取文件内容
            </td>
            <td>
                <?php
                $t_arr=file('txt/txt1.txt');
                foreach($t_arr as $ele){
                    echo $ele.'<br/>';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                使用 file_get_contents()函数获取文件内容
            </td>
            <td>
                <?php
                $t_txt=file_get_contents('txt/txt1.txt');
                echo $t_txt;
                ?>
            </td>
        </tr>
    </table>
    <hr/>
    <table class="uk-table">
        <tr>
            <td>使用fgets函数：</td>
            <td>
                <?php
	                $fopen=fopen('demo2/fun.php','rb');
	                while(!feof($fopen)){       //feof() 测试指针是否到了文件结束的位置
	                    echo fgets($fopen);
	                }
	                fclose($fopen);
                ?>
            </td>
        </tr>
        <tr>
            <td>
                使用 fgetss() 函数
            </td>
            <td>
                <?php 
                	$fopen=fopen('demo2/fun.php', 'r');
                	while (!feof($fopen)) {
                		echo fgetss($fopen);
                	}
                	fclose($fopen);
                ?>
            </td>
        </tr>
    </table>
</div>
</body>
</html>