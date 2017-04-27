<?php
namespace Home\Controller;
use Think\Controller;
class BlogController extends Controller {
    // url:  http://document.thinkphp.cn/manual_3_2.html#action_bind
    // title:  Action参数绑定

    public function read($id){
        echo 'id='.$id;
    }   // 访问地址： /Home/Blog/read/id/5

    public function archive($year='2015',$month='03'){
        echo '今年是'.$year.'这个月是'.$month;
    }

    // 这两个操作方法都没有具体的业务逻辑，只是简单的示范。

}
?>