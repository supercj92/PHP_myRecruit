<?php

	class Comfun{
	//判断用户是否登陆
	function isLogin(){
		session_start();
		if(!empty($_SESSION['member'])){
			return  true;
		}
		return false;
	}
	}