<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��֤���͸���Ԫ���Ƿ�Ϊ��</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<script language="javascript">
function check(){
if(myform.subject.value==""){
	alert("�������ⲻ��Ϊ�գ���");myform.subject.focus();return false;
	}
if(myform.content.value==""){
	alert("�������ݲ���Ϊ�գ���");myform.content.focus();return false;
	}
if(myform.author.value==""){
	alert("���߲���Ϊ�գ���");myform.author.focus();return false;
	}
alert("�ɹ�ͨ����֤��");
}
</script>
<body>
<form name="myform" method="post" action="">
  <table width="500" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#993399">
    <tr bgcolor="#99FF33">
      <td height="30" colspan="2" align="center">�ҵĲ�������</td>
    </tr>
    <tr bgcolor="#99FF33">
      <td width="127" height="30" align="center">�������⣺</td>
      <td width="373" height="30"><input name="subject" type="text" id="subject" size="40"> 
        &nbsp;<span class="style1">*</span></td>
    </tr>
    <tr bgcolor="#99FF33">
      <td height="30" align="center">�������ݣ�</td>
      <td height="30"><textarea name="content" cols="40" rows="8" id="content"></textarea>
      <span class="style1">*</span></td>
    </tr>
    <tr bgcolor="#99FF33">
      <td height="30" align="center">���ߣ�</td>
      <td height="30"><input name="author" type="text" id="author">
      <span class="style1">*</span></td>
    </tr>
    <tr bgcolor="#99FF33">
      <td height="30" colspan="2" align="center"><input type="submit" name="submit" onClick="return check();" value="����">
&nbsp;&nbsp;
      <input type="reset" name="Submit2" value="��д"></td>
    </tr>
  </table>
  <div align="center"><br>
  ˵����<span class="style1">*&nbsp;</span>����������ݲ���Ϊ�գ�<br>
  </div>
</form>
</body>
</html>
