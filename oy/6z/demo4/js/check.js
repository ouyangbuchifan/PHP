/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2014-08-06 10:17:07
 * @version $Id$
 */

function chkreg(form,label){

	if (label=="all"||label==0) {
		if (form.recuser.value=="") {				// form.recuser 中recuser是name，要加上form
			check_recuser.innerHTML="请输入会员名";		// check_recuser 是个ID，所以不用加form
			form.recuser.style.background="#f60";
			return false;
		}
		else{
			check_recuser.innerHTML="";
			form.recuser.style.background="#fff";
		}	
	}

	if (label=="all"||label==1) {
		if (form.adress.value=="") {
			check_adress.innerHTML="请输入详细地址";
			form.adress.style.background="#f60";
			return false;
		}
		else{
			check_adress.innerHTML="";
			form.adress.style.background="#fff";
		}
	}

	if (label=="all"||label==2) {
		if (form.postalcode.value=="") {
			check_postalcode.innerHTML="请输入邮政编码";
			form.postalcode.style.background="#f60";
			return false;
		}
		else if(isNaN(form.postalcode.value) ){
			check_postalcode.innerHTML="邮政编码必须为数字！";
			form.postalcode.style.background="#f60";
			return false;
		}
		else if(form.postalcode.value.length<6){
			check_postalcode.innerHTML="邮政编码必须不少于6位";
			form.postalcode.style.background="#f60";
			return false;
		}
		else{
			check_postalcode.innerHTML="";
			form.postalcode.style.background="#fff";
		}
	}

	if (label=="all"||label==3) {
        if(form.qq.value==""){
            check_qq.innerHTML="请输入你的QQ号码";
            form.qq.style.background="#f60";
            return false;
        }
        else if(isNaN(form.qq.value) ){
            check_qq.innerHTML="QQ为数字，请输入数字内容！";
            form.qq.style.background="#f60";
            return false;
        }
        else{
            check_qq.innerHTML="";
            form.qq.style.background="#fff";
        }
    }
    
    if (label=="all"||label==4) {
    	if (form.email.value=="") {
    		check_email.innerHTML="请输入你的邮箱";
    		form.email.style.background="#f60";
    		return false;
    	}
    	else if( !checkemail(form.email.value) ){
    		check_email.innerHTML="你输入的邮箱格式不正确，请重新输入";
    		form.email.style.background="#f60";
    		return false;
    	}
    	else{
    		check_email.innerHTML="";
    		form.email.style.background="#fff";
    	}
    }

    if (label=="all"||label==6) {
    	if (form.gtel.value=="") {
    		check_gtel.innerHTML="请输入你的固定电话";
	    	form.gtel.style.background="#f60";
	    	return false;
    	}else if( !checkgtel(form.gtel.value) ){
    		check_gtel.innerHTML="你输入的固定电话格式不正确";
    		form.gtel.style.background="#f60";
    		return false;
    	}else{
    		check_gtel.innerHTML="";
    		form.gtel.style.background="#fff";
    	}
    }

    if (label=="all"||label==5) {
    	if (form.mtel.value=="") {
    		check_mtel.innerHTML="请输入你的手机号码";
    		form.mtel.style.background="#f60";
    		return false;
    	}else if( !checkmtel(mtel) ){
    		check_gtel.innerHTML="你输入的手机号码不正确，请重新输入";
    		form.mtel.style.background="#f60";
    		return false;
    	}else{
    		check_mtel.innerHTML="";
    		form.mtel.style.background="#fff";
    	}
    }

}

 function checkemail(email){
	var exp=/\w+@\w+.\w+/;
	var myRegExp=new RegExp(exp);
	if (myRegExp.test(email)) {
		return true;
	}else{
		return false;
	}
}

function checkgtel(gtel){
	var exp=/\d{3,4}-\d{7,8}/;
	var myRegExp=new RegExp(exp);
	if (myRegExp.test(gtel)) {
		return true;
	}else{
		false;
	}
}

function checkmtel(mtel){
	var exp=/[13,14,15,18]\d{9}/;
	var myRegExp=new RegExp(exp);
	if ( !myRegExp.test(mtel) ) {
		return false;
	}else{
		return true;
	}
}

