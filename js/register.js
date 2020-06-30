
//获取元素
var passinput = document.querySelector("[name=password]");
var repassinput = document.getElementById("repassword");

//文本框失去焦点
passinput.onblur = function(){
	var passText = document.getElementById("passText");
	if(passinput.value.length < 6 || passinput.value.length > 12){
		passText.innerHTML="密码长度有误,建议长度6-12位";
	}else{
		passText.innerHTML="";
	}
}
repassinput.onblur = function(){
	var repassText = document.getElementById("repassText");
	if(passinput.value != repassinput.value){
		repassText.innerHTML="两次密码不一致";
	}else{
		repassText.innerHTML="";
	}
}

//阻止提交
document.querySelector("[type=submit]").onclick = function(e){
	var repassText = document.getElementById("repassText");
	if(passinput.value != repassinput.value || passinput.value.length < 6 || passinput.value.length > 12){
		e.preventDefault();
	}
}
