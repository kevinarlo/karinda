<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loading</title>
</head>

<body>
<?php
$koneksi=mysql_connect("localhost", "root","") or die (mysql_error());
mysql_select_db("kbn_db");
$a=$_POST['id'];
$b=$_POST['nama_admin'];
$c=$_POST['alamat'];
$d=$_POST['email'];
$e=$_POST['telepon'];
$f=$_POST['username'];
$g=$_POST['password'];
$ubah="UPDATE admin SET nama_admin='$b', alamat='$c', email='$d', telepon='$e', username='$f', password='$g' WHERE id='$a'";
mysql_query($ubah);
echo "<meta http-equiv='refresh' content='0 url=tables_admin.php?Data Telah di ubah'>";
?>
</body>
</html>