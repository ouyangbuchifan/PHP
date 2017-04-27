<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>条件控制语句</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	h1{text-align: center;}
	.red{color: #f00}
</style>
</head>
<body>
    <div class="container">
    	<h1>条件控制语句</h1>
    	<div class="row">
    		<h2>if语句</h2>
    		<div class="col-sm-12 col-md-12">
    			<p class="lead">
    				本例先用rand()函数生成一个随机数$num,然后判断这个数是否偶数，如果是，输出结果。
    			</p>
    			<p>
    				<em class="red">示例：</em><br>
    				<?php 
    					$num=rand(1,31);
    					if ($num%2==0) {
    						echo("$num=".$num.'<br>$num是偶数');
    					}
    				?>
    			</p>
    			<p>
    				<em class="red">提示：</em> rand()函数取得一个随机数。格式：int rand(int mix,int max)
    				如果没有，返回0~rand_max之间随机整数
    			</p>
    		</div>		
    	</div>		<!-- end if语句 -->
    	<div class="row">
    		<h2>if...else 语句</h2>
    		<div class="col-sm-12 col-md-12">
    			<?php 
					$num2 = rand(1,31);
                    echo("$num2".'<br>');
                    if($num2%2==0){
                        echo("\$num2是偶数");
                    }
                    else {
                        echo("\$num2是奇数");
                    }

				?>
    		</div>
    	</div>		<!-- end if...else语句 -->
        <div class="row">
            <h2>elseif语句</h2>
            <div class="col-sm-12 col-md-12">
                <?php 
                    $month=date("n");
                    $today=date("j");
                    if ($today>=1 and $today<=10) {
                        echo('今天是'.$month.'月'.$today."日上旬");
                    }
                    elseif($today>=10 and $today<=20){
                        echo('今天是'.$month.'月'.$today."日中旬");
                    }else{
                        echo('今天是'.$month.'月'.$today."日下旬");
                    }
                ?>
            </div>
        </div>  <!-- end elseif语句 -->
        <div class="row">
            <h2>switch...case 多重判断语句</h2>
            <div class="col-sm-12 col-md-12">
                <p>
                    一个网站头，尾是固定的内容，导航也是固定内容。主内容区域根据链接传值不同，显示不同内容。
                </p>
                <em class="red">示例：</em><br>
                <?php 
                    switch ($_GET[imbs]) {          // 获取超链接传递的变量
                        case "最新商品":
                            include "new.php";
                            break;
                        case "推荐商品":
                            include "commend.php";
                            break;
                        case "热门商品":
                            include "jollification.php";
                            break;
                        case "订单查询":
                            include "order_form.php";
                            break;
                        default:
                            include "new.php";
                            break;
                    }
                ?>
                <ul>
                    <li><a href="index.php?imbs=<?php echo urldecode(最新商品)?>">最新商品</a></li>
                    <li><a href="index.php?imbs=<?php echo urldecode(推荐商品)?>">推荐商品</a></li>
                    <li><a href="index.php?imbs=<?php echo urldecode(热门商品)?>">热门商品</a></li>
                    <li><a href="index.php?imbs=<?php echo urldecode(订单查询)?>">订单查询</a></li>
                    
                </ul>
            </div>
        </div>


    </div>
</body>
</html>