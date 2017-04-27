<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>上传控件</title>
</head>
<body>
<!--<form action="" enctype="multipart/form-data" method="post">-->
<!--    <span>文件</span>-->
<!--    <span>-->
<!--        <input type="file" name="file" id=""/>-->
<!--    </span>-->
<!--    <span>-->
<!--        <input type="submit" value="提交"/>-->
<!--    </span>-->
<!--</form>-->

<?php
    /**
    if( !empty($_FILES['file']['name']) ){
        //把文件赋给变量
        $fileinfo=$_FILES['file'];
        //判断大小
        if( $fileinfo['size']>0 && $fileinfo['size']<1000000 ){
            //           上传文件
            move_uploaded_file($fileinfo['tmp_name'],$fileinfo['name']);
            echo '上传成功';
        }else{
            echo 'error';
        }
    }
     * **/
?>



<hr/>
<?php
if(!empty($_FILES[up_file][name])){
    $fileinfo = $_FILES[up_file];
    if($fileinfo['size'] < 1000000 && $fileinfo['size'] > 0){
        move_uploaded_file($fileinfo['tmp_name'],$fileinfo['name']);
        echo '上传成功';
    }else{
        echo '文件太大或未知';
    }
}
?>
<table width="385" height="185" border="0" cellpadding="0" cellspacing="0" background="images/bg.JPG">
    <tr>
        <td width="142" height="80">&nbsp;</td>
        <td width="174">&nbsp;</td>
        <td width="69">&nbsp;</td>
    </tr>
    <form action="" method="post" enctype="multipart/form-data" name="form">
        <tr>
            <td height="30">&nbsp;</td>
            <td align="left" valign="middle"><input name="up_file" type="file" size="12" /></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td height="27" align="right">&nbsp;</td>
            <td align="center" valign="top">&nbsp;&nbsp;<input type="image" name="imageField" src="images/fg.bmp"></td>
            <td>&nbsp;</td>
        </tr>
    </form>
    <tr>
        <td height="48">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>