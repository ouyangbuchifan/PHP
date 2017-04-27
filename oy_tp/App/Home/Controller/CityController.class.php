<?php
namespace Home\Controller;
use Think\Controller;
class CityController extends Controller {
    // url:  http://document.thinkphp.cn/manual_3_2.html#empty_action
    // title:  空操作
    // describe:  空操作是指系统在找不到请求的操作方法的时候，会定位到空操作（_empty）方法来执行

    public function _empty($name){
        // 把所有城市的操作解析到city方法
        $this->city($name);
    }

    // 注意 city方法 本身是protected方法
    public function city($name){
        //和name这个城市相关的处理
        echo '当前城市:'.$name;
    }
}
?>