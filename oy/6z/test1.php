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
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p class="lead">
    				1. 应用正则实现UBB使用帮助。UBB即BBS代码
    			</p>
    			<p>
    				<?php 
    					$url = '[url=http://www.bccd.com/]编程词典网[/url]';
						$color = '[color=red]红色[/color]';
						$b = '[b]我比一般的字都要粗[/b]';
						$pics = '/dx';			// UBB代码里图片引用为 /图片名
						$string = '超级连接：'.$url;
						$string .= '<br>字体颜色：'.$color;
						$string .= '<br>粗体：'.$b;
						$string .= '<br>贴图: '.$pics;

						$str='超级链接：'.preg_replace('/\[url=(http:\/\/\w+(\.\w+)+\w+)+\/.*\](.*)\[\/url\]/i', '<a href=\'$1\'>$3</a>', $url).'<br>';
						$str.='字体颜色：'.preg_replace('/\[color=(\w+)\](.*)\[\/color\]/i', '<font color="$1">$2</font>', $color).'<br>';
						// 此处有疑问，如果将 $1的'' 换成"" 颜色会出现异常
						$str.='粗体：'.preg_replace('/\[b\](.*)\[\/b\]/', '<strong>$1</strong>', $b).'<br>';
						$str.='贴图'.preg_replace('/\/(.*)/', '<img src=\'images/$1.gif\'>', $pics).'<br>';

    				?>
    			</p>
    			<p>
    				<?php 
    					echo $string;
    				?>
    			</p>
    			<hr>
	    			<?php 
	    				echo $str;
	    			?>
    		</div>
    	</div>
    	<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					2. 用正则匹配email地址标签。
				</p>
				
			</div>
			<div class="col-sm-12 col-md-12">
				<form action="" method="post" class="form">
					<div class="col-sm-3 col-md-3">
						<input type="text" name="email" class="form-control" placeholder="请输入你的邮箱">						
					</div>
					<div class="col-sm-3 col-md-3">
						<input type="submit" class="btn btn-primary">
					</div>
				</form>
				<p>
					<?php 
						$myemail=$_POST ['email'];
						$myReg='/\w+@(\w+\.){1,3}[a-zA-Z]+/';
						if (preg_match($myReg, $myemail)==1) {
							echo '匹配成功';
						}else{
							echo '失败鸟';
						}
					?>
				</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<p class="lead">
					3. 使用正则匹配html标签。
				</p>
			</div>
			<form action="" method="post" class="form">
				<div class="col-sm-3 col-md-3">
					<input type="text" class="form-control" name="txtTag" placeholder="请输入你的HTML标签">
				</div>
				<div class="col-sm-3 col-md-3">
					<input type="submit" class="btn btn-default" value="提交">
				</div>
			</form>
			<?php 
				$tags = $_POST['tags'];
				if(trim($tags) != ''){
					$pattern = '/^<[\/]?[a-zA-z0-9 ="\';":]*>$/';
					if(preg_match($pattern,$tags) == 1){
						$tags = str_replace('<','&lt;',$tags);
						$tags = str_replace('>','&gt;',$tags);
						$tags = str_replace('"','&quot;',$tags);
						echo '输入格式正确： '.$tags;
					}else{
						echo '输入格式错误！！';
					}
				}
			?>

		</div>

    </div>
</body>
</html>