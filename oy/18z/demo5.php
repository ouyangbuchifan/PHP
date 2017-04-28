<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mysql_fetch_object()</title>
    <link href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>
                    mysql_fetch_object() 函数从结果集中获取一行作为对象
                </h1>
                <hr/>
                <form action="" name="myform" class="form form-horizontal" method="post">
                    <div class="form-group">
                        <label class="col-xs-2 control-label">
                            书名：
                        </label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="txt_book" autocomplete="off" />
                        </div>
                        <div class="col-xs-3">
                            <input class="btn btn-primary" value="确定" type="submit" name="Submit">
                        </div>
                    </div>
                </form>
                <table class="table table-bordered table-striped table-hover">
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
                    $link=mysqli_connect('localhost','root','123456');
                    $select_db=mysqli_select_db($link,'db_study');
                    mysql_query('set names utf8');
                    $sql=mysql_query('select * from tb_book');
                    $info=mysql_fetch_object($sql);     // 获取查询结果，返回值为一个对象。
                    if( $_POST[Submit]=='确定' ){
                        $txt_book=$_POST[txt_book];
                        $sql=mysql_query('select * from tb_book where bookname like"% '.trim($txt_book).'%"' );
                        $info=mysql_fetch_object($sql);
                    }
                    do{
                ?>
                        <tr>
                            <td>
                                <?php echo $info->id ?>
                            </td>
                            <td>
                                <?php echo $info->bookname ?>
                            </td>
                            <td>
                                <?php echo $info->booktime ?>
                            </td>
                            <td>
                                <?php echo $info->bookprice ?>
                            </td>
                            <td>
                                <?php echo $info->auther ?>
                            </td>
                            <td>
                                <?php echo $info->press ?>
                            </td>
                        </tr>
                <?php
                    }
                    while ( $info=mysql_fetch_object($sql) );
                ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</body>
</html>