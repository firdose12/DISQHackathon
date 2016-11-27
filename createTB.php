<?php
include_once('connect.php');
$sql = "CREATE TABLE emp(
Id SMALLINT(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
Name VARCHAR(50) NOT NULL,
Salary DECIMAL(10,2) NOT NULL,
DOB DATE NOT NULL,
Gender ENUM('Male','Female') NOT NULL,
RegisterON TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$res = mysql_query($sql) or die(mysql_errno().' = '.mysql_error());
?>
