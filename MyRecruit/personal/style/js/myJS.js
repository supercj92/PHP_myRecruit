var xmlHttpRequest;
function checkForm(obj1,obj2,obj3){
    		if(document.getElementById(obj1).value.length==0||document.getElementById(obj2).value.length==0||document.getElementById(obj3).value.length==0)
    		{
    			alert("有必填项为空，请重新填写");
    			return false;
    		}
    		return true;
    	}
function checkName(){
	var xmlHttpRequest=getXmlHttpObject();
	if(xmlHttpRequest){
		var url="/myrecruit/controller/registerPro.php";
		var data="username="+$("username").value;
		xmlHttpRequest.open("post",url,"true");
		xmlHttpRequest.onreadystatechange=handle;
		xmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xmlHttpRequest.send(data);
	}
}

function handle(){
	if(xmlHttpRequest.readyState==4){
		//alert("json："+xmlHttpRequest.responseText);
		var res=xmlHttpRequest.responseText;
		//讲json转化为对象
		var res_obj=eval("("+res+")");
		if(res_obj.sign=="yes"){
			$("nameRes").style.color="green";
		}else{
			$("nameRes").style.color="red";
		}
		$("nameRes").innerHTML=res_obj.msg;
	}
	
}

function getXmlHttpObject(){
	
	if(window.ActiveXObject){
		xmlHttpRequest=new ActiveXObject("Microsoft.XMLHTTP");
		
	}else{
		xmlHttpRequest=new XMLHttpRequest();
	}
	return xmlHttpRequest;
}

function $(id){
	return document.getElementById(id);
}