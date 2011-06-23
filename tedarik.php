<?php
    include("config.php");
	$tedarik = $_POST['tedarikid'];
	$sql     = mysql_query("SELECT id,ad FROM tedarikci WHERE uretici='$tedarik'");
	echo  "<item>";
	while($row = mysql_fetch_array($sql))
	{
		echo "<urun id='$row[0]'>".$row[1]."</urun>";
	}
	echo  "</item>";
?>