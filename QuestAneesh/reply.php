<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Response Page</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <section id="loginBox">
	<h2>Response Page</h2>
	<form method="post" class="minimal" action="addre.php">
		<label for="username">
			Name:

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";


$queno=$_GET['idz'];


$con=mysqli_connect("localhost","root","","shynar");

$result = mysqli_query($con,"SELECT * FROM data where id = $queno");
while($row = mysqli_fetch_array($result)){
	echo $row['name'];
}

?>

		</label>

		<label for="email">
			Email:
			<?php
			$result = mysqli_query($con,"SELECT * FROM data where id = $queno");
while($row = mysqli_fetch_array($result)){
	echo $row['email'];
}
?>
		</label>


		<label for="pnumber">
			Phone number:
			<?php
			$result = mysqli_query($con,"SELECT * FROM data where id = $queno");
while($row = mysqli_fetch_array($result)){
	echo $row['phonenu'];
}
?>
		</label>

		<label for="username">
			Question
<?php
			$result = mysqli_query($con,"SELECT * FROM data where id = $queno");
while($row = mysqli_fetch_array($result)){
	echo $row['question'];
}
?>

		</label>

		<label for="username">
		<br>
			Response

			<textarea id="response" class="text" cols="86" rows ="15" name="response" required="required" placeholder="Shynar Please give your resposne here" ></textarea>

			<input type="hidden" name="idoo" value="<?php echo $queno; ?>" />

		</label>







		<button type="submit" class="btn-minimal">Submit</button>
	</form>
</section>
<center><p>Designed by AMinA</p></center>
<center><a href="admin.php">Admin Page</a></center>


  
  
</body>
</html>
