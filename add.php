<?php
 error_reporting(0);
require './Include/common.php';

 if($_POST['submit']){


  $sql="insert into message (id,name,content,telephone,email,creat_time,status) " .
  		"values ('','$_POST[name]','$_POST[content]','$_POST[telephone]','$_POST[email]',now(),'')";
  mysql_query($sql);
  echo "<script language=\"javascript\">alert('添加成功');history.go(-1)</script>";

 }
 include("head.php");
?>
<SCRIPT language=javascript>
function CheckPost()
{
	if (myform.name.value=="")
	{
		alert("请填写用户名");
		myform.name.focus();
		return false;
	}
	if (myform.telephone.value.length<5)
	{
		alert("请填写电话号码!");
		myform.telephone.focus();
		return false;
	}
	if (myform.email.value=="")
	{
		alert("请填写邮箱地址!");
		myform.email.focus();
		return false;
	}
	if (myform.content.value=="")
	{
		alert("必须要填写留言内容");
		myform.content.focus();
		return false;
	}
}
</SCRIPT>



  <form action="add.php" method="post" name="myform" onsubmit="return CheckPost();">
  姓名:<input type="text" size="10" name="name" /><br><br>
  电话:<input type="text" size="10" name="telephone" /><br><br>
  邮箱:<input type="text" name="email" /><br/><br>
  内容:<textarea name="content"  cols="60" rows="9"></textarea><br/><br>

  　　　<input type="submit" name="submit" value="发布留言"/>


  </form>
	
  