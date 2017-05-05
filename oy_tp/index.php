<?php
/*
1. 加载 thinkphp.php
2. 加载核心文件 ./thinkphp/lib/core
3. 加载项目文件，分析URL,调用相关控制器   localhost/index.php?m=index&a=index
m module  模块 控制器
a action  方法 action=页面
*/
// $module = isset($_GET['m'])?$_GET['m']:'index';
// $action = isset($_GET['a'])?$_GET['a']:'index';

/**
* 手动启动，仅用于理解流程
*/
/**
*$imooc = new $module();
*$imooc->$action();
*class index{
*	
*	function __construct()
*	{
*		echo "调用了index控制器<br/>";
*	}
*	function index(){
*		echo "我是index控制器的index方法";
*	}
*	function test(){
*		echo "我是index控制器的test方法";
*	}
*}
*class test{
*	
*	function __construct()
*	{
*		echo "调用了test控制器<br/>";
*	}
*	function index(){
*		echo "我是test控制器的index方法";
*	}
*	function test(){
*		echo "我是test控制器的test方法";
*	}
*}
*exit;
*/

define('APP_DEBUG', true);
define('APP_NAME', 'APP');
define('APP_PATH', './App/');
require("./ThinkPHP/ThinkPHP.php");
