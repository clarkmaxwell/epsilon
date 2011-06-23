<?php
    include("config.php");
    $sql   = mysql_query("SELECT * FROM urun");
    echo "<item>";
    while($row = mysql_fetch_array($sql))
    {
	echo "<urun id='$row[0]'>";
	echo "<proName>".$row[2]."</proName>";
	echo "<proCode>".$row[1]."</proCode>";
	echo "<proNo>".$row[10]."</proNo>";
	echo "<birim>".$row[9]."</birim>";
	echo "<proVar>".$row[5]."</proVar>";
	echo "<urunid>".$row[0]."</urunid>";
	echo "</urun>";
    }
    echo "</item>";
?>