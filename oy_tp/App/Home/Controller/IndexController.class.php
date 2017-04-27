<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo "Hello world123456!";
        echo C('name'); // C()方法是controller的缩写
        $this->display();
        echo C('URL_MODEL');    // url模式
    }

    public function del(){
        echo "I am ouyang";
    }

    public function add(){
        //echo "she is my borther";
        $this->display();
    }

    // 访问地址：/index.php/home/index/test
    public function test(){
        $num=3;
        $this->assign('num',$num);

        $name='百里屠苏';
        $this->assign('name',$name);
        $this->display();
    }

    public function test2(){
        $user=M('user');
        $list=$user->limit(10)->select();
        $this->assign('list',$list);

        $name='小黄';
        $this->assign('name',$name);
        $this->display();
    }
}
?>