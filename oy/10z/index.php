<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��������ʱ��Ĳ�</title>
</head>

<body>
	<?php 

		// mktime()  ��ȡ��ǰʱ��
		$nowdate=mktime();
		echo date("Y-m-d H:i:s",$nowdate);

		// time() 
		echo '<br/>����ʱ���ǣ�';		// time()��ȡ��ǰʱ���
		echo date("Y-m-d H:i:s",time());

		//getdate() ��ȡʱ���ĳ��Ԫ�أ�����
		echo '<br/>';
		$arr=getdate();
		echo '������'.$arr['year'].'��'.$arr['month'].'��'.$arr['mday'].'<br/>';

		// checkdate()
		var_dump(checkdate('8', '45', '2014')) ;
		var_dump($arr);
		echo '<br/>'
		// var_dump()����������������ͣ�����ֵ����������飬�͵ݹ�չ��ֵ��

	?>
	<div>
		<?php 
			$now=mktime();
			$ban=date("2014-8-27 18:00:00");
			$result=(strtotime($ban)-$now)/3600;
			echo '�����°໹��'.$result.'Сʱ<br/>';
		?>
	</div>
</body>
</html>
