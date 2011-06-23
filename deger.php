<?php
	include("config.php");
	$cesit     = $_POST['cesit'];
	$kategori  = $_POST['kategori'];
	$param1    = $_POST['param1'];
	$abbr1     = $_POST['abbr1'];
	$param2    = $_POST['param2'];
	$abbr2     = $_POST['abbr2'];
	$param3    = $_POST['param3'];
	$abbr3     = $_POST['abbr3'];
	$param4    = $_POST['param4'];
	$abbr4     = $_POST['abbr4'];
	$param5    = $_POST['param5'];
	$abbr5     = $_POST['abbr5'];
	$cesidKodu = $_POST['cesidKodu'];
	$sql       = mysql_query("INSERT INTO deger VALUES('','$kategori','$cesit','$param1','$abbr1','$param2','$abbr2','$param3','$abbr3','$param4','$abbr4','$param5','$abbr5','$cesidKodu')") or die(mysql_error());
?>