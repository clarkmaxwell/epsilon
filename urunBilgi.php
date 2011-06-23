<?php
    session_start();
	include("config.php");
	$urun  = $_SESSION["urun"];
	$sql   = mysql_query("SELECT * 
						  FROM urun,tur,kategori,cesit
						  WHERE urun.id='$urun'
						  AND tur.id = urun.tur
						  AND kategori.id = urun.kategori
						  AND cesit.id = urun.cesit");
	echo  "<item>";
	while($row = mysql_fetch_array($sql))
	{
		echo "<urun id='$row[0]'>";
			echo "<kod>".$row[1]."</kod>";
			echo "<ad>".$row[2]."</ad>";
			echo "<tur>".$row[12]."</tur>";
			echo "<kategori>".$row[15]."</kategori>";
			echo "<cesit>".$row[18]."</cesit>";
			echo "<paket>".$row[6]."</paket>";
			echo "<uretici>".$row[7]."</uretici>";
			echo "<aciklama>".$row[8]."</aciklama>";
			echo "<birim>".$row[9]."</birim>";
			echo "<adet>".$row[10]."</adet>";
		echo "</urun>";
	}
	echo  "</item>";
?>