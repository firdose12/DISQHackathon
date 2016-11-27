<?php
if(isset($_POST['submit'])){
	include_once('connect.php');
	$n = $_POST['name'];
	$s = $_POST['sal'];
	$d = $_POST['date'];
	$g = ($_POST['gend'] == 'm')?'Male':'Female';
	$id = $_POST['id'];
	$sql = "UPDATE emp SET Name='$n',Salary=$s,DOB='$d',Gender='$g' WHERE Id = $id";
	if(mysql_query($sql)){
		header('location:showUsers.php?status=update');
		exit;
	}	else {
		header('location:showUsers.php?status=notupdate');
		exit;
	}
}
?>