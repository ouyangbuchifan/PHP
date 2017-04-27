
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

                            if($_GET[page]==""){
                                $_GET[page]=1;
                            }
                            if(is_numeric($_GET[page])) {
                                $page_size = 4;
                                $query = "select count(*) as total from tb_aff order by id desc";
                                $result = mysql_query($query);                        //查询符合条件的记录总条数
                                $message_count = mysql_result($result, 0, "total");        //要显示的总记录数
                                echo 'result的结果是：'.mysql_result($result,0);     // 输出一下条数
                                $page_count = ceil($message_count / $page_size);        //根据记录总数除以每页显示的记录数求出所分的页数
                                $offset = ($_GET[page] - 1) * $page_size;                        //计算下一页从第几条数据开始循环
                                $sql = mysql_query("select * from tb_aff order by id desc limit $offset, $page_size");
                                $row = mysql_fetch_array($sql);
                                if (!$row) {
                                    echo "<font color='red'>暂无公告信息!</font>";
                                }
                                do {
                                    ?>
                                    <tr>
                                        <td><?php echo $row[txt_title] ?></td>
                                        <td><?php echo $row[txt_content] ?></td>
                                        <td><?php echo $row[creatime] ?></td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $info[id] ?>">编辑</a> |
                                            <a href="del.php?id=<?php echo $info[id] ?>">删除</a>
                                        </td>
                                    </tr>
                                <?php
                                } while ($row = mysql_fetch_array($sql));
                            }
                        ?>
                        <tr>
                            <td colspan="3">&nbsp;&nbsp;页次：<?php echo $_GET[page];?>/<?php echo $page_count;?>页&nbsp;记录：<?php echo $message_count;?> 条&nbsp; </td>
                            <td>
                                <?php
                                /*  如果当前页不是首页  */
                                if($_GET[page]!=1){
                                    /*  显示“首页”超链接  */
                                    echo  "<a href=list2.php?page=1>首页</a>&nbsp;";
                                    /*  显示“上一页”超链接  */
                                    echo "<a href=list2.php?page=".($_GET[page]-1).">上一页</a>&nbsp;";
                                }
                                /*  如果当前页不是尾页  */
                                if($_GET[page]<$page_count){
                                    /*  显示“下一页”超链接  */
                                    echo "<a href=list2.php?page=".($_GET[page]+1).">下一页</a>&nbsp;";
                                    /*  显示“尾页”超链接  */
                                    echo  "<a href=list2.php?page=".$page_count.">尾页</a>";
                                }
                                mysql_free_result($sql);
                                mysql_close($conn);
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

</body>
</html>


