<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
	<?php 
		if (strlen( $_POST['Pwd'])<6 ) {
			echo "<script>
				alert ('密码不得少于6位！');
				history.back();	
			</script>";		
		}
		else{
			echo '登录成功！';
			echo $_POST['Name'];
		}
	?>    
</body>
</html>
