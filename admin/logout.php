<?php
	error_reporting(0);
	header('Content-type: text/html; charset=utf-8');
	session_start();
	ini_set("session.cookie_domain",'http://ht.5067.org');
	if(isset($_SESSION['userDid'])){
		unset($_SESSION['userDid']);
		return json_encode(array('err'=>'1','msg'=>'退出'));
	}else{
		return json_encode(array('err'=>'1','msg'=>'未登录'));
	}
?>