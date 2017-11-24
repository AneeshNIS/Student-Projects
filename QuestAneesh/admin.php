<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Data</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

	<h2>Admin Panel</h2>


	<?php
$con=mysqli_connect("localhost","root","","shynar");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM data");

echo "<table border='1' >
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Question</th>
<th>Status</th>
<th>Last Updated</th>
<th></th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phonenu'] . "</td>";
echo "<td>" . $row['question'] . "</td>";
echo "<td>" . $row['status'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
$toreply = $row['id'];

echo "<td><form name='frmDelete' action=reply.php method='get'><input type='hidden' name='idz' value='$toreply'><input type='submit' value='Reply'></form></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>


<center><p>Designed by AMinA</p></center>

  
</body>
</html>
