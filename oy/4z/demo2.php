<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>循环控制语句</title>
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
		<h1>循环控制语句</h1>
		<div class="row">
			<h2>while 语句</h2>
			<div class="col-sm-12 col-md-12">
				<?php 
					$num=1;
					$str="10以内的偶数是：";
					while ( $num<= 10) {
						if ($num%2==0) {
							$str.=$num." ";		// $str=$str+$num." " 这样，每次循环之后的值加到前一个。比如10以内的偶数是：2 循环2次后是 2 4
						}
						$num++;
					}
					echo $str;	
				?>
			</div>
		</div>	<!-- end while语句 -->
		<hr>
		<div class="row">
			<h2>do...while 语句</h2>
			<div class="col-sm-12 col-md-12">
				<?php 
					$num2=1;
					while ($num2!=1) {
						echo "不会看到";
						break;
					}
					// do {echo "会看到";}
					// while($num2!=1);
				?>
			</div>
		</div>	<!-- end do...while语句 -->
		<div class="row">
			<h2>for 循环</h2>
			<?php 
				$num3=1;
				for ($i=1; $i <=100 ; $i++) { 			// 别写死循环，火狐真的会让电脑崩溃的。 0_0
					$num3*=$i;
				}
				echo "100的阶乘是".$num3;				
			?>
		</div> <!-- end for循环 -->
		<hr>
		<div class="row">
			<h2>foreach循环</h2>
			<p class="lead">
				PHP4之后能用。  仅用于数组和对象。  foreach语句将遍历数组。
			</p>
			<p>
				<em class="red">示例：</em><br>
				<?php 
					$arr=array(1,2,3,4);
					foreach ($arr as &$value) {
						$value=$value*2;
					}
					print_r($arr);
					unset( $value );		// 最后要取消掉引用
				?>
			</p>
			<p>
				利用foreach语句输出数组中商品信息。<br>
				<em class="red">示例：</em><br>
				<?php 
					$name=array("1"=>"智能机器人","2"=>"数码相机","3"=>"天翼3G手机","4"=>"瑞士手表");
					$price=array("1"=>"14998元","2"=>"2588元","3"=>"2666元","4"=>"66698元");
					$counts=array("1"=>1,"2"=>1,"3"=>2,"4"=>1);
					echo '<table width="580" border="1" cellpaadding="1" cellspacing="1" bordercolor="#ffffff" bgcolor="#c17e50" >
							<tr>
								<td width="145" align="center" >商品名称</td>
								<td width="145" align="center" >价格</td>
								<td width="145" align="center" >数量</td>
								<td width="145" align="center" >金额</td>
							</tr>	
						';
					foreach ($name as $key => $value) {
						echo'
							<tr>
								<td height="25" align="center">'.$value.'</td>
								<td height="25" align="center">'.$price[$key].'</td>
								<td height="25" align="center">'.$counts[$key].'</td>
								<td height="25" align="center">'.$counts[$key]*$price[$key].'</td>
							</tr>		
						';
					}
						echo '</table>';
				?>
			</p>
			<p>
				<em>提示：</em>foreach 用于其他数据类型时会容易出错。所以在遍历之前，可以先用is_array()函数判断一下是否为数组。
			</p>
		</div>	<!-- end foreach循环 -->
		<hr>
		<div class="row">
			<h2>流程控制语句的另一种写法</h2>
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					页面中循环，条件语句太多时。比较乱。可以简写。用 ：来代替左边大括号{, 用endif,endwhile,endfor,endreach,endswitch来代码右边括号}
				</p>
				<p>
					列举1000以内所有的素数<br>
					<em class="red">示例：</em><br>
					<?php 
						$ss=2;
						$max=1000;
						$arr=array();
						echo $max."以内的素数是：";
						while($ss<$max):
							$boo=false;
							foreach ($arr as $value):
								if ($ss%$value==0):
									$boo=true;
									break; 
								endif;
							endforeach;
							if(!$boo):
								echo $ss." ";
								$arr[count($arr)]=$ss;
							endif;
							$ss++;
						endwhile;				
					?>
				</p>
			</div>
		</div>	<!-- end 流程控制语句的另一种写法 -->
		<hr>
		<h2>使用 break/continue 跳出循环</h2>
		<h3> break </h3>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<?php 
					while (true) {
						$num5=rand(1,20);
						echo $num5."<br>";
						if ($num5==10) {
							echo $num5."的值为10，终止循环";
							break;
						}
					}
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					
				</p>
				<?php 
					while (true) {
						for (;;) { 			// 外层的while和for循环都是无限循环。
							for ($i=0; $i <=10 ; $i++) { 
								echo $i." ";
								if ($i==7) {
									echo "变量\$i的值为7，跳出一次循环"."<br>";
									break 1;						// 跳出一次循环，跳出这个for
								}
							}
							for ($j=0; $j <20 ; $j++) { 
								echo $j." ";
								if ($j==15) {
									echo "变量\$j的值为15，跳出最外层循环";
									break 3;					// 跳出3次循环，跳出了while和for的无限循环。所以程序不报错
								}
							}
						}
						echo "上面跳出了3层循环，这句话不会输出";
					}
				?>
			</div>
		</div>
		<h3> continue </h3>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					只跳出本次循环，下一次继续执行。 也可以指定跳出几层循环。
				</p>
				<p>
					<em class="red">示例：</em><br>
					<?php 
						for ($i=0; $i <10 ; $i++) { 
							if ($i==7||$i==5) {
								continue;
							}
							echo $i." ";
						}
					?>
				</p>
				<p>
					用for循环输出A~J的数组变量，如果数组下标为偶数，只输出一个空行。如果是奇数，继续输出。最里层循环中，判断下标是否等于$i.不等则输出变量，否则跳到最外层循环。
					<em class="red">示例：</em><br>
					<?php 
						$arr=array("A","B","C","D","E","F","G","H","I","J");
						for ($i=0; $i <10 ; $i++) { 
							echo "<br>";
							if ($i%2==0) {
								continue;
							}
							for (;;) { 
								for ($j=0; $j <count($arr) ; $j++) { 
									if ($j==$i) {
										continue 3;
									}else{
										echo "\$arr[".$j."]=".$arr[$j]." ";
									}
								}
							}
							echo "这句话永远不会输出的！哈哈哈";
						}
					?>
				</p>
			</div>
		</div>



	</div>
</body>
</html>

