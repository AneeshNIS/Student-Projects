<html>
<body>
<?php 
$link=mysql_connect("localhost","root","");
echo "Success";
mysql_select_db('music');

$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['username'];
$d=$_POST['password'];

$zapros="INSERT INTO `users`(`id`, `fname`, `lname`, `username`, `password`) VALUES ('', '$a', '$b', '$c', '$d')";
mysql_query($zapros);

?>

</body>
</html>