<head>
<h1><center><font color="red">"COLLEGE FEST ORGANIZED BY DISQHACHATHON"</font></center></h1>
<h1><center><font color="red">COMMON EXPERINECE THE EVENT AND CRACK THE JOB" </font></center></h1>

<link href='style.css' type='text/css' rel='stylesheet'/>
<script src='calender/calender.js' type='text/javascript' language='javascript'></script>
</head>
<body background="firdu9.jpg">

<?php
include_once('switchUser.php');
?>
<form name='regForm' method='POST' action='addUser.php'>
<table border='1' align='center' cellpadding='6' cellspacing='0' width='70%' frame='box' rules='rows'>
<tr><th colspan='2' class='a'>New User Please Register</th></tr>
<tr><td><font color="brown">Name</font></td><td><input type='text' name='name' value=''/></td></tr>
<tr><td><font color="brown">event no</font></td><td><input type='text' name='sal' value=''/></td></tr>
<tr><td><font color="brown">date of event</font></td><td><input type='text' name='date' value='' id='date' readonly /> 
</td></tr>
<tr><td><font color="brown">proffession</font></td><td><input type='radio' name='gend' value='m'/><font color="brown"> student </font><input type='radio' name='gend' value='f'/> <font color="brown">lecturer</font> </td></tr>
<tr><td  colspan='2' align='right'><input type='submit' name='submit' value='Register for event !' class='z'/></td></tr>
</table>

</form>
<script type="text/javascript">
 		calendar.set("date");
</script>
</body>