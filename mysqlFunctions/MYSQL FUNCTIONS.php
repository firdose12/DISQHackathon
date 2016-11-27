<?php
$conn = mysql_connect('host','user','pwd');
$conn = mysql_pconnect('host','user','pwd');
mysql_select_db('dbname');
$sql = "SELECT * FROM tb_name";
$res = mysql_query($sql);

// mysql insert Id's
mysql_insert_id();
// Affected Rows :
mysql_affected_rows();
// 
mysql_num_rows($sql);

// Fetch Records ....
mysql_fetch_row($res);
mysql_fetch_assoc($res);
mysql_fetch_array($res);
mysql_fetch_object($res);

// Free Records....
mysql_free_result($res);

// Error Handling Methods in MySQL ...
die('user Arg or predefined');
exit;
mysql_errno();
mysql_error();

// Close Connections.
mysql_close($conn);