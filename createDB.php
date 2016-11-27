<?php
$host = 'localhost';
$user = 'root';
$pwd = '';
$conn = @mysql_connect($host,$user,$pwd) or die(mysql_errno().' = '.mysql_error());
$sql = "CREATE DATABASE users";
mysql_query($sql) or die(mysql_errno().' = '.mysql_error());
