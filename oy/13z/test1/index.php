<?php session_start();  
if($_SESSION[temp]==""){ //�ж�$_SESSION[temp]==""��ֵ�Ƿ�Ϊ��,���е�tempΪ�Զ���ı���
	if(($fp=fopen("counter.txt","r"))==false){ 
		echo "���ļ�ʧ��!";
	}else{ 
		$counter=fgets($fp,1024);		//��ȡ�ļ�������
		fclose($fp);                    //�ر��ı��ļ�
		$counter++;                     //����������1
		$fp=fopen("counter.txt","w");   //��д�ķ�ʽ���ı��ļ�<!---->
		fputs($fp,$counter);            //���µ�ͳ����������1
		fclose($fp);    
	}                   				//�ر���	
 	$_SESSION[temp]=1; 					//��¼�Ժ�,$_SESSION[temp]��ֵ��Ϊ��,��$_SESSION[temp]��һ��ֵ1
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ͨ���ı��ļ�ͳ��ҳ�������</title>
</head>
<body>
<img src="gd1.php" />
</BODY>
</HTML>