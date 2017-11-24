<?php
$check = mysql_connect("localhost","root","");
mysql_select_db('kuras');

$f = $_POST['firstname'];
$l = $_POST['lastname'];
$u = $_POST['username'];
$p = $_POST['password'];
$s= $_POST['status1'];


$sql = "INSERT INTO `user_teacher`(`ID`, `First name`, `Lastname`, `Username`, `Password`, `Status`) VALUES ('','$f','$l','$u','$p','$s')";
mysql_query($sql);

header("location: afterreg.php");

?>