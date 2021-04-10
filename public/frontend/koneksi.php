<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php
$server = "localhost";
$user = "root";
$password = "";
$database = "kbn_db";
mysql_connect($server, $user, $password) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());
?>
</body>
</html>