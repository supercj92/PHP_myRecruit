function checkForm(obj1,obj2,obj3){
    		if(document.getElementById(obj1).value.length==0||document.getElementById(obj2).value.length==0||document.getElementById(obj3).value.length==0)
    		{
    			alert("有必填项为空，请重新填写");
    			return false;
    		}
    		return true;
    	}	