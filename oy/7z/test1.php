<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
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
    	<h1>练习</h1>
    	<div class="row">
    		<div class="col-xc-12 col-md-12">
    			<p class="lead">
    				1. 声明一个一维数组和一个二维数组。并对数组进行输出。
    			</p>
    			<p>
    				<?php 
    					$array1=array("孙伟鹏","安东","翟羽佳");
    					$array2=array(
    						"孙伟鹏"=>array(0=>"男",1=>"25岁",2=>"前端"),
    						"安东"=>array("男","27岁","开发"),
    						"翟羽佳"=>array(0=>"男","27岁",2=>"开发")
    						);
    					echo '一维数组：';
    					print_r($array1);
    					echo '<br>二维数组：';
    					print_r($array2);
    				?>
    			</p>
    			<hr>
    			<p class="lead">
    				2. 利用list()函数和each()函数来获取存储在数组中的图书名和作者。
    			</p>
    			<div class="row">
    				<div class="col-xs-6 col-md-6">
    					<table class="table table-bordered table-striped">
	    					<thead>
	    						<tr>
	    							<th>书名</th>
	    							<th>作者</th>
	    						</tr>
	    					</thead>
	    					<tbody>
	    					<?php 
		    					$booklist=array(
		    						// "英雄","九把刀","历史是个什么玩意儿","袁腾飞","萧十一郎","古龙","1Q84","村上春树"
		    						'英雄'=>array("九把刀"),
		    						"历史是个什么玩意儿"=>array("袁腾飞"),
		    						"萧十一郎"=>array("古龙"),
		    						"1Q84"=>array("村上春树")
		    						);
		    						// print_r($booklist);
		    					while (list($bookname,$editer)=each($booklist)) {
		    						while (list($name,$zz)=each($editer)) {		    					
		    				?>
	    						<tr>
	    							<td><?php echo $bookname ?></td>
	    							<td><?php echo $zz ?></td>
	    						</tr>
							<?php 
	    							
	    						}
	    					}
							 ?>
	    					</tbody>
	    				</table>
    				</div>
    				
    			</div>
    			<hr>
    			<p class="lead">
    				3. 用explode()函数以"*"为分隔实现添加多选题功能。
    			</p>
    			<div class="demo clearfix">
    				<div class="col-xs-6 col-md-6">
    					<form action="" method="post" name="form1">
	    				<table class="table table-bordered">
	    					<tr>
	    						<td colspan="3">你最喜欢的食物是？</td>
	    					</tr>
	    					<tr>
	    						<td>以*分隔选项分隔</td>
	    						<td>
	    							<textarea name="content" id="content" cols="25" rows="3"></textarea>
	    						</td>
	    						<td>
	    							<input type="submit" name="submit" class="btn btn-primary" value="提交">
	    						</td>
	    					</tr>
	    				</table>
	    				</form>
	    				
	    				
	    				<form action="test_ok.php" method="post" name="form2">
	    					<p>
		    					<em class="red">提问：</em>你最喜欢的食物是？
		    				</p>
		    				<?php 
		    					$content=$_POST['content'];
		    					$arrayanswer=explode("*", $content);
		    					// for ($i=0; $i <count($arrayanswer) ; $i++) { 	
		    					while ( list($name,$value)=each($arrayanswer)) {
		    						    											
		    				?>
		    				<p><?php echo '<input type="checkbox" name="checkbox" value="'. $value.'">'.($name+1).'.  '.$value ?></p>
		    				<?php } ?>
		    				<p><input type="submit" name="submit" class="btn btn-success"></p>
	    				</form>
	    				<em class="red">提示：</em>这个例子有问题
    				</div>    				
    			</div>
    			<hr>
    			<p class="lead">
    				4. 用srot()函数对数组进行升序排列
    			</p>
    			<p>
    				<?php 
    					$arraynew=array("sumsung","anycall","nokia","androd");
    					sort($arraynew);
    					foreach ($arraynew as $key => $value) {
    						echo "arraynew[".$key."]=".$value."<br>";
    					}
    				?>
    			</p>

    		</div>
    	</div>
    </div>
</body>
</html>