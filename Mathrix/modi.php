<?php
include 'config1.php';
$staffid=$_POST['staffid'];
$name=$_POST['name'];
$department=$_POST['department'];
$date=$_POST['date'];
$leavetype=$_POST['leavetype'];
$from=$_POST['from'];
$to=$_POST['to'];
$nod=$_POST['nod'];
$reason = $_POST['reason'];
if(isset($_POST['update']))
{
mysql_query("INSERT INTO staffleave(`staffid`,`name`,`department`,`date`,`leavetype`,`from`,`to`,`nod`,`reason`)VALUES('$staffid','$name','$department','$date','$leavetype','$from','$to','$nod','$reason')") or die(mysql_error());


echo "Registered successfully";	
}
?>


