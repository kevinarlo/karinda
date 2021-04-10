<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loading</title>
</head>

<body>
<?php
$koneksi=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("kbn_db");
$a=$_POST['nama'];
$b=$_POST['email'];
$c=$_POST['nomor_telepon'];
$d=$_POST['pesan'];
$perintah="insert into message values('','$a','$b','$c','$d')";
$simpan=mysql_query($perintah,$koneksi);
if($simpan){
  echo"<meta http-equiv='refresh' content='0 url=contact.php?Pesan Telah Terkirim'>";
}else{
  echo"gagal";
}
?>
</body>
</html>