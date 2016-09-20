<?php
error_reporting(0);
require './Include/common.php';

$cus_id=$_POST[cus_id];


$per_page=$_POST[per_page];
$pagesize=$per_page;
$url=$_SERVER["REQUEST_URI"];
$url=parse_url($url);
$url=$url[path];


$numq=mysql_query("SELECT * FROM `message`");
$num = mysql_num_rows($numq);

if($_POST[page]){
$page=$_POST[page];
//$page=($pageval-1)*$pagesize;
$page.=',';
$current_page=$page;
$last_page=($page+1);
}
//if($num > $pagesize){
 //if($pageval<=1)$pageval=1;
	//}

$callback=$_POST[callback];

 

  $sql="SELECT * FROM `message` order by id desc limit $page $pagesize";
  $data=mysql_query($sql);
  $arr=array();
	while($row=mysql_fetch_array($data)){
		$arr[]=array(
			'id' => $row['id'],
			'title' => $row['title'],
			'keyword' => $row['keyword'],
			'creat_time' => $row['creat_time'],
			'status' => $row['status'],
			'content' => $row['content'],
		); 
	}
  $arrayName = array('err' => 0,'msg' => 0,'data' => array(
		'current_page' => $current_page,
		'last_page' => $last_page,
		'per_page' => $per_page,
		'total' => $total,

		
		'data' => $arr
	));
	//print_r($arrayName);
	if($callback){
		echo $callback.'('.json_encode ($arrayName).')';
	}else{
		echo json_encode ($arrayName);
	}

	 
?>