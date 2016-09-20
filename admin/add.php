<?php
 error_reporting(0);
 header('Content-type: text/html; charset=utf-8');
 include("conn.php");

 if($_POST['submit']){
  $sql="insert into message (id,cus_id,name,content,telephone,email,creat_time,status) " .
  		"values ('','$_GET[id]','$_POST[name]','$_POST[content]','$_POST[telephone]','$_POST[email]',now(),'')";
  if(mysql_query($sql)){
	$url = $_SERVER["HTTP_REFERER"];
	echo '<script language="javascript" type="text/javascript">';
	echo 'alert(\'提交成功！感谢参与！\');';
	echo 'window.location.href="'.$url.'";';
	echo '</script>';
  }else{
	echo "<script language=\"javascript\">alert('添加失败');history.go(-1)</script>";
  }
 }elseif($_GET['ajax']){
	header('Access-Control-Allow-Origin: *');
	header('Content-type: application/json');
	$result = array();
	$sql="insert into message (id,cus_id,name,content,telephone,email,creat_time,status) " .
		"values ('','$_GET[id]','$_GET[name]','$_GET[content]','$_GET[telephone]','$_GET[email]',now(),'')";
	if(mysql_query($sql)){
		$result['err'] = 0;
		$result['msg'] = '';
	}else{
		$result['err'] = 1;
		$result['msg'] = '数据入库失败';
	}
	$result = json_encode($result);
	if($_GET['callback']){
		echo $_GET['callback']."($result)";
	}else{
		echo $result;
	}
  }elseif($_POST['ajax']){
	header('Access-Control-Allow-Origin: *');
	header('Content-type: application/json');
	$result = array();
	$sql="insert into message (id,cus_id,name,content,telephone,email,creat_time,status) " .
		"values ('','$_GET[id]','$_POST[name]','$_POST[content]','$_POST[telephone]','$_POST[email]',now(),'')";
	if(mysql_query($sql)){
		$result['err'] = 0;
		$result['msg'] = '';
	}else{
		$result['err'] = 1;
		$result['msg'] = '数据入库失败';
	}
	$result = json_encode($result);
	if($_GET['callback']){
		echo $_GET['callback']."($result)";
	}else{
		echo $result;
	}
  }else{
	header('Content-type: application/json');
	$result['err'] = 2;
	$result['msg'] = '错误的判断信息';
	echo json_encode($result);
  }
?>
	
  