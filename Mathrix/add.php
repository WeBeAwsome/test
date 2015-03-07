<?php

include 'config.php';

?>
<html>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["myForm"]["fname"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  }
}
</script>
<form action="create.php" method="post">
username <input type="text" name="username"><br/>
password<input type="text" name="password">
<br/>
<input type="submit" name="submit" value="add" onClick="validateForm()" > 

</form>
</html><td><font type="Constantia" size="4" color="black">Amount:</td></font></b><td><input type="text" name="amount" align="left"><br>
  </tr>
  <input id="college" type="text" name="college">