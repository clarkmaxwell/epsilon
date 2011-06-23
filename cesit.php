<?php
  include("config.php");
  $indeks  = $_POST['veri'];
  echo "<item>";
  echo "<urun id='0'>-</urun>";
	$sql = mysql_query("SELECT * FROM cesit WHERE kategori='$indeks'");
	while($row = mysql_fetch_array($sql))
 	{
		echo "<urun id='$row[0]'>".$row[2]."</urun>";
	}
  echo "</item>";
?>