<?php
error_reporting(0);
header('Content-type: text/html; charset=utf-8');
header('Access-Control-Allow-Origin:*');
include("conn.php");
session_start();
ini_set("session.cookie_domain",'http://ht.5067.org');
function islog($cus_id){
	if(isset($_SESSION['userDid'])){
		$sql = "SELECT * FROM up_user WHERE id = {$_SESSION['userDid']} and cus_id = {$cus_id}";
		$result=mysql_query($sql);
		while($row = mysql_fetch_array($result))
		{
			$username=$row['username'];
			break;
		}
		return json_encode(array('err'=>'0','username'=>$username,'msg'=>'已经登录'));
	}else{
		return json_encode(array('err'=>'1','msg'=>'未登录'));
	}
}
function verif($codes){
		if(isset($_SESSION["verification"])&&$_SESSION["verification"]==md5($codes)){
			return 1;
		}else{
			return 0;
		}
	}
function login(){
	if(isset($_SESSION['userDid'])){
		if(isset($_POST['username'])||isset($_POST['password'])){
			return json_encode(array('err'=>'0','msg'=>'已经登录，不要重复登录！'));
		}
		$cus_id=$_POST['cus_id'];
		$sql = "SELECT * FROM up_user WHERE id = {$_SESSION['userDid']} and cus_id = {$cus_id}";
		$result=mysql_query($sql);
		while($row = mysql_fetch_array($result))
		{
			$username=$row['username'];
			break;
		}
		return json_encode(array('err'=>'0','username'=>$username,'msg'=>'已经登录！'));
	}else{
		if(isset($_POST['verification'])&&$_SESSION["verification"]==md5($_POST['verification'])){
			if(!isset($_POST['username'])||!isset($_POST['password'])){
				return json_encode(array('err'=>'100','msg'=>'请填写好用户名或密码！'));
			}
			$username=$_POST['username'];
			$password=md5($_POST['password']);
			$cus_id=$_POST['cus_id'];
			$sql = "SELECT * FROM up_user WHERE username = '{$username}' and password = '{$password}' and cus_id = {$cus_id}";
			$result=mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				$_SESSION['userDid']=$row['id'];
				break;
			}
			return json_encode(array('err'=>'0','username'=>$username,'msg'=>'登录成功！'));
		}else{
			return json_encode(array('err'=>'2','msg'=>'验证码错误'));
		}
	}	
}
if(count($_GET)>0){
	if(isset($_GET['cus_id'])&&isset($_GET['do'])&&$_GET['do']=='islog'){
		islog($_GET['cus_id']);
	}
	if(isset($_GET['verification'])){
		if(verif($_GET['verification'])){
			echo 1;
			exit();
		}else{
			echo 0;
			exit();
		}
	}
} else {
	echo login();
	exit();
}	
mysql_close($conn);
?>