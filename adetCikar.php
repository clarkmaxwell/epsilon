<?php
	session_start();
	include("config.php");
	$urun           = $_SESSION['urun'];
	$cikartarih     = $_POST['cikartarih'];
	$cikaradet      = $_POST['cikaradet'];
	$aciklama       = $_POST['aciklama'];
	
	$sql        = mysql_query("INSERT INTO uruncikar VALUES('','$urun','$cikartarih','$cikaradet','$aciklama')") or die(mysql_error());
?>