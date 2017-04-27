<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    h1{text-align: center;}
    .red{color:#f00}
    .list li{float: left;list-style: none;margin: 0 15px;}
    input[type="submit"]{display: inline-block;margin: 0 auto;}
</style>
</head>
<body>
    <div class="container">
        <h1>js基础部分示例</h1>
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <p>
                    JS内容已经学过，只列出一些本书案例作为复习。
                </p>
                <p>
                    <script type="text/javascript">
                        function demo(a,b){
                            return a*b;
                        }
                        document.write (demo(15,14));
                    </script>
                </p>
                <hr>
                <div class="col-xs-10 col-md-5 ">
                    <form name="form1" class="form">
                       <div class="form-group">
                           <div class="control-label col-xs-10 col-md-4">
                               检测闰年：
                           </div>
                           <div class="col-xs-10 col-md-6">
                               <select name="selYear" id="sel-Year" class="form-control">
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2014</option>
                                </select>
                           </div>
                           <div class="col-xs-10 col-md-2">
                               <input type="submit" name="btnSub" class="btn btn-primary" onclick="demo2()">
                           </div>
                       </div>
                        
                    </form>
                    <script>
                        function demo2(){
                            var mytext=form1.selYear.value;
                            if( (mytext%4==0)&&(mytext%100!=0) ){
                                document.write(mytext+"年是闰年");
                            }else{
                                document.write(mytext+"年不是闰年");
                            }
                        }
                    </script>
                </div>
                <div class="clearfix"></div>
                <hr>
                <div class="col-xs-10 col-md-10 clearfix">
                	<form action="" class="form" name="form2">
                		<label class="col-xs-10 col-md-3 ">
                			你喜欢的图书类别是：
                		</label>
                		<div class="col-md-2">
                			<select name="selBook" id="sel-book">
                				<option value="古典">古典</option>
                				<option value="流行">流行</option>
                				<option value="体育">体育</option>
                				<option value="音乐">音乐</option>
                			</select>
                		</div>
                		<div class="col-md-1">
                			<input type="submit" class="btn btn-primary" value="提交" onclick="demo2(document.form2.selBook.value)">
                		</div>
                	</form>
                	<script type="text/javascript">
                		function demo2(book){
                			switch(book){
                				case "古典":
                					alert("你喜欢的图书类别是：古典类");
                					break;
                				case "流行":
                					alert("你喜欢的图书类别是：流行类");
                					break;
            					case "体育":
            						alert("你喜欢的图书类别是：体育类");
            						break;
            					case "音乐":
            						alert("你喜欢的图书类别是：音乐类");
            						break;
                			}
                		}
                	</script>
                </div>
                <div class="clearfix"></div>
                <hr>
                <div>
                	<script type="text/javascript">
                		for (var i = 0; i <= 9; i++) {
		         			document.write(i+"*"+i+"="+i*i+"&nbsp;&nbsp;&nbsp;");
		         		};
                	</script>
                </div>
                <hr>
                <h2>制作二级导航</h2>
                <div>
                	<table width="761" height="218" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" background="images/bg.jpg" bgcolor="#3F8701">
					  <tr>
					    <td valign="top"><table width="761" border="0" cellspacing="0" cellpadding="0">
					      <tr>
					        <td height="48" colspan="2">&nbsp;</td>
					      </tr>
					      <tr>
					        <td height="27" colspan="2" align="right"><table width="761" height="20" border="0" cellpadding="0" cellspacing="0">
					          <tr>
					            <td width="396">&nbsp;</td>
					            <td width="67" align="center"><a href="index.php">首&nbsp;页</a></td>
					            <td width="75" align="center"><a href="#" onMouseMove="Lmenu('新品')">新品上架</a></td>
					            <td width="75" align="center"><a href="#" onMouseMove="Lmenu('购物')">购物车</a></td>
					            <td width="74" align="center"><a href="#" onMouseMove="Lmenu('会员')">会员中心</a></td>
					            <td width="61" align="center"><a href="index.php">在线帮助</a></td>
					            <td width="13">&nbsp;</td>
					          </tr>
					        </table>          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					      </tr>
					      <tr>
					        <td width="226" height="20" align="right">&nbsp;</td>
					        <td width="535" align="right"> <div id="submenu">&nbsp;</div></td>
							   <script language="javascript">
								function Lmenu(value){
									switch (value){
										case "新品":
											submenu.innerHTML=" <a href='#'>商品展示</a> | <a href='#'>销售排行榜</a> | <a href='#'>商品查询</a> ";
											break;			
										case "购物":
											submenu.innerHTML=" <a href='#'>添加商品</a> | <a href='#'>移出指定商品</a> |<a href='#'>清空购物车</a> | <a href='#'>查询购物车</a> | <a href='#'>填写订单信息</a> ";
											break;					
										case "会员":
											submenu.innerHTML=" <a href='#'>注册会员</a> | <a href='#'>修改会员</a> | <a href='#'>账户查询</a> ";
											break;						
										}
								}
							 </script>
					      </tr>
					    </table></td>
					  </tr>
					</table>
                </div>
                <h2>全选，反选，不选</h2>
                <div class="row">
                    <script type="text/javascript">                       
                        function demoall(){
                           var element=document.form3.getElementsByTagName("input");  
                            for (var i = 0; i < element.length; i++) {
                                if (element[i].type=='checkbox') {
                                    if (element[i].checked==false) {
                                        element[i].checked=true;
                                    }
                                }                               
                            }                                                                                 
                        }

                        function demono(){
                            var element=document.form3.getElementsByTagName("input");
                            for (var i = 0; i < element.length; i++) {
                                if (element[i].checked==true) {
                                    element[i].checked=false;
                                }
                            }
                        }

                        function demorebel(){
                            var element=document.form3.getElementsByTagName("input");
                            for (var i = 0; i < element.length; i++) {
                                if (element[i].type=="checkbox") {
                                    if (element[i].checked==true) {
                                        element[i].checked=false;
                                    }else if(element[i].checked==false){
                                        element[i].checked=true;
                                    }
                                }                                
                            }
                        }
                    </script>
                	<form action="" class="form form-horizontal" name="form3" method="post">
                	<div class="col-xs-10 col-md-5">
                		<div class="col-xs-10 col-md-5 control-label">
                			操作：
                		</div>
                		<div class="col-xs-10 col-md-7">
                			<label class="form-group checkbox">
                				<input type="checkbox" name="chkC" id="chk-C">C++编程词典全教程
                			</label>
                			<label class="form-group checkbox">
                				<input type="checkbox" name="chkVC" id="chk-VC">VC编程词典全教程
                			</label>
                			<label class="form-group checkbox">
                				<input type="checkbox" name="chkCj" id="chk-Cj">C#编程词典全教程
                			</label>
                			<label class="form-group checkbox">
                				<input type="checkbox" name="chkVF" id="chk-VF">VF编程词典全教程
                			</label>
                			<label class="form-group checkbox">
                				<input type="checkbox" name="chkASP" id="chk-ASP">ASP编程词典全教程
                			</label>
                		</div>
                		<div class="form-group">
                			<!-- <input type="button" class="btn btn-primary text-center" onclick="all(form3,status)" value="全选"> -->
                            <button type="button" onclick="demoall()" class="btn btn-primary text-center">全选</button>
                            <button type="button" class="btn btn-primary text-center" onclick="demono()" >不选</button>
                            <button type="button" class="btn btn-danger text-center" onclick ="demorebel()" >反选</button>
                		</div>
                	</div>
                	</form>
                </div>
                
                
            </div>
        </div>
    </div>
</body>
</html>




