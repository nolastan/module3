<?php
session_start();
require('functions.php');

if($_POST['username']){
	connect();
	mysql_query("insert into employee values ('Sheridan','Command','Commander','2006-02-25)", $sqlserver) or die('Error, insert query failed');
}

?>

<form method="post">
	<label for="username">Username:</label><input type="text" name="username" /><br />
	<label for="password">Password:</label><input type="text" name="password" /><br />
	<input type="submit" value="Register" />
</form>