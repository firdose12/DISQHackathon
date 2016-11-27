<?php
include_once('connect.php');
$sql = "SELECT * FROM emp";
$res = mysql_query($sql);
//$rec = mysql_fetch_row($res);
//print_r($rec);
?>
<head>
<link href='style.css' type='text/css' rel='stylesheet'/>
<script>
function doDel(){
	c = confirm('Are You Shore to Delete Emp');
	return c;
}
</script>
</head>
<body background="firdu9.jpg">

<?php
include_once('switchUser.php');
?>
<table border='1' align='center' cellpadding='6' cellspacing='0' width='70%'>
<tr><th class='b' colspan='3'>List of Emp Details</th></tr>
<tr><td width='70%'>Name</td><td  width='15%'>Edit</td><td width='15%'>Delete</td></tr>
<?php
while($rec = mysql_fetch_row($res)){
echo "<tr><td><a href='showUser.php?id=".$rec[0]." '>".$rec[1]."</a></td><td><a href='editUser.php?id=".$rec[0]." '><img src='pic/Edit.png' width='20px'/></a></td><td><a href='deleteUser.php?id=".$rec[0]." '><img src='pic/delete.png' width='20px' onclick='javascript:return doDel();'/></a></td></tr>";
}
?>
<tr><td colspan='3' align='right'><input type='button' class='z' name='addUser' value='Add Emp' onclick="javascript:location.href='register.php';"/></td></tr>
</table>
</body>