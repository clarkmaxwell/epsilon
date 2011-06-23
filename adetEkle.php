<?php
	session_start();
	include("config.php");
	$urun       = $_SESSION['urun'];
	$fatura     = $_POST['fatura'];
	$tarih      = $_POST['tarih'];
	$birim      = $_POST['birim'];
	$adet       = $_POST['adet'];
	$uretici    = $_POST['uretici'];
	$tedarikci  = $_POST['tedarikci'];
	
	$sql        = mysql_query("INSERT INTO urunekle VALUES('','$urun','$fatura','$tarih','$birim','$adet','$uretici','$tedarikci')") or die(mysql_error());
?>