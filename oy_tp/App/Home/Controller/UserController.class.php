<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    // url:  http://document.thinkphp.cn/manual_3_2.html#define_controller
    // title:  控制器定义

    public function login(){
        echo 'login event';
    }

    public function logout(){   // 地址：/Home/user/logout
        echo 'logout event';
    }
}
?>