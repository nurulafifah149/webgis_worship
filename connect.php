<?php
	$host = "ec2-54-157-4-216.compute-1.amazonaws.com";
	$user = "lzavvmsjbnvdok";
	$pass = "c1b6a44c468e115a5d01beb9d35580137799592d440dacdd1a1244af648ceeaf";
	$port = "5432";
	$dbname = "d33r51316dit4s";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
