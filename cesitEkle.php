<?php
	include("config.php");
	$kategori = $_POST['kategori'];
	$cesit    = $_POST['cesit'];
	$sql      = mysql_query("INSERT INTO cesit VALUES('','$kategori','$cesit')") or die(mysql_error());
	$sorgu    = mysql_query("SELECT * FROM cesit ORDER BY cesit.id DESC");
	$veri     = mysql_fetch_row($sorgu);
	echo      $veri[0];
?>