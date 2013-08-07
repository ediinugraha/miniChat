<?php
//koneksi ke database
$hostname_conn="localhost";
$username_conn="root";
$password_conn="";
$db_conn="chat";
mysql_connect($hostname_conn,$username_conn,$password_conn,$db_conn) or die ("Koneksi gagal total");
mysql_select_db ($db_conn);
?>
