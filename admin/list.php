<?php
error_reporting(0);
include("conn.php");

$cus_id=$_POST[cus_id];
$pagesize=$_POST[per_page];
$url=$_SERVER["REQUEST_URI"];
$url=parse_url($url);
$url=$url[path];
 

$numq=mysql_query("SELECT * FROM message where cus_id = $cus_id");
$num = mysql_num_rows($numq);

$ruch = ceil($num/$pagesize);
if($_POST[page]>0){
	$page=$_POST[page];
	if($page > $ruch){
		$page = $ruch;
	}
}else{
	$page=1;
}
$pageval=($page-1)*$pagesize;
$last_page=($page+1);
if($ruch < $last_page){
	$last_page -= 0;
}

$callback=$_POST[callback];

 
  $sql="SELECT * FROM message where cus_id = $cus_id order by id desc limit $pageval,$pagesize";
  $data=mysql_query($sql);
  $num = mysql_num_rows($data);
  $arr=array();
	while($row=mysql_fetch_array($data)){
		$arr[]=array(
			'id' => $row['id'],
			'name' => $row['name'],
			'title' => $row['title'],
			'content' => $row['content'],
			'telephone' => $row['telephone'],
			'email' => $row['email'],
			'creat_time' => $row['creat_time'],
			'status' => $row['status'],
		); 
	}
	
  $arrayName = array('err' => 0,'msg' => 0,'data' => array(
		'current_page' => $page,
		'last_page' => $last_page,
		'per_page' => $per_page,
		'total' => $num,
		'data' => $arr
	));
	//print_r($arrayName);exit;
	if($callback){
		echo $callback.'('.json_encode ($arrayName).')';
	}else{
		echo json_encode ($arrayName);
	}

	 
?>