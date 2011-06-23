<?php
   include("config.php"); 
   echo "<item>";
   echo "<urun id='0'>-</urun>";
   $sql = mysql_query("SELECT * FROM tur");
	while($row = mysql_fetch_array($sql))
 	{
		echo "<urun id='$row[0]'>".$row[1]."</urun>";
	}
 
  echo "</item>";
?>