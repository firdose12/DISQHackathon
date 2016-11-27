<?php
if(isset($_POST['submit'])){
include_once('connect.php');
 $n = $_POST['name'];
 $s = $_POST['sal'];
 $d = $_POST['date'];
 $g = ($_POST['gend'] == 'm')?'Male':'Female';
 $sql = "INSERT INTO emp(Name,Salary,DOB,Gender) VALUES ('$n',$s,'$d','$g')";
 if(mysql_query($sql)){
	header("location:showUsers.php");
	exit;
 }	else {
	header("location:register.php?status=notregister");
	exit;
 }
}