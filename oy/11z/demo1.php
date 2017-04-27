<?php 
	setcookie("TMCookie",'www.baidu.com');
	setcookie("TMCookie",'www.baidu.com',time()+60);		// 设置有效时间为60秒
	setcookie("TMCookie","哞哞牛",time()+3600,"/tm/","www.baidu.com",1);
?>
<?php 
	// cookie 是个数组 元素： name, value, expire, path, domain, secure 
	//     				可以用 $_COOKIE["value"] 来访问

?>
