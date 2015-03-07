<?php
include("db.php");
$username=$_POST['username']; 
$password=$_POST['password']; 

$sql="Insert into admin(username,passcode) values('$username','$password');";
$result=mysql_query($sql);
echo "Registration Successfully";
?>