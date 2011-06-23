<?php
    session_start();
	include("config.php");
    $urunid = $_SESSION['urun'];
    $sql    = mysql_query("SELECT *
							FROM urunekle
							WHERE urunekle.urun = '$urunid'
							LIMIT 0 , 30");
	$sql2   = mysql_query("SELECT *
							FROM  uruncikar
							WHERE uruncikar.urun = '$urunid'
							LIMIT 0 , 30");							
	echo    "<item>";
	while($row = mysql_fetch_array($sql))
	{
		echo  "<ekle id='$row[0]'>";
			echo  "<ekleFatura>".$row[2]."</ekleFatura>";
			echo  "<ekleTarih>".$row[3]."</ekleTarih>";
			echo  "<ekleFiyat>".$row[4]."</ekleFiyat>";
			echo  "<ekleAdet>".$row[5]."</ekleAdet>";
			echo  "<ekleUretici>".$row[6]."</ekleUretici>";
			echo  "<ekleTedarici>".$row[7]."</ekleTedarici>";
			echo  "<ekleid>".$row[0]."</ekleid>";
		echo  "</ekle>";
	}
	while($row2 = mysql_fetch_array($sql2))
	{
		echo  "<cikar id='$row2[0]'>";
			echo  "<cikarTarih>".$row2[2]."</cikarTarih>";
			echo  "<cikarAdet>".$row2[3]."</cikarAdet>";
			echo  "<cikarAciklama>".$row2[4]."</cikarAciklama>";
			echo  "<cikarid>".$row2[0]."</cikarid>";
		echo  "</cikar>";
	}
	echo    "</item>";
?>