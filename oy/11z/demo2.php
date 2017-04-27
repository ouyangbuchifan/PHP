<?php 
date_default_timezone_set("Etc/GMT-8");
	if (!isset($_COOKIE['visittime'])) {			// 如果COOKIE不存在，创建COOKIE。提示欢迎访问。
		setcookie("visittime",date("Y-m-d H:i:s"));
		echo "欢迎第一次访问本网站";
	}else{
		setcookie("visittime",date("Y-m-d H:i:s"),time()+60);		// 如果COOKIE存在，那就将COOKIE的时间加上60
		echo "你上次访问的时间是：".$_COOKIE['visittime'];
		echo '<br/>';
	}
?>