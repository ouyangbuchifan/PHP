
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
                <h2 class="lead">留言列表</h2>
                <div class="row">
                    <div class="col-sm-4 pull-left">
                        <form name="form1" action="" class="form-inline" method="post" role="form">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">查找条件</div>
                                    <input type="text" class="form-control" name="txt">                          
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="submit" value="确定">确定</button>
                            </div>
                        </form>                    
                    </div>
                    <div class="col-sm-1 pull-right">
                        <a href="add.php" class="btn btn-primary btn-sm">添加</a>                  
                    </div>                  
                </div>
                <hr class="clearfix">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>标题</th>
                            <th>内容</th>
                            <th>添加时间</th>
                            <th>编辑</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $link=mysql_connect('localhost','root','123456');
                            mysql_select_db('db_study',$link);
                            mysql_query('set names utf8');
                            $txt=$_POST[txt];
                            $sql=mysql_query('select * from tb_aff');
                            $info=mysql_fetch_array($sql);
                            if( $_POST[submit]=='确定' ){
                                $sql=mysql_query('select * from tb_aff where txt_title like "%'.trim($txt).'%" or txt_content like "%'.trim($txt).'%"');
                                $info=mysql_fetch_array($sql);
                            }
                            do{
                        ?>
                        <tr>
                            <td><?php echo $info[txt_title]?></td>
                            <td><?php echo $info[txt_content]?></td>
                            <td><?php echo $info[creatime]?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $info[id]?>">编辑</a> |
                                <a href="del.php?id=<?php echo $info[id]?>">删除</a>
                            </td>
                        </tr>
                        <?php
                            }while( $info=mysql_fetch_array($sql) );
                        ?>
                        <tr>
                            <td colspan="4">信息数：<?php $nums=mysql_num_rows($sql); echo $nums ?>条</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

</body>
</html>


