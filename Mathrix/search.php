<html>
<head>
<script language="JavaScript" src="gen_validatorv4.js"
    type="text/javascript" xml:space="preserve">
</script>
<script>

function display()
{
var value = document.getElementById("textsearch").value;
if(value == null || value == ""){
	alert("Please enter your id");
	return false;
}
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
  console.log(value);
xmlhttp.open("GET","try.php?q="+value,true);
xmlhttp.send();
}
</script>
</head>
<body>

<div id="header" style="background-color:white;text-align:center;">
<h1 style="margin-bottom:0; align:center;">Department of Mathematics</h1>
<h2 style="margin-bottom:0;">Mathrix</h2>
<br>
</div>

<div>
<input type="text" name="textsearch" id="textsearch">
<input type="submit" name="search" value="search" onclick = "display()"/>
</div>

<div id="display" height="200px">
</div>
</body>
</html>
