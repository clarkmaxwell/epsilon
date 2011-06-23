<?php
    session_start();
	$urunid = $_POST['urunid'];
	$_SESSION["urun"] = $urunid;
?>