<?php
	include("config.php");

	$indeks     = $_POST['indeks'];
	if(isset($indeks))
	{
		$urun = $_POST['urun'];
	}
	else
	{
		$urun = " ";
	}
	echo    "<item>";
	switch($indeks)
	{
		case 0:
			$sql  = mysql_query("SELECT urun.id,urun.kod, urun.ad, tur.ad, kategori.ad, cesit.ad, paket, uretici, aciklama, birim, adet
									FROM urun, tur, kategori, cesit
									WHERE urun.kod LIKE '$urun%'
									AND urun.tur = tur.id
									AND urun.kategori = kategori.id
									AND urun.cesit = cesit.id
									LIMIT 0 , 30");
			while($row = mysql_fetch_array($sql))
			{
				echo "<urun id='$row[0]'>";
				echo "<urunKodu>".$row[1]."</urunKodu>";
				echo "<urunAdi>".$row[2]."</urunAdi>";
				echo "<urunTuru>".$row[3]."</urunTuru>";
				echo "<urunKat>".$row[4]."</urunKat>";
				echo "<urunCesidi>".$row[5]."</urunCesidi>";
				echo "<urunPaketi>".$row[6]."</urunPaketi>";
				echo "<urunUreticisi>".$row[7]."</urunUreticisi>";
				echo "<urunAciklamasi>".$row[8]."</urunAciklamasi>";
				echo "<urunid>".$row[0]."</urunid>";
				echo "</urun>";
			}
			break;
		case 1:
			$sql  = mysql_query("SELECT urun.id,urun.kod, urun.ad, tur.ad, kategori.ad, cesit.ad, paket, uretici, aciklama, birim, adet
									FROM urun, tur, kategori, cesit
									WHERE urun.ad LIKE '$urun%'
									AND urun.tur = tur.id
									AND urun.kategori = kategori.id
									AND urun.cesit = cesit.id
									LIMIT 0 , 30");
			while($row = mysql_fetch_array($sql))
			{
				echo "<urun id='$row[0]'>";
				echo "<urunKodu>".$row[1]."</urunKodu>";
				echo "<urunAdi>".$row[2]."</urunAdi>";
				echo "<urunTuru>".$row[3]."</urunTuru>";
				echo "<urunKat>".$row[4]."</urunKat>";
				echo "<urunCesidi>".$row[5]."</urunCesidi>";
				echo "<urunPaketi>".$row[6]."</urunPaketi>";
				echo "<urunUreticisi>".$row[7]."</urunUreticisi>";
				echo "<urunAciklamasi>".$row[8]."</urunAciklamasi>";
				echo "<urunid>".$row[0]."</urunid>";
				echo "</urun>";
			}
			break;
		case 2:
			$sql  = mysql_query("SELECT urun.id,urun.kod, urun.ad, tur.ad, kategori.ad, cesit.ad, paket, uretici, aciklama, birim, adet
									FROM urun, tur, kategori, cesit
									WHERE tur.ad LIKE '$urun%'
									AND urun.tur = tur.id
									AND urun.kategori = kategori.id
									AND urun.cesit = cesit.id
									LIMIT 0 , 30");
			while($row = mysql_fetch_array($sql))
			{
				echo "<urun id='$row[0]'>";
				echo "<urunKodu>".$row[1]."</urunKodu>";
				echo "<urunAdi>".$row[2]."</urunAdi>";
				echo "<urunTuru>".$row[3]."</urunTuru>";
				echo "<urunKat>".$row[4]."</urunKat>";
				echo "<urunCesidi>".$row[5]."</urunCesidi>";
				echo "<urunPaketi>".$row[6]."</urunPaketi>";
				echo "<urunUreticisi>".$row[7]."</urunUreticisi>";
				echo "<urunAciklamasi>".$row[8]."</urunAciklamasi>";
				echo "<urunid>".$row[0]."</urunid>";
				echo "</urun>";
			}
			break;
		case 3:

			$sql  = mysql_query("SELECT urun.id,urun.kod, urun.ad, tur.ad, kategori.ad, cesit.ad, paket, uretici, aciklama, birim, adet
									FROM urun, tur, kategori, cesit
									WHERE kategori.ad LIKE '$urun%'
									AND urun.tur = tur.id
									AND urun.kategori = kategori.id
									AND urun.cesit = cesit.id
									LIMIT 0 , 30");
			while($row = mysql_fetch_array($sql))
			{
				echo "<urun id='$row[0]'>";
				echo "<urunKodu>".$row[1]."</urunKodu>";
				echo "<urunAdi>".$row[2]."</urunAdi>";
				echo "<urunTuru>".$row[3]."</urunTuru>";
				echo "<urunKat>".$row[4]."</urunKat>";
				echo "<urunCesidi>".$row[5]."</urunCesidi>";
				echo "<urunPaketi>".$row[6]."</urunPaketi>";
				echo "<urunUreticisi>".$row[7]."</urunUreticisi>";
				echo "<urunAciklamasi>".$row[8]."</urunAciklamasi>";
				echo "<urunid>".$row[0]."</urunid>";
				echo "</urun>";
			}
			break;
		case 4:
			$sql  = mysql_query("SELECT urun.id,urun.kod, urun.ad, tur.ad, kategori.ad, cesit.ad, paket, uretici, aciklama, birim, adet
									FROM urun, tur, kategori, cesit
									WHERE cesit.ad LIKE '$urun%'
									AND urun.tur = tur.id
									AND urun.kategori = kategori.id
									AND urun.cesit = cesit.id
									LIMIT 0 , 30");
			while($row = mysql_fetch_array($sql))
			{
				echo "<urun id='$row[0]'>";
				echo "<urunKodu>".$row[1]."</urunKodu>";
				echo "<urunAdi>".$row[2]."</urunAdi>";
				echo "<urunTuru>".$row[3]."</urunTuru>";
				echo "<urunKat>".$row[4]."</urunKat>";
				echo "<urunCesidi>".$row[5]."</urunCesidi>";
				echo "<urunPaketi>".$row[6]."</urunPaketi>";
				echo "<urunUreticisi>".$row[7]."</urunUreticisi>";
				echo "<urunAciklamasi>".$row[8]."</urunAciklamasi>";
				echo "<urunid>".$row[0]."</urunid>";
				echo "</urun>";
			}
			break;
		case 5:
			$sql  = mysql_query("SELECT urun.id,urun.kod, urun.ad, tur.ad, kategori.ad, cesit.ad, paket, uretici, aciklama, birim, adet
									FROM urun, tur, kategori, cesit
									WHERE urun.paket LIKE '$urun%'
									AND urun.tur = tur.id
									AND urun.kategori = kategori.id
									AND urun.cesit = cesit.id
									LIMIT 0 , 30");
			while($row = mysql_fetch_array($sql))
			{
				echo "<urun id='$row[0]'>";
				echo "<urunKodu>".$row[1]."</urunKodu>";
				echo "<urunAdi>".$row[2]."</urunAdi>";
				echo "<urunTuru>".$row[3]."</urunTuru>";
				echo "<urunKat>".$row[4]."</urunKat>";
				echo "<urunCesidi>".$row[5]."</urunCesidi>";
				echo "<urunPaketi>".$row[6]."</urunPaketi>";
				echo "<urunUreticisi>".$row[7]."</urunUreticisi>";
				echo "<urunAciklamasi>".$row[8]."</urunAciklamasi>";
				echo "<urunid>".$row[0]."</urunid>";
				echo "</urun>";
			}
			break;
		case 6:
			$sql  = mysql_query("SELECT urun.id,urun.kod,urun.ad,tur.ad, kategori.ad, cesit.ad, paket, uretici, aciklama, birim, adet
									FROM urun, tur, kategori, cesit
									WHERE urun.uretici LIKE '$urun%'
									AND urun.tur = tur.id
									AND urun.kategori = kategori.id
									AND urun.cesit = cesit.id
									LIMIT 0 , 30");
			while($row = mysql_fetch_array($sql))
			{
				echo "<urun id='$row[0]'>";
				echo "<urunKodu>".$row[1]."</urunKodu>";
				echo "<urunAdi>".$row[2]."</urunAdi>";
				echo "<urunTuru>".$row[3]."</urunTuru>";
				echo "<urunKat>".$row[4]."</urunKat>";
				echo "<urunCesidi>".$row[5]."</urunCesidi>";
				echo "<urunPaketi>".$row[6]."</urunPaketi>";
				echo "<urunUreticisi>".$row[7]."</urunUreticisi>";
				echo "<urunAciklamasi>".$row[8]."</urunAciklamasi>";
				echo "<urunid>".$row[0]."</urunid>";
				echo "</urun>";
			}
			break;
		case 7:
			$sql  = mysql_query("SELECT urun.id,urun.kod, urun.ad, tur.ad, kategori.ad, cesit.ad, paket, uretici, aciklama, birim, adet
									FROM urun, tur, kategori, cesit
									WHERE urun.aciklama LIKE '$urun%'
									AND urun.tur = tur.id
									AND urun.kategori = kategori.id
									AND urun.cesit = cesit.id
									LIMIT 0 , 30");
			while($row = mysql_fetch_array($sql))
			{
				echo "<urun id='$row[0]'>";
				echo "<urunKodu>".$row[1]."</urunKodu>";
				echo "<urunAdi>".$row[2]."</urunAdi>";
				echo "<urunTuru>".$row[3]."</urunTuru>";
				echo "<urunKat>".$row[4]."</urunKat>";
				echo "<urunCesidi>".$row[5]."</urunCesidi>";
				echo "<urunPaketi>".$row[6]."</urunPaketi>";
				echo "<urunUreticisi>".$row[7]."</urunUreticisi>";
				echo "<urunAciklamasi>".$row[8]."</urunAciklamasi>";
				echo "<urunid>".$row[0]."</urunid>";
				echo "</urun>";
			}
			break;
	}
	echo    "</item>";
?>