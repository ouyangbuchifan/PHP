<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                    $link=mysql_connect('localhost','root','123456') or die('数据库连接出错！'.mysql_error());
                    mysql_select_db('db_study',$link) or die('选择错！'.mysql_error());
                    mysql_query('set names utf8');
                    $aid=$_GET[id];
                    $sql=mysql_query("select * from tb_aff where id=$aid");
//                    $info=mysql_fetch_array($sql);
                    $info=mysql_fetch_object($sql);
                ?>
                <h2 class="lead">留言列表</h2>
                <a href="list.php" class="btn btn-primary">返回</a>
                <form name="form1" action="edit_check.php" class="form" method="post">
                    <div class="form-group">
                        <label>标题</label>
                        <input type="text" name="txt_title" id="txt_title" class="form-control" value="<?php echo $info->txt_title?>">                                       <input type="hidden" name="id" value="<?php echo $info->id?>">
                    </div>
                    <div class="form-group">
                        <label>内容</label>
                        <textarea name="txt_content" id="txt_content" cols="30" rows="5" class="form-control"><?php echo $info->txt_content?></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" name="submit" id="Submit" type="submit" onlick="return check(form1)">确 定</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
function check(form){
    var txt_title=document.getElementById('txt_title');
    var txt_content=document.getElementById('txt_content');
    if( txt_title.value=='' ){
        alert('标题不能为空！');
        txt_title.focus();
    };
    if( txt_content.value=='' ){
        alert('内容不能为空！');
        txt_content.focus();
    };
    else{
        form.submit();
    }
}
</script>
</body>
</html>