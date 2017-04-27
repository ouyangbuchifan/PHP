<?php
// 数据库连接类
class ConnDB{
	var $dbtype;
	var $host;
	var $user;
	var $pwd;
	var $dbname;
	var $conn;
	function ConnDB($dbtype,$host,$user,$pwd,$dbname){  // 构造方法，为成员变量赋值
        $this->dbtype=$dbtype;
        $this->host=$host;
        $this->user=$user;
        $this->pwd=$pwd;
        $this->dbname=$dbname;
    }

    // 实现与数据库的连接并返回连接对象
    function GetConnid(){
        $this->conn=mysql_connect($this->host,$this->user,$this->pwd) or die('数据库连接出错！'.mysql_error());
        mysql_select_db($this->dbname,$this->conn) or die('数据库访问出错！'.mysql_error());
        mysql_query('set names utf8');
        return $this->conn;     // 返回连接对象
    }

    // 定义关闭数据库的方法
    function CloseConnld(){
        $this->conn->Disconnect();      //执行关闭操作
    }

}

// 数据库操作类
class AdminDB{
    // 定义方法，参数为sql语句和连接数据库返回的对象
    function ExecSQL($sqlstr,$conn){
        $sqltype=strtolower(substr(trim($sqlstr),0,6));     // 截取sql中前6个字符串，并转换成小写
        $rs=mysql_query($sqlstr);
        if($sqlstr=='select'){      // 如果sql语句类型是 select
            $array=mysql_fetch_array($rs);  // 执行该语句，获取查询结果
            if(count($array)==0||$rs==false){   // 判断语句是否成功执行，如果查询结果为0或者执行失败，返回false
                return false;
            }else{      // 否则返回查询结果的数组
                return $array;
            }
        }
    }
}

// 分页类
class SepPage{
    var $rs;
    var $pagesize;      // 定义每页显示记录数
    var $nowpage;       // 当前页码
    var $array;
    var $conn;
    var $sqlstr;        // 执行的sql语句
    var $total;
    var $pagecount;     // 总的记录数

    // ShowDate()
    function ShowDate($sqlstr,$conn,$pagesize,$nowpage){
        $arrays=array();
        $array_title=array();
        $array_content=array();
        if(!isset($nowpage)||$nowpage==''||$nowpage==0){    // 如果当前页面为空，当前页就是首页
            $this->nowpage=1;
        }else{
            $this->nowpage=$nowpage;        // 否则，定义当前页
        }
        $this->pagesize=$pagesize;      // 定义每页输出的记录数
        $this->conn=$conn;      // 连接数据库返回的标识
        $this->sqlstr=$sqlstr;      //执行查询语句
        $this->total=$total;        // 总的记录数
        $this->pagecount=$pagecount;        // 总的记录数
        $this->rs=mysql_query($this->sqlstr."limit ".$this->pagesize*($this->nowpage-1).",$this->pagesize",$this->conn);
        $this->total=mysql_num_rows($this->rs);			//获取记录数
        if($this->total==0){									//判断如果查询结果为0，则输出如下内容
         return false;
        }else{								//否则
            if(($this->total % $this->pagesize)==0){			//判断如果总的记录数除以每页显示的记录数等于0
            $this->pagecount=intval($this->total/$this->pagesize);	//则为变量pagecount赋值
        }else if($this->total<=$this->pagesize){
            $this->pagecount=1;//如果查询结果小于等于每页记录数，那么为变量赋值为1
        }else{
            $this->pagecount=ceil($this->total/$this->pagesize);	//否则输出变量值
        }
        while($this->array=mysql_fetch_array($this->rs)){
            array_push($array_title,$this->array[title]);
            array_push($array_content,$this->array[content]);
        }
        array_push($arrays,$array_title,$array_content);
            return $arrays;
    }
}
    function ShowPage($contentname,$utits,$anothersearchstr,$class){
        $allrs=mysql_query($this->sqlstr,$this->conn);		//执行查询语句
        $record=mysql_num_rows($allrs);
        $pagecount=ceil($record/$this->pagesize);		//计算共有几页
        $str.="共有".$contentname."&nbsp;".$record."&nbsp;".$utits."&nbsp;每页显示&nbsp;".$this->pagesize."&nbsp;".$utits."&nbsp;第&nbsp;".$this->nowpage."&nbsp;页/共&nbsp;".$pagecount."&nbsp;页";
        $str.="&nbsp;&nbsp;&nbsp;&nbsp;";
        $str.="<a href=".$_SERVER['PHP_SELF']."?page=1".$anothersearchstr." class=".$class.">首页</a>";
        $str.="&nbsp;";
        if(($this->nowpage-1)<=0){
            $str.="<a href=".$_SERVER['PHP_SELF']."?page=1".$anothersearchstr." class=".$class.">上一页</a>";
        }else{
            $str.="<a href=".$_SERVER['PHP_SELF']."?page=".($this->nowpage-1).$anothersearchstr." class=".$class.">上一页</a>";
        }
        $str.="&nbsp;";
        if(($this->nowpage+1)>=$pagecount){
            $str.="<a href=".$_SERVER['PHP_SELF']."?page=".$pagecount.$anothersearchstr." class=".$class.">下一页</a>";
        }else{
            $str.="<a href=".$_SERVER['PHP_SELF']."?page=".($this->nowpage+1).$anothersearchstr." class=".$class.">下一页</a>";
        }
        $str.="&nbsp;";
        $str.="<a href=".$_SERVER['PHP_SELF']."?page=".$pagecount.$anothersearchstr." class=".$class.">尾页</a>";
        if(count($this->array)==0 || $this->rs==false){
            return "";
        }else{
            return $str;
        }
    }
}

// 系统常用类
class UseFun{
    function chinesesubstr($str,$start,$len){

    }
}
?>