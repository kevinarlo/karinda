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

mysql_query("DELETE FROM blogger WHERE id='$_GET[id]'");
  echo"<meta http-equiv='refresh' content='0 url=tables_blog.php?Data berhasil di hapus'>";
?>
</body>
</html>