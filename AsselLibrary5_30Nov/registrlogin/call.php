<html>
<body>
<?php 
$link=mysql_connect("localhost","root","");
echo "Success";
mysql_select_db('example');

$n=$_POST['name'];
$p=$_POST['pass'];

$zapros="INSERT INTO `users`(`id`, `user_name`, `password`) VALUES ('','$n','$p')";
mysql_query($zapros);

?>

</body>
</html>