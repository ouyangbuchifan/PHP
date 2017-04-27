<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>PHP常量</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	h1{text-align: center;}
    .table-main {margin: 0 0 0 4em;padding-top: 1em;}
    .table-main [class^=col-] {padding: 5px 0;}
</style>
</head>
<body>
    <div class="container">
    	<h1>常量</h1>
    	<div class="row">
    		<div class="col-sm-12 col-md-12">
    			<p class="lead">
    				利用 define()函数来定义常量
    			</p>
    			<p>
    				语法： define(string constant_name,mixed value,case_sensitive=true);
    			</p>
                <p>
                    示例：
                    <?php
                        define("MESSAGE","能看到一次");         // 定义常量
                        echo(MESSAGE."<br>");                   // 输出常量
                        echo(Message);                          // 输出常量Message，这个常量不存在

                        define("COUNT","能看到多次",true);       //定义常量COUNT，true表示不区分大小写
                        echo(COUNT."<br>");
                        echo(count."<br>");                         // 常量设定不区分大小写，所以小写也能看到
                        $name="count";                          // 定义变量name
                        echo constant($name)."<br>";            // constant()函数用于获取常量值
                        echo (defined("MESSAGE")."<br>");       // defined()函数用来检测常量是否已经被定义。如果已经被定义，返回true,echo输出1
                    ?>
                </p>
    		</div>
    	</div>
        <hr>
        <h2>预定义常量</h2>
        <div class="table-main">
            <div class="row">
                <span class="col-sm-4 col-md-4">
                    __FILE__
                </span>
                <span class="col-sm-5 col-md-5">
                    默认常量，PHP程序文件名
                </span>
            </div>
            <div class="row">
                <span class="col-sm-4 col-md-4">
                    __LINE__
                </span>
                <span class="col-sm-5 col-md-5">
                    默认常量，PHP程序行数
                </span>
            </div>
            <div class="row">
                <span class="col-sm-4 col-md-4">
                    PHP_VERSION
                </span>
                <span class="col-sm-5 col-md-5">
                    内建常量，PHP程序版本
                </span>
            </div>
            <div class="row">
                <span class="col-sm-4 col-md-4">
                    PHP_OS
                </span>
                <span class="col-sm-5 col-md-5">
                    内建常量，执行PHP程序操作系统的名称，例：windows
                </span>
            </div>
            <div class="row">
                <span class="col-sm-4 col-md-4">
                    TRUE
                </span>
                <span class="col-sm-5 col-md-5">
                    真值 true
                </span>
            </div>
            <div class="row">
                <span class="col-sm-4 col-md-4">
                    FALSE
                </span>
                <span class="col-sm-5 col-md-5">
                    假值 false
                </span>
            </div>
            <div class="row">
                <span class="col-sm-4 col-md-4">
                    NULL
                </span>
                <span class="col-sm-5 col-md-5">
                    空值
                </span>
            </div>
            <div class="row">
                <span class="col-sm-4 col-md-4">
                    E_ERROR
                </span>
                <span class="col-sm-5 col-md-5">
                    该常量指到最近的错误处
                </span>
            </div>
            <div class="row">
                <span class="col-sm-4 col-md-4">
                    E_WARNING
                </span>
                <span class="col-sm-5 col-md-5">
                    指到最近的警告处
                </span>
            </div>
            <div class="row">
                <span class="col-sm-4 col-md-4">
                    E_PARSE
                </span>    
                <span class="col-sm-5 col-md-5">
                    该常量指向到语法有潜在问题处
                </span>
            </div>
            <div class="row">
                <span class="col-sm-4 col-md-4">
                    E_NOTICE
                </span>
                <span class="col-sm-5 col-md-5">
                    该常量为发生不同寻常处的提示但不一定是错误
                </span>
            </div>
        </div>
        <p>
            <em>示例：</em><br>
            <?php
                echo('当前文件路径：'.__FILE__.'<br>');           // 输出当前文件路径
                echo('当年行数：'.__LINE__.'<br>');                      // 输出当前行数  
                echo('当年操作系统：'.PHP_OS.'<br>');              // 输出当前操作系统
                echo('当年PHP版本号：'.PHP_VERSION.'<br>');            // 当前PHP版本号
            ?>          
        </p>



    </div>
</body>
</html>