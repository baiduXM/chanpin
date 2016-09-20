<?php
error_reporting(0);
header('Content-type: text/html; charset=utf-8');
include("conn.php");
$data=$_POST;
$form_id= $data[form_id];
$action_type= $data[action_type];
$action_text= $data[action_text];
        $condata = array();
        foreach ($data as $k => &$v) {
            if ($k != 'submit' && $k != 'form_id' && $k != 'action_type' && $k != 'action_text') {
                if (is_array($v)) {
                    $v = implode(',', $v); //合并checkbox选项
                }
                $condata[$k] = $v;
            }
        }
		$condata=serialize($condata);
	if($action_type==0){	
		$text=$action_text;
		$url = $_SERVER["HTTP_REFERER"];
	}
	if($action_type==1){	
		$url=$action_text;
	}
$time = date('Y-m-d H:i:s',time()+8*60*60);		

if (preg_match('/gbpen\.cn/', $_SERVER["HTTP_REFERER"])||preg_match('/example\.com/', $_SERVER["HTTP_REFERER"])) {
	$sql = "insert into form_data_test (form_id,data,created_at,updated_at) values ('$form_id','$condata','$time','$time')";
}else{
	$sql = "insert into form_data_" . $form_id % 10 . " (form_id,data,created_at,updated_at) values ('$form_id','$condata','$time','$time')";
}


	
 if(mysql_query($sql)){
	echo '<script language="javascript" type="text/javascript">';
	if(isset($text)){
		echo 'alert("'.$text.'");';
	}
	echo 'window.location.href="'.$url.'";';
	echo '</script>';
  }else{
	echo "<script language=\"javascript\">alert('添加失败');history.go(-1)</script>";
  }

?>