<?php
include 'config.php';

mysql_query("DELETE  FROM mathrix WHERE id=".$_POST['textsearch']."") or die(mysql_error());

	
?>