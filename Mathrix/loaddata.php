<?php 
include 'config.php';
$value=$_GET['q'];
if($value=="all")
{
$result1=mysql_query("select * from mathrix where (mathrix_id like 'm%') ORDER BY RIGHT( mathrix_id, 3 )") or die(mysql_error());
echo "<table border='1'>
<tr>
<th>mid</th>
<th>name</th>
<th>college</th>
<th>email</th>
<th>mobile</th>
<th>dumbc</th>
<th>mathsketching</th>
<th>paperpresentation</th>
<th>mathquiz</th>
<th>amount</th>
</tr>";
while($row = mysql_fetch_array($result1))
  {
  echo "<tr>";
  echo "<td>" . $row['mathrix_id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['college'] . "</td>";
  echo "<td>" . $row['email'] ."</td>";
  echo "<td>" . $row['mobile_no'] ."</td>";
  echo "<td>" . $row['dumb_c'] ."</td>";
  echo "<td>" . $row['math_sketching'] ."</td>";
  echo "<td>" . $row['paper_presentation'] ."</td>";
  echo "<td>" . $row['math_quiz'] ."</td>";
  echo "<td>" . $row['amount'] ."</td>";
  echo "</tr>";
  }
echo "</table>";
}
elseif($value=="calculate")
{
$amount=mysql_query("select SUM(amount) from mathrix");
$arr=mysql_fetch_assoc($amount);
print_r($arr);
}
elseif($value=="College-Wise")
{
$result1=mysql_query("select mathrix_id,name,college,email,mobile_no,dumb_c,math_sketching,paper_presentation,math_quiz,amount from mathrix where mathrix_id like 'm%' GROUP BY college,mathrix_id") or die(mysql_error());
echo "<table border='1'>
<tr>
<th>mid</th>
<th>college</th>
<th>name</th>
<th>dumbc</th>
<th>mathsketching</th>
<th>paperpresentation</th>
<th>mathquiz</th>
<th>email</th>
<th>mobile</th>
<th>amount</th>
</tr>";
while($row = mysql_fetch_array($result1))
  {
  echo "<tr>";
  echo "<td>" . $row['mathrix_id'] . "</td>";
  echo "<td>" . $row['college'] . "</td>";
   echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['dumb_c'] ."</td>";
  echo "<td>" . $row['math_sketching'] ."</td>";
  echo "<td>" . $row['paper_presentation'] ."</td>";
  echo "<td>" . $row['math_quiz'] ."</td>";
  echo "<td>" . $row['email'] ."</td>";
  echo "<td>" . $row['mobile_no'] ."</td>";

  echo "<td>" . $row['amount'] ."</td>";
  echo "</tr>";
  }
echo "</table>";
}
elseif($value=="paper_presentation1")
{
$result=mysql_query("select * from mathrix where (paper_presentation like '1%' ) order by right(mathrix_id,3)");
echo "<table border='1'>
<tr>
<th>mid</th>
<th>college</th>
<th>name</th>
<th>paperpresentation</th>
<th>email</th>
<th>mobile</th>
<th>Amount</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['mathrix_id'] . "</td>";
  echo "<td>" . $row['college'] . "</td>";
   echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['paper_presentation'] ."</td>";
  echo "<td>" . $row['email'] ."</td>";
  echo "<td>" . $row['mobile_no'] ."</td>";
  echo "<td>" . $row['amount'] ."</td>";
  echo "</tr>";
  }
echo "</table>";
}
elseif($value=="paper_presentation")
{
$result=mysql_query("select * from mathrix where (paper_presentation like '1%' and mathrix_id like 'm%') order by right(mathrix_id,3)");
echo "<table border='1'>
<tr>
<th>mid</th>
<th>college</th>
<th>name</th>
<th>paperpresentation</th>
<th>email</th>
<th>mobile</th>
<th>Amount</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['mathrix_id'] . "</td>";
  echo "<td>" . $row['college'] . "</td>";
   echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['paper_presentation'] ."</td>";
  echo "<td>" . $row['email'] ."</td>";
  echo "<td>" . $row['mobile_no'] ."</td>";
  echo "<td>" . $row['amount'] ."</td>";
  echo "</tr>";
  }
echo "</table>";
}
elseif($value=="dumb_c")
{
$result=mysql_query("select * from mathrix where (dumb_c like '1%' and mathrix_id like 'm%') order by right(mathrix_id,3)");

echo "<table border='1'>
<tr>
<th>mid</th>
<th>name</th>
<th>college</th>
<th>email</th>
<th>mobile</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['mathrix_id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['college'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['mobile_no'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}
elseif($value=="math_sketching")
{
$result=mysql_query("select * from mathrix where (math_sketching like '1%' and mathrix_id like 'm%') order by right(mathrix_id,3)");


echo "<table border='1'>
<tr>
<th>mid</th>
<th>name</th>
<th>college</th>
<th>email</th>
<th>mobile</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['mathrix_id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['college'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['mobile_no'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}
else
{
$result=mysql_query("select * from mathrix where (math_quiz like '1%' and mathrix_id like 'm%') order by right(mathrix_id,3)");
echo "<table border='1'>
<tr>
\<th>mid</th>
<th>name</th>
<th>college</th>
<th>email</th>
<th>mobile</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['mathrix_id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['college'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['mobile_no'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}
?>