<?php
$id = $_GET['id'];
//echo $id;
include_once('connect.php');
$sql = "DELETE FROM emp WHERE Id = $id";
if(mysql_query($sql)){
	header("location:showUsers.php?status=delete");
	exit;
}	else {
	header("location:showUsers.php?status=notdelete");
	exit;
}
?>