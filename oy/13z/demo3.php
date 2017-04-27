<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>fgetc() fread()</title>
    <link id="data-uikit-theme" rel="stylesheet" href="http://www.getuikit.net/docs/css/uikit.docs.min.css">
    <style>
        .uk-grid [class^='uk-width']{border: 1px solid #ccc;padding: 15px 10px;}
        .demo-table{margin-top: 30px;border-collapse: collapse}
        .demo-table tr>td{
            border: 1px solid #ccc;}
    </style>
</head>
<body>
<h2>fgetc()函数</h2>
<p>
    返回一个字符，从文件中得到。如果到结尾则返回FALSE
</p>
<?php
    $fopen = fopen('demo2/demo3.txt','rb');
    while( false!==$chr=fgetc($fopen) ){
        echo $chr;
    }
    fclose($fopen);
?>
<hr/>
<br/>
<?php
    $file='demo2/04.txt';
    $fopen=fopen($file,'rb');
    echo fread($fopen,32);
    echo '<br/>';
    echo fread($fopen,filesize($file));
?>

</body>
</html>