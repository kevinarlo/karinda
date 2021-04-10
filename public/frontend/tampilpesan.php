<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Mamih Kopi</title>

<style type="text/css">
</style>

<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id= "navigation">

<div class="bar" align="right">
<div class="sorot" style="padding-right:120px">
<a style="padding-right:2px" href="index.php">Home</a>&nbsp;&nbsp;&nbsp;
<a style="padding-right:2px" href="contact.php">Contact us</a>
</div>
</div>
</div>


<div class="site">
<table>
<tr>
<td style="padding-top:30px">
<p><a style="padding-left:150px" href="index.php"><img src="image/fix.png" width="180" height="100" style="top:80px;"/></a></p></td>
<td style="padding-left:680px"></td>
<td align="right"><a style="padding-left:5px" href="customer/login.php">Login</a>&nbsp;</td>
<td style="color:#CCC">&nbsp;|</td>
<td align="right"><a style="padding-left:5px" href="register.php">Register</a></td>
<td align="right">
  <a style="padding-left:10px" href="detail.php"><img src="image/shopping_cart_big1.png" width="50" height="50"/></a>
  </td>
</tr>
</table>

  </div>

<div id ="header">

</div>
    
    <div id="menu" align="center">
      <ul>
          <li class="utama"><a href="product1.php"><b>Coffee</b></a></li>
            <li class="utama"><a href="product2.php"><b>Equipment</b></a>
</li>
            <li class="utama"><a href="product3.php"><b>Brewers</b></a></li>
            <li class="utama"><a href="product4.php"><b>Other</b></a></li>
      </ul>
    </div>

<div id="content1">
	<h3 style="font-size:32px">MESSAGE</h3>
    
    
<?php
$koneksi=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("kopi_db");
$tampil="SELECT * FROM message ORDER BY id_message";
$query=mysql_query($tampil) or die ("gagal".mysql_error());
$jumlah=mysql_num_rows($query);
?>
<table align="center" width="850" style="font-family:arial">
<tr align="center" bgcolor="#9EAA33">
   <td width="7%"> <b style="color:#FFF"> No </b></td>
   <td width="25%"> <b style="color:#FFF"> Nama </b></td>
   <td width="25%"> <b style="color:#FFF"> Email </b></td>
   <td width="45%"> <b style="color:#FFF"> Pesan </b></td>
 </tr>

<?php
$no = 1;
while ($row=mysql_fetch_array($query))
	{
		$a=$row['id_message'];
		$b=$row['nama'];
		$c=$row['email'];
		$d=$row['pesan'];
		?>
<tr align="center">
  <td height="29"> <?php echo $no; ?> </td>
  <td> <?php echo $b; ?> </td>
  <td> <?php echo $c; ?> </td>
  <td> <?php echo $d; ?> </td>
</tr>
<?php $no++;} ?>
</table>
<table align="center" width="850" style="font-family:arial">
<tr bgcolor="#DDDDDD">
<td height="10" align="center" style="color:#666">
JUMLAH ULASAN : <?php echo $jumlah; ?></td>
</tr>

<tr>
<td align="center">
<input style="background-color:#9EAA33; color:#FFF; border:none; height:30px; width:90px; font-size:14px; cursor:pointer" type="submit" id="kirim" value="BACK" onclick="javascript:history.back()"/>
</td></tr>
</table>
</div>         
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<div id="footer">
    <p>Copyright © 2018 Mamih Coffee &nbsp;| &nbsp;PT. Mamih Coffee BSI Kalimalang</p>
    </div>
</div>
</body>
</html>