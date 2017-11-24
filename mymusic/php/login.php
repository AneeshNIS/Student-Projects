<?php

$link=mysql_connect("localhost","root","");
mysql_select_db('music');

$username=$_POST['username'];
$password=$_POST['password'];

$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db("music");

$result=mysql_query("SELECT * FROM users where username='$username' and password='$password'")
or die ("Failed query".mysql_error());

$row=mysql_fetch_array($result);

if ($row['username']==$username && $row['password']==$password){
echo "Login succes!!! Welcome ".$row['username'];}
	

	else{
		echo "Failed to login";
	}





?>
