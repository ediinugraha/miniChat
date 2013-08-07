<?php
//memasukan konfigurasi
include"config.php";

//ambil vareabel
$nama=$_POST['nama'];
$isiChat=$_POST['isiChat'];
$date=date("d F Y H:i:s");

if($nama!="" and $isiChat!="" and $isiChat!=null and $isiChat!="null")
{
//masukan vareable ke database
$insert=mysql_query("INSERT INTO datachat ( idUser , namaUser , isiChat , date )VALUES ('', '$nama', '$isiChat', '$date')");
if($insert)
{
$query=mysql_query("SELECT * FROM datachat ORDER BY idUser DESC");
while($i<=30 and $row=mysql_fetch_array($query))
{
$i++;
echo"$row[namaUser] : $row[isiChat] >> $row[date] <br />";
}
}
else
{
echo"gagal";
}
}
else
{
$query=mysql_query("SELECT * FROM datachat ORDER BY idUser DESC");
while($i<=30 and $row=mysql_fetch_array($query))
{
$i++;
echo"$row[namaUser] : $row[isiChat] >> $row[date] <br />";
}
}
?>
