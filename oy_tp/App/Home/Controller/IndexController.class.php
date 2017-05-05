<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // echo C('name').'<br/>';
        // echo C('sex');

        /**
        * 可在配置文件里config.php更改
		* url模式 URL_MODEL
		* 1默认模式 
		* 0普通模式
		* 2重写模式
		* 3兼容模式
        */
        // echo C('URL_MODEL').'<br/>';

        //U('模块/方法',array('id'=>1),'xxxx html shtml htm',true/false,'localhost')
        // true/false 是否自动跳转
        echo U('Index/sex',array('id'=>1),'shtml',false,'localhost');
        // /oy_tp/index.php?m=Home&c=Index&a=sex

        // dump thinkphp自己的打印数组方法
        $myarr = array('张三','李四','王五');
        // dump($myarr);

        /**
        * 显示模板
        * $this->display();
        * 可以带参数,'Index/index.html',也可以写其他目录，一般不这么做
        */
        $name='欧阳克';
        $date=date('Y-m-d h:m:s');
        // 模板赋值(只能传一个)
        $this->name=$name;
       	
        // assign() 可以赋值多个
        // assign('变量名','变量值')
        $this->assign('name2',$name)->assign('sex','man')->assign('today',$date);

        // TP的变量输出
        $me['name']='张二狗';
        $me['sex']='男';
        $me['age']=27;
        $this->assign('me',$me);

        // TP的循环
        $person=array(
        	1=>array('name'=>'杰克','age'=>'18'),
        	2=>array('name'=>'肉丝','age'=>'19'),
        	3=>array('name'=>'史密斯','age'=>22)
        );
        $this->assign('person',$person);

        $mynum=11;
        $this->mynum=$mynum;

        $myname='xiaoming';
        $this->assign('myname', $myname);
        $this->display();
    }

    // public function list(){
    //     $this->display();
    // }

    public function sex(){
    	echo 'id is: '.$_GET['id'].'<br/>';
    	echo '这里是index模块的sex方法';
    }
}