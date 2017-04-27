<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>获取表单数据</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	h1{text-align: center;}
	.red{color: #f00}

	.center{display: block;margin: 0 auto;text-align: center;}
</style>
</head>
<body>
    <div class="container">
    	<h1>获取表单数据</h1>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			
    			<div class="row">
    				<div class="col-xc-9 col-md-9">
	    				<form action="" name="form1" method="post" class="form form-horizontal ">
	    					<!-- 文本框 -->
	    					<div class="form-group">
	    						<label class="col-xc-4 col-md-4 control-label">用户名：</label>
	    						<div class="col-xc-7 col-md-7" >
	    							<input type="text" name="txtName" id="txt-name" class="form-control">
	    						</div>	    						
	    					</div>
	    					<div class="form-group">
	    						<label class="col-xc-4 col-md-4 control-label">密码：</label>
	    						<div class="col-xc-7 col-md-7">
	    							<input type="password" name="pwd" id="pwd" class="form-control">
	    						</div>	    						
	    					</div>
	    					<!-- 单选按钮 -->
	    					<div class="form-group">
	    						<label class="col-xc-10 col-md-4 control-label">性别：</label>
	    						<div class="col-xc-10 col-md-7">
	    							<label class="radio-inline">
	    								<input type="radio" name="sex" value="男" id="man" checked="checked">男
	    							</label>
	    							<label class="radio-inline">
	    							<input type="radio" name="sex" value="女" id="woman">女
	    							</label>
	    						</div>
	    					</div>
	    					<!-- 复选框 -->
	    					<div class="form-group">
	    						<label class="col-xc-10 col-md-4 control-label">
	    							你喜欢的图书类型：
	    						</label>
	    						<div class="checkbox-inline col-xc-10 col-md-7">
	    							<label class="checkbox-inline">
	    								<input type="checkbox" name="mrbook[]" value="入门类"> 入门类
	    							</label>
	    							<label class="checkbox-inline">
	    								<input type="checkbox" name="mrbook[]" value="案例类">案例类
	    							</label>
	    							<label class="checkbox-inline">
	    								<input type="checkbox" name="mrbook[]" value="讲解类">讲解类
	    							</label>
	    							<label class="checkbox-inline">
	    								<input type="checkbox" name="mrbook[]" value="实例类">实例类
	    							</label>
	    						</div>
	    					</div>
							<!-- 下拉列表框 -->
							<div class="form-group">
								<label class="control-label col-xc-10 col-md-4">
									意见主题：
								</label>
								<div class="col-xc-10 col-md-4">
									<select name="select" size="1" class="form-control">
										<option value="公司发展">公司发展</option>
										<option value="管理制度">管理制度</option>
										<option value="后勤服务">后勤服务</option>
										<option value="员工薪资">员工薪资</option>
									</select>
								</div>
							</div>
							<!-- 菜单列表框 -->
							<div class="form-group">
								<label class="control-label col-xc-10 col-md-4">
									请选择你喜欢的PHP书籍：
								</label>
								<div class="col-xc-10 col-md-7">
									<select name="sel[]" id="sel-sel" class="form-control" multiple="multiple">
										<option value="PHP程序开发范例宝典">PHP程序开发范例宝典</option>
										<option value="PHP5从入门到经典">PHP5从入门到经典</option>
										<option value="PHP函数参考大全">PHP函数参考大全</option>
									</select>
								</div>
							</div>
							<!-- 文件域 -->
							<div class="form-group">
								<label class="col-xc-10 col-md-4">
									文件域：
								</label>
								<div class="col-xc-10 col-md-7">
									<input type="file" name="file" class="col-md-5">
									<!-- accept 规定上传内容的格式，可选参数 比如图片时 image/gif image/jpg -->
									<!-- <input type="submit" name="upload" value="上传" class="col-md-1 btn btn-default"> -->
								</div>
							</div>


	    					<div class="form-group center">
	    						<input type="submit" name="submit" id="submit" class="btn btn-primary" value="提交">
	    					</div>
	    				</form>
	    				<?php 
	    					if ($_POST['submit']=="提交") {
	    						// 文本框
	    						echo '你的用户名是：'.$_POST['txtName'].'  你的密码是:'.$_POST['pwd'].'<br>';
	    					}
	    					// 单选按钮
    						echo '你的性别是：'.$_POST['sex'].'<br>';

    						// 复选框
    						if ($_POST['mrbook']!=null) {
    							echo '你喜欢的图书类型是：';
	    						for ($i=0; $i <count($_POST['mrbook']) ; $i++) { 
	    							echo $_POST['mrbook'][$i].'&nbsp;&nbsp;';
	    						}
    						}
    						
    						// 下拉列表框
    						if ($_POST['submit']=="提交") {
    							echo '<br>你选择的意见主题是：'.$_POST['select'];
    							
    						}

    						// 菜单列表框
    						if ($_POST['sel']!=null) {
    							echo '<br>你喜欢的PHP类图书是：';
    							for ($i=0; $i <count($_POST['sel']) ; $i++) { 
    								echo $_POST['sel'][$i].'&nbsp;&nbsp;';
    							}
							}

							// 文件域
							echo '<br>'.$_POST['file'];	

	    				?>
    				</div>
    			</div>



    		</div>
    	</div>
    </div>
</body>
</html>