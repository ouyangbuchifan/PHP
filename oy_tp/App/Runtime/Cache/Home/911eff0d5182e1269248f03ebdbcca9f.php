<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>内置标签</title>
    <meta name="keywords" content="[keywords]">
</head>
<body>
        <!--volist-->
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>:<?php echo ($vo["name"]); endforeach; endif; else: echo "" ;endif; ?>

        <!--foreach-->
        <//foreach name="list" id="vo">
            <?php echo ($key); echo ($vo); ?>
        <///foreach>

        <!--for-->
        <?php $__FOR_START_27386__=1;$__FOR_END_27386__=10;for($i=$__FOR_START_27386__;$i < $__FOR_END_27386__;$i+=1){ echo ($i); ?><br/><?php } ?>

        <!--switch-->
        <?php switch($name): case "小张": case "小黄": ?>我是小张的兄弟<?php break;?>
            <?php case "小明": ?>没错，我就是小明<?php break;?>
            <?php default: ?>我谁都不是<?php endswitch;?>

</body>
</html>