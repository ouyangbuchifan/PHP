<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mysql_fetch_array()</title>
    <link href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1>
                mysql_fetch_array() 从结果集中获取信息
            </h1>
            <hr>
            <form action="" name="myform" class="form form-horizontal" method="post">
                <div class="form-group c">
                    <label class="control-label col-xs-2">输入图书名称：</label>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" name="txt_book" id="txt_book">
                    </div>
                    <div class="col-xs-2">
                        <input type="submit" name="Submit" value="提交" class="btn btn-primary">
                    </div>
                </div>
                <?php
                    $link=mysqli_connect('localhost','root','123456') or die("error").mysql_error();
                    $db_selected=mysqli_select_db($link,'db_study');
                    mysql_query('set names utf8');  // 将数据库编码格式设置为utf8类型，屏蔽乱码

                    $sql=mysql_query("select * from tb_book");  // 执行查询语句
                    $info=mysql_fetch_array($sql);      // 获取查询结果，返回值为数组

                    if($_POST[Submit]=='提交'){       // 如果按钮为查询
                        $txt_book=$_POST[txt_book];     // 获取文本框提交的值
                        $sql=mysql_query("select * from tb_book where bookname like '%".trim($txt_book)."%'");
                        // 执行模糊查询，使用了通配符% 表示零个或任意多个字符。
                        $info=mysql_fetch_array($sql);      // 获取查询结果。
                    }

                    if($info==false){   // 如果检索信息不存在，则输出提示
                        echo '<p class="lead">对不起，你查找的书不存在</p>';
                    }
                ?>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>编号</th>
                        <th>图书名称</th>
                        <th>出版时间</th>
                        <th>图书定价</th>
                        <th>作者</th>
                        <th>出版社</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        do{
                    ?>
                    <tr>
                        <td><?php echo $info[id];?></td>
                        <td><?php echo $info[bookname];?></td>
                        <td><?php echo $info[booktime];?></td>
                        <td><?php echo $info[bookprice];?></td>
                        <td><?php echo $info[auther];?></td>
                        <td><?php echo $info[press];?></td>
                    </tr>
                    <?php
                        }while( $info=mysql_fetch_array($sql) );
                    ?>
                    </tbody>
                </table>


            </form>
        </div>
    </div>

</div>


</body>
</html>