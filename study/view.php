<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("dbusers") or die(mysql_error());
$id = $_GET['id'];
$sqr = mysql_query("select * from users where id='$id'");
while ($rows = mysql_fetch_array($sqr)) {
	$viewn = $rows['views']+1;
	echo"views ni:".$viewn;
}

$sql = mysql_query("update users set views = '$viewn' where id='$id'");
?>
</body>
</html>