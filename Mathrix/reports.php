<html>
<head>
<title>Untitled Document</title>
<script>	
function display(value)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("display").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","loaddata.php?q="+value,true);
xmlhttp.send();

}	
	
</script>	
	
</head>
<body>
<div>
<select name="select" onchange=display(value)>
<option selected="Selected" value="all">*</option>
<option value="dumb_c">D-structs</option>
<option value="math_sketching">Math Model</option>
<option value="paper_presentation">Bug Master</option>
<!--<option value="paper_presentation1">Bug Master1</option>-->
<option value="math_quiz">Math Quiz</option>
<option value="calculate">Calculate</option>
<option value="College-Wise">College-Wise</option>
</select>
</div>

<div id="display">
</div>
</body>
</html>