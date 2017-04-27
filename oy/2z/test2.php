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
	table{border-collapse: collapse;width:200px;}
	table tr td{border: 1px solid #ccc;text-align: center;padding: 5px 0;}
	.demo{width: 4px;height:3px;}
</style>
</head>
<body>
	<div class="container">
		<h1>2章测试</h1>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					输出一个4*3的表格
				</p>
				<?php
				/**
				 * 
				 * @authors Your Name (you@example.org)
				 * @date    2014-07-17 08:24:19
				 * @version $Id$
				 */
					echo("<table border=1>");
						echo("<tr>");		// 第一行开始
							echo("<td>");
							echo("A");
							echo("</td>");
							echo("<td>");
							echo("2");
							echo("</td>");
							echo("<td>");
							echo("3");
							echo("</td>");
						echo("</tr>");	// 第一行结束
						echo("<tr>");
							echo("<td>");
							echo("B");
							echo("</td>");
							echo("<td>");
							echo("2");
							echo("</td>");
							echo("<td>");
							echo("3");
							echo("</td>");
						echo("</tr>");	// 第二行结束
						echo("<tr>");
							echo("<td>");
							echo("C");
							echo("</td>");
							echo("<td>");
							echo("2");
							echo("</td>");
							echo("<td>");
							echo("3");
							echo("</td>");
						echo("</tr>");	// 第三行结束
						echo("<tr>");
							echo("<td>");
							echo("D");
							echo("</td>");
							echo("<td>");
							echo("2");
							echo("</td>");
							echo("<td>");
							echo("3");
							echo("</td>");
						echo("</tr>");	// 第二行结束
					echo("</table>");
				?>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					输出一个4*3像素的表格
				</p>
				<?php
					echo("<table class=demo>");
					echo("<tr>");
					echo("<td>");
					echo("1");
					echo("</td>");
					echo("</tr>");
					echo("</table>");
				?>
			</div>
		</div>
	</div>
    
</body>
</html>

