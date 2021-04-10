
<?php
error_reporting(0);
$koneksi=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("kbn_db");
$a=$_POST['id'];
$b=$_POST['nama_admin'];
$c=$_POST['alamat'];
$d=$_POST['email'];
$e=$_POST['telepon'];
$f=$_POST['username'];
$g=$_POST['password'];
$perintah="INSERT INTO admin VALUES('$a','$b','$c','$d','$e','$f','$g')";
$simpan=mysql_query($perintah,$koneksi);
if($simpan)
  echo"<meta http-equiv='refresh' content='0 url=tables_admin.php?Data Telah Tersimpan'>";
  else
  echo"gagal";
?>