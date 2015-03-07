<?php
include 'config.php';
$id=$_POST['mathrix_id'];
$name=$_POST['name'];
$college=$_POST['college'];
$email=$_POST['email'];
$mobile_no=$_POST['mobile_no'];
$mathquiz=$_POST['mathquiz'];
$paperpresentation=$_POST['paperpresentation'];
$dumbc=$_POST['dumbc'];
$mathsketching=$_POST['mathsketching'];
$amount = $mathquiz*50  + $paperpresentation*50 + $dumbc*50 + $mathsketching*50;
if (isset($_POST['update'])) {
mysql_query("delete from mathrix where mathrix_id='$id'");
mysql_query("INSERT INTO mathrix(`mathrix_id`,`name`,`college`,`email`,`mobile_no`,`dumb_c`,`math_sketching`,`paper_presentation`,`math_quiz`,`amount`)VALUES('$id','$name','$college','$email','$mobile_no','$dumbc','$mathsketching','$paperpresentation','$mathquiz','$amount')") or die(mysql_error());
}
else{
mysql_query("delete  from mathrix where mathrix_id='$id'") or die(mysql_error());

}
header('location:index.php');

	
?>


