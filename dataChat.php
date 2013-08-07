<?php
//include koneksi
include"config.php";
$query=mysql_query("SELECT * FROM datachat ORDER BY idUser DESC");
while($i<=30 and $row=mysql_fetch_array($query))
{
$i++;
echo"$row[namaUser] : $row[isiChat] >> $row[date] <br />";
}
?>
