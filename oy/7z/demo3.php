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

	.demo{border: 1px solid #ccc;background: #eee;border-radius: 10px;padding-top: 10px;}
	.demo .btn-primary{display: block;margin: 0 auto;}
</style>
</head>
<body>
    <div class="container">
    	<h1></h1>
    	<div class="col-sm-12 col-md-12">
    		<h2>array_search() 查询数组中指定元素</h2>
				<p>
					<?php 						
						// array_search(needle, haystack)						
					?>
				</p>
				<div>
					<?php 
						$name="智能机器人*数码相机*天翼3G手机*瑞士手表";
						$price="14988*2588*2666*66698*";
						$count="1*2*3*4";
						$arrayname=explode("*", $name);			// 将商品名称转为数组
						$arrayprice=explode("*", $price);		// 将商品单价转为数组
						$arraycount=explode("*", $count);		// 将商品数量转为数组	
						if ($_POST['submit']==true) {			// 如果点击了按钮
							$id=$_POST['name'];					// 获取要更改的元素名称
							$num=$_POST['count'];				// 获取要更改的值
							$key=array_search($id, $arrayname);	     // 在数组中搜索给定的值，如果成功返回键名
                            $arraycount[$key]=$num;               // 更改产品数量  
                            $count=implode("@",$arraycount);        // 将更改后的产品数量添加到购物车中
						}
					?>
					<table class="table table-bordered table-striped">
					    <thead>
					        <tr>
					            <th>产品名称</th>
					            <th>价格</th>
					            <th>数量</th>
					            <th>总额</th>
					        </tr>
					    </thead>
					    <tbody>
                            <?php
                                for ($i=0; $i <count($arrayname) ; $i++) {                              	                              
                            ?>
					        <tr>
					            <td><?php echo $arrayname[$i]; ?></td>
					            <td><?php echo $arrayprice[$i]; ?></td>
					            <td>
					            	<form action="" method="post">
						            	<input type="text" name="count" id="count" value="<?php echo $arraycount[$i]; ?>">
						            	<input type="hidden" id="name" name="name" value="<?php echo $arrayname[$i] ?>"  >
						            	<input type="submit" name="submit" value="提交">
					            	</form>
					            </td>
					            <td><?php echo $arraycount[$i]*$arrayprice[$i] ?></td>
					        </tr>
					        <?php 
					          }
					        ?>
					    </tbody>
					</table>
				</div>
    	        <script>
                    
                </script>

    	</div>
    </div>
</body>
</html>