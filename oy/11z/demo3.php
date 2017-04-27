<?php 
	// 删除COOKIE
	setcookie("name","",time()-1);	// 将有效时间定义为现在时间之前的，就会失效。
?>