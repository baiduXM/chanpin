<?php
	error_reporting(0);
	header('Content-type: text/html; charset=utf-8');
	header('Access-Control-Allow-Origin:*');
	session_start();
	ini_set("session.cookie_domain",'http://ht.5067.org');
	include("conn.php");
	function verif($codes){
		if(isset($_SESSION["verification"])&&$_SESSION["verification"]==md5($codes)){
			return 1;
		}else{
			return 0;
		}
	}
	function Uniqueusername($username,$cus_id){
		$sql="select * from up_user where username={$username} and cus_id={$cus_id}";
		$result=mysql_query($sql);
		$user=array();
		while($row = mysql_fetch_array($result))
		{
			$user[]=$row;
		}
		if(count($user)>0){
			return 0;
		}else{
			return 1;
		}
	}
	function reg($username,$password,$mail,$cus_id){
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$mail=$_POST['mail'];
		$cus_id=$_POST['cus_id'];
		$sql = "insert into up_user (username, password, mail,cus_id) VALUES ('{$username}', '{$password}', '{$mail}',{$cus_id})";
		$id=mysql_query($sql);
		return json_encode(array('err'=>'0','msg'=>'注册成功'));
	}
	if(isset($_GET['verification'])){
		if(verif($_GET['verification'])){
			echo 1;
			exit();
		}else{
			echo 0;
			exit();
		}
	}elseif(isset($_GET['username'])){
		if(Uniqueusername($_GET['username'],$_GET['cus_id'])){
			echo 1;
			exit(1);
		}else{
			echo 0;
			exit();
		}
	}else{
		if(verif($_POST['verification'])){
			if(Uniqueusername($_POST['username'],$_POST['cus_id'])){
				$username=$_POST['username'];
				$password=md5($_POST['password']);
				$mail=$_POST['mail'];
				$cus_id=$_POST['cus_id'];
				exit(reg($username,$password,$mail,$cus_id));
			}else{
				echo (json_encode(array('err'=>'2','msg'=>'用户名不唯一')));
				exit();
			}
		}else{
			echo (json_encode(array('err'=>'2','msg'=>'验证码错误')));
			exit();
		}
	}
	mysql_close($conn);
?>