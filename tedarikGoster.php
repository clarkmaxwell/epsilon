<?php
	session_start();
	include("config.php");
	$uretici = $_SESSION['uretici'];
	$sql     = mysql_query("SELECT * FROM tedarikci WHERE uretici='$uretici'") or die(mysql_error()); 
	echo "<item>";
	while($row = mysql_fetch_array($sql))
	{
	    echo "<urun id='$row[0]'>";
		echo "<tedarikciAdi>".$row[2]."</tedarikciAdi>";
		echo "<tedarikciKontagi>".$row[3]."</tedarikciKontagi>";
		echo "<tedarikciAdresi>".$row[4]."</tedarikciAdresi>";
		echo "<tedarikciTelefonu>".$row[5]."</tedarikciTelefonu>";
		echo "</urun>";
	}
	echo "</item>";
?>