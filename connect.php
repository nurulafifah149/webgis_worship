<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "lavanda4";
	$port = "5432";
	$dbname = "iisi";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
