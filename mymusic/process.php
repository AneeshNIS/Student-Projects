<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mymusicdb";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$parola=$_POST['parola'];




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO userdetails (fname, lname, uname, password)
VALUES ('$fname', '$lname', '$uname', '$parola')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for registering your details.";
?>
<br><br><a href="index.php">Click here to retun to home page</a>
<?php    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>