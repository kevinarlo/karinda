<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loading</title>
</head>

<body>
<?php
error_reporting(0);
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
$koneksi=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("kbn_db");
$kd=$_POST['kode'];
$a=$_FILES['namaf']['name'];
$b=$_POST['judul'];
$c=$_POST['tanggal'];
$d=$_POST['isi'];
$perintah="INSERT into blogger values('$kd','$a','$b','$c','$d')";
copy($_FILES['namaf']['tmp_name'],"..img/blog-img/".$a);
$simpan=mysql_query($perintah,$koneksi);
if($simpan){
 echo '<meta http-equiv="refresh" content="0;url=tables_new_blog.php">';
}else{
 echo "GAGAL";
}
?>
</body>
</html>