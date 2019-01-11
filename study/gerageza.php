<!DOCTYPE html>
<html>
<head>
	<title>trynone</title>
</head>
<body>
	<?php

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("dbusers") or die(mysql_error());

$sqr = mysql_query("select * from users");
	?>
	<h1>all data</h1>
<table border="2">
	<tr>
		<th>id</th>
		<th>first name</th>
		<th>last name</th>
		<th>email</th>
		<th>views</th>
		<th>read</th>
	</tr>
	<?php
	while ($rows = mysql_fetch_array($sqr)) {
		$id=$rows["id"];
		echo "<tr>";
		echo "<td>".$rows["id"]."</td>";
		echo "<td>".$rows["first_name"]."</td>";
		echo "<td>".$rows["last_name"]."</td>";
		echo "<td>".$rows["email"]."</td>";
		echo "<td>".$rows["views"]."</td>";
		echo "<td><a href='view.php?id={$id}'>view</a></td>";
		echo "</tr>";
	}
	?>
</table>
</body>
</html>