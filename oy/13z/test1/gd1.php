<?php 
//��ͼ�ε���ʽ������ݿ��еļ�¼��

if(($fp=fopen("counter.txt","r"))==false){
	echo "���ļ�ʧ��!";
}else{
	$counter=fgets($fp,1024);
	fclose($fp);
    //ͨ��GD2������������
	$im=imagecreate(240,24);
	$gray=imagecolorallocate($im,255,255,255);
	$color =imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));    //����������ɫ
	//��������ַ�
	$text=iconv("gb2312","utf-8","��վ�ķ�����:");       					//��ָ���������ַ�������ת��
	$font = "Fonts/FZHCJW.TTF";  
	imagettftext($im,14,0,20,18,$color,$font,$text);       					//�������
	//�����վ�ķ��ʴ���
	imagestring($im,5,160,5,$counter,$color);
	imagepng($im);
	imagedestroy($im);
}  	

?>