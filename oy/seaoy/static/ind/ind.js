/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-01-20 16:35:54
 * @version $Id$
 */

define('jquery',function (require,exports,module) {
	var $=require('jquery');

	module.exports={
		$("#sel_all").click(function(){
		    var checkbox=$(".chk_cn");  
		    if( checkbox.prop("checked")==true ){
		        checkbox.prop("checked",false);  
		    }else{
		        checkbox.prop("checked",true);  
		    }
		});
	}
	

})