<html>
<?php
$search=$_GET['q'];
include 'config.php';

$query= "SELECT * FROM mathrix where mobile_no='$search'";
$result=mysql_query($query) or die("query died");
//$query1= "SELECT * FROM mathrix where mobile_no='$search1'";
//$result1=mysql_query($query1) or die("query died");

while($test=mysql_fetch_array($result))
{      
$val1=$test['mathrix_id'];
$val2=$test['name'];
$val3=$test['college'];
$val4=$test['email'];
$val5=$test['mobile_no'];
$val6=$test['dumb_c'];
$val7=$test['math_sketching'];
$val8=$test['paper_presentation'];
$val9=$test['math_quiz'];
}

?>
<form method="post" name="myform" action="modify.php">
<fieldset>
<legend>Registration</legend>
<table>
<tr>
<td><font type="Constantia" size="4" color="black">Mathrix ID:</td></font>
</b><td><input type="text" name="mathrix_id" value= "<?php echo $val1?>" ><br></td></tr>
<td><font type="Constantia" size="4" color="black">Student Name:</td></font>
<td><input type="text" name="name" value=" <?php echo $val2 ?>"><br></td></tr>
<td><font type="Constantia" size="4" color="black">College Name:</td></font>
<td><input type="text" name="college" value="<?php echo $val3 ?> "><br></td></tr>
<td><font type="Constantia" size="4" color="black">Email Id:</font>
</td><td><input type="text" name="email" value="<?php echo $val4 ?> "><br></td></tr>
<td><font type="Constantia" size="4" color="black">Mobile No:</font>
</td><td><input type="text" name="mobile_no" value="<?php echo $val5 ?> "></font><br></td></tr>
<td><font type="Constantia" size="4" color="black">Events:</font></td><td>
 <input type="checkbox" name="dumbc" value="1" id="dumbc" <?php if ($val6 == 1) echo "checked=checked";?>/> <font type="Constantia" size="4" color="black">dumb c  <br />
 <input type="checkbox" name="mathsketching" value="1" id="mathsketching"  <?php if ($val7 == 1) echo "checked=checked";?>/> <font type="Constantia" size="4" color="black">math sketching <br />
 <input type="checkbox" name="paperpresentation" id="paperpresentation" value="1" <?php if ($val8 == 1) echo "checked=checked";?> /><font type="Constantia" size="4" color="black"> paper presentation <br />
 <input type="checkbox" name="mathquiz" id="mathquiz" value="1"  <?php if ($val9 == 1) echo "checked=checked";?>/> <font type="Constantia" size="4" color="black">math quiz<br />
  <tr>
<font type="Constantia" size="4" color="black"><td><td><input type="submit" id="update" name="update" value="update" />
  <input type="submit" id="delete" name="delete" value="delete" /></td></td></font></tr><br>
  <tr>
  </tr>
  <table>
  </fieldset>
</form>

</html>


