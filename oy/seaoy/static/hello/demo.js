
// 第二个
 define(
 	function(require,exports,module){
 		//require 定义这个模块/js 依赖的模块，
 		//exports 定义这个模块给其他模块提供的方法
 		//后两个参数没有用到时可以不写
 		var $=require('jquery');
 		// $('.demo').text('我被改变');
 		$('.am-btn').click(function(){
 			$('.demo').text('我被改变');
 		});
 	})

