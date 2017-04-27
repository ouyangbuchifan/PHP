<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller {
    // url:  http://document.thinkphp.cn/manual_3_2.html#empty_controller
    // title:  空控制器
    // describe:  空控制器的概念是指当系统找不到请求的控制器名称的时候，系统会尝试定位空控制器(EmptyController)，利用这个机制我们可以用来定制错误页面和进行URL的优化。


    // 这样当访问地址是/Home/jiaping 这样的错误链接时，也会变正确
    public function index(){
        //根据当前控制器名来判断要执行那个城市的操作
        $cityName=CONTROLLER_NAME;
        $this->city($cityName);

    }

    //注意 city方法 本身是 protected 方法
    public function city($name){
        //和$name这个城市相关的处理
        echo '当前城市：'.$name;
    }

}
?>