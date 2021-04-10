<?php
error_reporting(0);
 include "koneksi.php";
 $username = $_POST['username']; 
 $password = $_POST['password']; 

 $perintah = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
 $hasil = mysql_query($perintah);
 $row = mysql_fetch_array($hasil);
 if ($row['username'] == $username AND $row['password'] == $password) {
 session_start(); 
 $_SESSION['username'] = $username;
 header("location:dashboard.php");
 }else {
 echo "Gagal Masuk"; 
 }
 ?>