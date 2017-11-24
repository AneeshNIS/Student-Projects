
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>Data</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Teacher Personal Panel</h2>

<?php

$email=$_GET['email'];
$con=mysqli_connect("localhost","root","","librarysystem");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM bookmastertable");

echo "<table border='1' >
<tr>
<th>Book Name</th>
<th>Book Author</th>
<th>Book ISBN</th>
<th>Issue Number</th>
<th>Page Numbers</th>
<th>Genre</th>
<th>Publisher</th>
<th>Book Year</th>
<th></th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['bookname'] . "</td>";
echo "<td>" . $row['bookauthor'] . "</td>";
echo "<td>" . $row['bookISBN'] . "</td>";
echo "<td>" . $row['bookissuenumber'] . "</td>";
echo "<td>" . $row['bookpagenumbers'] . "</td>";
echo "<td>" . $row['bookgenre'] . "</td>";
echo "<td>" . $row['bookpublisher'] . "</td>";
echo "<td>" . $row['bookyear'] . "</td>";
$toreply = $row['id'];

echo "<td><form name='frmDelete' action=Bookingprocess.php method='get'><input type='hidden' name='idz' value='$toreply'><input type='submit' value='Book Name'></form></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

 <section id="loginBox">
	<h2>Book Ordering System</h2>
	<form method="post" class="minimal" action="addqu.php">
		<label for="username">
			Book Name
			<input type="text" name="fname" id="fname" placeholder="Please enter your first name"  required="required" />
		</label>

		<label for="username">
			ISBN
			<input type="text" name="lname" id="lname" placeholder="Please enter your last name"  required="required" />
		</label>


	


		<button type="submit" class="btn-minimal">Submit</button>
	</form>
</section>
<center><p>Library Management System</p></center>
</body>
</html>

