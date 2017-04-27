<?php 
	//用名字来填充数组
	$a[]="Anna";
	$a[]="Brittany";
	$a[]="Cinderella";
	$a[]="Diana";
	$a[]="Eva";
	$a[]="Fiona";
	$a[]="Gunda";
	$a[]="Hege";
	$a[]="Inga";
	$a[]="Johanna";
	$a[]="Kitty";
	$a[]="Linda";
	$a[]="Nina";
	$a[]="Ophelia";
	$a[]="Petunia";
	$a[]="Amanda";
	$a[]="Raquel";
	$a[]="Cindy";
	$a[]="Doris";
	$a[]="Eve";
	$a[]="Evita";
	$a[]="Sunniva";
	$a[]="Tove";
	$a[]="Unni";
	$a[]="Violet";
	$a[]="Liza";
	$a[]="Elizabeth";
	$a[]="Ellen";
	$a[]="Wenche";
	$a[]="Vicky";

	//获取q,如果q大于0，查找数组所有提示
	$q=$_GET['q'];
	if (strlen($q)>0) {
		$hint="";	// 定义$hint
		for ($i=0; $i < count($a); $i++) { 
			if (strtolower($q)==strtolower(substr($a[$i], 0, strlen($q)))) {
				// strtolower 转为小写。 substr()截取首字母。
				if ($hint=="") {
					$hint=$a[$i];
				}else{
					$hint=$hint.",".$a[$i];
				}
			}
		}		
	}
	if ($hint=="") {
		$note="没有提示";
	}else{
		$note=$hint;
	}
	// 输出响应
	echo $note;
?>