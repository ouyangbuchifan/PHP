<?php
	$q=$_GET['name'];
	if ($q == '欧阳2') {
		$note = '返回正确';
	}else{
		$note = '返回error';
	}
	
	setTimeout(function(){
		echo $note
	}, 1000)
?>