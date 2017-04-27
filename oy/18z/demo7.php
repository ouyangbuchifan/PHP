<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mysql_num_rows()</title>
    <link href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1> mysql_fetch_row()逐行获取结果集中的每条记录 </h1>
            <hr>
            <form action="" name="myform" class="form form-horizontal" method="post">
                <div class="form-group">
                    <label class="control-label col-sm-1">书名：</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="txt_book">
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary" type="submit" name="submit" value="确定">确定</button>
                    </div>
                </div>
            </form>
            <?php
                $link=mysql_connect('localhost','root','123456') or die ('数据库连接出错！');
                $sel=mysql_select_db('db_study',$link) or die('数据库连接出错！');
                mysql_query('set names utf8');
                // 如果没有搜索内容，那就默认全部查找出来
                $sql=mysql_query('select * from tb_book');
                $info=mysql_fetch_row($sql);
                if($_POST[submit]=='确定'){
                    $txt_book=$_POST[txt_book];
                    $sql=mysql_query('select * from tb_book where bookname like "%'.trim($txt_book).'%"');
                    $info=mysql_fetch_row($sql);
                }
            ?>
            <table class="table table-hover table-striped">
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
                        if( !$info ){
                            echo '不好意思，你所要找的书目我们没有';
                        }
                        do{
                    ?>
                    <tr>
                        <td><?php echo $info[0]?></td>
                        <td><?php echo $info[1]?></td>
                        <td><?php echo $info[2]?></td>
                        <td><?php echo $info[3]?></td>
                        <td><?php echo $info[4]?></td>
                        <td><?php echo $info[5]?></td>
                    </tr>
                    <?php
                        }while( $info=mysql_fetch_row($sql) );
                    ?>
                    <tr>
                        <td colspan="6"><?php $nums=mysql_num_rows($sql);echo $nums;?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>