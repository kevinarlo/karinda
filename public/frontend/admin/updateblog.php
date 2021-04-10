<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loading</title>
</head>

<body>
<?php
error_reporting(0);
$koneksi=mysql_connect("localhost", "root","") or die (mysql_error());
mysql_select_db("kbn_db");
$a=$_POST['id'];
$b=$_FILES['namaf']['name'];
$c=$_POST['judul'];
$d=$_POST['tanggal'];
$e=$_POST['isi'];
copy($_FILES['namaf']['tmp_name'],"..img/blog-img/".$b);
if(empty($b))
{
$ubah="UPDATE blogger SET namaf='$b', judul='$c', tanggal='$d', isi='$e' WHERE id='$a'";
mysql_query($ubah);
echo "<script>alert('Data telah di ubah')</script>";
echo "<meta http-equiv='refresh' content='0 url=tables_blog.php'>";

}elseif (!empty($b))
{
$ubah="UPDATE blogger SET namaf='$b', judul='$c', tanggal='$d', isi='$e' WHERE id='$a'";
mysql_query($ubah);
echo "<script>alert('Data telah di ubah')</script>";
echo "<meta http-equiv='refresh' content='0 url=tables_blog.php'>";
}else{
 echo "GAGAL";
}
?>
</body>
</html>