<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.js"></script>
	<link href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<div class="btn btn-primary">发送</div>
	<div id="mytxt"></div>
	<script>
	$(function(){
		var mySta = false;
		var mytxt = $("#mytxt");
		function myFun(){
			mytxt.text(123);
			$.ajax({
				type: 'get',
				url: 'get.php',
				data: {
					name: '欧阳',
				},
				success: function(data){
					console.log(data);
					mytxt.text(data);
				},
				error: function(data){
					console.log(data);
					mytxt.text(data);
				}
			});

			
		}

		$('.btn').click(function(){
			myFun();
		});
		
	})
	</script>
</body>
</html>