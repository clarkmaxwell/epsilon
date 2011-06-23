<?php
    include("config.php");
	$cesit = $_POST['deger'];
    $sql   = mysql_query("SELECT * FROM deger WHERE cesit='$cesit'");
    echo "<item>";
    while($row = mysql_fetch_array($sql))
    {
		echo "<urun id='$row[0]'>";
		echo "<param1>".$row[3]."</param1>";
		echo "<abbr1>".$row[4]."</abbr1>";
		echo "<param2>".$row[5]."</param2>";
		echo "<abbr2>".$row[6]."</abbr2>";
		echo "<param3>".$row[7]."</param3>";
		echo "<abbr3>".$row[8]."</abbr3>";
		echo "<param4>".$row[9]."</param4>";
		echo "<abbr4>".$row[10]."</abbr4>";
		echo "<param5>".$row[11]."</param5>";
		echo "<abbr5>".$row[12]."</abbr5>";
		echo "<kod>".$row[13]."</kod>";
		echo "<urunid>".$row[0]."</urunid>";
		echo "</urun>";
    }
    echo "</item>";
?>