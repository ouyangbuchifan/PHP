<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<link href="http://cdn.bootcss.com/bootstrap/3.0.0/css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<article class="container">
		<form action="" class="form">
			<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="请输入姓名" />
			</div>
			<div class="form-group">
				<input type="mobile" class="form-control" name="mobile" placeholder="电话" />
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="address" placeholder="请输入地址" />
			</div>
		</form>
		<div class="btn btn-primary">提交</div>
		<p id="result"></p>
	</article>

<script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$('.btn').click(function(){
			var cont = $("input").serialize();
			console.log(111111);
			$.ajax({
				type:"get",
				url:"demo2.php",
				async:false,		// 异步
				dataType:'json',
				data: cont,
				success: function(data){
					console.log(2222)
					console.log(data);
					$('#result').html(data.username+'<br/>'+data.mobile+'<br/>'+data.address);
					console.log(3333);
				},
				error: function(data){
					console.log('err');
				}
			});
			
		});
	});
</script>
</body>
</html>