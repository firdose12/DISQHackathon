<head>
<link href='style.css' type='text/css' rel='stylesheet'/>
<script src='calender/calender.js' type='text/javascript' language='javascript'></script>
</head>
<?php
$id = $_GET['id'];
//echo $id;
include_once('connect.php');
$sql = "SELECT * FROM emp WHERE Id = $id";
$res = mysql_query($sql);
$rec = mysql_fetch_array($res);
//print_r($rec);
?>
<body background="firdu9.jpg">

<form name='regForm' method='POST' action='updateUser.php'>
<table border='1' align='center' cellpadding='6' cellspacing='0' width='70%' frame='box' rules='rows'>
<tr><th colspan='2' class='d'>Edit Your Personal Details Here</th></tr>
<tr><td>Name</td><td><input type='text' name='name' value='<?php echo $rec[1];?>'/></td></tr>
<tr><td>event no</td><td><input type='text' name='sal' value='<?php echo $rec['Salary'];?>'/></td></tr>
<tr><td>date of event</td><td><input type='text' name='date' value='<?php echo $rec[3];?>' id='date' readonly /> 
</td></tr>
<tr><td>profesion</td><td><input type='radio' name='gend' value='m' <?php if($rec['Gender'] == 'Male') echo 'checked';?>/> student <input type='radio' name='gend' value='f' <?php if($rec['Gender'] == 'Female') echo 'checked';?>/> lecturer </td></tr>
<tr><td  colspan='2' align='right'>
<input type='hidden' name='id' value='<?php echo $rec['Id'];?>'/>
<input type='button' name='goBack' value='Go Back' class='z' onclick="javascript:location.href='showUsers.php';"/> &nbsp; <input type='submit' name='submit' value='Update Emp !' class='z'/> 
</td></tr>
</table>

</form>
<script type="text/javascript">
 		calendar.set("date");
</script>
</body>