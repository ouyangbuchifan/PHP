<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>编码规范</title>
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
    	<h1>编码规范</h1>
    	<h2>书写规则</h2>
    	<hr>
    	<h2>命名规则</h2>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<h3>类命名</h3>
    			<p>
    				使用大写字母作为词的分隔，其他用小写
    			</p>
    			<p>
    				名字首字母大写
    			</p>
    			<p>
    				不使用下划线 _
    			</p>
    			<p>
    				<em class="red">示例：</em>
    				Name, SuperMan, BigClassObject
    			</p>
    			<h3>类属性命名</h3>
				<p>
					属性命名以字母m为前缀
				</p>
				<p>
					前缀m后采用与类命名一样的规则
				</p>
				<p>
					<em class="red">示例：</em>
					mValue,mLongString
				</p>
				<h3>方法命名</h3>
				<p>
					与类名一致
				</p>
				<p>
					<em>示例：</em><br>
					<?php 
						// class StartStudy{				// 设置类
						// 	$mLessonOne="";				// 设置类属性
						// 	$mLessonTwo="";				// 设置类属性
						// 	function GetLessonOne(){	// 定义方法，得到属性mLessonOne的值	

						// 	}
						// }
					?>
				</p>
				<h3>方法中参数命名</h3>
				<p>
					<em>示例：</em><br>
					<?php 
						// class EchoAnyWord{
						// 	function EchoWord($firstWord,$secondWord){
						// 		...	
						// 	}	
						// }
					?>
				</p>
				<h3>变量命名</h3>
				<p>
					所有字母都小写
				</p>
				<p>
					_作为分隔符
				</p>
				<p>
					<em class="red">示例:</em>$msg_error,$shk_pwd
				</p>
				<h3>引用变量</h3>
				<p>
					引用变量要带有r的前缀
				</p>
				<p>
					<em class="red">示例</em><br>
					<?php 
						// class Example{
						// 	$mExam="";
						// 	function SetExam(&$Exam){
						// 		...	
						// 	}
						// 	function &rGetExam(){
						// 		...
						// 	}
						// }
					?>
				</p>
				<h3>全局变量</h3>
				<p>
					全局变量应该带有前缀g.  如：global=$gTest,  golbal=$g.
				</p>
				<h3>常量/全局常量</h3>
				<p>
					常量，全局常量。全部使用大写字母，单词之间用_分隔。
					<em class="red">示例：</em><br>
					define('DEFALUT_NUM_AVE',90);  define('DEFAULT_NUM_SUM',500);
				</p>
				<h3>静态变量</h3>
				<p>
					<p>静态变量前带s</p>
					<em class="red">示例：</em><br>
					static $sStatus=1;	
				</p>
				<h3>函数命名</h3>
				<p>
					小写字母，_连接
				</p>
				<p>
					<em class="red">示例：</em><br>
					function this_good_idear(){
						..
					}
				</p>
    		</div>
    	</div>	<!-- end 规则 -->
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			class OtherExample{
    				$msValue="";
    			}
    		</div>
    	</div>
    </div>
</body>
</html>