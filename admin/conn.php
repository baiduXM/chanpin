<?php

/*
 * PHP100Job v1.0
 * Programmer : Msn/QQ haowubai@hotmail.com (925939)
 * www.php100.com Develop a project PHP - MySQL - Apache
 * Window 2003 - Preferences - PHPeclipse - PHP - Code Templates
 */

$conn = @ mysql_connect("localhost", "root", "") or die("Êý¾Ý¿âÁ´½Ó´íÎó");
mysql_select_db("db_swap", $conn);
mysql_query("set names 'utf8'"); 

function htmtocode($content) {
	$content = str_replace("\n", "<br>", str_replace(" ", "&nbsp;", $content));
	return $content;
}

//$content=str_replace("'","¡®",$content);
 //htmlspecialchars();



?>
