<?php
$host = 'localhost';
$user = 'root';
$pwd = '';
$db_name = 'users';
$conn = @mysql_connect($host,$user,$pwd) or die(mysql_errno().' = '.mysql_error());
mysql_select_db($db_name) or die(mysql_errno().' = '.mysql_error());