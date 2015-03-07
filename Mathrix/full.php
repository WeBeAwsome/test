<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Educational | Full Width</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../../Users/DELL PC/Downloads/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../../Users/DELL PC/Downloads/scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../../Users/DELL PC/Downloads/scripts/jquery.slidepanel.setup.js"></script>
</head>
<?php
$search=$_GET['q'];
include 'config1.php';
$query= "SELECT * FROM `staffleave` WHERE staffid='$search'" ;
$result=mysql_query($query) or die("query died");

while($test=mysql_fetch_assoc($result))

{
//print_r($test);      
$val1=$test['staffid'];
$val2=$test['name'];
$val3=$test['department'];
$val4=$test['date'];
$val5=$test['leavetype'];
$val6=$test['from'];
$val7=$test['to'];
$val8=$test['nod'];
$var9=$test['reason'];
}

?>
<body>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox">
        
         
      </div>
      <br class="clear" />
    </div>
   
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
       <h1>STAFF LEAVE APPLICATION</h1>
      <h3>University Departments</h3>
	  <h2> ANNA UNIVERSITY, CHENNAI-25 </h2>
    </div>

    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topnav">
    <ul>
      <li class="active"><a href="../../Users/DELL PC/Downloads/index.html">Home</a>
        <!--<ul>
          <li><a href="#">Libero</a></li>
          <li><a href="#">Maecenas</a></li>
          <li><a href="#">Mauris</a></li>
          <li class="last"><a href="#">Suspendisse</a></li>
        </ul>-->
      </li>
      <li><a href="../../Users/DELL PC/Downloads/style-demo.html">Style Demo</a>
        <!--<ul>
          <li><a href="#">Lorem ipsum dolor</a></li>
          <li><a href="#">Suspendisse in neque</a></li>
          <li class="last"><a href="#">Praesent et eros</a></li>
        </ul>-->
      </li>
      <li><a href="../../Users/DELL PC/Downloads/full-width.html">Full Width</a>
        <!--<ul>
          <li><a href="#">Lorem ipsum dolor</a></li>
          <li><a href="#">Suspendisse in neque</a></li>
          <li class="last"><a href="#">Praesent et eros</a></li>
        </ul>-->
      </li>
      <li><a href="#">Our Services</a></li>
      <li class="last"><a href="#">Long Link Text</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
<form method="post" name="myform" action="modi.php">
<table align="center">

<tr>
 <td>
  <label for="staff_id"><font size="4">Staff ID:</font></label>
 </td></b>
 <td >
  <input  type="text" name="staffid" value= "<?php echo $val1?>"  maxlength="50" size="30">
 </td>
</tr>
 
<tr>
 <td valign="top">
  <label for="sname"><font size="4">Name:</font></label>
 </td>
 <td valign="top">
  <input  type="text" name="name" value= "<?php echo $val2?>" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="dept"><font size="4">Department:</font></label>
 </td>
 <td valign="top">
  <input  type="text" name="department" value= "<?php echo $val3?>" maxlength="80" size="30">
 </td>
 
</tr>
<tr>
 <td valign="top">
  <label for="date"><font size="4">Posted:</font></label>
 </td>
 <td valign="top">
  <input  type="text" name="date" value= "<?php echo $val4?>" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="type"><font size="4">Leave Type:</font></label>
 </td>
  <td valign="top">
<select name="leavetype" value= "<?php echo $val5?>" >
 <option>--select--</option>
<option>Casual Leave</option>
<option>Special Casual Leave</option>
<option>Restricted Holidays</option>
<option>OnDuty</option>
<option>Earned Leave</option>
</select>
<tr>
 <td valign="top">
  <label for="from"><font size="4">From:</font></label>
 </td>
 
 <td valign="top">
<input  type="text" name="from" value= "<?php echo $val6?>" maxlength="50" size="30"> 
 </td>
 
</tr>
<tr>
 <td valign="top">
  <label for="from"><font size="4">To:</font></label>
 </td>
 <td valign="top">
<input  type="text" name="to" value= "<?php echo $val7?>" maxlength="50" size="30">
 </td> 
</tr>
<tr>
 <td valign="top">
  <label for="days"><font size="4">No of Days:</font></label>
 </td>
 <td valign="top">
  <input  type="text" value= "<?php echo $val8?>" name="nod" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="reason"><font size="4">Reason</font></label>
 </td>
 <td valign="top">
  <textarea  name="reason" value= "<?php echo $val9?>" maxlength="1000" cols="25" rows="4"></textarea>
 </td>
 
</tr>

 <td colspan="1" style="text-align:center">
<input type="submit" id="update" name="update" value="submit" =>
 </td>
 <td>
  <input type="reset" value="Clear">  
 </td>

</table>
  
  </div>
</div>
</form>
</body>
</html>
