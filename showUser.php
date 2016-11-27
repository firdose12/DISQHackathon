<head>
<link href='style.css' type='text/css' rel='stylesheet'/>
</head>

<body background="firdu9.jpg">

<?php
$id = $_GET['id'];
//echo $id;
include_once('connect.php');
$sql = "SELECT * FROM emp WHERE Id = $id";
$res = mysql_query($sql);
$rec = mysql_fetch_assoc($res);
$gend = ($rec['Gender'] == 'Male')?'pic/m.png':'pic/f.png';
//print_r($rec);
?>
<table border='1' align='center' cellpadding='6' cellspacing='0' width='70%'>
<tr><th colspan='3' class='c'>Emp Personal Details Here</th></tr>
<tr><td>Name</td><td><?php echo $rec['Name'];?></td><td rowspan='4' align='center' width='140px'><img src='<?php echo $gend;?>' width='120px'/></td></tr>
<tr><td>event no</td><td><?php echo 'Rs : ',round($rec['Salary']);?></td></tr>
<tr><td>date of event</td><td><?php echo $rec['DOB'];?> 
</td></tr>
<tr><td>profession</td><td><?php echo $rec['Gender'];?></td></tr>
<tr><td  colspan='3' align='right'><input type='button' name='boBack' value='Go Back' class='z' onclick="location.href='showUsers.php';"/></td></tr>
</table>

</body>