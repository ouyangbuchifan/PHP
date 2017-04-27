<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<script type="text/javascript" language="javascript">
   function checkAll(){							//全选
	var elements = form3.getElementsByTagName('input');		//获取input标签
	for(var i=0; i<elements.length; i++){					//根据标签的长度执行循环
		if(elements[i].type == 'checkbox'){				//判断对象中元素的类型，如果类型为checkbox
			if(elements[i].checked==false){				//判断当checked的值为false时
				elements[i].checked=true;					//为checked赋值为true
		  	}
		}
	}	
}

   	function checkno () {
   		var elements=form3.getElementsByTagName("input");
   		for (var i = 0; i < elements.length; i++) {
   			if (elements[i].type=="checkbox") {
   				if (elements[i].checked==true) {
   					elements[i].checked=false;
   				}
   			}
   		}
   	}

   	function checkrebel() {
   		var elements = form3.getElementsByTagName('input');		//获取input标签
		for(var i=0; i<elements.length; i++){					//根据标签的长度执行循环
			if(elements[i].type == 'checkbox'){				//判断对象中元素的类型，如果类型为checkbox
				if(elements[i].checked==true){					//判断当checked的值为true时
					elements[i].checked=false;					//为checked赋值为false
			  	}else if(elements[i].checked==false){
			  		elements[i].checked=true;
			  	}
			}
		}	
   	}
</script>
</head>
<body>
   


<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<form action="" class="form form-horizontal" name="form3">
				<div class="col-xs-10 col-md-5">
					<div class="col-xs-10 col-md-5 control-label">
						操作：
					</div>
					<div class="col-xs-10 col-md-7">
						<label class="form-group checkbox">
							<input type="checkbox" name="chkC" id="chk-C">C++编程词典全教程
						</label>
						<label class="form-group checkbox">
							<input type="checkbox" name="chkVC" id="chk-VC">VC编程词典全教程
						</label>
						<label class="form-group checkbox">
							<input type="checkbox" name="chkCj" id="chk-Cj">C#编程词典全教程
						</label>
						<label class="form-group checkbox">
							<input type="checkbox" name="chkVF" id="chk-VF">VF编程词典全教程
						</label>
						<label class="form-group checkbox">
							<input type="checkbox" name="chkASP" id="chk-ASP">ASP编程词典全教程
						</label>
					</div>
					<div class="form-group">
						<!-- <input type="button" class="btn btn-primary text-center" onclick="all(form3,status)" value="全选">
						<input type="submit" class="btn btn-primary text-center" onclick="no(form3,status)" value="不选">
				        <input type="submit" class="btn btn-danger text-center" onchange="rebel(form3,status)" value="反选">
						 -->
				        <button type="button" onclick="checkAll()">全选</button>
				        <button type="button" onclick="checkno()">不选</button>
				        <button type="button" onclick="checkrebel()">反选</button>
					</div>
				</div>
			</form>			
		</div>
	</div>
</div>

                



</body>
</html>




