<?php
	$hostname = "localhost";
        $user     = "turker";
        $pass     = "1234";
        $database = "stok";
        
        mysql_connect($hostname,$user,$pass) or die(mysql_error());
        mysql_select_db($database) or die(mysql_error());
          
?>