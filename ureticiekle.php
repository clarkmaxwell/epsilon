<?php
    session_start();
	include("config.php");
	$uretici    = $_POST['uretici'];
	$aciklama   = $_POST['aciklama'];
	$_SESSION['uretici'] = $uretici;
	$sql     = mysql_query("INSERT INTO uretici VALUES('','','$uretici','$aciklama')") or die(mysql_error());
?>