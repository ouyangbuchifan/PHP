<?php
	header("Content-type:text/html;charset=utf-8");
	
	$username = $_GET['name'];
	$mobile = $_GET['mobile'];
	$address = $_GET['address'];

	$json_arr = array('username'=>$username,'mobile'=>$mobile,'address'=>$address);
	$json_obj = json_encode($json_arr);
	
	sleep(1);
	echo $json_obj;
	
?>