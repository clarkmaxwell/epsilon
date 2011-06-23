<?php
	session_start();
	include("config.php");
	$firma   = $_POST['firma'];
	$kontak  = $_POST['kontak'];
	$adres   = $_POST['adres'];
	$telefon = $_POST['telefon'];
	$uretici = $_SESSION['uretici'];
	$sql     = mysqk_query("INSERT INTO tedarikci VALUES('','$uretici','$firma','$kontak','$adres','$telefon') ") or die(mysql_error());
?>