<?php
require_once 'config.php';
$id=$_POST['mathrix_id'];
$name=$_POST['name'];
$college=$_POST['college'];
$Ecollege=$_POST['Ecollege'];
$email=$_POST['email'];
$mobile_no=$_POST['mobile_no'];
if($college == 'Add Option')
	$choose=$Ecollege;
else
	$choose=$college;
$dstructs = isset($_POST['dstructs']) ? $_POST['dstructs'] : '';
$mathmodel = isset($_POST['mathmodel']) ? $_POST['mathmodel'] : '';
$bugmaster = isset($_POST['bugmaster']) ? $_POST['bugmaster'] : '';
$mathquiz = isset($_POST['mathquiz']) ? $_POST['mathquiz'] : '';
$amount = $dstructs*50  + $mathmodel*50 + $bugmaster*50 + $mathquiz*50;
mysql_query("INSERT INTO mathrix(`mathrix_id`,`name`,`college`,`email`,`mobile_no`,`dstructs`,`mathmodel`,`bugmaster`,`mathquiz`,`amount`)VALUES('$id','$name','$choose','$email','$mobile_no','$dstructs','$mathmodel','$bugmaster','$mathquiz','$amount')") or die(mysql_error());
header('Refresh:1; url=index.php');
echo "Registered successfully";


?>