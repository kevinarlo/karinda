<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loading</title>
</head>

<body>
<?php
$koneksi=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("kopi_db");
$a=$_GET['id_produk'];

$cek_kode=mysql_num_rows(mysql_query("SELECT * FROM order_temporary WHERE id_produk='$a'"));
if ($cek_kode > 0) {
	
	$dt1=mysql_query("select * from order_temporary where id_produk='$a'");
$data1=mysql_fetch_array($dt1);
$jumlahnya=$data1['jumlah'];
$hsljml = $jumlahnya + 1;
$harganya=$data1['harga'];
$ttlharga = $hsljml * $harganya;

mysql_query("UPDATE order_temporary SET jumlah   = '$hsljml',
										total   = '$ttlharga'
									   WHERE id_produk = '$a'");
									   
echo"<meta http-equiv='refresh' content='0 url=detail.php'>";

	
}else{
	
$dt=mysql_query("select * from product where id_produk='$a'");
$data=mysql_fetch_array($dt);
$nama_produk=$data['nama_produk'];
$harga=$data['harga'];

$perintah="insert into order_temporary (id_produk,
                                    nama_produk,
									harga,
									jumlah,
                                    total_harga)
							VALUES('$a]',
                                   '$nama_produk',
								   '$harga',
								   '1',
                                   '$harga')";
$simpan=mysql_query($perintah,$koneksi);
if($simpan){
	//echo "sukses";
  echo"<meta http-equiv='refresh' content='0 url=detail.php'>";
}else{
  echo"gagal";
}
	
}


?>
</body>
</html>