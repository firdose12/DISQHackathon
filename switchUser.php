<style>
.x{color:red;font-weight:bold;text-align:center;}
.y{color:green;font-weight:bold;text-align:center;}
</style>
<?php
if(isset($_GET['status'])){
	switch ($_GET['status']){
		case 'notregister':
		echo "<div class='x'>Please Enter All Values Correctly to Register Here...</div><hr>";
		break;
		case 'update':
		echo "<div class='y'>User Details Updated Successfully</div><hr>";
		break;
		case 'notupdate':
		echo "<div class='x'>Unable to Update User Info Please Try Again</div><hr>";
		break;
		case 'delete':
		echo "<div class='y'>Emp Details Deleted Successfully</div><hr>";
		break;
		case 'notdelete':
		echo "<div class='x'>Unable to Delete Employee Please Try Again....</div><hr>";
		break;
	}
}