<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loading</title>
</head>

<body>
<?php
$koneksi=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("clandestin");
$kd=$_POST['kode'];
$a=$_FILES['namaf']['name'];
$b=$_POST['id_kategori'];
$perintah="INSERT into gambar values('$kd','$a','$b')";
copy($_FILES['namaf']['tmp_name'],"picture/arsip_clandestin/".$a);
$simpan=mysql_query($perintah,$koneksi);
if($simpan){
 echo "Data berhasil di simpan";
 echo '<meta http-equiv="refresh" content="0;url=tables_gallery.php">';
}else{
 echo "GAGAL";
}
?>
</body>
</html>