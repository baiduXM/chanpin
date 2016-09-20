<?php

$db = new PDO("mysql:host=localhost;dbname=db_swap", "root", ""); //链接数据库
$cus_id=$_POST['cus_id'];
$res = $db->query("select * from up_statis where cus_id=$cus_id limit 1", PDO::FETCH_ASSOC);
foreach ($res as $v) {
    $row = $v;
}

echo json_encode($row);
