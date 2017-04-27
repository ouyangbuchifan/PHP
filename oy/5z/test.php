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
    <center>
<label>请选择要上传的图片（图片格式为.jpg）：</label>
<form method="post" action="test.php" enctype="multipart/form-data">
	<input type="hidden" name="action" value="upload" />
	<input type="file" name="u_file"/>
	<input type="submit" value="上传" />
</form>
<?php
	if($_POST['action'] == "upload"){			//判断提交按钮是否为空
		$file_path = "./uploads\\";			//定义图片在服务器中的存储位置
		$picture_name=$_FILES[u_file][name];	//获取上传图片的名称
		$picture_name=strstr($picture_name , ".");	//通过strstr()函数截取上传图片的后缀
		if($picture_name!= ".jpg"){					//根据后缀判断上传图片的格式是否符合要求
			echo "<script>alert('上传图片格式不正确,请重新上传'); window.location.href='http://localhost:808/5z/test.php';</script>";
		}elseif($_FILES[u_file][tmp_name]){
			move_uploaded_file($_FILES[u_file][tmp_name],$file_path.$_FILES[u_file][name]);		//执行图片上传
			echo "图片上传成功!";
		}
		else
			echo "上传图片失败";
		}
?> 
</center>
</body>
</html>