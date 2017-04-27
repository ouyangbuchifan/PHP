<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>上传</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <span>请选择上传的文件</span>
        <span>
            <input type="file" name="upfile" id=""/>
        </span>
        <span>
            <input type="submit" value="提交"/>
        </span>
    </form>

    <?php
    if(!empty($_FILES)){
        foreach($_FILES['upfile'] as $name => $value)
            echo $name.' = '.$value.'<br>';
    }
    ?>
</body>
</html>