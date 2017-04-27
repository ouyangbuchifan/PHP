<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>in notin</title>
    <meta name="keywords" content="医院，宁夏医院，工人疗养院">
</head>
<body>
    <h2>in notin between 判断</h2>
    <!--<?php if(in_array(($num), explode(',',"1,2,3"))): ?>1在这个区间<?php else: ?>不在这里<?php endif; ?>-->
    <!--<br/>-->
    <!--<?php if(!in_array(($num), explode(',',"1,2,3"))): ?>不在这个区间<?php endif; ?>-->
    <!--<br/>-->
    <!--between 这里有问题-->
    <?php $_RANGE_VAR_=explode(',',"1,10");if($num>= $_RANGE_VAR_[0] && $num<= $_RANGE_VAR_[1]):?>在这里<?php else: ?>不在这里<?php endif; ?>
    <!--<?php $_RANGE_VAR_=explode(',',"1,100");if($num<$_RANGE_VAR_[0] || $num>$_RANGE_VAR_[1]):?>确实不在这里<?php endif; ?>-->
    <br/>
    <?php echo ((isset($user["name"]) && ($user["name"] !== ""))?($user["name"]):'没有默认名字'); ?>

    <hr/>
    <br/>
    <h2>三元运算符</h2>
    <?php echo ($num>11?'大于11':'不大于11'); ?>
    <br/>

    <?php echo ((isset($name) && ($name !== ""))?($name):"那个男人，他的名字不能被说出来"); ?>
    <br/>


    <!--在模板里使用原生PHP代码-->
    <?php echo '这是原生PHP代码的输出，输出一个变量'.$num ?>
</body>
</html>